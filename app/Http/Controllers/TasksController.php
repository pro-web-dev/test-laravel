<?php

namespace App\Http\Controllers;

use App\Http\Requests\createTaskRequest;
use App\Task;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TasksController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(createTaskRequest $request)
    {
        Task::create($request->all());

        return redirect('/');
    }

    public function edit($id)
    {
        $task = Task::find($id);

        return view('tasks.edit', compact('task'));
    }

    public function update(createTaskRequest $request, $id)
    {
        $task = Task::find($id);
        $task->fill($request->all());
        $task->save();

        return redirect('/');
    }
    public function show($id)
    {
        $task = Task::find($id);

        return view('tasks.show', compact('task'));
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect('/');
    }
}
