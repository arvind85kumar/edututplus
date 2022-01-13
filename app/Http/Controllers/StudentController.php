<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{TeacherStudent, ZoomMeeting };

class StudentController extends Controller
{
    public function dashboard(){
        return view('student.dashboard');
    }

    public function zoomMeetings(){
        $page = array('page_title' => 'Zoom Calls');
        $student_id = \Auth::user()->id;
        $teacher= TeacherStudent::select(['teacher_id','course_id'])->where(['student_id' => $student_id ,'status'=> 'Active',
            'payment_status' => 'Completed'])->get()->toArray();
        $teacher_id = array_column($teacher,'teacher_id');
        $course_id = array_column($teacher,'course_id');
        $meetings = ZoomMeeting::where(['status'=>'Active'])->whereIn('teacher_id', $teacher_id)->whereIN('course_id',$course_id)->with(['courses','teacher'])->paginate(30);       
        return view('student.zoom-class-meeting',compact('page','meetings'));
    }
}
