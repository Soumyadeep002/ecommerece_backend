<?php

namespace App\Http\Controllers\admin;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index(){
        $customers = Customer::with('getData')->get();
        
        $title = "Customers";
        $url = "/";
        $data = compact("title", 'url', 'customers');
        return view("customer")->with($data);
  
    }

    public function customerRegister(Request $request){
        $customer = new Customer;

        $customer->cid = rand(1000000000, 9999999999);
        $customer->fname = $request['fname'];
        $customer->lname = $request['lname'];
        $customer->email = $request['email'];
        $customer->phone = $request['phone'];
        $customer->password = md5($request['password']);

        $customer->save();
    }

    public function customerProfile($cid){
        $customer = Customer::with('getData')->find($cid);
        $title = "Customer Profile";
        $url = "/";
        $data = compact('title', 'url','customer');
        return view('customerprofile')->with($data);
    }
}
