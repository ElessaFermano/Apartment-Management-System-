@extends('unit.layout')
@section('content')
<div class="card-header">
    <center><h1>List of Units</h1></center>
    <link rel="stylesheet" href="dashboard/css.unit.css">
</div>

<div class="unit-container">
    <div class="unit-column">
        <div class="unit">
            <h4>Unit No. 001</h4>
            <img src="unitsss/image/rm1.jpg" alt="This is a picture of room 1." style="width:100%;">
            <p><b>P10,000.00 Monthly Rent</b></p>
            <button class="btn btn-success btn-sm check-in-btn" title="Check In">
                <i class="fa fa-plus" aria-hidden="true"></i> Check In
            </button>
        </div>

        <div class="unit">
            <h4>Unit No. 003</h4>
            <img src="unitsss/image/rm2.jpg" alt="This is a picture of room 2." style="width:100%;">
            <p><b>P14,000.00 Monthly Rent</b></p>
            <button class="btn btn-success btn-sm check-in-btn" title="Check In">
                <i class="fa fa-plus" aria-hidden="true"></i> Check In
            </button>
        </div>
        <div class="card-body">
            <a href="{{ url('/home') }}" class="btn btn-danger btn-sm" title="Back">
                <i class="fa fa-plus" aria-hidden="true"></i> Back
            </a>
        </div>
   </div>

    <div class="unit-column">
        <div class="unit">
            <h4>Unit No. 002</h4>
            <img src="unitsss/image/rm3.jpg" alt="This is a picture of room 3." style="width:100%;">
            <p><b>P14,000.00 Monthly Rent</b></p>
            <button class="btn btn-success btn-sm check-in-btn" title="Check In">
                <i class="fa fa-plus" aria-hidden="true"></i> Check In
            </button>
        </div>
        <div class="unit-column">
            <div class="unit">
                <h4>Unit No. 004</h4>
                <img src="unitsss/image/rm4.jpg" alt="This is a picture of room 4." style="width:100%;">
                <p><b>P14,000.00 Monthly Rent</b></p>
                <button class="btn btn-success btn-sm check-in-btn" title="Check In">
                    <i class="fa fa-plus" aria-hidden="true"></i> Check In
                </button>
            </div>

    </div>
    
</div>

<style>
    .unit-container {
    display: flex;
    justify-content: space-around;
}

.unit-column {
    flex: 0 0 45%;
}

.unit {
    margin: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
}
</style>


@endsection
