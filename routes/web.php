<?php

use App\Http\Controllers\DemandeController;
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
Route::get('/',[DemandeController::class,'index'])->name('dashboard');
Route::get('demandes/{id}',[DemandeController::class,'show'])->name('demande');
Route::get('/contactez-nous',[DemandeController::class,'contact'])->name('contact');

//Route::get('demandes/{id}',[DemandeController::class,'demande']);
