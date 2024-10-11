@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h2 style="color: #718093;">Update Course</h2></div>
  <div class="card-body">
      
      <form action="{{ url('courses/' .$courses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$courses->name}}" class="form-control"></br>
        <label>Syllabus</label></br>
        <input type="text" name="syllabus" id="syllabus" value="{{$courses->syllabus}}" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" value="{{$courses->duration}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success">
        <a href="{{ url('/courses') }}" class="btn btn-danger">Cancel</a>

    </br>
    </form>
   
  </div>
</div>
 
@stop