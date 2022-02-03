<?php

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

//Route::get('/contact', [App\Http\Controllers\ContactController::class,'index'])->name("contact.index");
//Route::post('/contact-form', [App\Http\Controllers\ContactController::class,'form'])->name("contact.form");
Route::get('/food', [App\Http\Controllers\FoodController::class,'index'])->name("food.index");
Route::post('/food-search', [App\Http\Controllers\FoodController::class,'search'])->name("food.search");
Route::get('/food-details/{id}', [App\Http\Controllers\FoodController::class,'details'])->name("food.details");
                    ///{id}