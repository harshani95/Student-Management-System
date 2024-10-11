@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h2 style="color: #718093;">Update Batch</h2></div>
  <div class="card-body">
      
      <form action="{{ url('batches/' .$batches->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" />
        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control"></br>
        <label>Course Name</label></br>
        <input type="text" name="course_id" id="course_id" value="{{$batches->course_id}}" class="form-control"></br>
        <label>Start Date</label></br>
        <input type="text" name="start_date" id="start_date" value="{{$batches->start_date}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success">
        <a href="{{ url('/batches') }}" class="btn btn-danger">Cancel</a>

    </br>
    </form>
   
  </div>
</div>
 
@stop