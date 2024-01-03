@extends('layouts.main')
@section('main-container')   

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                   
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Product List
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Catagory</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Stock</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image/th>
                                            <th>Name</th>
                                            <th>Catagory</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Stock</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($products as $product)                                      
                                        <tr>
                                            <td>{{$product->pid}}</td>
                                            @if ($product->p_image == 'image')
                                                <td>{{$product->p_image}}</td>
                                            @else
                                                <td><img width="100px" src="{{asset("storage/uploads/".$product->p_image)}}"></td>
                                            @endif
                                            <td>{{$product->ptitle}}</td>
                                            <td>{{$product->catagory}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>{{$product->stock}}</td>
                                            <td class="">
                                                <a href="/products/update/{{$product->pid}}" class="btn btn-primary">Edit</a>
                                                <a href="/products/delete/{{$product->pid}}" class="btn btn-danger ">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection