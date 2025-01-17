<?php

namespace App\Http\Controllers\Helper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;

class UploadController extends Controller
{


 /*
    ==========================================================================================
    ====================================MENTORS FILE UPLOAD ==================================
    ==========================================================================================
 */

    public function uploadMentorProfileImage(Request $request) {
         
      try { 
            if($request->hasFile('profilePhoto')) {
                $file = $request->file('profilePhoto');
	             $destinationPath = "uploads/profile_photo/mentors";
                 $fileName = rand(100000,999999).'.jpg';
                $file->move($destinationPath,$fileName);
                 return $destinationPath.'/'.$fileName;
            }
         }
         catch(Exception $ex){
            return "12333.jpg";
         }
		
     }

     public function updateMentorProfileImage($request,$updateProductName) {
         if($request->hasFile('profilePhoto')) {
            if(file_exists($updateProductName->imagePath))
            {
                unlink($updateProductName->imagePath);
            }
             $file = $request->file('profilePhoto');
             $destinationPath = "uploads/profile_photo/mentors";
             $fileName = rand(100000,999999).'.jpg';
             $file->move($destinationPath,$fileName);
             return $destinationPath.'/'.$fileName;
        }
     }






     public function uploadMentorCV(Request $request) {
        if($request->hasFile('cvPath')) {
        $file = $request->file('cvPath');
        $destinationPath = "uploads/cv/mentor";
        $fileName = rand(100000,999999).'.pdf';
        $file->move($destinationPath,$fileName);
        return $destinationPath.'/'.$fileName;
      }
    }

    public function uploadMentorTrainingContactForm(Request $request) {
        if($request->hasFile('trainingForm')) {
        $file = $request->file('trainingForm');
        $destinationPath = "uploads/training_form/mentor";
        $fileName = rand(100000,999999).'.pdf';
        $file->move($destinationPath,$fileName);
        return $destinationPath.'/'.$fileName;
     }

    }





 /*
    ==========================================================================================
    ====================================MENTEES FILE UPLOAD ==================================
    ==========================================================================================
 */


public function uploadMenteeProfileImage(Request $request) {
   try { 
    if($request->hasFile('profilePhoto')) {
    $file = $request->file('profilePhoto');
    $destinationPath = "uploads/profile_photo/mentees";
    $fileName = rand(100000,999999).'.jpg';
    $file->move($destinationPath,$fileName);
    return $destinationPath.'/'.$fileName;
      }
   }
   catch(Exception $ex){
      return "12333.jpg";
   }
}

public function updateMenteeProfileImage($request,$updateProductName) {
 if($request->hasFile('profilePhoto')) {
    if(file_exists($updateProductName->imagePath))
    {
        unlink($updateProductName->imagePath);
    }
     $file = $request->file('profilePhoto');
     $destinationPath = "uploads/profile_photo/mentees";
     $fileName = rand(100000,999999).'.jpg';
     $file->move($destinationPath,$fileName);
     return $destinationPath.'/'.$fileName;
}
}






public function uploadMenteeCV(Request $request) {
if($request->hasFile('cvPath')) {
$file = $request->file('cvPath');
$destinationPath = "uploads/cv/mentee";
$fileName = rand(100000,999999).'.pdf';
$file->move($destinationPath,$fileName);
return $destinationPath.'/'.$fileName;
}
}





     

}
