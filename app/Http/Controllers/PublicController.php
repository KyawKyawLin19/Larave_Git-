<?php

namespace App\Http\Controllers;

use App\Receipe;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
    	$receipes = Receipe::paginate('9');
    	return view('public.welcome',compact('receipes'));
    }

    public function show(int $id){
    	$receipe = Receipe::find($id);
    	return view('public.show',compact('receipe'));
    }

    public function login(){
    	return view('loginsample');
    }

}
