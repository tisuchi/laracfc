<?php

namespace Cfc\Http\Controllers;

use Illuminate\Http\Request;

use Cfc\Http\Requests;

class HomeController extends Controller
{
    
    
    public function index(){
    	return view('home');
    }
}
