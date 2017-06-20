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
    return view('login');
});
// login page
Route::get('login/', ['as'=>'login','uses'=>'UserController@index']);
Route::post('login/', ['as'=>'login','uses'=>'UserController@doLogin']);
Route::get('logout/',['as'=>'logout','uses'=>'UserController@logOut']);

//dashboard page
Route::get('dashboard/', ['as'=>'dashboard','uses'=>'DashboardController@index']);

//project page
Route::get('project/', ['as'=>'project','uses'=>'ProjectController@index']);
Route::get('searchProject/', ['as'=>'searchProject','uses'=>'ProjectController@search']);
Route::get('addProject/',['as'=>'addProject','uses'=>'ProjectController@add']);
Route::post('addProject/',['as'=>'addProject','uses'=>'ProjectController@insert']);
Route::get('updateProject/{id}',['as'=>'editProject','uses'=>'ProjectController@edit']);
Route::post('AlterProject/', ['as'=>'AlterProject','uses'=>'ProjectController@update']);
Route::get('deleteProject/{id}',['as'=>'deleteProject','uses'=>'ProjectController@delete']);

//cultivation page
Route::get('cultivation/', ['as'=>'cultivation','uses'=>'CultivationController@index']);
Route::get('searchCultivation/', ['as'=>'searchCultivation','uses'=>'CultivationController@search']);
Route::get('addCultivation/',['as'=>'addCultivation','uses'=>'CultivationController@addCultivation']);
Route::post('addCultivation/',['as'=>'addCultivation','uses'=>'CultivationController@insertCultivation']);
Route::get('updateCultivation/{id}',['as'=>'editCultivation','uses'=>'CultivationController@editCultivation']);
Route::post('AlterCultivation/', ['as'=>'AlterCultivation','uses'=>'CultivationController@updateCultivation']);
Route::get('deleteCultivation/{id}',['as'=>'deleteCultivation','uses'=>'CultivationController@deleteCultivation']);



