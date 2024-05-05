<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class TaskController extends Controller
{
 public function taskList() {
    $taskLists =  Task::orderBy('created_at', 'desc')->paginate(4);
    return view('task.index', compact('taskLists'));
 }

 public function showTask($id) {
    $task = Task::find($id);
    // dd($task);
    return view('task.show', compact('task'));
}

 public function editTask($id) {
    $task = Task::find($id);
    // dd($task);
    return view('task.edit_task', compact('task'));
 }

 public function addTask() {
    return view('task.add_task');
 }

 public function taskStore(Request $request, StoreTaskRequest $StoreTaskRequest) {
    $task = new Task();
    $task->title            =      $request->title;
    $task->description      =      $request->description;
    $task->long_description =      $request->long_description;
    $task->save();

    return redirect('/');

 }

 public function updateTask(Request $request, UpdateTaskRequest $updateTaskRequest) {
    $task = Task::find($request->id);
    $task->title            =      $request->title;
    $task->description      =      $request->description;
    $task->long_description =      $request->long_description;
    $task->save();

    return redirect('/');
 }

public function deleteTask($id) {
 $task = Task::find($id);
 $task->delete();
 return redirect('/');
}

public function completeTask($id) {
    $task = Task::findOrFail($id); // Find the task by id

    $task->forceFill(['completed' => !$task->completed])->save(); // Toggle the value of 'completed' field

    return back(); // Redirect back to the previous page
}

}
