@extends('unit.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Unit Page</div>
  <div class="card-body">
      
      <form action="{{ url('unit') }}" enctype="multipart/form-data" method="post">
        {!! csrf_field() !!}
        <strong>Unit 1 Photo</strong>
            <br>
            <input type="file" name="unit_1" class="form-control-file">  <br> <br>
        <button type="submit" class="btn btn-success"> Add Photo</button></br>
    </form>
   
  </div>
</div>
 
@stop