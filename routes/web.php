<?php

use App\Http\Controllers\HomeController;
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



Route::get('/hal_create', [HomeController::class, 'create'] );

Route::get('/hal_read', [HomeController::class, 'read'] );

Route::get('/hal_update{id}', [HomeController::class, 'update'] );




Route::post('/dokter/store', [HomeController::class, 'store'] );
Route::post('/pasien/up', [HomeController::class, 'up'] );