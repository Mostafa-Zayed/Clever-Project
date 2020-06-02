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

Route::get('/','HomeController@index')->name('home');
Route::get('programs','HomeController@programs')->name('programs');
Route::get('scholarships','HomeController@scholarships')->name('scholarships');
Route::get('instructors','HomeController@instructors')->name('instructors');
Route::get('/recent-events','HomeController@recent_events')->name('recent_events');
Route::get('/event-details','HomeController@event_details')->name('event_details');
Route::get('/upcoming-events','HomeController@upcoming_events')->name('upcoming_events');
//Route::get('/courses','HomeController@courses')->name('courses');
Route::get('/courses/{id}','HomeController@course');
Route::get('/test','HomeController@courses')->name('courses');
Auth::routes();


Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->where('provider','facebook|google|twitter|github|linkedin');
Route::get('{provider}/callback', 'Auth\LoginController@handleProviderCallback')->where('provider','facebook|google|twitter|github|linkedin');
