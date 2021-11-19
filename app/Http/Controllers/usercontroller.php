<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
    //
    protected function insert(){
        DB::table('users')->insert([
            'name'=>'nguyen minh n',       
            'email'=>'cheeeeee000@gmail.com',
            'password'=>bcrypt('1234@'),           
        ]);
        
    }
}
