<?php

use App\Http\Controllers\HomePage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaybillController;
use App\Http\Controllers\SslCommerzPaymentController;



Route::get('/',[HomePage::class, "HomePageAction"]);
Route::get('/package', [PackageController::class,"packageAction"]);
Route::get('/career', [CareerController::class,"CareerAction"]);
Route::get('/paybill', [PaybillController::class,"PaybillAction"]);




// SSLCOMMERZ Start
Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/payment', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
