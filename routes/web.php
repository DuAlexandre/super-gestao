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

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\AboutController::class, 'sobre'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContactController::class, 'contato'])->name('site.contato');

Route::get('/login', function() {return 'login';})->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() {return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function() {return 'produtos';})->name('app.produtos');
});