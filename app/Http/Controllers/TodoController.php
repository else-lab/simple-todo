<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return view('todo.index', ['todos'=> $todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $todo = Todo::create([
            'title'=> $request->input('title'),
            'description' => $request->input('description'),
            'is_complete' => $request->boolean('is_complete')
        ]);

        return redirect('/todo'); 

    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
 
        //return view('todo.edit')->with('todo', $todo);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        
        return view('todo.edit')->with('todo', $todo);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
    
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->is_complete = $request->boolean('is_complete');
        $todo->save();
        return redirect('/todo');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
 
        $todo->delete();
        return redirect('/todo');
    
    }
}
