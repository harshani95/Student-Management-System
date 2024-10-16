<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><h1>Student Management System</h1></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button> 
                    </div>
                </nav>
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <!-- <a class="active" href="#home">Home</a>
                    <a href="{{url ('/students')}}">Student</a>
                    <a href="{{url ('/teachers')}}">Teacher</a>
                    <a href="{{url ('/courses')}}">Courses</a>
                    <a href="{{url ('/enrollment')}}">Enrollment</a> 
                    <a href="{{url ('/payment')}}">Payment</a> -->

                    <a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                    <a class="{{ Request::is('students') ? 'active' : '' }}" href="{{ url('/students') }}">Student</a>
                    <a class="{{ Request::is('teachers') ? 'active' : '' }}" href="{{ url('/teachers') }}">Teacher</a>
                    <a class="{{ Request::is('courses') ? 'active' : '' }}" href="{{ url('/courses') }}">Courses</a>
                    <a class="{{ Request::is('batches') ? 'active' : '' }}" href="{{ url('/batches') }}">Batches</a>
                    <a class="{{ Request::is('enrollments') ? 'active' : '' }}" href="{{ url('/enrollments') }}">Enrollment</a>
                    <a class="{{ Request::is('payments') ? 'active' : '' }}" href="{{ url('/payments') }}">Payment</a>
                </div>
            </div>
            <div class="col-md-9">

            @if (Request::is('/')) 
                    <div class="hero-image">
                        <img src="{{ asset('images/hero-image.jpg') }}" alt="Home Image"/>
                    </div>
                @endif

                     @yield('content')
            </div>
    <div>
</head>
<body>
    
</body>
</html>