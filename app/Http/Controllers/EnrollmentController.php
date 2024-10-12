<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Enrollment;
use App\Models\Batch;
use App\Models\Student;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    
    public function index() : View
    {
        
        $enrollments = Enrollment::all();
        return view ('enrollments.index')->with('enrollments', $enrollments);
    }

    
    public function create()
    {
        $batches = Batch::pluck('name', 'id');
        $students = Student::pluck('name', 'id');
        return view('enrollments.create', compact('batches', 'students'));
    }

    
    public function store(Request $request) : RedirectResponse
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment Addedd!');
    }

    
    public function show(string $id) : View
    {
        $enrollment = Enrollment::find($id);
        return view('enrollments.show')->with('enrollments', $enrollment);
    }

    
    public function edit(string $id) : View
    {

        $enrollments = Enrollment::find($id);
        $batches = Batch::pluck('name', 'id');
        $students = Student::pluck('name', 'id');
        return view('enrollments.edit',  compact('enrollments', 'batches', 'students'));
    }

    
    public function update(Request $request, string $id) : RedirectResponse
    {
        $enrollment = Enrollment::find($id);
        $input = $request->all();
        $enrollment->update($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment Updated!'); 
    }

    
    public function destroy(string $id) : RedirectResponse
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'Enrollment deleted!'); 
    }
}
