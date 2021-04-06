<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;
use Illuminate\Support\Facades\Log;
use Stripe;
use Illuminate\Support\Facades\DB;
 
 

class StripePaymentController extends Controller
{
    //

     
    public function createCustomer(Request $request)
    {
        try{ 

          
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

         $email =  $request->get('email'); //'rshedul@gmail.com'; 
         $fullName = $request->get('firstName') ;//'rshedul'; //  $request->input('name'); 
         $phone	=   $request->get('mobileNo'); //'850348543' ;  
        
        $key = \Stripe\Customer::create([
          'description' => 'testing','email'=>$email,'phone'=>$phone, 'name'=>$fullName
        ]);
         
         if($key){ 
           $key['success'] = 'true';
           return $key ;// response()->json(['success' => 'true','data' => $empheralKey,'status_code' => '200']);
         }
          else {
              return null;// response()->json(['success' => 'false','message' => 'Error occured','status_code' => '404']);
           }
        
      }
      catch (Exception $ex) {
          
          return null; // response()->json(['success' => 'false','message' => $ex,'status_code' => '500']);
            
      }
     
    }

    public function createCustomerEmpheralKey(Request $request)
    {
      // return 'ok';
        try{ 
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        // $email =  $request->get('email'); //'rshedul@gmail.com'; 
        // $fullName = $request->get('name') ;//'rshedul'; //  $request->input('name'); 
        // $phone	=   $request->get('phone'); //'850348543' ;  
        
      
        // $customerkey = \Stripe\Customer::create([
        //   'description' => 'testing','email'=>$email,'phone'=>$phone, 'name'=>$fullName
        // ]);
        // return $customerkey;


        $empheralKey = \Stripe\EphemeralKey::create(
            ["customer" => $request->get('customer')],
            ["stripe_version" => $request->get('api_version')]
          );
             
           if($empheralKey){ 
              $empheralKey['success'] = true;
              return $empheralKey ;
           }
            else {
                return response()->json(['success' => 'false','message' => 'Error occured','status_code' => '404']);
             }
          
        
        }
        catch (Exception $ex) {
            
            return response()->json(['success' => 'false','message' => $ex,'status_code' => '500']);
              
        }
    }

    public function makeStripePaymentByCustomer(Request $request)
    {
        try{ 


        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        // $email = 'rshedul@gmail.com';//  $_POST['email'] ;
        // $fullName = 'rshedul';// $_POST['name'];
        // $phone	= '850348543' ; //$_POST['phone'];
        
        // $customerkey = \Stripe\Customer::create([
        //   'description' => 'testing','email'=>$email,'phone'=>$phone, 'name'=>$fullName
        // ]);

        // $empheralKey = \Stripe\EphemeralKey::create(
        //     ["customer" => $customerkey->id],
        //     ["stripe_version" =>  '2020-08-27']
        //   );


        // $email =  $request->get('email'); //'rshedul@gmail.com'; 
        // $fullName = $request->get('name') ;//'rshedul'; //  $request->input('name'); 
        // $phone	=   $request->get('phone'); //'850348543' ;  
        
        // $customerkey = \Stripe\Customer::create([
        //   'description' => 'testing','email'=>$email,'phone'=>$phone, 'name'=>$fullName
        // ]);

        // $empheralKey = \Stripe\EphemeralKey::create(
        //     ["customer" => $customerkey->id],
        //     ["stripe_version" => $request->get('api_version')]
        //   );



        $intent = \Stripe\PaymentIntent::create([
          'amount' => $request->get('amount'), // $_POST['amount'],
          'currency' => $request->get('currency'), // $_POST['currency'],
          'customer' => $request->get('customer')
         ]);
         
         if($intent){
          return $intent;
         }else {
          return response()->json(['success' => 'false','message' => 'Error occured','status_code' => '404']);
              
         } 
        }
        catch (Exception $ex) {
          return response()->json(['success' => 'false','message' => $intent,'status_code' => '500']);
              
        }
    }
}
