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

Auth::routes();

Route::get('/home', 'HomeController@index');




Route::group(['middleware'=>['web']],function (){
    Route::get('/student',['uses'=>'StudentController@index']);
    Route::any('/student/create',['uses'=>'StudentController@create']);
    Route::any('/save',['uses'=>'StudentController@save']);
    Route::any('/detail/{id}',['uses'=>'StudentController@detail']);
    Route::any('/update/{id}',['uses'=>'StudentController@update']);
    Route::any('/delete/{id}', ['uses' => 'StudentController@delete']);
});