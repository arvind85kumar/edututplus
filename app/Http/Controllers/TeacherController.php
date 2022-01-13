<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Course, ZoomMeeting, TeacherCourse, User, TeacherStudent, UserMemberShip };
use App\Http\Requests\{NewMeeting, NewStudent, AttachStudent};
use App\Traits\ZoomMeetingTrait;
class TeacherController extends Controller
{
    use ZoomMeetingTrait;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;
        
    public function dashboard(){
        return view('teacher.dashboard');
    }

    public function newMeeting(){
        $courses = TeacherCourse::where(['teacher_id'=> \Auth::user()->id,'status' => 'Active'])->with(['courses'])->get();
        return view('teacher.book-new-meeting',compact('courses'));
    }

    public function meetingApi($title){
        $data = array('topic' => $title,
        'start_time' => date('Y-m-d H:i:s'),
        'type' => 3,
        'duration' => 180,
        'agenda' => $title,
        'settings' => array('host_video' => true, 
        'participant_video' =>1,'audio_recording'=> 'cloud',
        'watermark' => false,
        'approval_type'=>0,
        'allow_multiple_devices' => true,
        'meeting_authentication' =>true,
        'waiting_room' => true));
       $res =  $this->create($data);
       $data = array('host_start_url' => $res["data"]["start_url"],
                'join_url' => $res["data"]["join_url"],
                    'password' => $res["data"]["password"]);
        return $data;
    }

    public function saveMeeting(NewMeeting $request){
        $zoomData = $this->meetingApi($request->meeting_title);
        $meeting = new ZoomMeeting();
        $meeting->teacher_id = \Auth::user()->id;
        $meeting->course_id = $request->course_id;
        $meeting->meeting_title = $request->meeting_title;
        $meeting->agenda = $request->meeting_title;
        $meeting->host_start_url = $zoomData['host_start_url'];
        $meeting->join_url = $zoomData['join_url'];
        $meeting->passcode = $zoomData['password'];
        $meeting->duration = 60*60*24*365;
        $meeting->meeting_start = date("Y-m-d h:i:s");
        $meeting->host_video = true;
        $meeting->participant_video = true;
        $meeting->waiting_room = true;
        $meeting->status = 'Active';
        $meeting->created_by = \Auth::user()->id;
        $meeting->updated_by = \Auth::user()->id;
        $meeting->created_at = date('Y-m-d H:i:s');
        $meeting->save();
        return redirect('new-meeting')->with('success',sprintf("New meeting %s created successfully",$request->meeting_title));

    }

    public function addStudent(){
        $courses = TeacherCourse::where(['teacher_id'=> \Auth::user()->id,'status' => 'Active'])->with(['courses'])->get();
        return view('teacher.add-student',compact('courses'));
    }

    public function saveStudent(NewStudent $request){
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->role_id = 2;
        $user->status = 'Pending';
        $user->created_at = date('Y-m-d H:i:s');
        $user->save();
        $student_id = $user->id;
       
        $teacher_stu = new TeacherStudent();
        $teacher_stu->teacher_id = \Auth::user()->id;
        $teacher_stu->student_id = $student_id;
        $teacher_stu->course_id = $request->course_id;
        $teacher_stu->payment_status = 'Pending';
        $teacher_stu->status = 'Active';
        $teacher_stu->save();
        
        $membership = new UserMemberShip();
        $membership->user_id = $student_id;
        $membership->amount = ($request->membership == 'Basic' ? '10' : '100');
        $membership->membership_type = $request->membership;
        $membership->payment_status = 'Pending';
        $membership->created_by = \Auth::user()->id;
        $membership->created_at = date('Y-m-d H:i:s');
        $membership->save();
        return redirect('add-student')->with('success','You have registered new student. Please collect payment form student.Student can login after payment approval from admin');
    }

    //If user already exist 
    public function linkStudent(){
        $courses = TeacherCourse::where(['teacher_id'=> \Auth::user()->id,'status' => 'Active'])->with(['courses'])->get();
        return view('teacher.attach-student',compact('courses'));
    }

    public function attachStudent(AttachStudent $request){
        $user = User::where('phone',$request->phone)->first();
        $student_id = $user->id;
        $teacher_id = \Auth::user()->id; 
        $membership = UserMemberShip::where('user_id',$student_id)->first();
        $mem_type = $membership->membership_type;
        $already_exist = TeacherStudent::where(['teacher_id' => $teacher_id,'student_id' => $student_id,'course_id' => $request->course_id])->count();
        if($check->count() == 0 ){
            return redirect('link-student')->with('error',"Please enter your registered number only. This number is not exist in our database.");
        }
        else if($already_exist == 1){
            return redirect('link-student')->with('error',"Student is already attached with same teacher and course. Please contact administrator.");
        } else if($$mem_type == 'Basic'){
            return redirect('link-student')->with('info',sprintf("Dear %s Please collect Basic membership payment from student. You should be add membership first.Then attach it later.",\Auth::user()->name));
        }
        else{
            $teach_stu = new TeacherStudent();
            $teach_stu->teacher_id = $teacher_id;
            $teach_stu->student_id =  $student_id;
            $teach_stu->course_id = $request->course_id;
            $teach_stu->status = 'Active';
            $teach_stu->payment_status = ($mem_type == 'Basic' ? 'Pending' : 'Completed');
            $teach_stu->created_at = date('Y-md H:i:s');
            $teach_stu->save();
            return redirect('link-student')->with('success',"Student has been attached with selected course");

        }
    }

    public function allStudents(){
        $page = array('page_title' => 'All Students');
        $students = TeacherStudent::where('status','Active')->with(['student','course'])->paginate(30);       
        return view('teacher.all-students',compact('page','students'));
    }

    public function allMeetings(){
        $page = array('page_title' => 'All Meetings');
        $meetings = ZoomMeeting::where(['status'=> 'Active','teacher_id' => \Auth::user()->id])->with(['courses'])->paginate(30);       
        return view('teacher.all-meetings',compact('page','meetings'));
    }
}
