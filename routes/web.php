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

//Route::resource('/adminp/test', \App\Http\Controllers\DayController::class);

Route::get('/subs', [\App\Http\Controllers\MailController::class, 'send'])->name('mail.subs');
Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');
Route::get('/test', [App\Http\Controllers\AdminController::class, 'test'])->name('test');
Route::get('/longread/{id}', [App\Http\Controllers\AdventController::class, 'longread'])->name('advent.longread');
Route::get('/subs/add', [\App\Http\Controllers\MailController::class, 'addMail'])->name('mail.add');
Route::get('/subs/del', [\App\Http\Controllers\MailController::class, 'delete'])->name('mail.delete');
Route::get('/', [App\Http\Controllers\AdventController::class, 'advent'])->name('index');
Route::get('/gift/{id}', [App\Http\Controllers\AdventController::class, 'gift'])->name('gift');
Route::post('/advent/register', [AuthController::class,'registration'])->name('advent.register');
Route::post('/advent/auth', [AuthController::class,'authenticate'])->name('advent.auth');
Route::get('/advent/logout', [AuthController::class,'logout'])->name('advent.logout');
Route::group(['middleware' => ['auth', 'admin']], function () {
Route::get('/advent/sub', [App\Http\Controllers\AdventController::class, 'show'])->name('advent.subs.show');
    Route::get('/adminp', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin.dayslist');
    Route::get('/adminp/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.editform');
    Route::post('/adminp/editconfirm', [App\Http\Controllers\AdminController::class, 'editconfirm'])->name('admin.editconfirm');
    Route::post('/adminp/titleedit', [App\Http\Controllers\AdminController::class, 'titleedit'])->name('admin.titleedit');
    Route::get('/adminp/cleanhistory', [App\Http\Controllers\AdminController::class, 'cleanhistory'])->name('admin.cleanhistory');
});

