<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $guaeded=[];

    protected $hiden= [
        'password','token'
    ];

    public function products(){
           return $this->hasMany(product::class, 'user_id','id');
    }



}
