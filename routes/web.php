<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/user/{name}/{id}', [App\Http\Controllers\UsersController::class, 'index']);
Route::get('/project/{id}', [App\Http\Controllers\ProjectsController::class, 'index']);
Route::post('/user/add', [App\Http\Controllers\UsersController::class, 'Add']);
Route::post('/project/add', [App\Http\Controllers\ProjectsController::class, 'Add']);
Route::post('/task/add', [App\Http\Controllers\TasksController::class, 'Add']);

Auth::routes();

