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


Route::get('/', function () {
    return view('welcome');
});

Route::resource('projects', 'ProjectsController');

Route::resource('blog', 'BlogController');

Route::resource('users', 'UsersControllers');

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

Route::post('/blog/{project}/comment', 'CommentController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
