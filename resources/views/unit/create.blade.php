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
        <input type="submit" value="Add photo" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop