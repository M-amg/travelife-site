<?php

namespace App\Http\Controllers;

use App\models\agency\TlDevise;
use App\Services\ConfigService;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->getLocal();
        $this->getCurrency();
        ConfigService::configEmail();
    }
    protected function getLocal()
    {
        if (Session::get('local'))
            app()->setLocale(Session::get('local'));
        else
            app()->setLocale('fr');

    }
    protected function getCurrency(){
        $currency=Session::has("currency")?Session::get("currency"):TlDevise::all()->where("is_principale",1)->first();
        View::share ('currency',$currency->value);
        View::share ('currencyText',$currency->symbol);
    }

}
