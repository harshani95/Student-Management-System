@extends('layout')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2 style= "color: #192a56;">Enrollment Application</h2>
                    </div><br>
                    <div class="card-body">
                        <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title=" New Enrollment">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Enrollment
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Enrollment Number</th>
                                        <th>Batch</th>
                                        <th>Student</th>
                                        <th>Join Date</th>
                                        <th>Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($enrollments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->enrollment_no }}</td>
                                        <td>{{ $item->batch->name }}</td>
                                        <td>{{ $item->student->name}}</td>
                                        <td>{{ $item->join_date }}</td>
                                        <td>{{ $item->fee }}</td>
 
                                        <td>
                                            <a href="{{ url('/enrollments/' . $item->id) }}" title="View Enrollment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" title="Edit Enrollment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/enrollments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Enrollment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
@endsection