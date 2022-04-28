<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\UserController;

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

Route::get('/user/list',[UserController::class,'API_User_List']);
Route::post('/user/post',[UserController::class,'API_User_Post']);
