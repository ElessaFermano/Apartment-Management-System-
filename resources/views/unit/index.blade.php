@extends('unit.layout')
@section('content')
    <!-- <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card"> -->
                    <div class="card-header">
                       <center><h1>List of Units</h1></center> 
                    </div>
                    <!-- <div class="row">
                        <div class="column">
                            <h4>Unit No. 001</h4>
                            @php
                                $unit = auth()->user()->unit; // Assuming 'unit' is the relationship method in your User model
                            @endphp
                            @if($unit && $unit->unit_1)
                                <img src="{{ asset('storage/' . $unit->unit_1)}}" alt="This is a picture of room 1." style="width:700px;">
                            @else
                                <img src="" alt="This is a picture of room 1." style="width:700px;">
                                <p><b>P10,000.00 Monthly Rent</b></p>
                            @endif
                        </div>
                    </div> -->
                                
                                <h4>Unit No. 001</h4>
                                <img src="unitsss/image/rm1.jpg" alt="This is a picture of room 1." style="width:500px;">
                                <p><b>P10,000.00 Monthly Rent</b></p>

                                
                                <h4>Unit No. 002</h4>
                                <img src="unitsss/image/rm2.jpg" alt="This is a picture of room 2." style="width:500px;">
                                <p><b>P20,000.00 Monthly Rent</b></p>

                                
                                <h4>Unit No. 003</h4>
                                <img src="unitsss/image/rm3.jpg" alt="This is a picture of room 3." style="width:500px;">
                                <p><b>P15,000.00 Monthly Rent</b></p>

            
                    <style>
                        .column{
                         float: left;
                         width: 33.33%;
                         padding: 5px;
                        }
                    </style>
                    
                        </div>
                        </div>
                        
                        <br>
                        <br>
                        <div class="card-body">
                        <a href="{{ url('/unit/create') }}" class="btn btn-success btn-sm" title="Add New Unit">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <a href="{{ url('/home') }}" class="btn btn-danger btn-sm" title="Back">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
                    </div>
                  
@endsection