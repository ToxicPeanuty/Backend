<?php

use Illuminate\Http\Request;
use App\ViewModels\Money\TransactionViewModel;

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


Route::middleware('auth:api')->get('/money', function(Request $request) {
    $user_id = Auth::user();
    $model = new TransactionViewModel($user_id);
    return $model;
});
