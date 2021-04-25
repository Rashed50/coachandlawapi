<?php

namespace App\Http\Controllers\Pusher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

 class PusherNotificationController extends Controller
{
     public function sendPusherPushNotification(){


       // require __DIR__ . './vendor/autoload.php';

        $beamsClient = new \Pusher\PushNotifications\PushNotifications(array(
            "instanceId" => "c32fe76e-2d37-4e71-9077-bddc9363a82d",
            "secretKey" => "DC3561BEB9E2A65CE352F7538A7229B8D6FB2D96A7D101DAD29E48A94E2D3D95
            ",
          ));
          
          $publishResponse = $beamsClient->publishToInterests(
            array("hello"),
            array("apns" => array("aps" => array(
              "alert" => array(
                "title" => "Hello",
                "body" => "Hell",
              ),
            )),
          ));

     }
}
