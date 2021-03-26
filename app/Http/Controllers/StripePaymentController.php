<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;
use Illuminate\Support\Facades\Log;
use Stripe;

class StripePaymentController extends Controller
{
    //

     
    public function createCustomer(Request $request)
    {
        try{ 
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $email = 'rshed@gmail.com';//  $_POST['email'] ;
        $fullName = 'rshedul';// $_POST['name'];
        $phone	= '8801731540704' ; //$_POST['phone'];
        
        $key = \Stripe\Customer::create([
          'description' => 'testing','email'=>$email,'phone'=>$phone, 'name'=>$fullName
        ]);
 
  
       // Session::flash('success', 'Payment successful!');
          
        return $key; //back();
        }
        catch (Exception $ex) {
            return $ex;
        }
    }

    public function createCustomerEmpheralKey(Request $request)
    {
        try{ 
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $email = 'rshedul@gmail.com';//  $_POST['email'] ;
        $fullName = 'rshedul';// $_POST['name'];
        $phone	= '850348543' ; //$_POST['phone'];
        
        $customerkey = \Stripe\Customer::create([
          'description' => 'testing','email'=>$email,'phone'=>$phone, 'name'=>$fullName
        ]);

        $empheralKey = \Stripe\EphemeralKey::create(
            ["customer" => $customerkey->id],
            ["stripe_version" =>  '2020-08-27']
          );
 
  
       // Session::flash('success', 'Payment successful!');
          
        return $empheralKey; //back();
        }
        catch (Exception $ex) {
            return $ex;
        }
    }

    public function makeStripePaymentByCustomer(Request $request)
    {
        try{ 


        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $email = 'rshedul@gmail.com';//  $_POST['email'] ;
        $fullName = 'rshedul';// $_POST['name'];
        $phone	= '850348543' ; //$_POST['phone'];
        
        $customerkey = \Stripe\Customer::create([
          'description' => 'testing','email'=>$email,'phone'=>$phone, 'name'=>$fullName
        ]);

        $empheralKey = \Stripe\EphemeralKey::create(
            ["customer" => $customerkey->id],
            ["stripe_version" =>  '2020-08-27']
          );

       // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" =>   $empheralKey->id,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);

  
       // Session::flash('success', 'Payment successful!');
          
        return "ok"; //back();
        }
        catch (Exception $ex) {
            return $ex;
        }
    }
}
