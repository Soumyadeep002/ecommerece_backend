@extends('layouts.main')
@section('main-container')   

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                   
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-form me-1"></i>
                                Product List
                            </div>
                            <div class="card-body">
                                <form action="{{$action_url}}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                      <label for="pname" class="form-label">Product Title</label>
                                      <input type="text" name="pname" class="form-control" id="pname" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                      <label for="price" class="form-label">Price</label>
                                      <input type="text" name="price" class="form-control" id="price">
                                    </div>
                                    <div class="mb-3">
                                      <label for="catagory" class="form-label">Choose product catagory</label>
                                      <select name="catagory" class="form-control" id="catagory"> 
                                        <option value="notchoosen">Not Choosen</option>
                                        <option value="cat1">Cat 1</option>
                                        <option value="cat2">Cat 2</option>
                                        <option value="cat3">Cat 3</option>
                                        <option value="cat4">Cat 4</option>
                                      </select>
                                    </div>
                                    <div class="mb-3">
                                      <label for="description" class="form-label">Description</label>
                                      <textarea type="text" name="description" class="form-control" id="description"></textarea>
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Total Stock</label>
                                      <input type="text" name="stock" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                      <label for="discount" class="form-label">Discount</label>
                                      <input type="text" name="discount" class="form-control" id="discount">
                                    </div>
                                    <div class="mb-3">
                                      <label for="p_image" class="form-label">Product Image</label>
                                      <input type="file" name="p_image" class="form-control" id="p_image">
                                    </div>
                               
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                            </div>
                        </div>
                    </div>

@endsection