@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h3 style="color: #353b48;">Payment Details</h3>
</div>
  <div class="card-body">
   
        <div class="card-body">
        <p class="card-text">Enrollment Number: {{ $payments->enrollment->enrollment_no }}</p>
        <p class="card-text">Paid Date : {{ $payments->paid_date }}</p>
        <p class="card-text">Amount  : {{ $payments->amount }}</p><br>
        <a href="{{ url('/payments') }}" class="btn btn-warning">Back to home</a>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection