<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'week_number',
        'class_room_id'
    ];

    public function classRoom()
    {
        return $this->belongsTo(classRoom::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class,'course_timetable')->withPivot('start_time', 'end_time','status','days')->withTimestamps();
    }
}
