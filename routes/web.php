<?php

use App\Http\Controllers\Gateways\InstamojoController;
use App\Http\Controllers\Gateways\MollieController;
use App\Http\Controllers\Gateways\RazorpayController;
use App\Http\Controllers\Gateways\PaypalController;
use App\Http\Controllers\Gateways\PaystackController;
use App\Http\Controllers\Gateways\StripeController;
use App\Http\Controllers\Gateways\TwoCheckoutController;
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//SSLCOMMERZ END
