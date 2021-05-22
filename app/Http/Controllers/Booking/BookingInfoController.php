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
    
                
          
                $booking = new BookingInfo();
              
                $booking->mentorId = $request->input('mentorId');
                
                $booking->menteeId =  $request->input('menteeId');
                
                $booking->payAmount = $request->input('payAmount');
                $booking->agreementForm = "";// $request->input('agreementForm');
                $booking->transactionId = $request->input('transactionId');
              //  return 'oooo';// $booking->mentorId;
                
                $booking->bookingCode = $request->input('bookingCode');// $this->createBookingCode();
            
                //$request->input('bookingCode');
               //$code = UtilityHelper()->createBookingCode();
               $result = $booking->save();
         
               if($result){ 

                    $mentor = new MentorController();
                    $mentor->updateMentorBookingInformation($request);
                    $newBookingInfo = new BookingInfo();
                    $newBookingInfo = BookingInfo::latest()->first();
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



        function getMyBookingMenteesList($id = null){
            try{
               /*
              $menteeList = DB::table('booking_infos')
              ->join('mentees',  'booking_infos.menteeId', '=', 'mentees.menteeId' )
              ->where('booking_infos.mentorId', $id)
			  //->where('booking_infos.mentorId', $id)
              ->get();
				*/
				 $menteeList = DB::table('booking_infos')
                 ->join('mentees',  'booking_infos.menteeId', '=', 'mentees.menteeId' )
                ->join('universities',  'mentees.universityId', '=', 'universities.universityId' )
                ->join('service_names',  'mentees.serviceId', '=', 'service_names.serviceNameId' )
                ->where('booking_infos.mentorId', $id)
                ->get();
       
             
              if($menteeList != null){
                  return response()->json(['success' => 'true','data' => $menteeList,'status_code' => '200']);
              }else {
                  return response()->json(['success' => 'false','message' => 'Mentee Information not found','status_code' => '404']);
              }
                  
             } 
             catch (ModelNotFoundException $ex) {
                     return  response()->json(['success' => 'false', 'status_code' => '404', 'message' => 'Invalid:Model Not Found', 'error' => 'error']);
             } catch (Exception $ex) {
                     return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage()]);
             }
        }


        function getMentorBookingList($id = null){
            try{
            
             
               /*
                $mentorList = DB::table('booking_infos')
              ->join('mentors',  'booking_infos.mentorId', '=', 'mentors.mentorId' )
              ->where('booking_infos.menteeId', $id)
			  //->where('booking_infos.mentorId', $id)
              ->get();
			 */
				
			 
              
				 $mentorList = DB::table('booking_infos')
                 ->join('mentors',  'booking_infos.mentorId', '=', 'mentors.mentorId' )
				 ->join('universities',  'mentors.universityId', '=', 'universities.universityId' )
                 ->join('service_names',  'mentors.serviceId', '=', 'service_names.serviceNameId' )
	              ->where('booking_infos.menteeId', $id)
                 ->get();
       
             
              if($menteeList != null){
                  return response()->json(['success' => 'true','data' => $menteeList,'status_code' => '200']);
              }else {
                  return response()->json(['success' => 'false','message' => 'Mentee Information not found','status_code' => '404']);
              }
                  
             } 
             catch (ModelNotFoundException $ex) {
                     return  response()->json(['success' => 'false', 'status_code' => '404', 'message' => 'Invalid:Model Not Found', 'error' => 'error']);
             } catch (Exception $ex) {
                     return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage()]);
             }
        }
  
    
}

 
 
 
 