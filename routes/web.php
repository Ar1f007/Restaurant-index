<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

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

    Route::group(['middleware' => 'web'], function () {
    Route::get('/', [RestaurantController::class, 'index']);
    Route::get('/list', [RestaurantController::class, 'list']);
    Route::view('/add', 'add');
    Route::post('/add', [RestaurantController::class, 'add']);
    Route::get('/delete/{id}', [RestaurantController::class, 'delete']);
    Route::get('/edit/{id}', [RestaurantController::class, 'edit']);
    Route::put('/edit/{id}',[RestaurantController::class, 'update']);
    Route::view('/register','registerUser');
    Route::post('/register', [RestaurantController::class, 'register']);
    Route::view('login', 'login');
    Route::post('/login', [RestaurantController::class, 'login']);
    Route::get('/logout', [RestaurantController::class, 'logout']);
    Route::get('/search', [RestaurantController::class, 'search']);
    Route::get('/showDetails/{id}', [RestaurantController::class, 'show']);
});