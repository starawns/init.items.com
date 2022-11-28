<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::namespace ('Api')->prefix('v1')->name('api.v1.')->group(function () {
    Route::any('/sports/index', [App\Http\Controllers\Api\SportsController::class, 'index'])->name('sports.index');
    Route::post('/sports/show', [App\Http\Controllers\Api\SportsController::class, 'show'])->name('sports.show');
});