@extends('payment.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Payment History</div>
  <div class="card-body">
      
      <form action="{{ url('payment') }}" method="post">
        {!! csrf_field() !!}
        <label>Amount of Payment</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>
        <label>Date of Payment</label></br>
        <input type="text" name="date_payment" id="date_payment" class="form-control"></br>
        <label>Method of Payment</label></br>
        <input type="text" name="method" id="method" class="form-control"></br>

        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop