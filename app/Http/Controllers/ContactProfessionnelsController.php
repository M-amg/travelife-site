<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class ContactProfessionnelsController extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    // return response()->json($data);

    public function contactProfessionnelsEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',         
            'prenom' => 'required|min:3',         
            'nom' => 'required|min:3',
            'entreprise' => 'required|min:3',
            'tel' => 'required',
            'budget' => 'required',
            'duree' => 'required',
            'period' => 'required',
            'objet' => 'required',
            'msg' => 'required'
        ]);
        $email = $request->input("email");
        Mail::send("front.customer.email.contactProfessionnelsEmail",
            [
                'email' => $request->input("email"),
                'prenom' => $request->input("prenom"),
                'nom' => $request->input("nom"), 
                'entreprise' => $request->input("entreprise"), 
                'tel' => $request->input("tel"), 
                'budget' => $request->input("budget"), 
                'duree' => $request->input("duree"), 
                'period' => $request->input("period"), 
                'objet' => $request->input("objet"), 
                'text' => $request->input("msg"), 
            ], function ($msg) use ($email) {
                $msg->from($email);
                $msg->subject("Contact");
                $msg->to('lagyassine88@gmail.com');
            });
        return redirect()->back()->with('alert', 'Votre email a été bien envoyé!');
    }
}
