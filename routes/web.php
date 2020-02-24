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

// Route::get('/','HomeController@index');
// Route::get('php','HomeController@phpPage');
// Route::get('js','HomeController@jsPage');

Route::get('/','ReceipeController@index');

// Route::get('/', function () {
//     return view('home')->With('name','This is Home Page');
// });

// Route::get('php', function () {
// 	$name = 'This is PHP Home Page';
// 	$title = 'PHP Page';
//     return view('php',compact('name','title'));
// });

// Route::get('js', function () {
//     return view('js',[
//     	'title' => 'JS Page',
//     	'name' => 'This is JavaScript Home Page',
//     	'data' => array('apple','orange','pineapple')
//     ]);
// });

