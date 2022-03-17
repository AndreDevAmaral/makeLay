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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events', [EventController::class, 'events']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/product/add', [EventController::class, 'add']);
Route::get('/product/product', [EventController::class, 'product']);

Route::get('/login', [EventController::class, 'login']);

Route::get('/register', [EventController::class, 'register']);


/*Route::get('/produtos/{id}', function ($id) {
    return view('produtos', ['id' => $id]);
});*/
