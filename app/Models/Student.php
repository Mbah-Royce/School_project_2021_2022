<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'field_id',
        'user_id',
        'class_room_id',
        'gaurdian_id',
        'academic_session_id',
        'father_name',
        'mother_name',
        'profile', 
        'permanent_address',
        'current_address',
    ];

/************************** relationships ******************************/

public function user()
{
    return $this->belongsTo(User::class);
}

public function classRoom()
{
    return $this->belongsTo(ClassRoom::class);
}

public function field()
{
    return $this->belongsTo(Field::class);
}

public function guardian()
{
    return $this->belongsTo(gaurdian::class);
}

}
