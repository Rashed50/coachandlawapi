<?php

namespace App\Http\Controllers\University;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;
use Illuminate\Support\Facades\Log;

use App\Models\University\University;

class UniversityController extends Controller
{
      function getUnivesities(){
            try{
    
              //  return "rashed";
                $universityList = University::get()->all();
               
                if($universityList != null){
                    return response()->json(['success' => 'true','data' => $universityList,'status_code' => '200']);
                }else {
                    return response()->json(['success' => 'false','message' => 'Service Name not found','status_code' => '404']);
                }
                    
               } catch (ModelNotFoundException $ex) {
                       return  response()->json(['success' => 'false', 'status_code' => '404', 'message' => 'Invalid:Model Not Found', 'error' => 'error']);
               } catch (Exception $ex) {
                       return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage()]);
               }
        }
        function getAUnivesity($id = null){
                try{
        
                  //  return "rashed";
                    $universityList = University::where('universityId',$id)->get();
                   
                    if($universityList != null){
                        return response()->json(['success' => 'true','data' => $universityList,'status_code' => '200']);
                    }else {
                        return response()->json(['success' => 'false','message' => 'Service Name not found','status_code' => '404']);
                    }
                        
                   } catch (ModelNotFoundException $ex) {
                           return  response()->json(['success' => 'false', 'status_code' => '404', 'message' => 'Invalid:Model Not Found', 'error' => 'error']);
                   } catch (Exception $ex) {
                           return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage()]);
                   }
            }
}
