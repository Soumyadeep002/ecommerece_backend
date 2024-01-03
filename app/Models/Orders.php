<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $primary_key = "oid"; 

    function getProduct(){
        return $this->belongsTo('App\Models\Products', 'pid');
    }
}
