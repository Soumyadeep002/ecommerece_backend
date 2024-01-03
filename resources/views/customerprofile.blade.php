@extends('layouts.main')
@section('main-container')   

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Customers Profile</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">{{$customer->fname." ".$customer->lname." "."(id: ".$customer->cid.")"}}</li>
                        </ol>
                   
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Profile
                            </div>
                            <div class="card-body">

                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Field</th>
                                            <th>Data</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Field</th>
                                            <th>Data</th>   
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                 
                                        
                                                           
                                        <tr>
                                            <td>Customer ID</td>
                                            <td>{{$customer->cid}}</td>
                                        </tr>
                                        <tr>
                                            <td>Customer Name</td>
                                            <td>{{$customer->fname." ".$customer->lname}}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                            <td>{{$customer->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email Address</td>
                                            <td>{{$customer->email}}</td>
                                        </tr>
                                        
                                       
                                        <tr>
                                            <td>Address Line 1</td>
                                            <td>{{$customer->getdata->address1}}</td>
                                        </tr>
                                       
                                        <tr>
                                            <td>Address Line 2</td>
                                            <td>{{$customer->getdata->address2}}</td>
                                        </tr>
                                        <tr>
                                            <td>Pin Code</td>
                                            <td>{{$customer->getdata->pincode}}</td>
                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td>{{$customer->getdata->city}}</td>
                                        </tr>
                                        <tr>
                                            <td>state</td>
                                            <td>{{$customer->getdata->state}}</td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td>{{$customer->getdata->country}}</td>
                                        </tr>
                                       

                                    </tbody>
                                </table>

                              
                            </div>
                        </div>
                    </div>

@endsection