<?php

namespace Cfc\Http\Controllers;

use Illuminate\Http\Request;

use Cfc\Http\Requests;

class DashboardController extends Controller
{
    
    public function index(){

    	return view('dashboard.home');
    }



    public function getAddEvent(){
    	return view('dashboard.addnewevent');
    }




}
