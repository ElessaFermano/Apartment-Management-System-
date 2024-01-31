@extends('payment.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Payment History</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Payment History </h5>
        <p class="card-text">Amount of Payment: {{ $payment->amount }}</p>
        <p class="card-text">Date of Payment: {{ $payment->date_payment }}</p>
        <p class="card-text">Method of Payment: {{ $payment->method }}</p>
        <p class="card-text">Received by: {{ $payment->received }}</p>
        <p class="card-text">Tenant ID {{ $payment->tenant_id }}</p>
  </div>
       
    </hr>
    <a href="{{ url('/payment') }}" class="btn btn-danger btn-sm" title="Add New Payment">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
  </div>
</div>