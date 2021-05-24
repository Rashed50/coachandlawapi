<?php
namespace App\Http\Controllers\Helper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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


    public function sendWebNotification(Request $request)
    {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $FcmToken = 'fu-Xk1C-80eDpBzmMRmxN0:APA91bEspAxQfUIiJVYwMjoYJ5mcTqwqk2tDe1T5xYgzACdNdH6OzNiaCoqsyAgzv8E9Y1ZGKgttcJ0C2WbwCg_m5HzbYk0wY7PRzaGk3C2x6s0NK0Wi4ElPhlU766V84XOcEuo2vzAW';// User::whereNotNull('device_key')->pluck('device_key')->all();
          
        $serverKey = 'AAAAdq_1w9g:APA91bEHPXRlDD9I-jLS7TU4zEYWIsk7MQG887UJvRSdrcQsxy00oDEvkIGJ39E0s01y5ySdDpZZa4t3Cq3grBbVIuc8T_t_LyY3rLzKs5rTHeOtP9GXLByht6riPzb-_LAX6J5Q75pq';
  
        $data = [
            "to" => $FcmToken,
            "notification" => [
                "title" => $request->title,
                "body" => $request->body,  
            ]
        ];
        $encodedData = json_encode($data);
    
        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);

        // Execute post
        $result = curl_exec($ch);

        if ($result === FALSE) {
            return 'failed '.curl_error($ch);
           // die('Curl failed: ' . curl_error($ch));
        }        

        // Close connection
        curl_close($ch);

        // FCM response
          //  dd($result);   
          return $result;     
    }
  

   public function send_notification_FCM() {
 
//$notification_id, $title, $message, $id,$type

        $notification_id = 122;// $user->notification_id;
        $title = "Greeting Notification";
        $message = "Have good day!";
        $id = 11;// $user->id;
        $type = "basic";    

        $accesstoken = env('FCM_KEY');
     
        $URL = 'https://fcm.googleapis.com/fcm/send';
     
     
            $post_data = '{
                "to" : "' . $notification_id . '",
                "data" : {
                  "body" : "",
                  "title" : "' . $title . '",
                  "type" : "' . $type . '",
                  "id" : "' . $id . '",
                  "message" : "' . $message . '",
                },
                "notification" : {
                     "body" : "' . $message . '",
                     "title" : "' . $title . '",
                      "type" : "' . $type . '",
                     "id" : "' . $id . '",
                     "message" : "' . $message . '",
                    "icon" : "new",
                    "sound" : "default"
                    },
              }';
            // print_r($post_data);die;
     
        $crl = curl_init();
     
        $headr = array();
        $headr[] = 'Content-type: application/json';
        $headr[] = 'Authorization:key=' . $accesstoken;
        curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, false);
      
        curl_setopt($crl, CURLOPT_URL, $URL);
        curl_setopt($crl, CURLOPT_HTTPHEADER, $headr);
     
        curl_setopt($crl, CURLOPT_POST, true);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
     
        $rest = curl_exec($crl);
     
        if ($rest === false) {
            $result_noti = 0;
        } else {
            $result_noti = 1;
        }
     
        //curl_close($crl);
        //print_r($result_noti);die;
        return $result_noti;
    }
    
     
    public function notifyUser(Request $request){
 
      //  $user = User::where('id', $request->id)->first();
      
        $notification_id = 122;// $user->notification_id;
        $title = "Greeting Notification";
        $message = "Have good day!";
        $id = 11;// $user->id;
        $type = "basic";
      
        $res =1;//= send_notification_FCM($notification_id, $title, $message, $id,$type);
      
        if($res == 1){
      
            return 'ok';
           // success code
      
        }else{
      return 'error';
          // fail code
        }
         
      
     }

     
}

  