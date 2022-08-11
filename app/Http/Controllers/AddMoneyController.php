<?php

namespace App\Http\Controllers;

use App\models\agency\TlDevise;
use App\models\book\TlCommandLine;
use App\models\book\TlRule;
use App\models\customer\TlCustomer;
use App\models\package\formula\TlFormulaBook;
use App\models\package\TlFormula;
use App\models\TlPointsFidelite;
use App\Services\CMIService;
use App\Services\PaymentService;
use Carbon\Carbon;
use Illuminate\Http\Request;

/** All Paypal Details class **/

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class AddMoneyController extends Controller
{
    private $_api_context;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        parent::__construct();

        /** setup PayPal api context **/
        $paypal_conf = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }



    public function getPaymentStatus()
    {
        /** Get the payment ID before session clear **/
        $item = Session::get('item');
        $payment_id = Session::get('paypal_payment_id');
        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        Session::forget('item');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            Session::put('error', 'Payment failed');
            return redirect()->route('addmoney.paywithpaypal');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        /** PaymentExecution object includes information necessary **/
        /** to execute a PayPal account payment. **/
        /** The payer_id is added to the request query parameters **/
        /** when the user is redirected from paypal back to your site **/
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);
        /** dump($item); dd($result); DEBUG RESULT, remove it later **/
        if ($result->getState() == 'approved') {

            $commandLine = TlCommandLine::all()->find($item['bookId']);
            $commandLine->status = 1;
            $commandLine->save();

            $url = null;
            $paymentService = new PaymentService();
            if ($item['type'] == "TlFormulaBook") {
                $url = $paymentService->packageApprovedPayment($commandLine,
                    $result->getTransactions()[0]->getAmount()->getTotal(),
                    $result->getTransactions()[0]->getPayee()->getMerchantId(),
                    $result->getPayer()->getPayerInfo()->getFirstName() . " " . $result->getPayer()->getPayerInfo()->getFirstName(),
                    $result->getPayer()->getPaymentMethod()); 

            } elseif ($item['type'] == "FlightAPI"){
                
                $url = $paymentService->flightApprovedPayment($commandLine,
                    $result->getTransactions()[0]->getAmount()->getTotal(),
                    $result->getTransactions()[0]->getPayee()->getMerchantId(),
                    $result->getPayer()->getPayerInfo()->getFirstName() . " " . $result->getPayer()->getPayerInfo()->getFirstName(),
                    $result->getPayer()->getPaymentMethod());
                     


            } elseif ($item['type'] == "HotelApi"){
                $url = $paymentService->hotelAPIApprovedPayment($commandLine,
                    $result->getTransactions()[0]->getAmount()->getTotal(),
                    $result->getTransactions()[0]->getPayee()->getMerchantId(),
                    $result->getPayer()->getPayerInfo()->getFirstName() . " " . $result->getPayer()->getPayerInfo()->getFirstName(),
                    $result->getPayer()->getPaymentMethod());

            }elseif ($item['type'] == "TlBookHotel"){
                $url = $paymentService->hotelApprovedPayment($commandLine,
                    $result->getTransactions()[0]->getAmount()->getTotal(),
                    $result->getTransactions()[0]->getPayee()->getMerchantId(),
                    $result->getPayer()->getPayerInfo()->getFirstName() . " " . $result->getPayer()->getPayerInfo()->getFirstName(),
                    $result->getPayer()->getPaymentMethod());


            }

            Session::put('success', 'Payment success');
            return redirect()->away($url);
        }
        Session::put('error', 'Payment failed');
        return redirect()->route('addmoney.paywithpaypal');
    }

    public function callBack($bookId,$data)
    {


        unset($data["product"]);
        $s = "id => $bookId \n";
        foreach ($data as $key => $param) {
            $s .= "$key => $param  \n";
        }
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        Storage::disk('local')->put("xml/payment/" . $generated_date . ".txt", $s);


        $p = new Payment();
        $p->code = $data['TransId'];
        $p->nbOperation = $data['oid'];
        $p->err = $data['ErrMsg'];
        $p->save();

        PaymentService::IsPayment();
        $commandLine = TlCommandLine::all()->find($bookId);
        $paymentService = new PaymentService();
        $customer = Auth::guard("customer")->user();
        if($commandLine->type=="Package"){
            $this->AddPoints(3,$commandLine);  
 
            $url = $paymentService->packageApprovedPayment($commandLine,
                $data['amount'],
                $data['TransId'],
                $data['cardHolderName'],
                $data['EXTRA_CARDBRAND']);
        }elseif ($commandLine->type=="Flight"){
            $this->AddPoints(1,$commandLine);   
            $url = $paymentService->flightApprovedPayment($commandLine,
                $data['amount'],
                $data['TransId'],
                $data['cardHolderName'],
                $data['EXTRA_CARDBRAND']);
        }elseif ($commandLine->type=="Hotel"){
            $this->AddPoints(2,$commandLine);  
            $url = $paymentService->hotelApprovedPayment($commandLine,
                $data['amount'],
                $data['TransId'],
                $data['cardHolderName'],
                $data['EXTRA_CARDBRAND']);
        }


    }

    public function paid($id,$type){

        $command=TlCommandLine::all()->find($id);

        if ($type=="CMI"){
            $cmi=new CMIService();
            return view('front.payment.payment')
                ->with('postParams', $cmi->cimParams($command->tlCustomer(),$command->price,$command->book_id,$command->id));
        }elseif ($type=="paypal"){
            Session::put('item',['bookId'=>$command,'type'=>$command->type]);

            $usd=TlDevise::all()->where('code','USD')->first();
            if($usd)
                $usd=$usd->value;
            else
                $usd=0.1;
            $paymentService=new PaymentService();
            $url=$paymentService->postPaymentWithPayPal($command->price*$usd,$command->type,'paypal.callback');
            if(!empty($url))
                return redirect()->away($url);
        }
       return back()->with("error","error");
    }

    private function AddPoints($type_booking,$commandLine){
        $tl_point = TlPointsFidelite::findOrFail($type_booking);
        if($tl_point->type_point == "Par réservation")
            $points_fidelite = $tl_point->points;
        else
            $points_fidelite = ((($commandLine->price) % 100) * $tl_point->points);

        $customer = TlCustomer::all()->find(Auth::guard("customer")->user()->id());
        $customer->points_fidelite+=$points_fidelite;
        $customer->save();
    }
}
