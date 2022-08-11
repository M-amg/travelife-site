<?php

namespace App\Http\Controllers\Auth;

use App\models\agency\TlAgency;
use App\models\config\TlAuthenticationMedia;
use App\models\customer\TlCustomer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Socialite;
use Mail;
use Illuminate\Support\Str;

class CustomerLoginController extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function showLoginForm()
    {
        if (Auth::guard("customer")->check())
            return redirect()->route('customer.home');

        return view('front.moncompte');
    }

    public function loginReservation(Request $request)
    {
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required|min:6"
        ]);
        if (Auth::guard('customer')->attempt(["status" => 1, "email" => $request->email, "password" => $request->password])) {

            return response()->json('success');

        }
        return response()->json('Ces informations d\'identification ne correspondent pas à nos enregistrements.');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required|min:6"
        ]);

        if (Auth::guard('customer')->attempt(["status" => 1, "email" => $request->email, "password" => $request->password], $request->remember)) {
            return redirect()->intended(route('customer.home'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    /**
     **_ Redirect the user to the OAuth Provider.
     * _**
     **_ @return Response
    _**/
    public function redirectToProvider($provider)
    {
        $this->setConfig($provider);
        return Socialite::driver($provider)->redirect();
    }

    /**
     * _ Obtain the user information from provider.  Check if the user already exists in our
     * _ database by looking up their provider_id in the database.
     * _ If the user exists, log them in. Otherwise, create a new user then log them in. After that
     * _ redirect them to the authenticated users homepage.
     * _
     * _ @return Response
     * _
     **/
    public function handleProviderCallback($provider)
    {
        $this->setConfig($provider);
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::guard("customer")->login($authUser, true);
        // dd(Auth::guest());
        return redirect()->intended(route('customer.home'));
    }

    /**
     * _ If a user has registered before using social auth, return the user
     * _ else, create a new user object.
     * _ @param  $user Socialite user object
     * _ @param $provider Social auth provider
     * _ @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = TlCustomer::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        // dd($user);

        $name = explode(" ", $user->name);
        $customer = TlCustomer::where('email', $user->email)->first();
        if (!$customer)
            $customer = new  TlCustomer();
        $customer->firstName = $name[0];
        $customer->lastName = $name[1];
        $customer->email = $user->email;
        $customer->email_token = base64_encode($user->email);
        $password = str_random(8);        //  $customer->tel = $request->input('tel');
        $customer->password = Hash::make($password);
        $customer->provider = $provider;
        $customer->provider_id = $user->id;
        $customer->status = 1;
        $customer->etat = 3;
        $customer->save();

        return $customer;
    }

    private function setConfig($drive){

        $social=TlAuthenticationMedia::where("name",$drive)->first();
        $domain=TlAgency::all()->first()->domain_name;
        config(["services.$drive" => [
            'client_id'     =>$social->auth_id,
            'client_secret' =>$social->secret,
            'redirect'      =>"https://$domain/auth/$drive/callback",
        ],]);
    }

    public function varifyemail(Request $request)
    {
        $email1 = TlCustomer::where('email', $request->input('email'))->get();
        if(count($email1) > 0)
        {
            return response()->json("true");
        } else {
            return response()->json("Désolé, e-mail introuvable.");
        }

    }

    public function postEmail(Request $request){
        $request->validate([
            'email' => 'required|email|exists:tl_customers',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );
        $email = $request->input('email');
        $agency = TlAgency::all()->first();
        Mail::send('auth.verify', ['token' => $token,"agence" => $agency], function($message) use($email,$agency){
            $message->from($agency->booking_email, $agency->domain_name);
            $message->to($email);
            $message->subject('Notification de réinitialisation de mot de passe');
        });

        return back()->with('success', 'Nous avons envoyé votre lien de réinitialisation de mot de passe par e-mail!');
    }

}
