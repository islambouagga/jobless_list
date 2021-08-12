<?php

use App\Http\Controllers\API\CandidateController;
use App\Http\Controllers\API\DistrictController;
use App\Http\Controllers\API\FeildController;
use App\Http\Controllers\API\VolunteerController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResources([
    'candidate' => CandidateController::class,
    'field' => FeildController::class,
    'district' => DistrictController::class,
    'volunteer' => VolunteerController::class,
]);
