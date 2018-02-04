<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class HomeController extends Controller
{
    //
    public function home()
	{
		// $user = user::find(2)->passport;
		// // return $user;
		// return view('home',compact('user'));
		$mobiles=user::find(1)->mobile;
		return view('home',compact('mobiles'));
	}
}
