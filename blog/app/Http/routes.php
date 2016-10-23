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
Route::get('/','sectionController@home');
Route::get('library','sectionController@library');
Route::get('library/signup','sectionController@signup');
Route::post('library/signup','sectionController@usersignup');
Route::get('library/signout','sectionController@signout');
Route::get('library/profile/{id}','sectionController@userprofile');
Route::get('library/profile/{id}/upload','sectionController@upload');
Route::post('library/profile/{id}/upload','sectionController@uploadcheck');
Route::get('library/signin','sectionController@signin');
Route::post('library/signin','sectionController@usersignin');
Route::get('library/profile/{id}/mybooks','sectionController@mybooks');
Route::get('library/profile/{id}/searchresults','sectionController@search') ;
Route::delete('library/profile/{id}/mybooks','sectionController@delete') ;
Route::post('library/profile/{id}/mybooks/update','sectionController@update') ;
Route::patch('library/profile/{id}/mybooks/update','sectionController@doupdate') ;

