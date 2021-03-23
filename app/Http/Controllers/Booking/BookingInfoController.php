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
    
                
          
                $abooking = new BookingInfo;
              
                $abooking->bookingId =  $request->input('bookingId');
                $abooking->mentorId = $request->input('mentorId');
                
                $abooking->menteeId =  $request->input('menteeId');
                
                $abooking->payAmount = $request->input('payAmount');
                $abooking->agreementForm = "";// $request->input('agreementForm');
                $abooking->transactionId = $request->input('transactionId');
                
                
                $abooking->bookingCode =  $this->createBookingCode();
            
                //$request->input('bookingCode');
               //$code = UtilityHelper()->createBookingCode();
               $result = $abooking->save();
               $mentor = new MentorController();
               if($result){ 
                    $mentor->updateMentorBookingInformation($request);
                    $newBookingInfo = new BookingInfo;
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
