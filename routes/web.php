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

Route::get('/', 'forecastsController@show');
Route::post('forecasts', 'forecastsController@forecasts');

Route::middleware(['login'])->group(function () {
	Route::get('ورود', 'userController@show');
	Route::post('ورود', 'userController@mobileChecker');
	Route::get('ثبت-نام', 'userController@registerShow');
	Route::post('ثبت-نام', 'userController@activation');
	Route::get('رمز-ورود', 'userController@passShow');
	Route::post('رمز-ورود', 'userController@login');
	Route::get('فراموشی-رمز', 'userController@forgetShow');
	Route::post('فراموشی-رمز', 'userController@forget');
});
Route::middleware(['mustLogin:0'])->group(function () {
	Route::get('خروج', 'userController@quit');
});

Route::middleware(['origin'])->group(function () {
});

Route::get('admin', function () {
    return redirect('admin/new-match');
});
Route::get('admin/new-team', 'teamController@addForm')->middleware('mustLogin:1-2');
Route::post('admin/new-team', 'teamController@insert')->middleware('mustLogin:1-2');
Route::get('admin/teams/{page}', 'teamController@allTeams')->middleware('mustLogin:1-2');
Route::get('admin/new-match', 'matchController@addForm')->middleware('mustLogin:1-2');
Route::post('admin/set-match/{id?}', 'matchController@insert_update')->middleware('mustLogin:1-2');
Route::get('admin/matches/{page}', 'matchController@allMatches')->middleware('mustLogin:1-2');
Route::get('admin/edit-matche/{id}', 'matchController@editMatch')->middleware('mustLogin:1-2');
Route::get('admin/new-league', 'leagueController@addForm')->middleware('mustLogin:1-2');
Route::post('admin/new-league', 'leagueController@addLeague')->middleware('mustLogin:1-2');
Route::get('admin/leagues/{page}', 'leagueController@allLeagues')->middleware('mustLogin:1-2');
Route::get('admin/team-league', 'leagueController@teamForm')->middleware('mustLogin:1-2');
Route::post('admin/team-league', 'leagueController@teamLeague')->middleware('mustLogin:1-2');
