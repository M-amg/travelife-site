<?php

namespace App\Http\Controllers\Customer\Book;

use App\models\agency\TlAgency;
use App\models\book\TlCommandLine;
use App\models\book\TlPassenger;
use App\models\book\TlRule;
use App\models\customer\TlCustomer;
use App\models\package\formula\TlFormulaBenefitBook;
use App\models\package\formula\TlFormulaBook;
use App\models\package\formula\TlFormulaRoomBook;
use App\models\package\TlAllotmentPackage;
use App\models\package\TlBenefit;
use App\models\package\TlFormula;
use App\models\package\TlPackage;
use App\models\package\TlPackageRoom;
use App\models\package\TlTravel;
use App\models\Payment;
use App\models\TlPayment;

use App\Services\BillService;
use App\Services\PaymentService;
use Carbon\Carbon;
use GuzzleHttp\Client;
use http\Client\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use PDF;
use Illuminate\Support\Str;

class PackageBookController extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function bookPdf($id)
    {

        $book = TlFormulaBook::all()->find($id);

        if (empty($book) or Auth::guard('customer')->user()->id != $book->tlCustomer()->first()->id)
            return redirect()->route('404');

        $bookID = TlCommandLine::all()->where('book_id', $id)->where('bookName', 'TlFormulaBook')->first()->id;
        $customer = TlCustomer::all()->find($book->tlCustomer()->first()->id);
        if (!$customer) {
            return abort(404);
        }
        $agency = TlAgency::all()->first();
        $pdf = PDF::loadView('front.package.pdf.book', compact('bookID', 'book', 'customer', 'agency'));
        return $pdf->download('book.pdf');

    }

    public function TlFormulaBook($id , Request $request)
    {
        $commandLine = TlCommandLine::where('id', $id)->where('bookName', "TlFormulaBook")->first();
        $book = TlFormulaBook::find($commandLine->book_id);

        if ($request->get("error")) {
            $error = true;
        }else{
            $error = false;
        }

        if (!$book) {
            return abort(404);
        }

        $travel = TlTravel::find($book->tl_travel_id);
        if (!$travel) {
            return abort(404);
        }

        $formula = TlFormula::find($book->tl_formula_id);

        $customer = TlCustomer::find($book->tlCustomer()->first()->id);
        if (!$customer) {
            return abort(404);
        }


        return view('front.package.thankYou')
            ->with('travel', $travel)
            ->with('book', $book)
            ->with('error', $error)
            ->with('customer', $customer)
            ->with('commandLine', $commandLine)
            ->with('formula', $formula);
    }


    public function booking(Request $request)
    {

        $travel = Session::get('travel');
        $package = Session::get('package');
        $formula = $request->get('formula');
        $adults = Session::get('adults');
        $infants = Session::get('infants');
        $prices = Session::get('prices');
        $package = TlPackage::all()->find($package);

        $payments = TlPayment::all();
        $travel = TlTravel::all()->find($travel);
        if (!$travel) {
            return abort(404);
        }

        if ($formula)
            Session::put('formula', $formula);
        else
            $formula=Session::get('formula');


        $formula = TlFormula::all()->find($formula);

        if (!$formula) {
            return abort(404);
        }

        $price = $formula->priceSale * $adults;
        foreach ($package->tlPoliticAgeEnfantPackages as $ageInfant) {
            $nbI = $request->input($ageInfant->TypeEnfant);
            $nbI = is_numeric($nbI) ? $nbI : 0;

            if ($ageInfant->TypeEnfant == "Child") {
                if ($formula->priceInfant===null && $nbI > 0) {
                    $isGood = false;
                } else {
                    $price += $formula->priceInfant * $nbI;
                }
            } else if ($ageInfant->priceEnfant == "Minor") {
                if ($formula->priceMinor===null && $nbI > 0) {
                    $isGood = false;
                } else {
                    $price += $formula->priceMinor * $nbI;
                }

            } else {
                if ($formula->priceBaby===null && $nbI > 0) {
                    $isGood = false;
                } else {
                    $price += $formula->priceBaby * $nbI;
                }
            }
        }
        $line['id'] = $formula->id;
        $line['name'] = $formula->name;
        $line['price'] = $price;
        $line['hotels'] = [];

        $data = $line;


        return view("front.package.book")
            ->with('travel', $travel)
            ->with('adults', $adults)
            ->with('infants', $infants)
            ->with('payments', $payments)
            ->with('price', $data["price"])
            ->with('package', $package)
            ->with('formula', $data);
    }

    public function confirmBooking(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            // array('civility' => 'required'),
            'civility.*' => 'required',
            // array('lastName' => 'required'),
            'lastname.*' => 'required',
            // array('firstName' => 'required|email'),
            'firstname.*' => 'required',
        ],
        [
            'civility.*.required' => 'Le champ Civilité est obligatoire',
            'lastname.*.required' => 'Le champ Nom est obligatoire',
            'firstname.*.required' => 'Le champ Prénom est obligatoire',
        ]
    );
        /* if (!Auth::guard("customer")->check())
             return redirect()->route('customer.login');*/


        if (!Auth::guard("customer")->check()) {
           // return redirect()->intended(route('customer.home',["type"=>"package"]));
            $this->createdCustomer($request);

          //  return back()->withInput($request->all())->with('alert', 'veuillez créer un compte ou bien connectez si vous avez déjà un compte');
        }


        $travel = Session::get('travel');
        $adults = Session::get('adults');
        $formula = Session::get('formula');

        $passengers = $request->input('adult');
        $payment = $request->input('payment');

        $formula = TlFormula::all()->find($formula);
        if (!$formula) {
            return abort(404);
        }
        $package = Session::get('package');
        $package = TlPackage::all()->find($package);

        if (!$package) {
            return abort(404);
        }
        $book = new TlFormulaBook();
        $book->tl_travel_id = $travel;
        $book->tl_customer_id = Auth::guard("customer")->user()->id;
        $book->tl_payment_id = $payment;
        $book->tl_formula_id = $formula->id;
        $book->etat = 0;
        $book->save();
        if (!empty($passengers)) {
            foreach ($passengers as $key => $passenger) {
                $confBook = new TlPassenger();
                if (!empty($passenger["dob"]))
                    $confBook->dob = Carbon::createFromFormat('Y-m-d', $passenger["dob"]);
                $confBook->civility = $passenger["civility"];
                $confBook->lastName = $passenger["lastName"];
                $confBook->type = 'Adult';
                $confBook->firstName = $passenger["firstName"];
                $confBook->save();
                $confBook->attachFormulaBook($book->id);
            }
        }
        $price = $formula->priceSale * $adults;
        $priceBuy = $formula->priceBuy * $adults;
        $fees = 0;
        foreach ($package->tlPoliticAgeEnfantPackages as $ageInfant) {
            $nbI = $request->get($ageInfant->TypeEnfant);

            if (is_array($nbI)) {
                foreach ($nbI as $key => $passenger) {
                    $confBook = new TlPassenger();
                    if (!empty($passenger["dob"]))
                        $confBook->dob = Carbon::createFromFormat('Y-m-d', $passenger["dob"]);
                    $confBook->civility = $passenger["civility"];
                    $confBook->lastName = $passenger["lastName"];
                    $confBook->firstName = $passenger["firstName"];
                    $confBook->type = $ageInfant->TypeEnfant;
                    $confBook->tl_formula_book_id = $book->id;
                    $confBook->save();
                }
                $nbI = sizeof($nbI);
            } else
                $nbI = 0;
            $nbI = is_numeric($nbI) ? $nbI : 0;

            if ($ageInfant->TypeEnfant == "Child") {
                if ($formula->priceInfant===null && $nbI > 0) {
                    $isGood = false;
                } else {
                    $price += $formula->priceInfant * $nbI;
                    $priceBuy+=$formula->buyInfant* $nbI;
                }
            } else if ($ageInfant->priceEnfant == "Minor") {
                if ($formula->priceMinor===null && $nbI > 0) {
                    $isGood = false;
                } else {
                    $price += $formula->priceMinor * $nbI;
                    $priceBuy+=$formula->buyMinor* $nbI;

                }

            } else {
                if ($formula->priceBaby===null && $nbI > 0) {
                    $isGood = false;
                } else {
                    $price += $formula->priceBaby * $nbI;
                    $priceBuy+=$formula->buyBaby* $nbI;
                }
            }
        }

        $book->fees = $price - $priceBuy;
        $book->price = $price - $book->fees;
        $book->save();
        $fees += $book->fees;
        $total = $price;

        $benefits = $request->input('benefit');
        $passenger = $request->input('nbPassenger');

        if (!empty($benefits[0])) {
            foreach ($benefits as $key => $benefit) {
                $ben = new TlFormulaBenefitBook();
                $ben->tl_formula_book_id = $book->id;
                $ben->tl_benefit_id = $benefit;
                $ben->person = $passenger[$key];
                $price = TlBenefit::all()->find($benefit);
                //  dump($price);
                if ($price) {
                    $ben->price = $price->priceBuying;
                    $ben->fees = $price->priceSelling - $price->priceBuying;
                    $fees+=$ben->fees*$ben->person;
                    $priceBuy += $price->priceBuying * $ben->person;
                    $price = $price->priceSelling;
                    $total += $ben->person * $price;

                    $ben->save();
                }
            }
        }
        // dd($benefits);


        $travel = TlTravel::all()->find($travel);

        if (!$travel) {
            return abort(404);
        }



        $commandLine = new TlCommandLine();
        $commandLine->book_id = $book->id;
        $commandLine->bookName = "TlFormulaBook";
        $commandLine->type = "Package";
        $commandLine->status = 0;
        $commandLine->tl_payment_id = $payment;
        $commandLine->marge_config = $fees;
        $commandLine->priceBuy = $priceBuy;
        $commandLine->price = $priceBuy + $fees;
        $commandLine->tl_customer_id = Auth::guard("customer")->user()->id;
        $commandLine->save();

        $customer = Auth::guard("customer")->user();
        $agence = TlAgency::all()->first();

        Mail::send("front.customer.email.notificationBookClient",
            ["bookID" => $commandLine->id,
                "commandLine" => $commandLine,
                "customer" => $customer,
                "book" => $book,
                "agence" => $agence], function ($msg) use ($customer,$agence) {
                $msg->from($agence->booking_email, $agence->domain_name);
                $msg->subject("validation de réservation");
                $msg->to($customer->email);
            });
        Mail::send("front.customer.email.notificationBookAgent",
            ["bookID" => $commandLine->id,
                "commandLine" => $commandLine,
                "customer" => $customer,
                "book" => $book,
                "agence" => $agence], function ($msg) use ($customer,$agence) {
                $msg->from($agence->booking_email, $agence->domain_name);
                $msg->subject("Nouvelle réservation");
                $msg->to($agence->booking_email);
            });

        Session::forget('travel');
        Session::forget('adults');
        Session::forget('infants');
        Session::forget('formula');

        if ($payment == 3) {
           $postParams = $this->payment($customer, $total, $book->id, $commandLine->id);

            $postParams['type'] = 'package';
            $postParams['book'] = $commandLine->id;

           return view('front.payment.payment')->with('postParams', $postParams);

        }

        // return response()->json(route('front.package.bookDetail', ['id' => $commandLine->id]));
        return redirect()->route('front.package.bookDetail', ['id' => $commandLine->id]);
    }


    // paymentView

    // public function paymentView(Request $request){


    //     return view('front.payment.payment')->with('postParams', $request->get("postParams"));
    // }


    private function createdCustomer($request)
    {
        if ($request->isMethod('Post')) {
            $this->validate($request, [
                'civility' => 'required',
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                //'password' => 'required',
                'tel' => 'required',
            ]);

            // TODO VIRIFAT IS EXECET CUSTEMER
            $customer =  TlCustomer::all()->where("email", $request->input('email'))->first();

            if(!$customer){
                $customer = new  TlCustomer();
                $customer->civility = $request->input('civility');
                $customer->firstName = $request->input('firstName');
                $customer->lastName = $request->input('lastName');
                $customer->email = $request->input('email');
                $customer->tel = $request->input('tel');
                $customer->email_token = base64_encode($request->input('email'));
                $customer->password = Str::random(8); /*Hash::make($request->input('password')); */
                //  $customer->tel = $request->input('tel');
                $customer->status = 1;
                $customer->etat = 3;
                $customer->save();
            }

            //$email = new EmailVerification($customer);

            Auth::guard('customer')->login($customer, true);

       /*     Mail::send("front.customer.email.validationNewCustomer",
                ['email_token' => $customer->email_token, 'lastName' => $customer->lastName, 'firstName' => $customer->firstName,], function ($msg) use ($customer) {
                    $msg->from('no-reponde@levoyageur.ma', 'levoyageur.ma');
                    $msg->subject("validation de l'inscription");
                    $msg->to($customer->email);
                });*/

            // return view('front.customer.confirmEmail')->with('customer',$customer);
        }
    }

    private function payment( $customer, $price, $product, $cmd)
    {
        $agency = TlAgency::first();
        $postParams['product'] = $product;
        $postParams['amount'] = $price;
        $postParams['callbackUrl'] = "https://".$agency->domain_name."/package-payment";
        $postParams['shopurl'] = $cmd;
        $postParams['BillToName'] = $customer->firstName . " " . $customer->lastName;
        $postParams['BillToStreet1'] = $customer->address;
        $postParams['email'] = $customer->email;
        $postParams['tel'] = $customer->tel;
        $postParams['oid'] = (new \DateTime())->format('Y-m-d_H-i-s');
        return $postParams;
    }

    public function cancel($id)
    {
        $cmd = TlCommandLine::find($id);
        $cmd->status = 2;
        $cmd->save();

        $book = TlFormulaBook::find($cmd->book_id);
        $book->etat = 2;
        $book->save();

        return redirect()->back()->with('alert', 'cancel with success!');
    }

    public function callBack(Request $request)
    {
        $bookId = $request->input('product');
        $data = $request->all();

        // unset($data["product"]);
        $s = "id => $bookId \n";
        foreach ($data as $key => $param) {
            $s .= "$key => $param  \n";
        }
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        Storage::disk('local')->put("xml/payment/" . $generated_date . ".txt", $s);

        $agence = TlAgency::first();
        $storeKey = $agence->storyKey;
        $p = new Payment();
        $p->code = $request->input('TransId');
        $p->nbOperation = $request->input('oid');
        $p->err = $request->input('ErrMsg');
        $p->save();

        //comparaison hash calcule avec le hash envoyée par CMI
        $comparisonHash = PaymentService::IsPayment($data, $storeKey);

        if($comparisonHash == true){

            $book = TlFormulaBook::find($bookId);
            $commandLine = TlCommandLine::where("bookName" ,"TlFormulaBook")->where('book_id', $book->id)->first();

            //comparaison prix commande avec le amount envoyée par CMI
            if($commandLine->price == $data['amount']){
                // verification de l'état de la transaction
                if($data["ProcReturnCode"] == "00"){
                    $book->etat = 1;
                    $book->save();

                    $commandLine->status=1;
                    $commandLine->save();

                    $formula=TlFormula::find($book->tl_formula_id);
                    $this->allotment($formula,$book);

                    $rule = new  TlRule();
                    $rule->price = $data['amount'];
                    $rule->type = 4;
                    $rule->tl_command_line_id = $commandLine->id;
                    $rule->number = $data['TransId'];
                    $rule->date = Carbon::today()->format('Y-m-d');
                    $rule->transmitter = $data['cardHolderName'];
                    $rule->bank = $data['EXTRA_CARDBRAND'];
                    $rule->tl_bank_id = 1;
                    $rule->save();
                    $rule->tlFormulaBook()->sync($bookId);

                    echo "ACTION=POSTAUTH";

                }else{

                    echo "APPROVED";

                }
            }
        }else{
            echo "APPROVED";
        }

    //     $customer = TlCustomer::all()->where('id', $book->tl_customer_id)->first();

    //    Mail::send("front.customer.email.notificationBookClient",
    //         ["bookID" => $commandLine->id,
    //             "commandLine" => $commandLine,
    //             "customer" => $customer,
    //             "book" => $book,
    //             "agence" => $agence], function ($msg) use ($customer,$agence) {
    //             $msg->from($agence->booking_email, $agence->domain_name);
    //             $msg->subject("Confirmation de réservation");
    //             $msg->to($customer->email);
    //         });

    //     Mail::send("front.customer.email.notificationBookAgent",
    //         ["bookID" => $commandLine->id,
    //             "commandLine" => $commandLine,
    //             "customer" => $customer,
    //             "book" => $book,
    //             "agence" => $agence], function ($msg) use ($customer,$agence) {
    //             $msg->from($agence->booking_email, $agence->domain_name);
    //             $msg->subject("Confirmation de réservation");
    //             $msg->to($agence->booking_email);
    //         });
    }

    public function payment2($id){

        $cmd = TlCommandLine::all()->find($id);
        $book = TlFormulaBook::all()->find($cmd->book_id);

        if (empty($book) or Auth::guard('customer')->user()->id != $cmd->tl_customer_id)
            return abort(404);

        $customer=Auth::guard('customer')->user();
        $total = 0;

        if (!empty($book->tlFormulaBenefitBooks()->first())) {
            foreach ($book->tlFormulaBenefitBooks as $benefitBook) {

                $total += $benefitBook->person * $benefitBook->price;
            }

        }

        foreach ($book->tlFormulaRoomBooks as $roomBook) {

            $total += $roomBook->price;
        }

        $postParams = $this->payment( $customer, $total, $book->id, $id);
        $bookProduct['oid'] = $postParams['oid'];
        $bookProduct['type'] = 'package';
        $bookProduct['book'] = $id;
        if (Session::has('bookProduct'))
            Session::forget('bookProduct');
        Session::put('bookProduct', $bookProduct);

        return view('front.payment.payment')->with('postParams', $postParams);
    }

    public function voucher(Request $request,$id){
        $bookID = TlCommandLine::all()->find( $id);
        $book = TlFormulaBook::all()->find($bookID->book_id);
        $token=$request->get('token');
        if (!$book  or $book->etat != 1) {
            return abort(404);
        }


        $customer = TlCustomer::all()->find($book->tlCustomer()->first()->id);
        if (!$customer) {
            return abort(404);

        }  if (!empty($token) and $customer->email_token != $token) {
            return abort(404);
        } elseif (empty($token) and !Auth::guard('customer')->check()) {

            return abort(404);
        } elseif (empty($token) and Auth::guard('customer')->check()) {
            if (Auth::guard('customer')->user()->id != $bookID->tl_customer_id)
                return abort(404);
        }
        $agency = TlAgency::all()->first();
        $bookID=$bookID->id;
        $pdf = PDF::loadView('front.package.pdf.voucher', compact('book', 'customer','bookID', 'agency'));
        return $pdf->download('Voucher.pdf');

    }
    public function Bill(Request $request, $id)
    {
        $cmd = TlCommandLine::all()->find($id);
        $book = TlFormulaBook::all()->find($cmd->book_id);
        $token = $request->get('token');

        if (empty($book) or $book->etat != 1)
            return abort(404);

        $customer = TlCustomer::all()->find($cmd->tl_customer_id);
        if (!$customer) {
            return abort(404);
        }
        if (!empty($token) and $customer->email_token != $token) {
            return abort(404);
        } elseif (empty($token) and !Auth::guard('customer')->check()) {

            return abort(404);
        } elseif (empty($token) and Auth::guard('customer')->check()) {
            if (Auth::guard('customer')->user()->id != $cmd->tl_customer_id)
                return abort(404);
        }

        $rules = $book->tlRules()->sum('price');
        if ($rules == $book->price)
            $data['etat'] = "Payée";
        elseif ($rules > 0)
            $data['etat'] = "Commencée";
        else
            $data['etat'] = "impayée";

        $agency = TlAgency::all()->first();
        $bill = BillService::generateWebBill($id);


        //  return view('front.hotel.pdf.book', compact( 'book', 'customer', 'agency'));
        $pdf = PDF::loadView('front.package.pdf.bill', compact('book', 'cmd', 'bill','rules','customer', 'agency'));
        return $pdf->download('Facture.pdf');
    }

    private function allotment($formula,$book){
        $rooms = TlPackageRoom::all()->whereIn("id", unserialize($formula->room));
        foreach ($rooms as $room) {
            $stay = $room->tlPackageHotelInfo()->first()->tlStays()->where('tl_travel_id', $book->tl_travel_id)->first();
            $allotment = $stay->tlPackageRoomAllotments()->where("tl_package_room_id", $room->id)->first();
            $allotment->capacity = $allotment->capacity - $book->tlPassengers()->count();
            if ($allotment->capacity <= 0) {
                if ($allotment->allotment > 0) {
                    $allotment->allotment -= 1;
                    if ($allotment->allotment == 0) {
                        $stay->allotment -= 1;
                    } else {
                        $allotment->capacity = $formula->capacity;
                    }
                } else {
                    $stay->allotment -= 1;
                }
            }
            $stay->save();
            $allotment->save();
        }
        $travel = TlTravel::all()->find($book->tl_travel_id);
        $travel->first()->nrsieges -=  $book->tlPassengers()->count();
        $travel->save();
    }

}
