<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productTypeController extends Controller
{
    //
   
    protected function insert(){
        DB::table('type_products')->insert([
                     'name'=>'xe oto',
                     'description'=>'laf phuong tien di lai',
                     
        ]);
        return 'ok';
    }
}
