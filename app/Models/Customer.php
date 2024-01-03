<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $primaryKey = "cid"; 
  
    function getData(){
        return $this->hasone('App\Models\address', 'cid');
    }
    

    
}
