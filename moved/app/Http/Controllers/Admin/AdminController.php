<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin-dashboard');
        // return view('well');
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
   