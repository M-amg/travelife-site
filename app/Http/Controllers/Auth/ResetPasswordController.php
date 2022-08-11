<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\models\customer\TlCustomer;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getPassword($token) {

        return view('auth.passwords.reset', ['token' => $token]);
    }

    public function updatePassword(Request $request)
     {

     $request->validate([
         'email' => 'required|email|exists:tl_customers',
         'password' => 'required|string|min:6|confirmed',
         'password_confirmation' => 'required',

     ]);

     $updatePassword = DB::table('password_resets')
                         ->where(['email' => $request->email, 'token' => $request->token])
                         ->first();
     if(!$updatePassword)
         return back()->withInput()->with('error', 'Invalid token!');

       $customer = TlCustomer::where('email', $request->email)
                   ->update(['password' => Hash::make($request->password)]);

       DB::table('password_resets')->where(['email'=> $request->email])->delete();

       return redirect('/mon-compte')->with('success', 'Votre mot de passe a été changé!');

     }
}
