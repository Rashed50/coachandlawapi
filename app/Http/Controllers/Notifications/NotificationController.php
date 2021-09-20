<?php

namespace App\Http\Controllers\Notifications;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

 class NotificationController extends Controller
{
  public function sendPushNotification(Request $request)
  {
    $url = 'https://fcm.googleapis.com/fcm/send';
    //  $FcmToken = 'fu-Xk1C-80eDpBzmMRmxN0:APA91bEspAxQfUIiJVYwMjoYJ5mcTqwqk2tDe1T5xYgzACdNdH6OzNiaCoqsyAgzv8E9Y1ZGKgttcJ0C2WbwCg_m5HzbYk0wY7PRzaGk3C2x6s0NK0Wi4ElPhlU766V84XOcEuo2vzAW';

     $FcmToken = $request->fcmToken;
	  $title =  $request->title;
	  $body =   $request->body;
	  $userName =  $request->userName;
	   $notificationType =  $request->notificationType;
	  
	  
     // $serverKey = 'AAAAdq_1w9g:APA91bEHPXRlDD9I-jLS7TU4zEYWIsk7MQG887UJvRSdrcQsxy00oDEvkIGJ39E0s01y5ySdDpZZa4t3Cq3grBbVIuc8T_t_LyY3rLzKs5rTHeOtP9GXLByht6riPzb-_LAX6J5Q75pq';
	 
      $serverKey = env('FCM_SERVER_KEY');
      $data = [
          "to" => $FcmToken,
          "notification" => [
              "title" => $title,
              "body" => $body, 
              "userName" => $userName,
              "type" => $notificationType,
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

}
