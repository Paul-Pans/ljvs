<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/checkprotectapi', [App\Http\Controllers\CheckApi\CheckApiController::class, 'testApi']);

//  /api/t/checkprotectapi
Route::group(['prefix' => 't', 'middleware' => ['auth:sanctum']], function () {
    
    Route::get('/checkprotectapi', [App\Http\Controllers\CheckApi\CheckApiController::class, 'testApi']);

    //Route::post('/getscoreuser', [App\Http\Controllers\СlientСardController::class, 'GetScoreUser']);  
     
    
 });

 Route::get('/testjob/{sms}', [App\Http\Controllers\SmsController\SmsController::class, 'getSimpleJobSms']); 
