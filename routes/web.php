<?php

use App\Models\categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\slidersController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\categoriesController;

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
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');

    //Admin categories
    Route::get('/admin/categories', [categoriesController::class, 'index'])->name('categories')->middleware('auth');
        //Store
        Route::get('/admin/categories/create', [categoriesController::class, 'create'])->name('create')->middleware('auth');
        Route::post('/admin/categories/store', [categoriesController::class, 'store'])->name('categories.store')->middleware('auth');
        //Edit
        Route::get('/admin/categories/edit/{id}', [categoriesController::class, 'edit'])->name('edit')->middleware('auth');
        Route::post('/admin/categories/update/{id}', [categoriesController::class, 'update'])->name('categories.update')->middleware('auth');
        //Delete
        Route::get('/admin/categories/delete/{id}', [categoriesController::class, 'destroy'])->name('categories.delete')->middleware('auth');
    //Admin Sliders
    Route::get('/admin/sliders', [slidersController::class, 'index'])->name('sliders')->middleware('auth');
        //Store
        Route::get('/admin/sliders/create', [slidersController::class, 'create'])->name('create')->middleware('auth');
        Route::post('/admin/sliders/store', [slidersController::class, 'store'])->name('sliders.store')->middleware('auth');
        //Edit
        Route::get('/admin/sliders/edit/{id}', [slidersController::class, 'edit'])->name('edit')->middleware('auth');
        Route::post('/admin/sliders/update/{id}', [slidersController::class, 'update'])->name('sliders.update')->middleware('auth');
        //Delete
        Route::get('/admin/sliders/delete/{id}', [slidersController::class, 'destroy'])->name('sliders.delete')->middleware('auth');
    //Admin products
    Route::get('/admin/products', [productsController::class, 'index'])->name('categories')->middleware('auth');
        //Store
        Route::get('/admin/products/create', [productsController::class, 'create'])->name('create')->middleware('auth');
        Route::post('/admin/products/store', [productsController::class, 'store'])->name('products.store')->middleware('auth');
        //Edit
        Route::get('/admin/products/edit/{id}', [productsController::class, 'edit'])->name('edit')->middleware('auth');
        Route::post('/admin/products/update/{id}', [productsController::class, 'update'])->name('products.update')->middleware('auth');
        //Delete
        Route::get('/admin/products/delete/{id}', [productsController::class, 'destroy'])->name('products.delete')->middleware('auth');


Auth::routes();
