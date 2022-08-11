<?php

namespace App\Services;


use App\models\book\TlBill;
use App\models\book\TlCommandLine;

class BillService
{

    public static function generateWebBill($id)
    {

        $bill = TlBill::all()->where('tl_command_line_id', $id)->first();
        $cmd = TlCommandLine::find($id);
        if (!$bill){
            $bill = new TlBill();
            //$bill->tl_command_line_id = $id;
            $bill->tl_customer_id =$cmd->tl_customer_id;
            $bill->save();
        }

        return $bill;
    }
}
