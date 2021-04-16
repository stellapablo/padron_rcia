<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PadronController;

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



Route::get('/', [PadronController::class, 'index'])->name('padron.index');
Route::post('/padron', [PadronController::class, 'query'])->name('padron.query');
