<?php

namespace App\Http\Controllers\Mentor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\UploadController;
use App\Http\Controllers\Payments\StripePaymentController;
use App\Models\Mentor\Mentor;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;
use Illuminate\Support\Facades\Log;


class MentorController extends Controller
{

      
    public function newMentorRegistration(Request $request) {
         try{
 
  
        $uploadObj = new UploadController();
        $proImgPath = $uploadObj->uploadMentorProfileImage($request);
        $cvPath =  $uploadObj->uploadMentorCV($request);
        $trainctFormPath =  $uploadObj->uploadMentorTrainingContactForm($request);
 
        $amentor = new Mentor;
        $amentor->firstName =  $request->input('firstName');
        $amentor->middleName = $request->input('middleName');
        $amentor->lastName =  $request->input('lastName');
        $amentor->email = $request->input('email');
        $amentor->profileDescription = $request->input('profileDescription');
        $amentor->mobileNo = $request->input('mobileNo');
        $amentor->profilePhoto = $proImgPath;
        $amentor->cvPath =  $cvPath;// $request->input('cvPath');
        $amentor->trainingForm = $trainctFormPath; // $request->input('trainingForm');
        $amentor->rating = 0;
        $amentor->password = $request->input('password');
        $amentor->countryCode = $request->input('countryCode');
        $amentor->devicePushRegToken = $request->input('devicePushRegToken');
        $amentor->address = $request->input('address');
        $amentor->hiringPrice = $request->input('hiringPrice');
        $amentor->isAvailableToHire = true; // $request->input('isAvailableToHire');
        $amentor->noOfHourFoMentee = $request->input('noOfHourFoMentee');
        $amentor->totalMentees = 0;
        $amentor->totalEarn = 0;// $request->input('totalEarn');
        $amentor->totalWithdraw = 0;// $request->input('totalWithdraw');
        $amentor->universityId = $request->input('universityId');
        $amentor->serviceId = $request->input('serviceId');

        $stripeAccountObj = new StripePaymentController();
        $stripeCustInfo = $stripeAccountObj->createCustomer($request);

        if($stripeCustInfo){
             $amentor->paymentUserAccountId = $stripeCustInfo->id;
         } 


        $result = $amentor->save();
        $newMentor = new Mentor;
        $newMentor = Mentor::latest()->first();
            if($result != null){
                return response()->json(['success' => 'true','message' => $newMentor,'status_code' => '200']);
            }else {
                return response()->json(['success' => 'false','message' => 'data not saved','status_code' => '404']);
             }
        } catch (ModelNotFoundException $ex) {
                 return  response()->json(['success' => 'false', 'status_code' => '404', 'message' => 'Invalid:Model Not Found', 'error' => 'error']);
            } 
         catch (Exception $ex) {
                return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage()]);
            } 

}

    function getAllMentorDetails(){
   
        try{
    
   
      $mentorList = Mentor::get()->all();

      $mentorList = DB::table('mentors')
      ->join('universities',  'mentors.universityId', '=', 'universities.universityId' )
      ->join('service_names',  'mentors.serviceId', '=', 'service_names.serviceNameId' )
      ->get();

     
      if($mentorList != null){
          return response()->json(['success' => 'true','data' => $mentorList,'status_code' => '200']);
      }else {
          return response()->json(['success' => 'false','message' => 'Mentor Information not found','status_code' => '404']);
      }
          
     } 
     catch (ModelNotFoundException $ex) {
             return  response()->json(['success' => 'false', 'status_code' => '404', 'message' => 'Invalid:Model Not Found', 'error' => 'error']);
     } catch (Exception $ex) {
             return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage()]);
     }

    }


 function getMentorDetailsByEmail($id = null){
    try{
    
          $mentorList = Mentor::where('email',$id)->first();
         
          if($mentorList != null){
              return response()->json(['success' => 'true','data' => $mentorList,'status_code' => '200']);
          }else {
              return response()->json(['success' => 'false','message' => 'Mentor Information not found','status_code' => '404']);
          }
              
    } 
         catch (ModelNotFoundException $ex) {
                 return  response()->json(['success' => 'false', 'status_code' => '404', 'message' => 'Invalid:Model Not Found', 'error' => 'error']);
         } 
         catch (Exception $ex) {
                 return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage()]);
         }
    }



    function updateMentorInformation(Request $request){
      try
        {
            $amentor = new Mentor;
            $amentor = Mentor::where('email',$request->input('email'))->first();
            if ($amentor) {

                Mentor::where('email', $request->input('email'))
                ->update(['profileDescription' => $request->input('profileDescription'),
                          'address'=>$request->input('address'),
                           ]);
                return response()->json(['success' => 'true','message' => 'Mentor Information updated','status_code' => '200']);
            }else {
                    return response()->json(['success' => 'false','message' => 'Mentor Information not found','status_code' => '404']);
                }
        } catch (ModelNotFoundException $ex) {
                return  response()->json(['success' => 'false', 'status_code' => '404', 'message' => 'Invalid:Model Not Found', 'error' => 'error']);
        } catch (Exception $ex) {
                return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage()]);
        }

        
    }

    function updateMentorBookingInformation(Request $request){
        try
        {
            $amount = $request->input('payAmount');
            $mentorId = $request->input('mentorId');
            $amentor = Mentor::where('mentorId',$request->input('mentorId'))->first();
            //return $amentor;
            if ($amentor) {
                $total =  $amentor['totalEarn'] + $amount;
                $totalMentees =  $amentor['totalMentees'] + 1;
                 Mentor::where('mentorId', $mentorId)
                ->update(['totalEarn' => $total,'totalMentees'=>$totalMentees]);
                return $total;
            }

            return 'false';
        } catch (ModelNotFoundException $ex) {
            return false;
        } catch (Exception $ex) {
            return false;
            }
        
    }


    function checkEmailIsAlreadyUsedInWholeSystem($id = null){
        try{
            if($id == null){
                return response()->json(['success' => 'false','message' => 'Email is not valid','status_code' => '200']);
            }

			   if (DB::table('mentees')->where('email', $id)->exists()) {
                     return response()->json(['success' => 'false','message' => 'Email is already used','status_code' => '200']);
				}
			
			    if (DB::table('mentors')->where('email', $id)->exists()) {
                     return response()->json(['success' => 'false','message' => 'Email is already used','status_code' => '200']);
				}
                return response()->json(['success' => 'true','data' => 'Email is not used','status_code' => '200']);

                  
        } 
        catch (Exception $ex) {
                     return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage()]);
             }
    }




}



