<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // use HasFactory;

    protected $table = 'todos';
    public $fillable = ['name', 'is_done', 'dept', 'status', 'requestor', 'requestor_dept'];
}
