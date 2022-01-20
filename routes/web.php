<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RentController;
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

Route::get('/', [CustomerController::class,'index']);

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/rent-data', [RentController::class,'index']);
Route::get('/income', function () {
    return view('income');
});

// Route::get('/edit-rent', function () {
//     return view('edit-rent');
// });


Route::get('/create-rent', [RentController::class,'create']);
Route::post('/store', [RentController::class,'store']);
Route::get('/edit/{id}',[RentController::class,'edit']);
Route::post('/update',[RentController::class,'update']);
Route::get('/delete/{id}',[RentController::class,'destroy']);



// Route::get('/create-rent', function () {
//     return view('create-rent');
// });

