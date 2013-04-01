<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');


Route::model('group', 'Group');
Route::model('attendee', 'Attendee');

Route::get('groups/register', 'GroupController@create');
Route::get('groups', 'GroupController@index');
Route::post('groups', 'GroupController@store');
Route::get('groups/find', 'GroupController@search');
Route::post('groups/find', 'GroupController@find');
Route::get('groups/{group}/{hash}', 'GroupController@show');
Route::get('groups/{group}/{hash}/attendees', 'AttendeeController@index');
Route::post('groups/{group}/{hash}/attendees', 'AttendeeController@store');
Route::get('groups/{group}/{hash}/attendees/{attendee}', 'AttendeeController@show');
Route::delete('groups/{group}/{hash}/attendees/{attendee}', 'AttendeeController@destroy');
Route::put('groups/{group}/{hash}/attendees/{attendee}', 'AttendeeController@update');
Route::get('groups/{group}/{hash}/attendees/{attendee}/remove', 'AttendeeController@remove');
Route::get('groups/{group}/{hash}/attendees/{attendee}/edit', 'AttendeeController@edit');