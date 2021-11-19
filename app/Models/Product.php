<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $guaeded= [];

    public function user(){
       return $this->belongsTo(users::class, 'id', 'user_id');
    }
}
