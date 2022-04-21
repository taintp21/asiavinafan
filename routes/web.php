<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/agents', [HomeController::class, 'agents']);
Route::get('/customer-service', [HomeController::class, 'customer_service']);
Route::get('/warranty-policy', [HomeController::class, 'warranty_policy']);
Route::get('/exchange-policy', [HomeController::class, 'exchange_policy']);
Route::get('usage-tips', [HomeController::class, 'usage_tips']);
Route::get('contact-us', [HomeController::class, 'contact_us']);

Route::get('/product-category/stand-fan', [HomeController::class, 'productCategory']);
