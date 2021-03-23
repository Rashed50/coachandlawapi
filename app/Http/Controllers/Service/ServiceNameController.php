<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service\ServiceName;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;
use Illuminate\Support\Facades\Log;
 


class ServiceNameController extends Controller
{
    function getServiceNames(){

        try{

          //  return "rashed";
            $productNameList = ServiceName::get()->all();
           
            if($productNameList != null){
                return response()->json(['success' => 'true','data' => $productNameList,'status_code' => '200']);
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
