<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
    return view('welcome');
});

Route::get('/home', [ItemController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::post('/cadastrar', [ItemController::class, 'store'])->name('criar_item');
Route::get('/cadastrar', [ItemController::class, 'create']);

Route::get('/home/item/{id}', [ItemController::class, 'show'])->name('visualizar_item');

Route::get('/editar/{id}', [ItemController::class, 'edit']);
Route::post('/editar/{id}', [ItemController::class, 'update'])->name('editar_item');

Route::delete('/home/{id}', [ItemController::class, 'destroy'])->name('delete_item');