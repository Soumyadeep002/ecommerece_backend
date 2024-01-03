@extends('layouts.main')
@section('main-container')   

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Customers</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Customers</li>
                        </ol>
                   
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Customer List
                            </div>
                            <div class="card-body">

                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>City</th>
                                            <th>Order placed</th>
                                            <th>Action</th>>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>City</th>
                                            <th>Order placed</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($customers as $customer)
                                        
                                                           
                                        <tr>
                                            <td>{{$customer->cid}}</td>
                                            <td>{{$customer->fname." ".$customer->lname}}</td>
                                            <td>{{$customer->email}}</td>
                                            <td>{{$customer->phone}}</td>  
                                            @if ($customer->getdata == null)
                                                
                                            <td></td>
                                            @else
                                                <td>{{$customer->getdata->address1}}</td>
                                            
                                            @endif                                     
                                            <td></td>
                                            <td class="">
                                                <a href="/customer/{{$customer->cid}}" class="btn btn-primary">Profile</a>
                                                
                                            </td>
                                        </tr>
                                        @endforeach  

                                    </tbody>
                                </table>

                              
                            </div>
                        </div>
                    </div>

@endsection