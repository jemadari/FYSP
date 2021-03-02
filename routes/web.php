<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

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
    return view('layouts.main');
})->name('layouts.main');


Route::resource('users', UserController::class);

Route::resource('/projects', 'App\Http\Controllers\ProjectController');

Route::resource('/documents', 'App\Http\Controllers\DocumentController');

Route::resource('/scopes', 'App\Http\Controllers\ScopeController');

Route::resource('/significances', 'App\Http\Controllers\SignificanceController');
