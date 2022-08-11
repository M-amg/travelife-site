<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Customer\Book\BookList;
use App\Mail\EmailVerification;
use App\models\book\TlCommandLine;
use App\models\customer\TlCustomer;
use App\models\package\formula\TlFormulaBook;
use App\models\package\TlPackage;
use App\models\package\TlTravel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function index(Request $request)
    {
        $travel = Session::get('travel');
        $reservationFlight = Session::get('reservationFlight');
        $reservationHotel = Session::get('reservationHotel');
        $roomBookHotel = Session::get('RoomBookHotel');

        if (!empty($travel))
            return redirect()->route('front.package.book');

        if (!empty($reservationFlight))
            return redirect()->route('displayFare');

        if (!empty($reservationHotel))
            return redirect()->route('api.hotel.book');

        if (!empty($roomBookHotel))
            return redirect()->route('front.frontHotels.booking');


        return view('front.customer.profile');
    }

    public function created(Request $request)
    {
            $this->validate($request, [
                'name' => 'required',
                'lastName' => 'required',
                'email' => 'required|email|unique:tl_customers',
                'password' => 'required',
            ]);

            $customer = new  TlCustomer();
            $customer->firstName = $request->input('name');
            $customer->lastName = $request->input('lastName');
            $customer->email = $request->input('email');
            $customer->email_token = base64_encode($request->input('email'));
            $customer->password = Hash::make($request->input('password'));
            $customer->tel = null;
            $customer->status = 0;
            $customer->etat = 3;
            $customer->save();



            return view('front.customer.confirmEmail')->with('customer', $customer);

    }

    public function updated(Request $request, $id)
    {
        if ($request->isMethod('Post')) {
            $this->validate($request, [
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                'tel' => 'required',
            ]);

            $customer = TlCustomer::all()->find($id);
            if (!$customer) {
                return abort(404);
            }
            $customer->firstName = $request->input('firstName');
            $customer->lastName = $request->input('lastName');
            $customer->email = $request->input('email');
            $customer->civility = $request->input('Civilite');
            //$customer->email_token = base64_encode($request->input('email'));
            if (!empty($request->input('password')))
                $customer->password = Hash::make($request->input('password'));
            $customer->address = $request->input('address');
            $customer->tel = $request->input('tel');
            $customer->tel2 = $request->input('tel2');

            $customer->dob = Carbon::createFromFormat('Y-m-d', $request->input('dob'))->format('Y-m-d');
            // $customer->status = 0;
            // $customer->etat = 3;
            // dd()
            $customer->save();

            return redirect()->back()->with('success', 'La modification est bien effectué!');
        }
    }

    public function reservationList()
    {
        $books = TlCommandLine::all()->where('tl_customer_id', Auth::guard('customer')->user()->id);
       
        $data = [];
        foreach ($books as $book) {
            switch ($book->bookName) {
                case ('TlFormulaBook'):
                    $data[] = BookList::package($book);
                    break;
                case ('FlightAPI'):
                    $data[] = BookList::flight($book);
                    break;
                case ('HotelApi'):
                    $h = BookList::hotelApi($book);
                    if ($h)
                        $data[] = $h;
                    break;
                case ('TlBookHotel'):
                    $data[] = BookList::hotel($book);
                    break;
            }

        }

        return view('front.customer.reservation')->with('commandLigne', $data);
    }

    public function verify($token)
    {
        $customer = TlCustomer::where('email_token', $token)->first();
        /* if (empty($customer) or $customer->status != 0)
             return view('404');*/

        $customer->status = 1;
        $customer->save();

        $travel = Session::get('travel');
        Auth::guard('customer')->login($customer, true);
        if (!empty($travel))
            return redirect()->route('front.package.book');

        return redirect()->route('customer.home');
    }

    public function profile()
    {
        //dd( Auth::guard("customer")->user()->id);
        return view('front.customer.profile');
    }

    public function getCustomerById(Request $request)
    {
        $id = $request->get('id');
        $customer = TlCustomer::all()->find($id);
        if (!$customer) {
            return abort(404);
        }
        return response()->json($customer);
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        return redirect()->route('home');
    }

    public function CreatedByAjax(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:tl_customers',
            'password' => 'required',
        ]);

        $customer = new  TlCustomer();
        $customer->firstName = $request->input('name');
        $customer->lastName = $request->input('lastName');
        $customer->email = $request->input('email');
        $customer->email_token = base64_encode($request->input('email'));
        $customer->password = Hash::make($request->input('password'));
        $customer->status = 1;
        $customer->etat = 3;
        $customer->save();

        Auth::guard("customer")->login($customer, true);
        return response()->json("success");
    }


}
