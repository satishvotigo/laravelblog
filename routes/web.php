<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/projects', 'ProjectController@index');
Route::get('/projects/create', 'ProjectController@create');
Route::post('/projects', 'ProjectController@store');
Route::get("/projects/{project}", 'ProjectController@show');
Route::patch("/projects/{project}", 'ProjectController@update');
Route::delete("/projects/{project}", 'ProjectController@destroy');
Route::get("/projects/{project}/edit", 'ProjectController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
