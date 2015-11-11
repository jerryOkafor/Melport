<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class Front extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //this is the index view
      return view('home',array(
	  'title'=>'Welcome'
	  ))->with('message','Welcome back');
    }

     public function resetPasswordView()
    {
        //this is the index view
      return view('passwordReset',array('title'=>'Welcome'));
    }
  
    
    //pm function
    public function pm()
      {
      //return the pm view
      return view('pmDashboard',array(
	  'title' =>'PM | Welcome',
	  'reports' => \App\PmReport::all(),
	  'locations' => \App\LocationsForPm::all()
	      )
	      );
      }

       //cm function
    public function cm()
      {
      //return the pm view
      return view('cmDashboard',array(
	  'title'=>'CM | Welcome',
	  'reports'=> \App\CmReport::all(),
	  'locations' => \App\Location::all()
	      )
	      );
      }


    //this function controls logut
    public function logout() {
      Auth::logout();
        return Redirect::intended('/');
    }

  public function login()
    {
    return view('home',array('title'=>'Welcome'));
    }
  public function register()
    {
      if(Request::isMethod('post'))
	{
	User::create([
	   'name' =>  Request::get('name'),
	    'email' => Request::get('email'),
	    'password' => bcrypt(Request::get('password')),
	]);
	}
	return Redirect::intended('/');
    
    }
    

  //this function authenticates a user
  public function authenticate()
    {
      if(Auth::attempt(['email'=>Request::get('email'),'password'=>Request::get('password')]))
	{
	return redirect()->intended('/')
		->with('message','Login Succesful');
	}
            else
	{
	      return redirect()->intended('/')
		      ->with('message','Login Failed, Bad Username and/or Password Combination');
	}
      
    }
    
  public function resetPassword()
    {
    
    
    }
    
}
