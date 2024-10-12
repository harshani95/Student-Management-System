@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h3 style="color: #353b48;">Batch Details</h3>
</div>
  <div class="card-body">
   
        <div class="card-body">
        <p class="card-text">Batch Name : {{ $batches->name }}</p>
        <p class="card-text">Course Name : {{ $batches->course->name  }}</p>
        <p class="card-text">Start Date : {{ $batches->start_date }}</p><br>
        <a href="{{ url('/batches') }}" class="btn btn-warning">Back to home</a>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection