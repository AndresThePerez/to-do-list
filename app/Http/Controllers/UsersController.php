<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Projects;
use Illuminate\Support\Carbon;

class UsersController extends Controller
{
    public function index($name, $id)
    {
        $user = Users::where('users.id', $id)
        ->Join('usersprojects', 'users.id', '=', 'usersprojects.user_id')
        ->Join('projects', 'projects.id', '=', 'usersprojects.project_id')
        ->select('projects.id', 'projects.project_name', 'users.name') 
        ->get();
        return view('users.user', compact('user'));
    }

    public function Add(Request $request) {
        $validatedData = $request->validate([
            'name'=> 'required|unique:users|max:255',
        ]);

        Users::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success', 'User Inserted Successfully');
    }
}
