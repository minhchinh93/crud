<?php

namespace App\Http\Controllers;

use App\Models\product_type;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\Input;

use function PHPSTORM_META\type;

class productcontroller extends Controller
{
    //
    public function getinsert(){ 
        
        $user_ids= users::all();

        return view('product.add',['shows'=>$user_ids]);
                    
    }

    public function getupdate(){ 
        
        $user_ids= users::all();

        return view('product.add',['shows'=>$user_ids]);
                    
    }


         
     public function update(Request $req,$id){
                $name = $req->input('name');
                $user_id = $req->input('user_id');
                $update=DB::table('products')->where('id',$id)->update([
                    'name'=> $name,
                    'user_id'=>$user_id
                ]); 
                return redirect()->route('product.show');
            }
     
        public function insert(Request $req){
                //   $name = Input::get('name');
                  $name = $req->input('name');
                  $user_id = $req->input('user_id');
                //   $user_id = Input::get('user_id');
        
               $b= DB::table('products')->insert([
                    'name'=> $name,
                    'user_id'=> $user_id,
                    'slug'=> Str::slug($name,'-'),
                ]);
              return redirect()->route('product.show');
        
                
            }
        
    
 



public function show(){
    $show= DB::table('products')->get();
    $jion= DB::table('products')->join('users','users.id','=','products.user_id')
    ->select('users.name','products.slug','products.id')
    ->get();
    $get= DB::table('products')->where('user_id','>=',2)->get();
    $getlike= DB::table('products')->where('name','like','%as%')->get();
    $whereall = DB::table('products')->where([
        ['name','like','%an%'],
        ['user_id','=',4]
    ])->get();
    $whereor = DB::table('products')->where('name','like','%an%')->orWhere('user_id','2')->get();


    $groupby = DB::table('products')
                ->groupBy('name')
                ->having('user_id', '>','0')
                ->get();



 $update=DB::table('products')->where('id',2)->update([
     'name'=> 'may tinh ban'
 ]);       
    return view('product.index',['shows'=> $jion]);
}


public function delete($id){
    $delete=DB::table('products')->where('id',$id)->delete();
    return redirect()->route('product.show');
}
   
}
