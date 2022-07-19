<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'getUsers']);
Route::get('/create', [UserController::class, 'create']);
Route::post('/create', [UserController::class, 'createUser']);
Route::get('/user/{user}', [UserController::class, 'edit']);
Route::put('/user/edit/{user}', [UserController::class, 'editUser']);
Route::delete('/delete/user/{user}', [UserController::class, 'deleteUser']);