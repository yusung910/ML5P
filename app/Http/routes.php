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

Route::get('/', function(){
  $currentUser = Auth::user();
  if(empty($currentUser)){
    $name = 'Guest';
  }else{
    $name = $currentUser->name;
  }

  return "Hello, $name!!";
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

$router->resource('posts', 'PostsController');

$router->get('register', ['uses'=>'RegisterController@create', 'as'=>'register']);
$router->post('register', ['uses'=>'RegisterController@store', 'as'=>'register']);
