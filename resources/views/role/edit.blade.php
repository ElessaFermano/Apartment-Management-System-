@extends('role.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Users Information</div>
  <div class="card-body">
      
      <form action="{{ url('role/' .$role->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <input type="hidden" name="id" id="id" value="{{$role->id}}" id="id" />
        <label>Role</label></br>
        <input type="text" name="role" id="role" value="{{$role->role}}" class="form-control"></br>
        <label>Full Name</label></br>
        <input type="text" name="name" id="name" value="{{$role->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$role->email}}" class="form-control"></br>
        

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop