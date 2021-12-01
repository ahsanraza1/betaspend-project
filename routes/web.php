<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TemplateController::class, 'index']);

Route::get('/administration', [AdminController::class, 'index']);
    
Route::get('/shop', [ProductsController::class, 'index']);

Route::get('/details', [ProductsController::class, 'product_details']);

Route::get('/contact', [TemplateController::class, 'contact']);

Route::get('/become-a-vendor', [TemplateController::class, 'become_a_vendor']);

Route::get('/my-account', [TemplateController::class, 'my_account']);

Route::get('/login', [TemplateController::class, 'login']);

Route::get('/cart', [TemplateController::class, 'cart']);

Route::get('/wishlist', [TemplateController::class, 'wishlist']);

Route::get('/compare', [TemplateController::class, 'compare']);

Route::get('/checkout', [TemplateController::class, 'checkout']);



