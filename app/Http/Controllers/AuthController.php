<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
	public function register(){
		return view('register');
	}
	
	public function welcome(Request $request){
		$firstname = $request->input('txtFirsname');
     	$lastname = $request->input('txtLastname');
		$fullname = $firstname. " " .$lastname;
        return view('welcome',['fullname' => $fullname]);
	}
	
}
