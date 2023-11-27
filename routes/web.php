<?php

use App\Http\Controllers\DodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/', [DodoController::class, 'connect']);

Route::get('/matelas', [DodoController::class, 'dodos']);

Route::get('/matelas/creer', [DodoController::class, 'create']);

Route::post('/matelas/creer', [DodoController::class, 'store']);

Route::get('/matelas/{id}',[DodoController::class, 'matelas'] );

Route::get('/matelas/{id}/modifier',[DodoController::class, 'edit']);

Route::post('/matelas/{id}/modifier',[DodoController::class, 'update']);

Route::get('/matelas/{id}/supprimer',[DodoController::class, 'destroy']);
