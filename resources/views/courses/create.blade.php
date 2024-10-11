@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">
  <h2 style="color: #40739e;"> New Course</h2>
</div>
  <div class="card-body">
      
      <form action="{{ url('courses') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Syllabus</label></br>
        <input type="text" name="syllabus" id="syllabus" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success">
        <a href="{{ url('/courses') }}" class="btn btn-danger">Cancel</a></br>
    </form>
  </div>
</div>
 
@stop