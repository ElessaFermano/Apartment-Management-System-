@extends('unit.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Units Page</div>
  <div class="card-body">
      
      <form action="{{ url('unit/' .$unit->id)  }}" enctype="multipart/form-data"  method="post">
        {!! csrf_field() !!}
        @method("PATCH")
       
            <strong>Choose Photo</strong>
            <br>
            <input type="file" name="unit_1" class="form-control-file">    
  
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop