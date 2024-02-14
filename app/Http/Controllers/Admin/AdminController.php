<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Position;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

use App\Mail\reminder;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin-dashboard');
        // return view('well');
    }
      public function send(){
        $email='Maniraguhajp5@gmail.com';
        $username='Ubwoba1234';
        $mail=new reminder($email,$username);
        Mail::to($email)->send($mail);
       // return('send');
       return redirect()->back()->with('message','email sent weel to'.$email);
    }
      public function position()
    {
        return view('admin.positions');
        // return view('well');
    }
      public function pos_edit()
    {
        return view('admin.pos_edit');
     
    }
       public function position_approved()
    {
        $user=request()->query('user');
        try {
        $position=Position::where('user',$user)->first();
        $pos=$position->position;
        $position->update(['status'=>'approved','updated_at'=>now()]);
        return view('admin.positions')->with('message','user '.$user.' approved well on '.$pos.' position');

        } catch (Exception $e) {
        return view('admin.positions')->with('message','failed to approved user '.$user.' on '.$pos.' position');
            
        }
     
    }
      public function edit(Request $request)
    {
        $username=$request->user;
        $unique=$request->unique_task;
        $general=$request->general_task;
        $daily=$request->daily_bonus;
        $duration=$request->duration;
        $cashout=$request->cashout;
        $withdraw=$request->withdraw;

try {
    $position=Position::where('user',$username)->first();
    // $status='Unique task has been given';
    // if ($position->unique_task==$unique) {
    //         return view('admin.pos_edit',compact('status','username'));
        
    // }
$position->update([
     'unique_task'=>$unique,
    'general_task'=>$general,
    'cashout'=>$cashout,
    'unique_task'=>$unique,
    'withdraw'=>$withdraw,
    'daily_bonus'=>$daily,
    'duration'=>$duration,
]);
$status=$username.'s position edited weel';
            return view('admin.pos_edit',compact('status','username'));
          
        } 
        catch (Exception $e) {
$status='failed to edit user position ';

            return view('admin.pos_edit',compact('status','username'));
        }        
    }
        public function login()
    {
        return view('admin.login');
        // return view('well');
    }
         public function contacted()
    {
        return view('admin.contacted');
        // return view('well');
    }
     public function check(Request $request)
    {
        // $email=79832;
          $email = $request->email;
            $password = $request->password;
        $password=sha1($password);
     //       $results = DB::select('SELECT * FROM users where `email`= :email and `password`=:password',['email'=>$email,'password'=>$password]);
           $results = DB::select("SELECT * FROM users where `email`= '$email' and password='$password'");
          
        if (count($results)>0) {
     //        // Authentication passed, redirect to admin dashboard
     //      // return ("livewire.admin.admin-dashboard-component");
         // return ($email);
           session(['admin' => $email]);
            return view('admin.admin-dashboard')->with('access','welcome');
      }

        //return('Authentication failed, show error message');
      // return('fail');
      return view('admin.login')->with('message', 'Invalid credentials.');
    }
    public function ft(){
        return view('admin.ft-manage');
    }
        public function verify(){
      return view('admin.verify');
  }
        public function pending(){
          return view('admin.pending_users');
      }
      public function fc1(){
        return view('admin.fc1');
    }
      public function fc2(){
        return view('admin.fc2');
    }
      public function logout(){


        session()->forget('admin');
        return view('admin.login');
    }
     

    }
   