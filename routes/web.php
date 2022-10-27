<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AppoinmentController;
use App\Http\Controllers\Home\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/{pathMatch}', [HomeController::class,'home'])->where('',".*");
Route::get('/', [HomeController::class,'home']);
Route::get('/admin',[AdminController::class, 'index']);




Route::get('/admin/{any}', function(){
    return view('backend.layouts.app');
})->where('any','.*');

Route::get('{any}', function(){
    return view('welcome');
})->where('any','.*');



// Route::controller(AppoinmentController::class)->group(function(){
//     Route::post('appoinment_store','appoinment_store');
// });

Route::post('/appoinment_store',[HomeController::class, 'store']);

//dashboard appoinment list
Route::get('/appoinment/list',[AppoinmentController::class,'index'])->name('appoinment.list');

// Route::get('/{pathMatch}', [HomeController::class,'home']);

