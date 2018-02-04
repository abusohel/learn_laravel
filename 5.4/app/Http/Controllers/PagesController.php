<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\user;
/**
* 
*/

class PagesController extends Controller
{
	
	public function welcome()
	{
		$user = user::find(2)->passport;
		// return $user;
		return view('welcome',compact('user'));
		// return view('welcome');
	}

	public function about()
	{
		return view('about');
	}
	
}