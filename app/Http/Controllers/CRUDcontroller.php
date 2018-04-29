<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRUDcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
    public function index()
    {
       return view('user_reges');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_reges');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 		/*$user=new user;
			$user->title=$r->title;
			$user->email=$r->email;
			$user->passwod=$r->password;
			$user->section=$r->section;
			$user->year_academic=$r->year_academic;
			$user->Gender=$r->Gender;
           	$user->phone=$r->phone;
			$user->street=$r->street;
			$user->city=$r->city;
			$user->country=$r->country;
			$user->website=$r->website;
			$user->nationality=$r->nationality;
			$user->ss=$r->ss;
   			$user->save();*/
		user::create($request->all());
	   return view('user_login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('user_reges');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
