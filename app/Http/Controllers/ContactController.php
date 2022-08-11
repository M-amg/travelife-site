<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\agency\TlAgency;
use App\models\package\TlPackage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function professionnelsEmail(Request $request)
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
    // -------------------------------------------
    public function devisEmail(Request $request)
    {

        // dd($request->all());
        
        $this->validate($request, [
            'destination' => 'required',         
            'duree' => 'required|min:3',         
            'villeDepart' => 'required|min:3',
            'prenom' => 'required|min:3',
            'tel' => 'required',
            'nbrAdulte' => 'required',
            'dateDepart' => 'required',
            'budget' => 'required',
            'pays' => 'required',
            'nom' => 'required',
            'emailadress' => 'required|email',
            'nbrEnfant' => 'required',
            'description' => 'required',
        ]);

        $email = $request->input("emailadress");
        $agency=TlAgency::first();

        Mail::send("front.customer.email.contactDevisEmail",
            [
                'destination' => $request->input("destination"),
                'duree' => $request->input("duree"),
                'villeDepart' => $request->input("villeDepart"), 
                'prenom' => $request->input("prenom"), 
                'tel' => $request->input("tel"), 
                'nbrAdulte' => $request->input("nbrAdulte"), 
                'dateDepart' => $request->input("dateDepart"), 
                'budget' => $request->input("budget"), 
                'pays' => $request->input("pays"), 
                'nom' => $request->input("nom"), 
                'emailadress' => $request->input("emailadress"), 
                'nbrEnfant' => $request->input("nbrEnfant"), 
                'description' => $request->input("description"), 
            ], function ($msg) use ($email, $agency) {
                $msg->from($email);
                $msg->subject("Demande de devis");
                $msg->to($agency->email);
            });

        return back()->with('success', 'Votre email a été bien envoyé!');
    }

    public function thematicEmail(Request $request)
    {

        $this->validate($request, [
            'fullname' => 'required',         
            'email' => 'required|email',
            'tel' => 'required',
            'adults' => 'required',
            'childs' => 'required',
            'duree' => 'required',  
            'description' => 'required'
        ]);

        $email = $request->input("email");
        $agency=TlAgency::first();

        $package = TlPackage::all()->where('id', $request->input("package"))->first()->title;

        Mail::send("front.customer.email.contactThematicEmail",
            [
                'fullname' => $request->input("fullname"),
                'email' => $request->input("email"), 
                'tel' => $request->input("tel"), 
                'adults' => $request->input("adults"), 
                'childs' => $request->input("childs"), 
                'duree' => $request->input("duree"),
                'description' => $request->input("description")
            ], function ($msg) use ($email, $agency, $package) {
                $msg->from($email);
                $msg->subject("Demande de devis - ".$package);
                $msg->to($agency->email);
            });

        return back()->with('success', 'Votre email a été bien envoyé!');
    }
}
