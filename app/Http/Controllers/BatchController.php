<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Batch;
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
        return view('batches.create');
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
        $batch = Batch::find($id);
        return view('batches.edit')->with('batches', $batch);
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
