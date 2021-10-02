<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'class_room_id',
        'name',
        'coef',
        'duration',
        'semester_id'
    ];

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function content()
    {
        return $this->hasMany(CourseContent::class);
    }

    public function courseResults()
    {
        return $this->hasMany(CourseResult::class);
    }

    public function timeTable()
    {
        return $this->belongsToMany(Timetable::class,'course_timetable')->withPivot('start_time', 'end_time','status','days')->withTimestamps();
    }
}
