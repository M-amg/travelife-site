<?php
/**
 * Created by PhpStorm.
 * User: hayat
 * Date: 5/31/2019
 * Time: 11:33 AM
 */

namespace App\Http\Controllers\Customer\book;


use App\models\book\bookHotel\TlBookHotel;
use App\models\book\TlBill;
use App\models\bookFlightAPI\FareBook;
use App\models\bookHotelApi\ApiHotelBook;
use App\models\customer\TlCompanyCustomer;
use App\models\devis\TlDevis;
use App\models\package\formula\TlFormulaBook;
use App\models\package\TlPackage;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use function Psy\debug;

class BookList
{
    public static function devis($command)
    {
        $devis = TlDevis::all()->find($command->book_id);
        $total = 0;
        $bay = 0;
        $marge = 0;
        $tva = 0;
        $data = null;
        if ($devis) {


            foreach ($devis->tlDevisLine as $deviseLine) {
                $bayC = ($deviseLine->priceUnitaire * $deviseLine->pax) + (($deviseLine->priceUnitaire * $deviseLine->pax) * ($deviseLine->tva / 100));
                $bay += $bayC;
                $tva += (($deviseLine->priceUnitaire * $deviseLine->pax) * ($deviseLine->tva / 100));
                $margeC = ($deviseLine->tlCommissionDevis()->first()->commission * $deviseLine->tlCommissionDevis()->first()->pax) + (($deviseLine->tlCommissionDevis()->first()->commission * $deviseLine->tlCommissionDevis()->first()->pax) * ($deviseLine->tlCommissionDevis()->first()->tva / 100));
                $marge += $margeC;
                $total += $bayC + $marge;
            }
            $data['id'] = $devis->id;
            $data['num'] = "DOD" . sprintf('%04u', $devis->id);
            $data['command'] = $command->id;
            $data['ref'] = 'CO' . Carbon::parse($command->created_at)->format('ym') . '-' . sprintf('%04u', $command->id);
            if ($command->tlCustomer()->first())
                $data['name'] = $command->tlCustomer()->first()->firstName . ' ' . $command->tlCustomer()->first()->lastName;
            else
                $data['name'] = "";
            $data['title'] = "";
            $data['total'] = $total;
            $data['devise'] = $devis->devise;
            $data['rulesPrice'] = $devis->tlRules()->sum('price');
            $data['type'] = "Devis";
            $data['fa'] = "fa-file-text";
            $data['priceBay'] = $bay;
            if ($data['rulesPrice'] >= $data['total']) {
                $status = 1;
            } else if ($data['rulesPrice'] == 0) {
                $status = 2;
            } else if ($data['rulesPrice'] > 0 && $data['rulesPrice'] < $data['total']) {
                $status = 3;
            }
            $data["statusPayment"] = $status;

            $data['margin'] = $marge;
            $data['tva'] = $tva;

            if($command->tlBillLines()->first()){
                if ($command->tlBillLines()->first()->tlBill()->first()) {
                    $data['isBills'] = true;
                    $data['Bills'] = $command->tlBillLines()->first()->tlBill()->first()->id;
                    $data['NumBills'] = "FA" . Carbon::parse($command->tlBillLines()->first()->tlBill()->first()->created_at->format("d-m-Y"))->format('yd') . '-' . sprintf('%04u', $command->tlBillLines()->first()->tlBill()->first()->id);
                    $data['BillsUrl'] = ""; //route('admin.devis.bill', ['id' => $command->id]);
                    $data['BillDate'] = $command->tlBillLines()->first()->tlBill()->first()->created_at->format("d-m-Y");
                } else {
                    $data['isBills'] = false;
                    $data['Bills'] = "";
                    $data['BillsUrl'] = "";
                    $data['NumBills'] = "";
                    $data['BillDate'] = "";
                }
            } else {
                $data['isBills'] = false;
                $data['Bills'] = "";
                $data['BillsUrl'] = "";
                $data['NumBills'] = "";
                $data['BillDate'] = "";
            }
            $data['dateCreated'] = $command->created_at;

            $data['agent'] = $devis->tlAgent()->first()->firstName . ' ' . $devis->tlAgent()->first()->lastName;
            $data['agentID'] = $devis->tlAgent()->first()->id;
            $data['agency'] = $devis->tlAgent()->first()->tlBranch()->first()->name;
            $data['city'] = $devis->tlAgent()->first()->tlBranch()->first()->tlCity()->first()->name;
            $data['passenger'] = "";
            if ($devis->status == 0)
                $data['status'] = 0;
            elseif ($devis->status == 1)
                $data['status'] = 1;
            else
                $data['status'] = 2;

            $data['status'] = $command->status;

            $data['urlName'] = "devis";
            $data['urlAdmin'] = "";//route("admin.book.$command->bookName", ['id' => $command->id]);
            $data['PaymentUrl'] = route('front.package.payment', ['id' => $command->id]);
            $data['frontUrl'] = "";
            $data['cancelBook'] = "";//"";
            $data['payment'] = "";

        }
        return $data;
    }

