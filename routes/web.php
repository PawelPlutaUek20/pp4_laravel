<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpeningController;
use App\Http\Controllers\VariationController;

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



Route::get('/opening', [OpeningController::class, 'index']);
Route::get('/opening/{opening}', [OpeningController::class, 'show'])->name('opening');


Route::get('/create', [VariationController::class, 'index'])->name('create');
Route::post('/create', [VariationController::class, 'store']);