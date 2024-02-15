<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


//Route::get('/', [PagesController::class, 'home']);
Route::get('/', [PagesController::class, 'listPages']);
Route::get('/ai-tools', [PagesController::class, 'listPages']);
Route::get('/dirbtinio-intelekto-irankiai', [PagesController::class, 'listPages']);
Route::get('/susisiekite', [PagesController::class, 'susisiekite']);
Route::get('/apie', [PagesController::class, 'apie']);

// Last One:
Route::get('/{slug}', [PagesController::class, 'showPage']);
