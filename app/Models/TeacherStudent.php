<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherStudent extends Model
{
    use HasFactory;

    protected $table = 'teacher_student';

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function membership()
    {
        return $this->hasOne(UserMemberShip::class, 'user_id', 'student_id');
    }

    public function getCreatedAtAttribute($value){
        return  date('d, M Y',strtotime($value));
    }
}
