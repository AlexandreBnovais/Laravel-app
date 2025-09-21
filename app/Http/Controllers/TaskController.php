<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() 
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function create() 
    {
        return view('tasks.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        Task::create([
            'title' => $request->title
        ]);

        return redirect()->route('tasks.index');
    }

    public function edit($id) 
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id )
    {
        $task = Task::findOrFail($id);
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $task->update([
            'title' => $request->title,
        ]);

        return redirect()->route('tasks.index');
    }

    public function destroy($id) 
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }

}
