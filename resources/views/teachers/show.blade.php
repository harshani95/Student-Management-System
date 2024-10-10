@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h3 style="color: #353b48;">Teacher Details</h3>
</div>
  <div class="card-body">
   
        <div class="card-body">
        <p class="card-text">Name : {{ $teachers->name }}</p>
        <p class="card-text">Address : {{ $teachers->address }}</p>
        <p class="card-text">Mobile : {{ $teachers->mobile }}</p><br>
        <a href="{{ url('/teachers') }}" class="btn btn-warning">Back to home</a>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection