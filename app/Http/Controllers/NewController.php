<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    //
    public function create(){
      
        return redirect()->route('post.show');
    }
    public function show(){
        return "show baif viet";

    }
    public function update($id){
        return "sua baif viet ".$id; 
    }
    public function delete($id){
        return "xoa baif viet ".$id;
    }

}
