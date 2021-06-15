<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuController;
use App\Http\Controllers\JeuUserFormController;

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

Route::get('/',[JeuController::class,'index']);
Route::get('jeux',[JeuController::class,'index']);
Route::get('fiche',[JeuController::class,'show']);

Route::resource('jeux',JeuController::class);
Route::resource('fiche', JeuController::class);


Route::post('jeuuserformulaire/{id}',[JeuUserFormController::class,'attach']);
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
