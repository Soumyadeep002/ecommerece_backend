<?php

namespace App\Http\Controllers\admin;
use App\Models\Orders;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $pendings = Orders::with('getProduct')->where("status", 0)->get();

        if (session()->has('admin_id')) {
            $title = "Home";
            $url = url('/') ;
            $data = compact('url', 'title', 'pendings');
            return view('index')->with($data);
        }
        else{
            return redirect('login');
        }
        
    }


}
