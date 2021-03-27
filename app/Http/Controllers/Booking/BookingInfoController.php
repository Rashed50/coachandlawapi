<?php

namespace App\Http\Controllers\Booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Mentor\MentorController;
use App\Http\Controllers\Helper\UtilityHelper;
use App\Models\Booking\BookingInfo;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;
use Illuminate\Support\Facades\Log;

class BookingInfoController extends Controller
{

    public  function createBookingCode(){  
        return 'B-10000';
     }
    function bookingAMentor(Request $request){
            try{
    
                
          
                $bbooking = new BookingInfo();
              
               // $abooking->bookingId =  $request->input('bookingId');
                $bbooking->mentorId = $request->input('mentorId');
                
                $bbooking->menteeId =  $request->input('menteeId');
                
                $bbooking->payAmount = $request->input('payAmount');
                $bbooking->agreementForm = "";// $request->input('agreementForm');
                $bbooking->transactionId = $request->input('transactionId');
                
                
                $bbooking->bookingCode =  $this->createBookingCode();
            
                //$request->input('bookingCode');
               //$code = UtilityHelper()->createBookingCode();
               $result = $bbooking->save();
               $mentor = new MentorController();
               if($result){ 
                    $mentor->updateMentorBookingInformation($request);
                    $newBookingInfo = new BookingInfo();
                    $newBookingInfo->all()->last();
                    return response()->json(['success' => 'true','data' => $newBookingInfo,'status_code' => '200']);
                }else {
                    return response()->json(['success' => 'false','message' => 'data not saved','status_code' => '404']);
                 }
        
            } catch (ModelNotFoundException $ex) {
                return  response()->json(['success' => 'false', 'status_code' => '404', 'message' => 'Invalid:Model Not Found', 'error' => 'error']);
            } catch (Exception $ex) {
                 return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage()]);
            } 
        
    } 
    
    





    
    
}