    public static function package($command)
    {
        $formulaBook = TlFormulaBook::find($command->book_id);
    
        $data = [];
        if($formulaBook){
            $data['id'] = $formulaBook->id;
            $data['command'] = $command->id;
            $data['ref'] = 'CO' . Carbon::parse($command->created_at)->format('ym') . '-' . sprintf('%04u', $command->id);
            if ($command->tlCustomer()->first())
                $data['name'] = $command->tlCustomer()->first()->firstName . ' ' . $command->tlCustomer()->first()->lastName;
            else
                $data['name'] = "";
            $data['total'] = $command->price;
            $data['devise'] = "MAD";
            $data['rulesPrice'] = $formulaBook->tlRules()->sum('price');
            $data['type'] = "Package";
            $data['fa'] = "fa-globe";
            $data['title'] = $formulaBook->tlTravel()->first() ? $formulaBook->tlTravel()->first()->tlPackage()->first()->title : '';

            if ($data['rulesPrice'] >= $data['total']) {
                $status = 1;
            } else if ($data['rulesPrice'] == 0) {
                $status = 2;
            } else if ($data['rulesPrice'] > 0 && $data['rulesPrice'] < $data['total']) {
                $status = 3;
            }
            $data["statusPayment"] = $status;

            $data['num'] = "";
            if ($formulaBook->tlTravel()->first()) {
                if ($formulaBook->tlTravel()->first()->tlPackage()) {
                    if ($formulaBook->tlTravel()->first()->tlPackage()->first()->tlPackageType()->first())
                        $data['num'] = $formulaBook->tlTravel()->first() ? "DO" . substr($formulaBook->tlTravel()->first()->tlPackage()->first()->tlPackageType()->first()->name, 0, 1) . sprintf('%04u', $formulaBook->tlTravel()->first()->tlPackage()->first()->id) : "";
                }
            }
            $pas = "";
            $data['priceBay'] = $command->priceBuy;
            $data['margin'] = $command->price - $command->priceBuy;
            $data['tva'] = $data['margin'] * 0.2;
            foreach ($formulaBook->tlPassengers as $passenger) {
                $passenger = $passenger->pivot;
                $pas .= $passenger->lastName . "-";
            }
            $data['passenger'] = $pas ? substr($pas, 0, -1) : "";

            if($command->tlBillLines()->first()){
                if ($command->tlBillLines()->first()->tlBill()->first()) {
                    $data['isBills'] = true;
                    $data['Bills'] = $command->tlBillLines()->first()->tlBill()->first()->id;
                    $data['BillsUrl'] = ""; //route('admin.package.bill', ['id' => $command->id]);
                    $data['NumBills'] = "FA" . Carbon::parse($command->tlBillLines()->first()->tlBill()->first()->created_at->format("d-m-Y"))->format('yd') . '-' . sprintf('%04u', $command->tlBillLines()->first()->tlBill()->first()->id);
                    $data['BillDate'] = $command->tlBillLines()->first()->tlBill()->first()->created_at->format("d-m-Y");
                } else {
                    $data['isBills'] = false;
                    $data['Bills'] = "";
                    $data['BillsUrl'] = "";
                    $data['NumBills'] = "";
                    $data['BillDate'] = "";
                }
            }else {
                $data['isBills'] = false;
                $data['Bills'] = "";
                $data['BillsUrl'] = "";
                $data['NumBills'] = "";
                $data['BillDate'] = "";
            }
            $data['dateCreated'] = $command->created_at;
            if (!empty($formulaBook->b2b)) {
                $data['agent'] = $formulaBook->b2b;
                $data['agentID'] = "b2b";
                $data['agency'] = $formulaBook->tlCustomer()->first()->tlCompanyCustomer()->first()->name;
                $data['city'] = '';
            } elseif (!empty($formulaBook->tlAgent()->first())) {
                $data['agent'] = $formulaBook->tlAgent()->first()->firstName . " " . $formulaBook->tlAgent()->first()->lastName;
                $data['agentID'] = $formulaBook->tlAgent()->first()->id;
                $data['agency'] = $formulaBook->tlAgent()->first()->tlBranch()->first()->name;
                $data['city'] = $formulaBook->tlAgent()->first()->tlBranch()->first()->tlCity()->first()->name;
            } else {
                $data['agent'] = "WEB";
                $data['agentID'] = 'web';
                $data['agency'] = "";
                $data['city'] = "";
            }
            $data['status'] = $formulaBook->etat;
            $data['urlName'] = "formula";
            $data['urlAdmin'] = "";//route("admin.book.$command->bookName", ['id' => $command->id]);
            $data['PaymentUrl'] = route('front.package.payment', ['id' => $command->id]);
            $data['frontUrl'] = 'front.package.bookDetail';
            $data['cancelBook'] = "";//route('cancelBooks.update', ['id' => $command->id]);
            $data['payment'] = $formulaBook->tl_payment_id;
        }
            return $data;
    }

