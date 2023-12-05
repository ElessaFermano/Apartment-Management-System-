@extends('unit.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Unit Page</div>
  <div class="card-body">
      
      <form action="{{ url('unit') }}" method="post">
        {!! csrf_field() !!}
        <label>Monthly Rent</label></br>
        <input type="text" name="monthly_rent" id="monthly_rent" class="form-control"></br>
        <label>Unit Number</label></br>
        <input type="text" name="unit_no" id="unit_no" class="form-control"></br>
        <label>Floor Number</label></br>
        <input type="text" name="floor_no" id="floor_no" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop