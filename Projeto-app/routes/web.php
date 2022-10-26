<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransferController;

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

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/transfers/{id}', [TransferController::class, 'index'])->name('transfers.index');
Route::get('/user/{id}/transfers', [TransferController::class, 'show'])->name('transfers.show');
Route::get('/user/{id}/transfered', [TransferController::class, 'concluded_transfer'])->name('transfers.concluded_transfer');
Route::get('/user/{id}/historic', [TransferController::class, 'historic'])->name('transfers.historic');
