<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Models\UsersProjects;

class TasksController extends Controller
{
    public function Add(Request $request) {
        $validatedData = $request->validate([
            'task_name'=> 'required|unique:tasks|max:255',
            'hours'=>'required',
        ]);

        UsersProjects::firstOrCreate([
            'user_id' => $request->user_id,
            'project_id' => $request->project_id,
        ]);

        Tasks::insert([
            'task_name' => $request->task_name,
            'hours' => $request->hours,
            'user_id' => $request->user_id,
            'project_id' => $request->project_id,
        ]);

        return Redirect()->back()->with('success', 'Task Inserted Successfully');
    }
}
