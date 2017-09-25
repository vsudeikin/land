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

//Show home page 
Route::get('/', 'IndexController@show')->name('home');
//Send massage form by e-mail for me
Route::post('/', 'IndexController@send');
//admin page
Route::get('/home', 'HomeController@index')->name('admin');

//edit route
Route::middleware(['web', 'auth'])->group(function () {
    Route::resource('about', 'AboutController');
    Route::resource('edu', 'EduController');
    Route::resource('skill', 'SkillController');
    Route::resource('portfolio', 'PortfolioController');
});

//forgot, login, register, reset, home routes
Auth::routes();
