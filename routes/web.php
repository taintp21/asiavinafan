<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\categoriesController;
use App\Models\categories;

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
//Frontend
Route::get('/', [HomeController::class, 'index']);

Route::get('/shop', [HomeController::class, 'shop']);

Route::get('/agents', [HomeController::class, 'agents']);

Route::get('/customer-service', [HomeController::class, 'customer_service']);
Route::get('/warranty-policy', [HomeController::class, 'warranty_policy']);
Route::get('/exchange-policy', [HomeController::class, 'exchange_policy']);
Route::get('usage-tips', [HomeController::class, 'usage_tips']);
Route::get('/promotion', [HomeController::class, 'promotion']);
Route::get('/about-us', [HomeController::class, 'about_us']);
Route::get('contact-us', [HomeController::class, 'contact_us']);
Route::get('/product-category/{slug}', [HomeController::class, 'product_category']);
Route::get('/product/{slug}', [HomeController::class, 'product']);
//Search
Route::get('/search/', [HomeController::class, 'search'])->name('search');

//Back end
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/categories', [categoriesController::class, 'index']);
Route::get('/admin/categories/create', [categoriesController::class, 'create']);
Route::post('/admin/categories/store', [categoriesController::class, 'store'])->name('categories.store');
