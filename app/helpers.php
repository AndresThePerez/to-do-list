<?php

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Projects;

if(!function_exists("retrieveListOfPeople")){

    function retrieveListOfPeople($id){

        $string = "";
        $users = Projects::where('projects.id', $id)
        ->leftJoin('usersprojects', 'projects.id', '=', 'usersprojects.project_id')
        ->leftjoin('users', 'users.id', '=', 'usersprojects.user_id')
        ->select('users.name') 
        ->get();

        foreach($users as $user) {
            $string .= $user->name . ", ";
        }

        return rtrim($string, ", ");
    }
}

if(!function_exists("totalHours")){

    function totalHours($id){

        $total = Projects::where('projects.id', $id)
        ->Join('tasks', 'projects.id', '=', 'tasks.project_id')
        ->sum('tasks.hours');

        return $total;
    }
}

if(!function_exists("getName")){

    function getName($id){

        $name = Users::where('users.id', $id)
        ->select('users.name')
        ->get();

        return $name;
    }
}