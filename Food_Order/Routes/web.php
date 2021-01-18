<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menu;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*Route::get('/customer',function(){
    return view('customer.menu');
});*/

Route::get('/admin', function(){
    return view('admin');
});
Route::get('/method', function(){
    return view('method');
});
Route::resource('customer', 'App\Http\Controllers\CustController');
Route::resource('menu', 'App\Http\Controllers\MenuController');
Route::resource('order', 'App\Http\Controllers\OrderController');

Route::resource('payment', 'App\Http\Controllers\PaymentController');
Route::resource('transaction', 'App\Http\Controllers\TransactionController');
