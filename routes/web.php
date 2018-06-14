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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('jonny', function(){
  $data = App\User::with('pronostics')->get();
  return $data;

  $data = App\Team::with('group')->get();
  return $data;

  $data = App\Pronostic::with('homeTeam')->get();
  return $data;

  $data = App\Match::with('homeTeam', 'awayTeam')->get();
  return $data;

  $data = App\Knockout::with('matches')->get();
  return $data;

  $data = App\Group::with('matches')->get();
  return $data;

  $data = App\User::find(2)->score_h(1);
  return $data;

  $data = App\User::find(1)->pronostic(1);
  return $data;
});
