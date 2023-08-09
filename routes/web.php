<?php

use App\Http\Controllers\BloodController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD

=======
>>>>>>> ed0b8591a03704f4b88beae12f34c42d172f2465
Route::get('admin/welcome', [UserController::class, 'index'])->middleware('auth');

Route::get('/', function () {
    return view('view');
})->middleware('guest');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [UserController::class, 'loginView'])->middleware('guest');
Route::post('login', [UserController::class, 'store'])->middleware('guest');
Route::post('admin/logout', [UserController::class, 'destroy'])->middleware('auth');

Route::get('contact', function () {
    return view('contact.contact');
})->middleware('guest');

Route::get('about', function () {
    return view('about.about');
})->middleware('guest');

Route::get('admin/store', [StockController::class, 'index'])->middleware('auth');    //show stock form
Route::post('admin/store', [StockController::class, 'store'])->middleware('auth');   // Update new stock


Route::get('donar', [UserController::class, 'show'])->middleware('guest');  //Donar List
Route::get('list', [StockController::class, 'show'])->middleware('guest');  //Stock List

Route::get('admin/update', [StockController::class, 'getUpdate'])->middleware('auth');   //getUpdate List
Route::post('admin/update', [StockController::class, 'update'])->middleware('auth');   // update List
Route::get('admin/list', [StockController::class, 'listShow'])->middleware('auth');   //admin blood Stock List

Route::get('admin/donor', [UserController::class, 'adminList'])->middleware('auth');   //Donar List
Route::get('admin/edit', [UserController::class, 'getDonarUpdatePage'])->middleware('auth');   //getUpdate Donor List
Route::post('admin/edit', [UserController::class, 'edit'])->middleware('auth'); // update Donar List
Route::get('admin/delete', [UserController::class, 'getDelete'])->middleware('auth');   // get delete Donar

<<<<<<< HEAD

Route::get('group', [BloodController::class, 'index']);

// User Routes
Route::get('user', [UserController::class, 'user']);
=======
Route::get('group', [BloodController::class, 'index']);
>>>>>>> ed0b8591a03704f4b88beae12f34c42d172f2465
