<?php

use App\Http\Controllers\DemandeController;
use App\Http\Responses\LogoutResponse;
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
    return view('dossier.index');
})->middleware('web')->name('index');

Route::get('/liste_demandes', [DemandeController::class, 'index'])->middleware('web','auth')->name('liste_demandes');


Route::get('/create', function () {
    return view('dossier.create');
})->middleware('auth','web')->name('nouveau-informations-personnelles');

Route::get('/create-step-2', function () {
    return view('dossier.create-etudes-primaire-secondaire');
})->middleware('web')->name('create-etudes-primaire-secondaire');

Route::get('/test/{user_id}', function ($user_id) {
    return view('dossier.liste-etudes', ['user_id' => $user_id]);
});

Route::get('/liste_utilisateurs', function () {
    return view('user.list');
})->middleware('web','auth')->name('liste_utilisateurs');



//Route::get('demandes/{id}',[DemandeController::class,'show'])->name('dossier');
//Route::get('/contactez-nous',[DemandeController::class,'contact'])->name('contact');

//Route::get('demandes/{id}',[DemandeController::class,'dossier']);
