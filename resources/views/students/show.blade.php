@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h3 style="color: #353b48;">Student Details</h3>
</div>
  <div class="card-body">
   
        <div class="card-body">
        <p class="card-text">Name : {{ $students->name }}</p>
        <p class="card-text">Email : {{ $students->email }}</p>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection