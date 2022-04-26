<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\AssortimentController;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/table', function () {
    return view('table');
    });
   
    
    Route::get('/table', [OrdersController::class, 'Orders']);
    
    Route::post('/table', [OrdersController::class, 'Submit']) ->name('table');
    
    Route::get('delete/{id}',[OrdersController::class, 'del']);
    
    Route::get('/table1', function () {
        return view('table1');
        });
        
    Route::get('/table1', [AssortimentController::class, 'Assortiments']);
    
    Route::post('/table1', [AssortimentController::class, 'Submit']) ->name('table1');
    
    Route::get('delete/{id}',[AssortimentController::class, 'del']);

   