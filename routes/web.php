<?php

use App\Http\Controllers\BloodController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('welcome',[UserController::class, 'index']);

Route::get('/', function () {
    return view('view');
});

Route::get('register', [RegisterController::class, 'create']);
Route::post('register',[RegisterController::class, 'store']);

Route::get('login',[UserController::class, 'loginView']);
Route::post('login',[UserController::class, 'store']);
Route::get('logout',[UserController::class, 'destroy']);


Route::get('contact', function () {
    return view('contact.contact');
});

Route::get('about', function () {
    return view('about.about');
});

Route::get('admin/store', [StockController::class, 'index']);     //show stock form
Route::post('admin/store', [StockController::class, 'store']);    // Update new stock


Route::get('donar',[UserController::class, 'show']);   //Donar List
Route::get('list',[StockController::class, 'show']);   //Stock List
Route::get('update',[StockController::class, 'getUpdate']);   //getUpdate List
Route::post('update',[StockController::class, 'update']);   // update List


Route::get('admin/donor',[UserController::class, 'adminList']);   //Donar List
Route::get('admin/edit',[UserController::class, 'getDonarUpdatePage']);   //getUpdate Donor List
Route::post('admin/edit',[UserController::class, 'edit']);   // update Donar List
Route::get('admin/delete',[UserController::class, 'getDelete']);   // get delete Donar




Route::get('group',[BloodController::class, 'index']);
