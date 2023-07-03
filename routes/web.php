<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\admincontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[homecontroller::class,'index']);
Route::get('/redirects',[homecontroller::class,'user']);
Route::get('/user',[admincontroller::class,'show']);
Route::get('/delete/{id}',[admincontroller::class,'deleteuser']);
Route::get('/food',[admincontroller::class,'foodmenu']);
Route::get('/food',[admincontroller::class,'fooditems']);
Route::post('/uploadfood',[admincontroller::class,'uploadfood']);
Route::get('/deletefood/{id}',[admincontroller::class,'deletefood']);
Route::get('/updatefood/{id}',[admincontroller::class,'updatefood']);
Route::post('/update/{id}',[admincontroller::class,'update']);
 Route::get('/chefs',[admincontroller::class,'chefspanel']);
Route::post('/chefsupload',[admincontroller::class,'chefsupload']);
Route::get('/deletechef/{id}',[admincontroller::class,'deletechefs']);
Route::get('/updatechef/{id}',[admincontroller::class,'updatechef']);
Route::post('/updatedc/{id}',[admincontroller::class,'updatedc']);
Route::post('/reservation',[admincontroller::class,'reservation']);
Route::get('/reservationdetail',[admincontroller::class,'reservationdetail']);
Route::get('/deleteres/{id}',[admincontroller::class,'deleteres']);
Route::post('/addcart/{id}',[homecontroller::class,'cart']);
Route::get('/cartpage/{id}',[homecontroller::class,'cartshow']);
Route::get('/remove/{id}',[homecontroller::class,'remove']);
Route::post('/confirmorder',[homecontroller::class,'orderconfirm']);
Route::get('/order',[admincontroller::class,'order']);
Route::get('/search',[admincontroller::class,'search']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
