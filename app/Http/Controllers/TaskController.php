<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
 public function taskList() {
    return view('task.index');
 }

 public function showTask() {
    return view('task.show');
 }
}