    public static function flight($command)
    {
        $book = FareBook::all()->find($command->book_id);

        if (!$book)
            return false;
        $data['id'] = $book->id;
        $data['ref'] = 'CO' . Carbon::parse($command->created_at)->format('ym') . '-' . sprintf('%04u', $command->id);
        if ($command->tlCustomer()->first())
            $data['name'] = $command->tlCustomer()->first()->firstName . ' ' . $command->tlCustomer()->first()->lastName;
        else
            $data['name'] = "";
        $data['total'] = $command->somePrice();
        $data['devise'] = "MAD";
        $data['rulesPrice'] = $book->tlRules()->sum('price');
        $data['type'] = "AMADEUS";
        $data['fa'] = "fa-plane";
        $data['title'] = "";
        $data['num'] = "ATS";

        if ($data['rulesPrice'] >= $data['total']) {
            $status = 1;
        } else if ($data['rulesPrice'] == 0) {
            $status = 2;
        } else if ($data['rulesPrice'] > 0 && $data['rulesPrice'] < $data['total']) {
            $status = 3;
        }
        $data["statusPayment"] = $status;

        $pas = "";
        foreach ($book->tlPassengers as $passenger) {
            $passenger = $passenger->pivot;
            $pas .= $passenger->lastName . "-";
        }
        $data['passenger'] = $pas ? substr($pas, 0, -1) : "";

        $data['priceBay'] = $command->priceBuy;
        $data['margin'] = $command->price - $command->priceBuy;
        $data['tva'] = $data['margin'] * 0.2;
        if($command->tlBillLines()->first()){
            if ($command->tlBillLines()->first()->tlBill()->first()) {
                $data['isBills'] = true;
                $data['Bills'] = $command->tlBillLines()->first()->tlBill()->first()->id;
                $data['NumBills'] = "FA" . Carbon::parse($command->tlBillLines()->first()->tlBill()->first()->created_at->format("d-m-Y"))->format('yd') . '-' . sprintf('%04u', $command->tlBillLines()->first()->tlBill()->first()->id);
                $data['BillsUrl'] = ""; //route('admin.flight.bill', ['id' => $command->id]);
                $data['BillDate'] = $command->tlBillLines()->first()->tlBill()->first()->created_at->format("d-m-Y");
            } else {
                $data['isBills'] = false;
                $data['Bills'] = "";
                $data['NumBills'] = "";
                $data['BillsUrl'] = "";
                $data['BillDate'] = "";
            }
        }else {
                $data['isBills'] = false;
                $data['Bills'] = "";
                $data['NumBills'] = "";
                $data['BillsUrl'] = "";
                $data['BillDate'] = "";
        }
        if (!empty($book->b2b)) {
            $data['agent'] = $book->b2b;
            $data['agency'] = $book->tlCustomer()->first()->tlCompanyCustomer()->first()->name;
            $data['agentID'] = "b2b";
            $data['city'] = $book->tlCustomer()->first()->tlCity()->first()->name;
        } elseif (!empty($book->tlAgent()->first())) {
            $data['agent'] = $book->tlAgent()->first()->firstName . " " . $book->tlAgent()->first()->lastName;
            $data['agentID'] = $book->tlAgent()->first()->id;
            $data['agency'] = $book->tlAgent()->first()->tlBranch()->first()->name;
            $data['city'] = $book->tlAgent()->first()->tlBranch()->first()->tlCity()->first()->name;
        } else {
            $data['agent'] = "WEB";
            $data['agentID'] = 'web';
            $data['agency'] = "";
            $data['city'] = "";
        }

        $data['command'] = $command->id;
        $data['dateCreated'] = $command->created_at;
        $data['status'] = $command->status;
        $data['urlName'] = "flight";
        $data['urlAdmin'] = "";//route("admin.book.flight", ['id' => $command->id]);
        $data['PaymentUrl'] = route('front.flight.payment', ['id' => $command->id]);
        $data['frontUrl'] = 'front.flight.bookDetail';
        $data['cancelBook'] = "";//'';
        $data['payment'] = $book->tl_payment_id;

        return $data;
    }

