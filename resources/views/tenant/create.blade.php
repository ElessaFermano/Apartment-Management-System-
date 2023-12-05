@extends('tenant.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Tenant Page</div>
  <div class="card-body">
      
      <form action="{{ url('tenant') }}" method="post">
        {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="first_name" id="first_name" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="last_name" id="last_name" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>
        <label>Phone Number</label></br>
        <input type="text" name="phone_no" id="phone_no" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop