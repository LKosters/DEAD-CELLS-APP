<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/melee-weapons', 'App\Http\Controllers\MeleeWeaponsController@index')->name('Melee weapons');
Route::get('/melee-weapons/create', 'App\Http\Controllers\MeleeWeaponsController@create')->name('Create melee weapon');
Route::get('/melee-weapons/{id}/edit', 'App\Http\Controllers\MeleeWeaponsController@edit')->name('Edit melee weapon');
Route::put('/melee-weapons/{id}', 'App\Http\Controllers\MeleeWeaponsController@update')->name('Update melee weapon');
Route::delete('/melee-weapons/{id}', 'App\Http\Controllers\MeleeWeaponsController@destroy')->name('Delete melee weapon');