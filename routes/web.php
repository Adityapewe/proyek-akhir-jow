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
    return view('welcome');
});

Route::get('/nrp/{nrp}/{name}', function ($nrp , $name) {
    return "NRP dan Nama =" . $nrp . $name; 
}) -> where ('nrp', '[0-9]+') ->  where ('name', '[A-Z]+');

Route::get('person', 'PersonController@index');
Route::get('/person/show/{param}', 'PersonController@index');

Route::resource('student', 'StudentController');

Route::get('/person/send-data', 'PersonController@sendData');

Route::get('/person/my-course/{course}/{task}/{quiz}/{mid_term}/{final}', 'PersonController@myCourse');
