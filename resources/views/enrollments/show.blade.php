@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h3 style="color: #353b48;">Enrollment Details</h3>
</div>
  <div class="card-body">
   
        <div class="card-body">
        <p class="card-text">Enrollment Number : {{ $enrollments->enrollment_no }}</p>
        <p class="card-text">Batch Name : {{ $enrollments->batch->name }}</p>
        <p class="card-text">Student Name : {{ $enrollments->student->name }}</p>
        <p class="card-text">Join Date : {{ $enrollments->join_date }}</p>
        <p class="card-text">Fee : {{ $enrollments->fee }}</p><br>
        <a href="{{ url('/enrollments') }}" class="btn btn-warning">Back to home</a>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection