@extends('tenant.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Tenants Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Tenant </h5>
        <p class="card-text">First Name : {{ $tenant->first_name }}</p>
        <p class="card-text">Last Name : {{ $tenant->last_name }}</p>
        <p class="card-text">Gender : {{ $tenant->gender }}</p>
        <p class="card-text">Age : {{ $tenant->age }}</p>
        <p class="card-text">Phone Number : {{ $tenant->phone_no }}</p>
  </div>
       
    </hr>
    <a href="{{ url('/tenant') }}" class="btn btn-danger btn-sm" title="Add New Tenant">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
  </div>
</div>