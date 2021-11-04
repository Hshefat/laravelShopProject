<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */




Route::get('/', [WelcomeController::class, 'index']);
Route::get('/category-View{id}', [WelcomeController::class, 'category']);
Route::get('/product-details', [WelcomeController::class, 'productDetails']);


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');






Route::group(['middleware' => 'AuthenticateMiddleware'], function () {


    /* Catagory Info */
    Route::get('/category/add', [App\Http\Controllers\CategoryController::class, 'CreateCategory']);
    Route::post('/category/save', [App\Http\Controllers\CategoryController::class, 'storeCategory']);
    Route::post('/category/update', [App\Http\Controllers\CategoryController::class, 'updateCategory']);
    Route::get('/category/manage', [App\Http\Controllers\CategoryController::class, 'manageCategory']);
    Route::get('/category/edit{id}', [App\Http\Controllers\CategoryController::class, 'editCategory']);
    Route::get('/category/delete{id}', [App\Http\Controllers\CategoryController::class, 'deleteCategory']);



    /* Manufacturer Info */
    Route::get('/manufacturer/add', [App\Http\Controllers\ManufacturerController::class, 'CreateManufacturer'])->name('/manufacturer/add');
    Route::post('/manufacturer/save', [App\Http\Controllers\ManufacturerController::class, 'storeManufacturer']);
    Route::post('/manufacturer/update', [App\Http\Controllers\ManufacturerController::class, 'updateManufacturer']);
    Route::get('/manufacturer/manage', [App\Http\Controllers\ManufacturerController::class, 'manageManufacturer']);
    Route::get('/manufacturer/edit{id}', [App\Http\Controllers\ManufacturerController::class, 'editManufacturer']);
    Route::get('/manufacturer/delete{id}', [App\Http\Controllers\ManufacturerController::class, 'deleteManufacturer']);



    /* Product Info */
    Route::get('/product/add', [App\Http\Controllers\ProductController::class, 'createProduct'])->name('/product/add');
    Route::post('/product/save', [App\Http\Controllers\ProductController::class, 'storeProduct']);
    Route::post('/product/update', [App\Http\Controllers\ProductController::class, 'updateProduct']);
    Route::get('/product/manage', [App\Http\Controllers\ProductController::class, 'manageProduct']);
    Route::get('/product/view{id}', [App\Http\Controllers\ProductController::class, 'viewProduct']);
    Route::get('/product/edit{id}', [App\Http\Controllers\ProductController::class, 'editProduct']);
    Route::get('/product/delete{id}', [App\Http\Controllers\ProductController::class, 'deleteProduct']);
});