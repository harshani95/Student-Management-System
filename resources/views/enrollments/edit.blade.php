@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h2 style="color: #718093;">Update Enrollment</h2></div>
  <div class="card-body">
      
      <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />
        <label>Enrollment Number</label></br>
        <input type="text" name="enrollment_no" id="enrollment_no" value="{{$enrollments->enrollment_no}}" id="id"  class="form-control"/><br>
        <label>Batch Name</label></br>
        <input type="text" name="batch_id" id="batch_id" value="{{$enrollments->batch_id}}" class="form-control"></br>
        <label>Student Name</label></br>
        <input type="text" name="student_id" id="student_id" value="{{$enrollments->student_id}}" class="form-control"></br>
        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" value="{{$enrollments->join_date}}" class="form-control"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" value="{{$enrollments->fee}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success">
        <a href="{{ url('/enrollments') }}" class="btn btn-danger">Cancel</a>

    </br>
    </form>
   
  </div>
</div>
 
@stop