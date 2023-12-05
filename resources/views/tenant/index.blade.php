@extends('tenant.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Tenant</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/tenant/create') }}" class="btn btn-success btn-sm" title="Add New Tenant">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Phone Number</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tenant as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->first_name }}</td>
                                        <td>{{ $item->last_name }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->age }}</td>
                                        <td>{{ $item->phone_no }}</td>
 
                                        <td>
                                            <a href="{{ url('/tenant/' . $item->id) }}" title="View Tenant"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/tenant/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/tenant' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Tenant" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ url('/home') }}" class="btn btn-danger btn-sm" title="Add New Tenant">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection