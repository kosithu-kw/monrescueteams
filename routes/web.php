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

Route::get('/', [
    'uses'=>"WelcomeController@getWelcome"
]);
Route::get('/townships',[
    'uses'=>'WelcomeController@getTownships',
    'as'=>'townships'
]);
Route::get('/city/{id}/teams',[
    'uses'=>'WelcomeController@getTeamsList',
    'as'=>'city.teams'
]);

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cities', 'HomeController@getCities')->name('cities');

Route::post('/city/add',[
    'uses'=>'HomeController@postAddCity',
    'as'=>'city.add'
]);
Route::get('/city/{id}/delete',[
    'uses'=>'HomeController@getDeleteCity',
    'as'=>'city.delete'
]);
Route::post('/city/update',[
    'uses'=>'HomeController@postUpdateCity',
    'as'=>'city.update'
]);
Route::get('/rescue/teams',[
    'uses'=>'HomeController@getRescueTeams',
    'as'=>'rescue.teams'
]);
Route::post('/rescue/team/add',[
    'uses'=>'HomeController@postAddTeam',
    'as'=>'team.add'
]);
Route::get('/rescue/team/search',[
    'uses'=>'HomeController@getSearchTeam',
    'as'=>'search.team'
]);
Route::get('/rescue/team/{id}/delete',[
    'uses'=>'HomeController@getDeleteTeam',
    'as'=>'rescue.team.delete'
]);
Route::post('/rescue/team/update',[
    'uses'=>'HomeController@postUpdateTeam',
    'as'=>'rescue.team.update'
]);