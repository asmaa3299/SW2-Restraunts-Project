<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getData()
    {
    
        $users = DB::table('users')->get();
        return view('/registration/getInfo', compact('users'));
        
        
    
    }
}