    public static function hotelApi($command)
    {
        $book = ApiHotelBook::all()->find($command->book_id);

        if (!$book)
            return false;

        $data['id'] = $book->id;
        $data['ref'] = 'CO' . Carbon::parse($command->created_at)->format('ym') . '-' . sprintf('%04u', $command->id);
        if ($command->tlCustomer()->first())
            $data['name'] = $command->tlCustomer()->first()->firstName . ' ' . $command->tlCustomer()->first()->lastName;
        else
            $data['name'] = "";
        $data['total'] = $book->price;
        $data['devise'] = "MAD";
        $data['rulesPrice'] = $book->tlRules()->sum('price');
        $data['type'] = "Hotel Word";
        $data['fa'] = "fa-building";
        $data['title'] = $book->hotelName;
        $data['payment'] = 3;
        if ($data['rulesPrice'] >= $data['total']) {
            $status = 1;
        } else if ($data['rulesPrice'] == 0) {
            $status = 2;
        } else if ($data['rulesPrice'] > 0 && $data['rulesPrice'] < $data['total']) {
            $status = 3;
        }
        $data["statusPayment"] = $status;
        $data['num'] = $book->provider;
        $pas = "";
        foreach ($book->tlPassengers as $passenger) {
            $passenger = $passenger->pivot;
            $pas .= $passenger->lastName . "-";
        }
        $data['passenger'] = $pas ? substr($pas, 0, -1) : "";
        $data['priceBay'] = $command->priceBuy;
        $data['margin'] = $command->price - $command->priceBuy;
        $data['tva'] = $data['margin'] * 0.2;
        if($command->tlBillLines()->first()){
            if ($command->tlBillLines()->first()->tlBill()->first()) {
                $data['isBills'] = true;
                $data['Bills'] = $command->tlBillLines()->first()->tlBill()->first()->id;
                $data['BillsUrl'] = ""; //route('admin.hotelApi.bill', ['id' => $command->id]);
                $data['BillDate'] = $command->tlBillLines()->first()->tlBill()->first()->created_at->format("d-m-Y");
                $data['NumBills'] = "FA" . Carbon::parse($command->tlBillLines()->first()->tlBill()->first()->created_at->format("d-m-Y"))->format('yd') . '-' . sprintf('%04u', $command->tlBillLines()->first()->tlBill()->first()->id);

            } else {
                $data['isBills'] = false;
                $data['Bills'] = "";
                $data['BillsUrl'] = "";
                $data['BillDate'] = "";
                $data['NumBills'] = "";

            }
        } else {
            $data['isBills'] = false;
            $data['Bills'] = "";
            $data['BillsUrl'] = "";
            $data['BillDate'] = "";
            $data['NumBills'] = "";

        }

        if ($book->tlAgent()->first()) {
            $data['agent'] = $book->tlAgent()->first()->firstName . ' ' . $book->tlAgent()->first()->lastName;
            $data['agentID'] = $book->tlAgent()->first()->id;
            $data['agency'] = $book->tlAgent()->first()->tlBranch()->first()->name;
            $data['city'] = $book->tlAgent()->first()->tlBranch()->first()->tlCity()->first()->name;
        } elseif (!empty($book->b2b)) {
            $data['agent'] = $book->b2b;
            $data['agentID'] = 'b2b';
            $data['agency'] = $book->tlCustomer()->first() ? $book->tlCustomer()->first()->tlCompanyCustomer()->first()->name : '';
            $data['city'] = $book->tlCustomer()->first() ? $book->tlCustomer()->first()->tlCity()->first()->name : '';
        } else {
            $data['agent'] = "WEB";
            $data['agentID'] = 'web';
            $data['agency'] = "";
            $data['city'] = "";
        }

        $data['command'] = $command->id;
        $data['dateCreated'] = $command->created_at;
        $data['status'] = $command->status;
        $data['urlName'] = "Hotel";
        $data['urlAdmin'] = "";//route("admin.book.HotelApi", ['id' => $command->id]);
        $data['PaymentUrl'] = route('front.hotelWord.payment', ['id' => $command->id]);
        $data['frontUrl'] = 'front.hotelWord.bookDetail';
        $data['cancelBook'] = "";//'';
        $data['payment'] = $book->tl_payment_id;

        return $data;
    }

