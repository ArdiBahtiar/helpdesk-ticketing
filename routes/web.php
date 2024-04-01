<?php

use App\Http\Controllers\TodoController;
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


// NAMPILIN DASBOR TODO-LIST
Route::get('/', 'App\Http\Controllers\TodoController@index')->middleware('auth');
Route::get('/todos/indexAdmin', 'App\Http\Controllers\TodoController@indexAdmin')->middleware('auth');
Route::get('/todos/indexManager', 'App\Http\Controllers\TodoController@indexManager')->middleware('auth');
Route::get('/todos/indexUser', 'App\Http\Controllers\TodoController@indexUser')->middleware('auth');


// CREATE TODO FORM
Route::get('/todos/create', 'App\Http\Controllers\TodoController@create')->middleware('auth');
Route::get('/todos/createManager', 'App\Http\Controllers\TodoController@createManager')->middleware('auth');
Route::get('/todos/createUser', 'App\Http\Controllers\TodoController@createUser')->middleware('auth');


// NAMPILIN DASBOR REQUESTED LIST
Route::get('/todos/requested', 'App\Http\Controllers\TodoController@requestedAdmin')->middleware('auth');
Route::get('/todos/requestedUser', 'App\Http\Controllers\TodoController@requestedUser')->middleware('auth');
Route::get('/todos/requestedManager', 'App\Http\Controllers\TodoController@requestedManager')->middleware('auth');


// ADD TODO
Route::post('/todos', 'App\Http\Controllers\TodoController@store');


// SHOW EDIT TODO
Route::get('todos/{todo}/edit', 'App\Http\Controllers\TodoController@edit');


// UPDATE TODO
Route::put('todos/{todo}', 'App\Http\Controllers\TodoController@update');


// DELETE TODO
Route::delete('/todos/{todo}/delete', 'App\Http\Controllers\TodoController@delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
