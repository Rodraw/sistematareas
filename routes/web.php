<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Web', 'as' => 'web.'], function () {

    /** Login */
    Route::get('/log', 'WebController@login')->name('login');
    Route::get('/log2', 'WebController@login2')->name('login2');
    Route::get('/sair', 'WebController@logout')->name('logout');
});

Route::prefix('admin')
        ->namespace('Admin')
        ->middleware('auth')
        ->group(function() {

    // Router Dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    // Router User
    Route::get('/users', 'UserController@index')->name('users.index');
    Route::get('/users/create', 'UserController@create')->name('users.create');
    Route::post('/users/store', 'UserController@store')->name('users.store');
    Route::get('//users/{id}/show', 'UserController@show')->name('users.show');
    Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::post('/users/{id}/edit', 'UserController@postUpdate')->name('users.edit');
    Route::get('/users/{id}/destroy', 'UserController@destroy')->name('users.destroy');
    Route::any('users/search', 'UserController@search')->name('users.search');

    // Router Becarios
    Route::any('becarios/search', 'BecarioController@search')->name('becarios.search');
    Route::post('/becarios/{id}/edit', 'BecarioController@postUpdate')->name('becarios.postupdate');
    Route::get('/becarios/{id}/destroy', 'BecarioController@destroy')->name('becarios.destroy');
    Route::resource('becarios', 'BecarioController');

    // Router Asignadas
    Route::any('asignadas/search', 'AsignadaController@search')->name('asignadas.search');
    Route::get('asignadas/search/tareas', 'AsignadaController@searchtareas')->name('asignadas.searchtareas');
    Route::get('asignadas', 'AsignadaController@index')->name('asignadas.index');
    Route::get('asignadas/create', 'AsignadaController@create')->name('asignadas.create');
    Route::post('asignadas/store', 'AsignadaController@store')->name('asignadas.store');
    Route::get('/asignada/{id}/destroy', 'AsignadaController@destroy')->name('asignadas.destroy');
    Route::get('StatusAsignada','AsignadaController@UpdateStatusAsig')->name('UpdateStatusAsig');
    Route::post('/asignadas/{id}/edit', 'AsignadaController@postUpdate')->name('asignadas.postupdate');
    Route::resource('asignadas', 'AsignadaController');


    // Router Tareas
    Route::any('tareas/search', 'TareaController@search')->name('tareas.search');
    Route::post('/tareas/{id}/edit', 'TareaController@postUpdate')->name('tareas.postupdate');
    Route::get('/tarea/{id}/destroy', 'TareaController@destroy')->name('tareas.destroy');
    Route::resource('tareas', 'TareaController');

    // Router Categories
    Route::any('categories/search', 'CategoryController@search')->name('categories.search');
    Route::get('/categories/{module}', 'CategoryController@getHome')->name('categories.home');
    Route::get('/category/{id}/delete', 'CategoryController@getDelete')->name('categories_delete');
    Route::resource('categories', 'CategoryController');
    
            
});

Auth::routes();

