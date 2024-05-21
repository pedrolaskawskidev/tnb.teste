<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Employee;
use App\Models\Task;
use App\Services\TasksSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    private $taskScheduler;

    public function __construct(TasksSchedule $taskScheduler){
        $this->taskScheduler = $taskScheduler;
    }
    
    public function index()
    {
        
        $tasks = Task::all();
        // $workHours = $this->taskScheduler->WorkList();

        return view('task.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        $workHours = $this->taskScheduler->WorkList();

        return view('task.create', ['employees' => $employees, 'days' => $workHours['days'], 'hours' => $workHours['hours']]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        $data = $request->all();

        $data['date'] = Carbon::createFromFormat('d/m/Y', $data['date'])->format('Y-m-d');
        Task::create($data);
        return redirect()->route('task.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employees = Employee::all();
        $task = Task::findOrFail($id);
        $workHours = $this->taskScheduler->WorkList();

        return view('task.create', ['employees' => $employees, 'days' => $workHours['days'], 'hours' => $workHours['hours'], 'tasks' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {
        $data = $request->except('_token', '_method');
      
        $data['date'] = Carbon::createFromFormat('d/m/Y', $data['date'])->format('Y-m-d');

        $task = Task::findOrFail($data['id']);
        $task->update($data);

        return redirect()->route('task.index');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('task.index');
    }
}
