<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\University\UniversityController;
use  App\Http\Controllers\Service\ServiceNameController;
use App\Http\Controllers\Mentor\MentorController;
use App\Http\Controllers\Mentee\MenteeController;
use App\Http\Controllers\Booking\BookingInfoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// service name
Route::get('service/get-services',[ServiceNameController::class,'getServiceNames']);



// university
Route::get('university/get-universities',[UniversityController::class,'getUnivesities']);


 

// mentor
Route::post('registration/mentor-signup',[MentorController::class,'newMentorRegistration']);
Route::get('mentorinformation/get-mentors',[MentorController::class,'getAllMentorDetails']);
Route::get('mentorinformation/get-mentor/{id?}',[MentorController::class,'getMentorDetails']);
Route::post('update-mentor-information',[MentorController::class,'updateMentorInformation']);

// mentee
Route::post('registration/mentee-signup',[MenteeController::class,'newMenteeRegistration']);
Route::post('update-mentee-information',[MenteeController::class,'updateMenteeInformation']);


// mentee
Route::post('booking/mentor-booking',[BookingInfoController::class,'bookingAMentor']);
