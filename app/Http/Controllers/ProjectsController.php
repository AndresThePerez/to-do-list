<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Models\Users;
use App\Models\Projects;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProjectsController extends Controller
{
    public function index($id)
    {
        $projects = Projects::where('projects.id', $id)
        ->leftJoin('tasks', 'projects.id', '=', 'tasks.project_id')
        ->leftJoin('users', 'users.id', '=', 'tasks.user_id')
        ->select('tasks.task_name', 'tasks.hours as task_hours', 'users.name', 'projects.project_name', 'projects.id') 
        ->get();

        $users = Users::all();
        return view('projects.project', compact('projects', 'users'));
    }

    public function Add(Request $request) {
        $validatedData = $request->validate([
            'project_name'=> 'required|unique:projects|max:255',
        ]);

        Projects::insert([
            'project_name' => $request->project_name,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success', 'Project Inserted Successfully');
    }
}
