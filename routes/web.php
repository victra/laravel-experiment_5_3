<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(["prefix" => "/"], function() {
    Route::group(["prefix" => "exp"], function () {
        Route::get('exp_1', array('as'=>'exp_1', 'uses'=>'Experiments\ExperimentController@exp_1'));
        Route::get('exp_3', array('as'=>'exp_3', 'uses'=>'Experiments\ExperimentController@exp_3'));
    });
    Route::resource('exp', 'Experiments\ExperimentController');
});
Route::resource('', 'WelcomeController');
