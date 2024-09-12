<?php

use App\Http\Controllers\CrudController;
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

Route::get('/', [CrudController::class, 'home']);
Route::get('/register', [CrudController::class, 'register']);
Route::get('/data', [CrudController::class, 'table']);
Route::get('/login', [CrudController::class, 'login']);
Route::post('/store', [CrudController::class, 'store']);
Route::get('/edit/{id}', [CrudController::class, 'edit']);
Route::get('/data/delete/{id}', [CrudController::class, 'delete']);
Route::post('/updata/{id}', [CrudController::class, 'update']);
Route::get('/search', [CrudController::class, 'search']);
Route::post("/loging", [CrudController::class, 'loging']);