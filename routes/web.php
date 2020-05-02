<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/task2', 'HomeController@task2')->name('task2');
Route::get('/task3', 'HomeController@task3')->name('task3');
Route::get('/task4', 'HomeController@task4')->name('task4');
