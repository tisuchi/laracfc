<?php

namespace Cfc\Http\Controllers;

use Auth;
use Cfc\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{





    public function getJoin(){
    
        return view('auth.join');
    
    }






    public function postJoin(Request $request)
    {
        
         $validator = Validator::make($request->all(), [

            'uName'     => 'required|max:100',
            'uEmail'    => 'required|unique:users|email|max:100',
            'uPassword' => 'required|min:6|max:100',
        ]);

        if ($validator->fails()) {


            return redirect('/join')
                ->withInput()
                ->withErrors($validator);

        } else{

            
            User::create([

                'uName'     => $request->input('uName'),
                'uEmail'    => $request->input('uEmail'),
                'uPassword' => bcrypt($request->input('uPassword')),
                'uActivationCode'    => bcrypt($request->input('uEmail')),
                'uFlag'    => 0,
                'uType'    => 'subscriber',

            ]);


            return redirect()
                    ->route('home')
                    ->with('info', 'You have registered successfully. Check your email for activate your account.');


        }

        
    }






    public function getLogin(){

        return view('auth.login');
    }



    public function postLogin(Request $request){




        $this->validate($request, [
            'uEmail'    => 'required',
            'password' => 'required',
        ]);


      

            if ( Auth::attempt($request->only(['uEmail', 'password'])) ) {

                return redirect()->route('dashboard')->with('info', 'You have logged in successfully');
            } 

            return redirect()->route('login')->with('info', 'Wrong email / password!') ;
        

    }







    public function logout(){

        Auth::logout();

        return redirect()
                ->route('home')
                ->with('info', 'You have logged out successfully!');
    }










}
