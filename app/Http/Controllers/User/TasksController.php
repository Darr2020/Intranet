<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;

class TasksController extends Controller{
    
    public function index(){
        $titulo = "Mis tareas";
        $tasks = Task::where('user_id', auth()->user()->id)->get();
        return view('users.tasks.index', compact('tasks', 'titulo'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request){
        $task = Task::create($request->all());

        return $task;
    }

   
    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id) {
        $task = Post::find($id);        
        $task->fill($request->all())->save();

        return $task;
    }
   
    public function destroy($id){
        $task = Task::find($id);
        $task->delete();

    }
}
