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
        return view('user_details',compact('user'));
    }

}
