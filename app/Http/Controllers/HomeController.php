<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
    	return view('home',[
    		'name' => 'This is Home Page'
    	]);
    }

    public function phpPage(){
    	$name = 'This is PHP Home Page';
		$title = 'PHP Page';
		$data = array(
    		'lesson1' => 'This is PHP Lesson1',
    		'lesson2' => 'This is PHP Lesson2',
    		'lesson3' => 'This is PHP Lesson3',
    	);
    	return view('php', compact('name', 'title', 'data'));
    }

    public function jsPage(){
    	return view('js',[
    	'title' => 'JS Page',
    	'name' => 'This is JavaScript Home Page',
    	'data' => array(
    		'lesson1' => 'This is JavaScript Lesson1',
    		'lesson2' => 'This is JavaScript Lesson2',
    		'lesson3' => 'This is JavaScript Lesson3',
    	)
    	]);
    }
}
