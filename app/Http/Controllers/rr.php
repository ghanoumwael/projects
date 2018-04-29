<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\User;
class rr extends Controller
{
   public function show_login()
   {return view('user_login');
   }
	
	public function qqq()
   {return view('qqq');
   }
	
	
	public function create_board()
   {return view('create_board');
   }
public function forget_password()
   {return view('forget_password');
   }	
	
	public function reset_pass(Request $r)
   {
	 $user=User::where([['email','=',$r->email],['city','=',$r->city]])->get();
	
	if($user)
	   return view('reset_pass',compact('user'));
	else {
		return view('reset_pass',compact('user'));
	}  
   }
	public function show_reges()
   {
	   return view('user_reges');
   }
	
	public function mainpage()
   {
	   return view('mainpage');
   }
		
		
		
	public function store(Request $r)
    { 		$user=new User;
			$user->title=$r->title;
			$user->email=$r->email;
			$user->password=$r->password;
			$user->section=$r->section;
			$user->year_academic=$r->year_academic;
			$user->Gender=$r->Gender;
           	$user->phone=$r->phone;
			$user->street=$r->street;
			$user->city=$r->city;
			$user->country=$r->country;
			$user->website=$r->website;
			$user->ss=$r->ss;
	 		$user->work=$r->work;
	 		$user->isactive=true;
	 		$user->birthdate=$r->birthdate;
   			$user->save();
	 return view('user_login');
    }
	
	
	
	
}
