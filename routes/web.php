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
    $produtos = \App\Models\Produto::all();
    return view('welcome', ['user' => $user, 'produtos' => $produtos]);
})->name('homepage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('client');

//Route::get('/administrador', [\App\Http\Controllers\AdminController::class,'index'])->name('admin.dashboard');
Route::get('/administrador', [\App\Http\Controllers\AdminController::class, 'index'])->name(
    'admin.dashboard'
)->middleware(['auth', 'admin']);

Route::get('/administrador/produto/cadastro', [\App\Http\Controllers\AdminController::class, 'showProdutos'])->name(
    'admin.produtos'
)->middleware(['auth', 'admin']);
Route::get('/administrador/produto/relatorio', [\App\Http\Controllers\AdminController::class, 'showRelatorio'])->name(
    'admin.relatorio'
)->middleware(['auth', 'admin']);
Route::get('/administrador/produto/estoque', [\App\Http\Controllers\AdminController::class, 'showEstoque'])->name(
    'admin.estoque'
)->middleware(['auth', 'admin']);
Route::delete('/administrador/produto/estoque/excluir/{id}', [\App\Http\Controllers\AdminController::class, 'destroy'])->name(
    'admin.estoque.excluir'
)->middleware(['auth', 'admin']);
Route::put('/administrador/produto/estoque/{id}', [\App\Http\Controllers\AdminController::class, 'edit'])->name(
    'admin.estoque.edit'
)->middleware(['auth', 'admin']);
Route::post('/administrador/produto/cadastro/do', [\App\Http\Controllers\AdminController::class, 'store'])->name(
    'admin.cadastro'
)->middleware(['auth', 'admin']);
