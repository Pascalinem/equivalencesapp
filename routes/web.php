<?php

use App\Http\Controllers\DemandeController;
use App\Http\Livewire\UsersTable;
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
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/index', function () {
    return view('demande.index');
})->middleware('web')->name('index');

Route::get('/create', function () {
    return view('demande.create');
})->middleware('web')->name('nouveau-informations-personnelles');

Route::get('/create-step-2', function () {
    return view('demande.create-etudes-primaire-secondaire');
})->middleware('web')->name('create-etudes-primaire-secondaire');

Route::get('/test/{user_id}', function ($user_id) {
    return view('demande.liste-etudes', ['user_id' => $user_id]);
});


//Route::get('demandes/{id}',[DemandeController::class,'show'])->name('demande');
//Route::get('/contactez-nous',[DemandeController::class,'contact'])->name('contact');

//Route::get('demandes/{id}',[DemandeController::class,'demande']);
