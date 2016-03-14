<?php

namespace Cfc\Http\Controllers;

use DB;
use Cfc\Models\User;
use Cfc\Http\Requests;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    

    
    public function getProfileResult(Request $request){

    	$query = $request->input('query');

    	if ( !$query ) {
    		return redirect()->route('home');
    	}


    	$profiles = User::where('uName', 'LIKE', "%{$query}%")
    		->get();


    	return view('search.profile')->with('profiles', $profiles);
    }


}