    public static function hotel($command)
    {
        $book = TlBookHotel::find($command->book_id);

        if (!$book)
            return false;
        $data['id'] = $book->id;
        $data['ref'] = 'CO' . Carbon::parse($command->created_at)->format('ym') . '-' . sprintf('%04u', $command->id);
        if ($command->tlCustomer()->first())
            $data['name'] = $command->tlCustomer()->first()->firstName . ' ' . $command->tlCustomer()->first()->lastName;
        else
            $data['name'] = "";
        $data['total'] = $book->price;
        $data['devise'] = "MAD";
        $data['rulesPrice'] = $book->tlRules()->sum('price');
        $data['type'] = "Hotel";
        $data['fa'] = "fa-building";
        $data['title'] = $book->tlHotel()->first()->name;
        $data['payment'] = $book->tl_payment_id;

        if ($data['rulesPrice'] >= $data['total']) {
            $status = 1;
        } else if ($data['rulesPrice'] == 0) {
            $status = 2;
        } else if ($data['rulesPrice'] > 0 && $data['rulesPrice'] < $data['total']) {
            $status = 3;
        }
        $data["statusPayment"] = $status;

        $data['num'] = "Hotel Contract";
        $pas = "";
        foreach ($book->tlPassengers as $passenger) {
            $passenger = $passenger->pivot;
            $pas .= $passenger->lastName . "-";
        }
        $data['passenger'] = $pas ? substr($pas, 0, -1) : "";
        $data['priceBay'] = $command->priceBuy;
        $data['margin'] = $command->price - $command->priceBuy;
        $data['tva'] = $data['margin'] * 0.2;

        if($command->tlBillLines()->first()){
            if ($command->tlBillLines()->first()->tlBill()->first()) {
                $data['isBills'] = true;
                $data['Bills'] = $command->tlBillLines()->first()->tlBill()->first()->id;
                $data['BillDate'] = $command->tlBillLines()->first()->tlBill()->first()->created_at->format("d-m-Y");
                $data['NumBills'] = "FA" . Carbon::parse($command->tlBillLines()->first()->tlBill()->first()->created_at->format("d-m-Y"))->format('yd') . '-' . sprintf('%04u', $command->tlBillLines()->first()->tlBill()->first()->id);
                $data['BillsUrl'] = ""; //route('admin.hotel.bill', ['id' => $command->id]);
            } else {
                $data['isBills'] = false;
                $data['Bills'] = "";
                $data['BillDate'] = "";
                $data['NumBills'] = "";
                $data['BillsUrl'] = "";
            }
        } else {
            $data['isBills'] = false;
            $data['Bills'] = "";
            $data['BillDate'] = "";
            $data['NumBills'] = "";
            $data['BillsUrl'] = "";
        }

        if ($book->tlAgent()->first()) {
            $data['agent'] = $book->tlAgent()->first()->firstName . ' ' . $book->tlAgent()->first()->lastName;
            $data['agentID'] = $book->tlAgent()->first()->id;
            $data['agency'] = $book->tlAgent()->first()->tlBranch()->first()->name;
            $data['city'] = $book->tlAgent()->first()->tlBranch()->first()->tlCity()->first()->name;
        } elseif (!empty($book->b2b)) {
            $data['agent'] = $book->b2b;
            $data['agentID'] = 'b2b';
            $data['agency'] = $book->tlCustomer()->first() ? $book->tlCustomer()->first()->tlCompanyCustomer()->first()->name : '';
            $data['city'] = $book->tlCustomer()->first() ? $book->tlCustomer()->first()->tlCity()->first()->name : '';
        } else {
            $data['agent'] = "WEB";
            $data['agency'] = "";
            $data['agentID'] = 'web';
            $data['city'] = "";
        }


        $data['command'] = $command->id;
        $data['dateCreated'] = $command->created_at;
        $data['status'] = $command->status;
        $data['urlName'] = "Hotel";
        $data['urlAdmin'] = "";//route("admin.book.$command->bookName", ['id' => $command->id]);
        $data['PaymentUrl'] = route('front.hotel.payment', ['id' => $command->id]);
        $data['frontUrl'] = 'front.hotel.bookDetail';
        $data['cancelBook'] = "";//'';


        return $data;
    }

}
