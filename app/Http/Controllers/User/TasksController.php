<?php

namespace App\Http\Controllers\User;

<<<<<<< HEAD
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
=======
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Task\TaskStoreRequest;
use App\Http\Requests\Task\TaskUpdateRequest;
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
use App\Task;

class TasksController extends Controller{
    
<<<<<<< HEAD
    public function index(){
        $titulo = "Mis tareas";
        $tasks = Task::all();
        return view('users.tasks.index', compact('tasks', 'titulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
=======
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

>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    }
}
