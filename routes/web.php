<?php

use App\Http\Controllers\MenageController;
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


Route::controller(MenageController::class)->group(function () {

    Route::get('accueil', 'index');
    Route::get('/menage/create', 'create');
    Route::get('/menage/{id}', 'show');
    Route::get('/menage/{id}/edit', 'edit');


    Route::post('/menage', 'store');
    Route::patch('/menage/{id}', 'update');
    Route::delete('/menage/{id}', 'destroy');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
