@extends('role.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Users Information</div>
  <div class="card-body">
      
      <form action="{{ url('role') }}" method="post">
        {!! csrf_field() !!}
        <label>Role </label></br>
        <input type="text" name="role" id="role" class="form-control"></br>
        <label>Full Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email </label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Password </label></br>
        <input type="text" name="password" id="password" class="form-control"></br>

        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop