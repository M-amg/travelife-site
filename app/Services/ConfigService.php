<?php

namespace App\Services;



use App\models\agency\TlSmtp;

class ConfigService {

    public static function configEmail(){

       $mail=TlSmtp::all()->first();
       if($mail){
           config([
               'mail.driver' => $mail->MAIL_DRIVER,

               'mail.host' => $mail->MAIL_HOST,

               'mail.port' => $mail->MAIL_PORT,

               'mail.encryption' => $mail->MAIL_ENCRYPTION,

               'mail.username' => $mail->MAIL_USERNAME,

               'mail.password' => $mail->MAIL_PASSWORD,

           ]);
       }

    }

}
