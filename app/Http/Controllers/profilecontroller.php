<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class profilecontroller extends Controller
{
    public function index(){
        $user_data=User::get();
        return view("viewprofile" ,compact('user_data'));
    }
}
