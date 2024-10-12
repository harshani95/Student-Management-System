<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\View\View;

class BatchController extends Controller
{
    
    public function index() : View
    {
        $batches = Batch::all();
        return view ('batches.index')->with('batches', $batches);
    }

    
    public function create()
    {   
        $courses = Course::pluck('name', 'id');
        return view('batches.create', compact('courses'));
    }

  
    public function store(Request $request) : RedirectResponse
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('batches')->with('flash_message', 'Batch Addedd!');
    }

    
    public function show(string $id) : View
    {
        $batch = Batch::find($id);
        return view('batches.show')->with('batches', $batch);
    }

    
    public function edit(string $id) : View
    {
        $batches = Batch::find($id);
        $courses = Course::pluck('name', 'id');
        return view('batches.edit', compact('batches', 'courses'));

    }

    
    public function update(Request $request, string $id) : RedirectResponse
    {
        $batch = Batch::find($id);
        $input = $request->all();
        $batch->update($input);
        return redirect('batches')->with('flash_message', 'Batch Updated!'); 
    }

    
    public function destroy(string $id) : RedirectResponse
    {
        Batch::destroy($id);
        return redirect('batches')->with('flash_message', 'Batch deleted!'); 
    }
}
