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
use App\indexpage;

Route::get('/','IndexPages@latestNews')->name('home');

Route::get('/news','IndexPages@news')->name('News');

Route::get('/new', function () {
    return view('company/news');
});

Route::get('/consultancy',function(){
    return view('consultancy');
});

Route::post('/getConsultants','IndexPages@consultants');

Route::get('/newsdetail/{id}','IndexPages@newsdetail');

Route::get('/resource_list/{category}','IndexPages@resourcelist');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/resources','HomeController@resourceIndex')->name('resources');

Route::get('/consultants','HomeController@consultantIndex')->name('resources');

Route::post('/addindex','HomeController@create');

Route::post('/addResource','HomeController@createResource');

Route::post('/addConsultant','HomeController@createConsultant');

Route::post('/updateindex/{id}','HomeController@update');

Route::post('/updateConsultant/{id}','HomeController@updateConsultant');

Route::get('/post/{id}/edit','HomeController@edit');

Route::get('/consultant/{id}/edit','HomeController@editConsultant');

Route::get('/post/{id}/delete','HomeController@delete');

Route::get('/resource/{id}/delete','HomeController@deleteRes');


Route::get('/consultant/{id}/delete','HomeController@deleteCons');

Route::get('/foo', function () {
    Artisan::call('storage:link');
    });