@extends('layouts.customerlayout')
@section('main-customer-content')

    <!-- Bootstrap CSS -->

    <div class="container">
        <div class="table-responsive">
            <div class="d-grid gap-2">
            <a href="{{route('customer.create')}}">    
            <button type="button" name="" id="" class="btn btn-primary float-right">
                    Add Customer
                </button></a>
            </div>
            
       
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customersalldata as $customer)
                    <tr class="">
                        <td scope="row">{{$customer->customer_name}}</td>
                        <td>{{$customer->customer_email}}</td>
                        <td>
                        @if($customer->customer_gender=='F')
                        Female
                        @elseif($customer->customer_gender=='M')
                        Male
                        @else
                        Others
                        @endif</td>
                        <td>{{$customer->customer_dob}}</td>
                        <td>{{$customer->customer_address}}</td>
                        <td><a href="{{route('customer.delete',['id'=>$customer->customer_id])}}">
                            <button type="button" class="btn btn-danger">Delete</button></a></td>
                        <td><a href="{{route('customer.edit',['id'=>$customer->customer_id])}}">
                            <button type="button" class="btn-primary">Edit</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
        
    </div>
    @endsection
