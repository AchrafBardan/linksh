<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinksController;

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

Route::view('/', 'index');
Route::get('/mylink', [LinksController::class, 'mylink'])->name('mylink');
Route::get('/{link}', [LinksController::class, 'visitlink'])->name('visitlink');
Route::post('/new', [LinksController::class, 'newlink'])->name('newlink');



