<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\StampController;

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

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [AuthenticatedSessionController::class, 'login']);
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth');
Route::get('/home', [StampController::class, 'index'])->middleware('auth');
Route::post('/home', [StampController::class, 'startAttendace'])->middleware('auth');
Route::post('/home', [StampController::class, 'stopAttendace'])->middleware('auth');
Route::post('/home', [StampController::class, 'startRest'])->middleware('auth');
Route::post('/home', [StampController::class, 'stopRest'])->middleware('auth');
Route::get('/attendace', [StampController::class, 'attendace']);