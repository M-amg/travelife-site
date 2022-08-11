<?php

namespace App\Http\Controllers\Customer;


use App\models\book\TlPassenger;
use App\models\customer\TlCompanyCustomer;
use App\models\customer\TlCustomer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Customer
{
    public static function Save($request)
    {
        $ID = $request->input('customer');
        //dd($request->input('typeFicheCustomer'));

        if ($ID) {
            $customer = TlCustomer::all()->find($ID);
            if (!$customer){
                return abort(404);
            }
        } else {

            $customer = new TlCustomer();
            $customer->tl_agent_id = Auth::guard('agent')->user()->id;
        }


        $customer->firstName = $request->input('firstNameCustomer');
        $customer->lastName = $request->input('lastNameCustomer');
        if($request->input('email'))
            $customer->email = $request->input('email');
        else
            $customer->email = $request->input('emailCustomer');

        if (!empty($request->input('password'))) {
            $customer->password = Hash::make($request->input('password'));
        }
        $customer->tel = $request->input('telCustomer');
        $customer->tel2 = $request->input('tel2Customer');
        $customer->address = $request->input('addressCustomer');
        $dobCustomer=$request->input('dobCustomer');
        if (!empty($dobCustomer))
        $customer->dob = Carbon::createFromFormat('Y-m-d', $request->input('dobCustomer'))->format('Y-m-d');
        $customer->type = $request->input('typeFicheCustomer');
        $customer->status = $request->input('statusCustomer') ? 1 : 0;
        $customer->etat = $request->input('etatCustomer');
        $customer->civility = $request->input('CiviliteCustomer');
        $customer->tl_city_id = $request->input('cityCustomer');
        $customer->zipCode = $request->input('zipCodeCustomer');
        $customer->contactCourrier = 0;
        $customer->contactEmail = 0;
        $customer->contactTel = 0;
        $customer->contactSms = 0;
        if ($request->input('typeFicheCustomer') == 'Societe') {
            $company = new TlCompanyCustomer();
            $company->name = $request->input('nameSocial');
            $company->address = $request->input('addressSocial');
            $company->tel = $request->input('telSocial');
            $company->email = $request->input('emailSocial');
            $company->balance = $request->input('balanceSocial');
            $company->rc = $request->input('RCSocial');
            $company->ice = $request->input('ICESocial');
            $company->if_social = $request->input('IFSocial');
            $company->patente = $request->input('patenteSocial');
            $company->commissionFlight = $request->input('commissionFlight');
            $company->commissionLowcost = $request->input('commissionLowcost');
            $company->tlCustomers()->save($customer);
            $company->save();
            $customer->tl_company_customer_id = $company->id;
        }
       // dd($request->input('cityCustomer'));
        $customer->save();
        return $customer;
    }

    public static function passenger($data, $id = null)
    {
        if ($id){
            $passenger = TlPassenger::all()->find($id);
            if (!$passenger) {
                return abort(404);
            }
        } else{

            $passenger = new TlPassenger();
        }

        $passenger->firstName = $data['firstName'];
        $passenger->lastName = $data['lastName'];
        $passenger->civility = $data['civility']=== 'Mr' ? 'Mr' : 'Mme';
        $passenger->gender = $data['civility']=== 'Mr' ? 'Male' : 'Female';
        $passenger->type = $data['type'];
        $passenger->dob = Carbon::createFromFormat('Y-m-d',  $data['dob'])->format('Y-m-d');
      //  $passenger->passport = $data['passport'];
        $passenger->tl_customer_id = $data['customer'];
        $passenger->save();
        $passenger->attachFareBook($data['flight']);

        return $passenger;
    }
}
