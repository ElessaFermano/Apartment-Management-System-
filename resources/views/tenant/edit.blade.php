@extends('tenant.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Tenant Page</div>
  <div class="card-body">
      
      <form action="{{ url('tenant/' .$tenant->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$tenant->id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="first_name" id="first_name" value="{{$tenant->first_name}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="last_name" id="last_name" value="{{$tenant->last_name}}" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="gender" id="gender" value="{{$tenant->gender}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$tenant->age}}" class="form-control"></br>
        <label>Phone Number</label></br>
        <input type="text" name="phone_no" id="phone_no" value="{{$tenant->phone_no}}" class="form-control"></br>
        <label>Unit IDr</label></br>
        <input type="text" name="unit_id" id="unit_id" value="{{$tenant->unit_id}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop