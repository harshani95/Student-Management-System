@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h3 style="color: #353b48;">Course Details</h3>
</div>
  <div class="card-body">
   
        <div class="card-body">
        <p class="card-text">Name : {{ $courses->name }}</p>
        <p class="card-text">Syllabus : {{ $courses->syllabus }}</p>
        <p class="card-text">Start Date : {{ $courses->start_date }}</p><br>
        <a href="{{ url('/courses') }}" class="btn btn-warning">Back to home</a>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection