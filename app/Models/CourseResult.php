<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'course_id',
        'name'
    ];

}
