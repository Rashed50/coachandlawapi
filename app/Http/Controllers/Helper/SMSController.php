<?php
namespace App\Http\Controllers\Helper;
use App\Http\Controllers\Controller;


class SMSController extends Controller{


    // SMS SEND 
    public static function sendSMSToPhoneNumber($from,$toPhpneNo, $message){

        
       // return 'success';
        
        $API_key = env('Vonage_OTP_API_key','');
        $API_Secret = env('Vonage_OTP_API_Secret','');

        $basic  = new \Nexmo\Client\Credentials\Basic($API_key, $API_Secret);
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' =>  $toPhpneNo,
            'from' => $from,
            'text' =>  $message,
        ]);
        
        return true;
        
    }
     
}

  