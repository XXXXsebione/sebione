@extends('tutors.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Tutor Dashboard</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/tutors/create') }}" class="btn btn-success btn-sm" title="Add New Tutor">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tutors #</th>
                                        <th>Tutors Name</th>
                                        <th>Contact #</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tutors as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tutors_id}}</td>
                                        <td>{{ $item->tutors_name }}</td>
                                        <td>{{ $item->contact_no }}</td>
                                        <td>{{ $item->email }}</td>
  
                                        <td>
                                            <a href="{{ url('/tutors/' . $item->id) }}" title="View Tutor"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/tutors/' . $item->id . '/edit') }}" title="Edit Tutor"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/tutors' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Tutor" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection