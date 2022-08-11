<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AgentLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.agent-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required|min:6"
        ]);

        if (Auth::guard('agent')->attempt(["status" => 1,"email" => $request->email, "password" => $request->password], $request->remember)) {
            return redirect()->intended(route('manage.home'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
