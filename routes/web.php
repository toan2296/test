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

Route::get("model","testcontroller@index");
Route::get('test',function(){
    return view('viewcatergory');
});
Route::get('catergory/add','testcontroller@create');
Route::post('catergory/add','testcontroller@store');
Route::get('delete/{uid}','testcontroller@destroy');
Route::get('catergory/edit/{uid}','testcontroller@edit');
Route::post('catergory/update','testcontroller@update');