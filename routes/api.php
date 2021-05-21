<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\University\UniversityController;
use  App\Http\Controllers\Service\ServiceNameController;
use App\Http\Controllers\Mentor\MentorController;
use App\Http\Controllers\Mentee\MenteeController;
use App\Http\Controllers\Booking\BookingInfoController;
//use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\Payments\StripePaymentController;
use App\Http\Controllers\Pusher\PushNotificationController;

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
Route::get('university/get-university/{id?}',[UniversityController::class,'getAUnivesity']);

 

// mentor
Route::post('registration/mentor-signup',[MentorController::class,'newMentorRegistration']);
Route::get('mentorinformation/get-mentors',[MentorController::class,'getAllMentorDetails']);
Route::get('mentorinformation/get-mentor/{id?}',[MentorController::class,'getMentorDetailsByEmail']);
Route::post('update-mentor-information',[MentorController::class,'updateMentorInformation']);
Route::get('checksignupemail/{id?}',[MentorController::class,'checkEmailIsAlreadyUsedInWholeSystem']);



// mentee
Route::post('registration/mentee-signup',[MenteeController::class,'newMenteeRegistration']);
Route::post('update-mentee-information',[MenteeController::class,'updateMenteeInformation']);


// booking info
Route::post('booking/mentor-booking',[BookingInfoController::class,'bookingAMentor']);
Route::get('booking/booking-list/{id?}',[BookingInfoController::class,'getMentorBookingList']);
Route::get('booking/mentee-list/{id?}',[BookingInfoController::class,'getMyBookingMenteesList']);



//

Route::post('customer/create', [StripePaymentController::class,'createCustomer']);
Route::post('customer/empheralkey', [StripePaymentController::class,'createCustomerEmpheralKey']);
Route::post('customerpayment', [StripePaymentController::class,'makeStripePaymentByCustomer']);
//Route::get('stripe', [StripePaymentController::class,'makeStripePaymentByCustomer']);

Route::post('stripe-create-payment-refund', [StripePaymentController::class,'refundPayment']);


//
//Route::post('push-send', [PusherNotificationController::class,'sendPusherPushNotification']);
Route::post('push-notification-send', [PusherNotificationController::class,'notifyUser']);
