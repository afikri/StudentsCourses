<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('student', 'StudentController@index');
Route::get('student/create', 'StudentController@create');
Route::post('student/store', 'StudentController@store');

Route::get('course', 'CourseController@index');
Route::get('course/create', 'CourseController@create');
Route::post('course/store', 'CourseController@store');
