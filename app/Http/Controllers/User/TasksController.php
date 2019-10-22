<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Task\TaskStoreRequest;
use App\Http\Requests\Task\TaskUpdateRequest;
use App\Task;

class TasksController extends Controller{
    
    public function index(Request $request){
        
        $tasks = Task::orderBy('id', 'DESC')->where('user_id', auth()->id())->paginate(7);
            
        return [
            'pagination' =>[
                'total' => $tasks->total(),
                'current_page' => $tasks->currentPage(),
                'per_page' => $tasks->perPage(),
                'last_page' => $tasks->lastPage(),
                'from' => $tasks->firstItem(),
                'to'   => $tasks->lastItem(),
            ],
            'tasks' => $tasks
        ];
    }

    public function store(TaskStoreRequest $request){        
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->user_id = auth()->id();
        $task->save();

        return $task;
    }

    public function update(Request $request, $id) {
        $task = Task::find($id)->update($request->all());

        return $task;
    }
   
    public function destroy($id){
        $task = Task::findOrFail($id);
        $task->delete();

    }
}
