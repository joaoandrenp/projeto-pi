<?php

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

Route::get('/', function () {
    $user = new \App\Models\User();
    return view('welcome',['user'=> $user]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('client');

//Route::get('/administrador', [\App\Http\Controllers\AdminController::class,'index'])->name('admin.dashboard');
Route::get('/administrador', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'admin']);
