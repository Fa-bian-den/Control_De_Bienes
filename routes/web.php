<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\GetinController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\RecordController;

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
Route::resource('teachers', TeacherController::class);
Route::resource('materials', MaterialController::class);
Route::resource('sectors', SectorController::class);
Route::resource('centers', CenterController::class);
Route::resource('rooms', RoomController::class);
Route::resource('careers', CareerController::class);
Route::resource('getins', GetinController::class);
Route::resource('outputs', OutputController::class);
Route::resource('records', RecordController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
