<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function viewDetails()
    {
        //$userId = auth()->user()->id
        $user = User::Find(auth()->user()->id);
        return view('/User/user_details',compact('user'));
    }

    // edit post form
    public function edit()
    {
        $user = auth()->user();
        return view('User.UpdateUser',compact('user'));
    }

    //user update profile
    public function update(Request $request)
    {
        
        $user = auth()->user();
        $user->FirstName=$request->input( 'FirstName' );
        $user->LastName=$request->input( 'LastName' );
        $user->email=$request->input( 'email' );
        $user->phone=$request->input( 'phone' );
    
       
        $user->save();
        

        return redirect('/User/user_details');
    }

}
