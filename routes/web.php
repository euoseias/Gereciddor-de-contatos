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

Route::get('/', [EventController::class,'index']);
Route::get('/events/create', [EventController::class,'create']);
//Route::get('/events/{id}', [EventController::class,'show']);
Route::post('/events', [EventController::class,'store']);
Route::delete('/events/{id}', [EventController::class,'destroy']);
Route::get('/events/edit/{id}', [EventController::class,'edit']);
Route::put('/events/edit/{id}', [EventController::class,'update']);


Route::get('/events/entrar', [EventController::class,'entrar']);
Route::get('/events/cadastra', [EventController::class,'cadastra']);


Route::get('/contact', function () {
    return view('contact');
});





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
