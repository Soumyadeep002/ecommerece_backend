<?php

namespace App\Http\Controllers;
use App\Models\Orders;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(){
        $data = Orders::with('getProduct')->get();
        return $data;
       
    }
}
