<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', [App\Http\Controllers\AdventController::class, 'advent'])->name('index');
Route::post('/advent/register', [AuthController::class,'registration'])->name('advent.register');
Route::get('/advent/auth', [AuthController::class,'authenticate'])->name('advent.auth');
Route::get('/advent/logout', [AuthController::class,'logout'])->name('advent.logout');
Route::group(['middleware' => ['auth', 'admin']], function () {
Route::get('/advent/sub', [App\Http\Controllers\AdventController::class, 'show'])->name('advent.subs.show');
});

