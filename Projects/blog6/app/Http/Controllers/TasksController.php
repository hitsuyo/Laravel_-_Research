<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use DB;

class TasksController extends Controller
{
    public function index()
    {
		// $tasks = DB::table('tasks')->get();
		$tasks = Task::all();
		return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
    	// $task = DB::table('tasks')->find($id);
    	return view('tasks.show', compact('task'));
    }

    // episode 11
}
