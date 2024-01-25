@extends('unit.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Unit Page</div>
  <div class="card-body">
      
      <form action="{{ url('unit') }}" method="post">
        <input type="submit" value="Add photo" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop