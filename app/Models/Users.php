<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Authenticatable
{
    public function projects() {
        return $this->hasMany(Projects::class);
    }

    public function tasks() {
        return $this->hasMany(Tasks::class);
    }

    public function joinedProjects() {
        return $this->hasMany(ProjectsUsers::class);
    }
}
