<?php

namespace App\Http\Controllers\admin;
use App\Models\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        $title = "Products";
        $url = url('/') ;

        $products = Products::all();
        $data = compact('url', 'title', 'products');
        return view('products')->with($data);
    }

    public function addForm(){
        $title = "Products";
        $action_url = "/products/add";
        $url = url('/') ;
        $data = compact('url', 'title', "action_url");
        return view('productForm')->with($data);
    }
    public function add(Request $request){
        $product = new Products;

        request()->validate([
            'p_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product->pid = rand(100000, 999999);
        $product->ptitle = $request['pname'];
        $product->description = $request['description'];
        $product->catagory = $request['catagory'];
        $product->price = $request['price'];
        $product->discount = $request['discount'];
        $product->stock = $request['stock'];
        

    // upload file      dont forgot to add " enctype="multipart/form-data"  " to the form tag in blade file

        $filename = time()."product.".$request->file('p_image')->getClientOriginalExtension();
        $file = $request->file('p_image');
        $file->storeAs('public/uploads', $filename);
        $product->p_image = $filename;
        $product->save();
        return redirect("products");
    }

    public function editView($id){
        $product = Products::find($id); 

        if (is_null($product)) {
            
            return redirect('products');
        }
        else {
            $title = "Update Product";
            $action_url = "/products/update/".$id;
            $url = url('/') ;
            $data = compact("title","url", "action_url");
            return view("productForm")->with($data);
        }
    }

    public function edit(Request $request, $id){
        $product = Products::find($id); 
        
        request()->validate([
            'p_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

       
        $product->ptitle = $request['pname'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->catagory = $request['catagory'];
        $product->discount = $request['discount'];
        $product->stock = $request['stock'];
        

        // upload file      don't forgot to add " enctype="multipart/form-data"  " to the form tag in blade file

        $filename = time()."product.".$request->file('p_image')->getClientOriginalExtension();
        $file = $request->file('p_image');
        $file->storeAs('public/uploads', $filename);
        $product->p_image = $filename;
        $product->save();
        return redirect("products");

    }
    public function delete($id){
        $product = Products::find($id);
        if (!is_null($product)) {
            $product->delete();
        }
        return redirect('products');
    }

    public function getProducts(){
        $products = Products::all();
        $data = compact("products");
        return $data;

    }

    public function getProductsByCatagory($catagory){
        $qry = '"'.$catagory.'"';
        $products = Products::where('catagory', $catagory)->get();
        $data = compact("products");
        return $data;
    }
}