@extends('unit.layout')
@section('content')
    <!-- <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card"> -->
                    <div class="card-header">
                       <center><h1>List of Units</h1></center> 
                    </div>
                    
                        
                        <nav>
                                <h4>Unit No. 001</h4>
                                <img src="unitsss/image/rm1.jpg" alt="This is a picture of room 1." style="width:500px;">
                                <p>This room is a room. Tou ka? Brato ra, reserve na!</p>

                                <br>
                                <h4>Unit No. 002</h4>
                                <img src="unitsss/image/rm2.jpg" alt="This is a picture of room 2." style="width:500px;">
                                <p>This room is a room. Tou ka? Brato ra, reserve na!</p>

                                <br>
                                <h4>Unit No. 003</h4>
                                <img src="unitsss/image/rm3.jpg" alt="This is a picture of room 3." style="width:500px;">
                                <p>This room is a room. Tou ka? Brato ra, reserve na!</p>

                                <br>
                                <h4>Unit No. 004</h4>
                                <img src="unitsss/image/rm4.jpg" alt="This is a picture of room 4." style="width:500px;">
                                <p>This room is a room. Tou ka? Brato ra, reserve na!</p>

                        </nav>
   
                        <br>
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
                    <!-- <div class="table-responsive"> -->
                            <!-- <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Monthly Rent</th>
                                        <th>Unit Number</th>
                                        <th>Floor Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($unit as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->monthly_rent }}</td>
                                        <td>{{ $item->unit_no }}</td>
                                        <td>{{ $item->floor_no }}</td>
 
                                        <td>
                                            <a href="{{ url('/unit/' . $item->id) }}" title="View Unit"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/unit/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/unit' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table> -->
                <!-- </div>
            </div>
        </div>
    </div> -->
@endsection