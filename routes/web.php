<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/contacto', 'contacto')->name('contacto');

Route::get('personas', 'App\Http\Controllers\PersonasController@index')->name('personas.index');
Route::get('personas/create', 'App\Http\Controllers\PersonasController@create')->name('personas.create');
Route::get('personas/{persona}/editar', 'App\Http\Controllers\PersonasController@edit')->name('personas.edit');
Route::patch('personas/{persona}', 'App\Http\Controllers\PersonasController@update')->name('personas.update');
Route::post('personas', 'App\Http\Controllers\PersonasController@store')->name('personas.store');
Route::get('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@show')->name('personas.show');
Route::delete('personas/{persona}', 'App\Http\Controllers\PersonasController@destroy')->name('personas.destroy');
