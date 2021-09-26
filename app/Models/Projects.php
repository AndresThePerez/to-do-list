<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
        'id', 'project_name', 'created_at', 'updated_at', 
    ];
    public function tasks(){
        return $this->hasMany(Tasks::class);
    }
    public function users(){
        return $this->hasMany(Users::class);
    }
}
