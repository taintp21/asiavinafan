<?php

use App\Models\categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\agentsController;
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

    //Categories
    Route::name('categories.')->group(function(){
        Route::get('/admin/categories', [categoriesController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/admin/categories/create', [categoriesController::class, 'create'])->name('create')->middleware('auth');
        Route::post('/admin/categories/store', [categoriesController::class, 'store'])->name('store')->middleware('auth');
        Route::get('/admin/categories/edit/{id}', [categoriesController::class, 'edit'])->name('edit')->middleware('auth');
        Route::post('/admin/categories/update/{id}', [categoriesController::class, 'update'])->name('update')->middleware('auth');
        Route::get('/admin/categories/delete/{id}', [categoriesController::class, 'destroy'])->name('categories.delete')->middleware('auth');
    });

    //Sliders
    Route::name('sliders.')->group(function(){
        Route::get('/admin/sliders', [slidersController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/admin/sliders/create', [slidersController::class, 'create'])->name('create')->middleware('auth');
        Route::post('/admin/sliders/store', [slidersController::class, 'store'])->name('store')->middleware('auth');
        Route::get('/admin/sliders/edit/{id}', [slidersController::class, 'edit'])->name('edit')->middleware('auth');
        Route::post('/admin/sliders/update/{id}', [slidersController::class, 'update'])->name('update')->middleware('auth');
        Route::get('/admin/sliders/delete/{id}', [slidersController::class, 'destroy'])->name('delete')->middleware('auth');
    });

    //Products
    Route::name('products.')->group(function(){
        Route::get('/admin/products', [productsController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/admin/products/create', [productsController::class, 'create'])->name('create')->middleware('auth');
        Route::post('/admin/products/store', [productsController::class, 'store'])->name('store')->middleware('auth');
        Route::get('/admin/products/edit/{id}', [productsController::class, 'edit'])->name('edit')->middleware('auth');
        Route::post('/admin/products/update/{id}', [productsController::class, 'update'])->name('update')->middleware('auth');
        Route::get('/admin/products/delete/{id}', [productsController::class, 'destroy'])->name('delete')->middleware('auth');
    });

    //Agents
    Route::name('agents.')->group(function(){
        Route::get('/admin/agents', [agentsController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/admin/agents/create', [agentsController::class, 'create'])->name('create')->middleware('auth');
        Route::post('/admin/agents/store', [agentsController::class, 'store'])->name('store')->middleware('auth');
        Route::get('/admin/agents/edit/{id}', [agentsController::class, 'edit'])->name('edit')->middleware('auth');
        Route::post('/admin/agents/update/{id}', [agentsController::class, 'update'])->name('update')->middleware('auth');
        Route::get('/admin/agents/delete/{id}', [agentsController::class, 'destroy'])->name('delete')->middleware('auth');
    });
Auth::routes();
