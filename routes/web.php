<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/rooms', 'RoomController@index')->name('rooms.index');
Route::get('/rooms/create', 'RoomController@create')->name('rooms.create');
Route::post('/rooms', 'RoomController@store')->name('rooms.store');
Route::get('/rooms/{room}/edit', 'RoomController@edit')->name('rooms.edit');
Route::put('/rooms/{room}', 'RoomController@update')->name('rooms.update');
Route::delete('/rooms/{room}', 'RoomController@destroy')->name('rooms.destroy');
// routes/web.php

Route::resource('rooms', RoomController::class);

Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
