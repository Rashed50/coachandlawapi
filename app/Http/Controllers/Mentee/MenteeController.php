<?php

namespace App\Http\Controllers\Mentee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Helper\UploadController;
use App\Http\Controllers\Payments\StripePaymentController;
use App\Models\Mentee\Mentee;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;
use Illuminate\Support\Facades\Log;

class MenteeController extends Controller
{
    
    
   
    public function newMenteeRegistration(Request $request) {

        try{
     
      

            $uploadObj = new UploadController();
            $proImgPath =  $uploadObj->uploadMenteeProfileImage($request);
            $cvPath = $uploadObj->uploadMenteeCV($request);
       
            $amentee = new Mentee;
            $amentee->firstName = $request->input('firstName');
            $amentee->middleName = $request->input('middleName');
            $amentee->lastName =  $request->input('lastName');
            $amentee->email = $request->input('email');
            $amentee->profileDescription = $request->input('profileDescription');
            $amentee->mobileNo = $request->input('mobileNo');
            $amentee->profilePhoto = $proImgPath;
            $amentee->cvPath =  $cvPath; 
            $amentee->password = $request->input('password');
            $amentee->countryCode = $request->input('countryCode');
            $amentee->devicePushRegToken = $request->input('devicePushRegToken');
            
            $amentee->address = $request->input('address');
            $amentee->universityId = $request->input('universityId');
            $amentee->serviceId = $request->input('serviceId');

            $stripeAccountObj = new StripePaymentController();
            $stripeCustInfo = $stripeAccountObj->createCustomer($request);

            if($stripeCustInfo){
                 $amentee->paymentUserAccountId = $stripeCustInfo->id;
             } 
 

             $result = $amentee->save();
             $newMentee = new Mentee;
             $newMentee = Mentee::latest()->first();
            if($result != null){
          
                return response()->json(['success' => 'true','data' => $newMentee,'status_code' => '200']);
            }else {
                return response()->json(['success' => 'false','message' => 'data not saved','status_code' => '404']);
             }
    
        } catch (ModelNotFoundException $ex) {
            return  response()->json(['success' => 'false', 'status_code' => '404', 'message' => 'Invalid:Model Not Found', 'error' => 'error']);
        } catch (Exception $ex) {
             return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage()]);
        } 
    
    }


    function getMenteeDetailsByEmail($id = null){
        try{
            
                 //  $amentee = Mentee::where('email',$id)->first();
		 
	              $amentee = DB::table('mentees')
                 ->join('universities',  'mentees.universityId', '=', 'universities.universityId' )
                 ->join('service_names',  'mentees.serviceId', '=', 'service_names.serviceNameId' )
	             ->where('mentees.email',$id)
                 ->first();

              if($amentee != null){
                  return response()->json(['success' => 'true','data' => $amentee,'status_code' => '200']);
              }else {
                  return response()->json(['success' => 'false','message' => 'Mentee Information not found','status_code' => '404']);
              }
                  
             } catch (ModelNotFoundException $ex) {
                     return  response()->json(['success' => 'false', 'status_code' => '404', 'message' => 'Invalid:Model Not Found', 'error' => 'error']);
             } catch (Exception $ex) {
                     return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage()]);
             }
        }


    function updateMenteeInformation(Request $request){
        try
          {
              $amentee = new Mentee;
              $amentee = Mentee::where('email',$request->input('email'))->first();
              if ($amentee) {
  
                Mentee::where('email', $request->input('email'))
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
}
    

 
 
