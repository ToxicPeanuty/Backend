<?php

use Illuminate\Http\Request;
use App\Models\Money\Transaction;

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


Route::get('/money', function(Request $request) {
    $model = Transaction::getUserTransactions(0)->get();
    return $model;
});
