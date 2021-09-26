<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    public function projects(){
        return $this->belongsTo(Projects::class);
    }
    public function users(){
        return $this->belongsTo(Users::class);
    }
    protected $table = 'tasks';
}
