<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//Autenticación
Route::get('/login', [UserController::class, 'formLogin'])
    ->name('auth.login.form');
Route::post('/login', [UserController::class, 'processLogin'])
    ->name('auth.login.process');
Route::post('/logout', [UserController::class, 'processLogout'])
    ->name('auth.logout.process');

Route::get('/', [RoomController::class, 'index'])
    ->name('home');
Route::get('/rooms-grid', [RoomController::class, 'rooms']);

Route::get('/room-detail/{id}', [RoomController::class, 'viewRoomDetail'])
    ->whereNumber('id')
    ->name('room.detail');
