<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherCourse extends Model
{
    use HasFactory;

    protected $table = 'teacher_course';

    public function courses()
    {
        return $this->belongsTo(Course::class, 'cource_id', 'id');
    }
}
