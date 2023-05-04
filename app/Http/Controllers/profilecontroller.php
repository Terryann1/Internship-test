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
 // public function store(Request $Request){
   // $first_name=$Request['first_name'];
   // $last_name=$Request['Last_name'];
  //  $phone_number=$Request['phonenumber'];


 // }
}
