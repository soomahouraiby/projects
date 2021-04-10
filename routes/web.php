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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'operationsManagement'],function (){

    Route::get('/newReports','UsersController@newReports')->name('newReports');
    Route::get('/addReport','UsersController@addReport')->name('addReport');
    Route::get('/followReports','UsersController@followReports')->name('followReports');
    Route::get('/managementReports','UsersController@managementReports')->name('managementReports');
    Route::get('/detailsReport','UsersController@detailsReport')->name('detailsReport');
});


Route::group(['namespace'=>'pharmaciesManagement'],function (){

    Route::get('/addDrug','UsersController@addDrug')->name('addDrug');
    Route::get('/newReports','UsersController@newReports')->name('newReports');
    Route::get('/followReports','UsersController@followReports')->name('followReports');
    Route::get('/follow','UsersController@follow')->name('follow');
    Route::get('/detailsReport','UsersController@detailsReport')->name('detailsReport');


});