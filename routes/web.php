<?php

use App\Http\Controllers\AgenController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/data-barang', [ItemController::class, 'index'])->name('item.index');
Route::get('/tambah-data-barang', [ItemController::class, 'create'])->name('item.create');
Route::post('/tambah-data-barang', [ItemController::class, 'store']);
Route::get('/barang/{items:id}/edit', [ItemController::class, 'edit'])->name('item.edit');
Route::patch('/barang/{items:id}/edit', [ItemController::class, 'update'])->name('item.update');
Route::get('/barang/{items:id}/delete', [ItemController::class, 'destroy']);


Route::get('/data-pelanggan', [CostumerController::class, 'index'])->name('costumer.index');
Route::get('/tambah-data-pelanggan', [CostumerController::class, 'create'])->name('costumer.create');
Route::post('/tambah-data-pelanggan', [CostumerController::class, 'store']);
Route::get('/pelanggan/{costumers:id}/edit', [CostumerController::class, 'edit'])->name('costumer.edit');
Route::patch('/pelanggan/{costumers:id}/edit', [CostumerController::class, 'update']);
Route::get('pelanggan/{costumers:id}/delete', [CostumerController::class, 'destroy']);

Route::get('/data-agen', [AgenController::class, 'index'])->name('agen.index');
