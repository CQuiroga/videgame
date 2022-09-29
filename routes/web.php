<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideogameController;
use App\Http\Controllers\CategoryController;

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

Route::resource('videogames', VideogameController::class)->names('videogames');

Route::resource('categories', CategoryController::class)->names('categories');


//Route::get('videogames/{name_game}/{categoria?}', [VideogameController::class, 'help']);
