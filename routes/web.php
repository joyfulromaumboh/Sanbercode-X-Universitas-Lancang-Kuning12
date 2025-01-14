<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/form', [HomeController::class, 'form'])->name('form');
Route::post('/welkom', [AuthController::class, 'welcome'])->name('welcome');
Route::get("/table", [TableController::class, "get_table"])->name('table');
Route::get("/data-table", [TableController::class, "get_dataTable"])->name('data-table');