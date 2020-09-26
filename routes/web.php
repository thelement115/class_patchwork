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

Route::get('/', function () {
    return view('home');
});

Route::get('home/', 'HomeController@index')->name('home');
Route::get('reservations/','ScheduleController@index')->name('reservations');
Route::post('reservations_result/','ScheduleController@schedule')->name('reservations_result');
Route::post('select/','ScheduleController@select')->name('select');
Route::get('contact/','HelpController@index')->name('contact');
Route::get('information/','HelpController@information')->name('information');
Route::get('admin/','AdminController@index')->name('admin_panel');
Auth::routes();