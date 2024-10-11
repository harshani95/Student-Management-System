@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">
  <h2 style="color: #40739e;"> New Enrollment</h2>
</div>
  <div class="card-body">
      
      <form action="{{ url('/enrollments') }}" method="post">
        {!! csrf_field() !!}
        <label>Enrollment Number</label></br>
        <input type="text" name="enrollment_no" id="enrollment_no" class="form-control"></br>
        <label>Batch Name</label></br>
        <select name="batch_id" id="batch_id" class="form-control">
          @foreach($batchs as $id => $name)
          <option value="{{ $id }}">{{ $name }}</option>
          @endforeach()
        </select></br>
        
        <label>Student Name</label></br>
        <select name="student_id" id="student_id" class="form-control">
          @foreach($students as $id => $name)
          <option value="{{ $id }}">{{ $name }}</option>
          @endforeach()
        </select></br>

        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success">
        <a href="{{ url('/enrollments') }}" method="post"class="btn btn-danger">Cancel</a></br>
    </form>
  </div>
</div>
 
@stop