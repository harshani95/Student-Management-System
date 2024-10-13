@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">
  <h2 style="color: #40739e;"> New Payment</h2>
</div>
  <div class="card-body">
      
      <form action="{{ url('payments') }}" method="post">
        {!! csrf_field() !!}
        <label>Enrollment No</label></br>
        <select name="enrollment_no" id="enrollment_no" class="form-control">
          @foreach($enrollments as $id => $enrollment_no)
          <option value="{{ $id }}">{{ $enrollment_no }}</option>
          @endforeach()
        </select></br>

        
        <label>Paid Date</label></br>
        <input type="text" name="paid_date" id="paid_date" class="form-control"></br>

        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success">
        <a href="{{ url('/payments') }}" class="btn btn-danger">Cancel</a></br>
    </form>
  </div>
</div>
 
@stop