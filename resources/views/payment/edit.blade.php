@extends('payment.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Payment History</div>
  <div class="card-body">
      
      <form action="{{ url('payment/' .$payment->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payment->id}}" id="id" />
        <label>Amount of Payment</label></br>
        <input type="number" name="amount" id="amount" value="{{$payment->amount}}" class="form-control"></br>
        <label>Date of Payment</label></br>
        <input type="text" name="date_payment" id="date_payment" value="{{$payment->date_payment}}" class="form-control"></br>
        <label>Method of Payment</label></br>
        <input type="text" name="method" id="method" value="{{$payment->method}}" class="form-control"></br>
        <label>Received by: </label></br>
        <input type="text" name="received" id="received" value="{{$payment->received}}" class="form-control"></br>
        <label>Tenant ID</label></br>
        <input type="text" name="tenant_id" id="tenant_id" value="{{$payment->tenant_id}}" class="form-control"></br>
        

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop