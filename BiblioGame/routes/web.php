<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuController;
use App\Http\Controllers\JeuUserFormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentaireController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('contact', function() {
    return view('pageContact');
})->name('contact');

Route::get('entreprise', function() {
    return view('pageEntreprise');
})->name('entreprise');

Route::get('/',[JeuController::class,'index']);
Route::get('jeux',[JeuController::class,'index']);
Route::get('fiche',[JeuController::class,'show']);
Route::get('profil',[UserController::class,'index']);



Route::resource('user',UserController::class);
Route::resource('jeux',JeuController::class);
Route::resource('fiche', JeuController::class);

Route::post('addcomment/{id}',[CommentaireController::class,'store']);
Route::post('fiche/{id}',[JeuController::class,'show']);
Route::post('jeuuserformulaire/{id}',[JeuUserFormController::class,'attach']);
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
