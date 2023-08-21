<?php

use App\Http\Controllers\DemandeController;
use App\Http\Responses\LogoutResponse;
use App\Http\Livewire\UsersTable;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;


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


Route::get('/create', function () {
    return view('dossier.create');
})->middleware('auth','web')->name('nouveau-informations-personnelles');

Route::get('/select_study', function () {
    return view('dossier.select-study');
})->middleware('web','auth');

Route::get('/test/{user_id}', function ($user_id) {
    return view('dossier.liste-etudes', ['user_id' => $user_id]);
});

Route::get('/create/select', function () {
    return view('dossier.create', [ 'step' => 6]);
})->middleware('web','auth')->name('choix-etudes');

Route::get('/liste_utilisateurs', function () {
    return view('user.list');
})->middleware('web','auth')->name('liste_utilisateurs');

Route::get('/demandes/{demande_id}', [DemandeController::class, 'show'])->middleware('web','auth');
Route::get('/api', [DemandeController::class, 'indexAPI'])->middleware('api','auth');
Route::get('/api/{demande_id}', [DemandeController::class, 'showAPI'])->middleware('api','auth');

Route::get('/demandes', function () {
    return view('demande.list');
})->middleware('web','auth')->name('liste_demandes');

Route::get('lang/{locale}', [App\Http\Controllers\LocalizationController::class, 'index']);


//Route::get('demandes/{id}',[DemandeController::class,'show'])->name('dossier');
//Route::get('/contactez-nous',[DemandeController::class,'contact'])->name('contact');

//Route::get('demandes/{id}',[DemandeController::class,'dossier']);
