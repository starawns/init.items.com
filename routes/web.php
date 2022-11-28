<?php

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

// Route::any('/sports/index',  function () {
//     return view('front/sports/index');
// });

Route::any('/index/home', [App\Http\Controllers\IndexController::class, 'home']);

Route::any('/sports/index', [App\Http\Controllers\SportsController::class, 'index']);
