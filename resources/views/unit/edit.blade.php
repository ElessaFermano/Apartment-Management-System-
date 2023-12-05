@extends('unit.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Units Page</div>
  <div class="card-body">
      
      <form action="{{ url('unit/' .$unit->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$unit->id}}" id="id" />
        <label>Monthly Rent</label></br>
        <input type="text" name="monthly_rent" id="monthly_rent" value="{{$unit->monthly_rent}}" class="form-control"></br>
        <label>Unit Number</label></br>
        <input type="text" name="unit_no" id="unit_no" value="{{$unit->unit_no}}" class="form-control"></br>
        <label>Floor Number</label></br>
        <input type="text" name="floor_no" id="floor_no" value="{{$unit->floor_no}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop