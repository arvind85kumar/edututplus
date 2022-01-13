<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\{ NewUser, Login, ChangePassword};
use App\Models\{User, LoginHistory};
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function ___construct(){
        if(!\Auth::check()) {
            session()->forget('history_id');
            session()->forget('dash_url');
            session()->flush(); 
        }
    }
    public function index(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function signIn(){
        return view('pages.login');
    }

    public function register(){
        return view('pages.register');
    }

    public function saveUser(NewUser $request){
        $user = new User();
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->role_id = $request->user_type;
        $user->status = 'Inactive';
        $user->rejection_reason = 'Your account is waiting for approval.';
        $user->save();
        return redirect('signup')->with('success','Thanks for registering with us. Our team will contact soon.Your account is waiting for approval.');
    }

    public function privacy(){
        return view('pages.privacy');
    }

    public function terms(){
        return view('pages.terms');
    }

    public function authenticate(Request $request){
        if (Auth::attempt(['phone' => $request->mobile, 'password' =>$request->password, 'status' => 'Active'])){
           $user_id = \Auth::user()->id;
           $history = new LoginHistory();
           $history->user_id = $user_id;
           $history->is_logged_in = 1;
           $history->ip_address = $request->ip();
           $history->created_at = date('Y-m-d H:i:s');
           $history->save();
           $user = User::with(['accessBoard'])->where('id',$user_id)->first();
           $request->session()->put('history_id',$history->id);
           $request->session()->put('dash_url',$user->accessBoard->slug);
            return response()->json(["status"=> 'success','message'=> 'Login Successful','slug' => $user->accessBoard->slug]);
        }else{
            return response()->json(["status"=> 'error','message'=> 'Login fail']);
        }
    }

    public function changePassword(){
        $page = array('page_title' => 'Change Password');
        return view('admin.change-password',compact('page'));
    }

	public function updatePassword(ChangePassword $request){
       $logged_user = \Auth::user()->id;
       $user = User::find($logged_user);
       $user->password = bcrypt($request->newpassword);
       $user->update();
       \Auth::logout();
       $history_id = session()->get('history_id');
        $history = LoginHistory::find($history_id);
        $history->updated_at = date('Y-m-d H:i:s');
        $history->is_logged_in = 0;
        $history->update();
        session()->forget('history_id');
        session()->forget('dash_url');
        session()->flush();
        return redirect('signup')->with('success','You have successfully logout');

    }
	
    public function logout(){
        if(Auth::check()){
        \Auth::logout();
        $history_id = session()->get('history_id');
        $history = LoginHistory::find($history_id);
        $history->updated_at = date('Y-m-d H:i:s');
        $history->is_logged_in = 0;
        $history->update();
        session()->forget('history_id');
        session()->forget('dash_url');
        session()->flush();
        return redirect('signup')->with('success','You have successfully logout');
        }else{
            return redirect('signup')->with('error','Unauthorised access.');
        }
    }
    
}
