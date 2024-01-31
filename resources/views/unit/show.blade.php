@extends('unit.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Units Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <!-- <h5 class="card-title">Monthly Rent : {{ $unit->monthly_rent }}</h5>
        <p class="card-text">Unit Number : {{ $unit->unit_no }}</p>
        <p class="card-text">Floor Number : {{ $unit->floor_no }}</p> -->
  </div>
       
    </hr>
    <a href="{{ url('/unit') }}" class="btn btn-danger btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
  </div>
</div>