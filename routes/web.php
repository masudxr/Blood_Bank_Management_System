<?php

use App\Http\Controllers\RegisterController;
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

Route::post('welcome',[UserController::class, 'store']);

Route::get('contact', function () {
    return view('contact.contact');
});

Route::get('about', function () {
    return view('about.about');
});