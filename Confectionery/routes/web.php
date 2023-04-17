<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfectionsController;
use Illuminate\Database\Eloquent\Model;

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

Route::get('/', [ConfectionsController::class, 'index']);



//Show create form
Route::get('/confections/create', [ConfectionsController::class, 'create'])->middleware('auth');

//Store confection data
Route::post('/confections', [ConfectionsController::class, 'store'])->middleware('auth');

//single confection

//route model binding - for passing list model
Route::get('/confections/{confection}', [ConfectionsController::class, 'show']);

//Edit Submit to update
Route::put('/confections/{confections}', [ConfectionsController::class, 'update'])->middleware('auth');

//Delete confection
Route::delete('/confections/{confections}', [ConfectionsController::class, 'destroy'])->middleware('auth');

//Show edit form
Route::get('/confections/{confections}/edit', [ConfectionsController::class, 'edit'])->middleware('auth');


//Show register create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create new user
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

//log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

