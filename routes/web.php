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
Route::get('/', 'HomeController@index')->name('home');

//Route::group(['prefix'=>'operationsManagement'],function (){
//
//    Route::get('/newReports','UsersController@newReports')->name('newReports');
//    Route::get('/addReport','UsersController@addReport')->name('addReport');
//    Route::get('/followReports','UsersController@followReports')->name('followReports');
//    Route::get('/managementReports','UsersController@managementReports')->name('managementReports');
//    Route::get('/detailsReport','UsersController@detailsReport')->name('detailsReport');
//});

Route::group(['prefix'=>'operationsManagement'],function (){

    Route::get('/newReports','OPManageController@newReports')->name('OP_newReports');
    Route::get('/newSmuggledReports','OPManageController@newSmuggledReports')->name('OP_newSmuggledReports');
    Route::get('/newDrownReports','OPManageController@newDrownReports')->name('OP_newDrownReports');
    Route::get('/newDiffrentReports','OPManageController@newDiffrentReports')->name('OP_newDiffrentReports');
    Route::get('/addReport','OPManageController@addReport')->name('OP_addReport');
    Route::get('/followReports','OPManageController@followReports')->name('OP_followReports');
    Route::get('/followingReports','OPManageController@followingReports')->name('OP_followingReports');
    Route::get('/followDoneReports','OPManageController@followDoneReports')->name('OP_followDoneReports');
    Route::get('/DoneReports','OPManageController@DoneReports')->name('OP_DoneReports');
    Route::get('/managementReports','OPManageController@managementReports')->name('OP_managementReports');
    Route::get('/detailsReport/{report_no}','OPManageController@detailsReport')->name('OP_detailsReport');
    Route::get('/detailsSmuggledReport/{report_no}','OPManageController@detailsSmuggledReport')->name('OP_detailsSmuggledReport');
    Route::get('/followedUp/{report_no}','OPManageController@followedUp')->name('OP_followedUp');
    Route::get('/followedUp2/{report_no}','OPManageController@followedUp2')->name('OP_followedUp2');
    Route::get('/followedUp3/{report_no}','OPManageController@followedUp3')->name('OP_followedUp3');
    Route::get('/transferReports/{report_no}', 'OPManageController@transferReports')->name('OP_transferReports');
    Route::get('/editReport/{report_no}', 'OPManageController@editReport')->name('OP_editReport');
    Route::post('/saveOPMNotes/{report_no}', 'OPManageController@saveOPMNotes')->name('OP_saveOPMNotes');
});

Route::group(['namespace'=>'pharmaciesManagement'],function (){

    Route::get('/addDrug','UsersController@addDrug')->name('addDrug');
    Route::get('/newReports','UsersController@newReports')->name('newReports');
    Route::get('/followReports','UsersController@followReports')->name('followReports');
    Route::get('/follow','UsersController@follow')->name('follow');
    Route::get('/detailsReport','UsersController@detailsReport')->name('detailsReport');
    Route::post('/transfer', 'OPManageController@transfer')->name('transfer');

});


Route::get('getDrug', 'OPManageController@getDrug');
Route::get('gg', 'OPManageController@gg');
Route::get('create', 'OPManageController@create');
Route::post('store', 'OPManageController@store')->name('report.store');
