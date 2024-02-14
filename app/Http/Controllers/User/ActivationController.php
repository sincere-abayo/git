<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Activations;
use App\Models\Balance;
 

use Illuminate\Support\Facades\DB;

class ActivationController extends Controller
{
public function index(){
    return view('user.activation-controller');
} 

public function upgrade(Request $request){
           $code=$request->code;
          $user = Auth::user();
        $userId = $user->id;
        $email = $user->email;
                $name=$user->user;

        $user=user::find($userId);
           $results = DB::select('SELECT * FROM activations where code= :code',['code'=>$code]);
     if (count($results)>0) {
         foreach ($results as $row) {

            if ($row->stutus=="used") {
     return redirect()->route('user.dashboard.activate')->with('message',' the activation code  has been expired, please try to buy an other');
        //   return redirect()->back()->with('message', 'The activation code has expired. Please try to buy another.');
           }
           else{
            
            // $user->activation=$code;
            $user->has_paid_package=$row->package;
    
           $pack=$row->package;
           $update="";
           if ($pack=='ft') {
           $update=DB::update('UPDATE activations set stutus= :st,email=:em, updated_at=now() where code=:cd',['st'=>'used','cd'=>$code,'em'=>$email]);

  
           }
           else{
           $update=DB::update('UPDATE activations set stutus= :st, updated_at=now() where code=:cd',['st'=>'used','cd'=>$code]);
       }
            if($user->save() && $update){
            return redirect()->route('user.dashboard.activate')->with('message','your account has been activated.');
            }
        }
    }
       }     else{
      return redirect()->route('user.dashboard.activate')->with('message',' Invalid activation code, re-enter code again');
             
         }
            }



public function g_upgrade(Request $request){
           $code=$request->code;
          $user = Auth::user();
        $userId = $user->id;
        $email = $user->email;
        $name = $user->user;

        $user=user::find($userId);
           $results = DB::select('SELECT * FROM activations where code= :code',['code'=>$code]);
     if (count($results)>0) {
         foreach ($results as $row) {

            if ($row->stutus=="used") {
    //  return redirect()->route('user.dashboard.activate')->with('message',' the activation code  has been expired, please try to buy an other');
           return view('user.user-package')->with('message', 'The activation code has expired. Please try to buy another.');
           }
           else{
            
            // $user->activation=$code;
            $user->has_paid_package=$row->package;
            $user->has_free_package='yes';
    
           $pack=$row->package;
           $update="";
           if ($pack=='ft') { 
               $balance=new Balance();
$balance->user=$name;

  $balance->reserved_token=60000;
  $balance->save();
           $update=DB::update('UPDATE activations set stutus= :st,email=:em, updated_at=now() where code=:cd',['st'=>'used','cd'=>$code,'em'=>$email]);

  
           }
           else{
           $update=DB::update('UPDATE activations set stutus= :st, updated_at=now() where code=:cd',['st'=>'used','cd'=>$code]);
       }
            if($user->save() && $update){
           return redirect()->route('user.dashboard')->with('message', 'You have been  activated Fonepo account , Enjoy unlimited earning on Fonepo');
            }
        }
    }
       }     else{
      return view('user.user-package')->with('message',' Invalid activation code, re-enter code again');
             
         }
            }

public function success()
{
    return ('success');
}

public function error()
{
    return ('error');
}
public function package()
{
    return view('user.package-history');
} 
public function saveCode(Request $request)
{
    $activations= new Activations();
                     $code=$request->code;
            $activations->code=$code;
            $activations->package='ft';
            $activations->stutus='not';
             // $activations->email='';
             if ($activations->save()) {
                 return view('admin.ft-manage')->with('message','FT Activation code saved well');
             }
             else{
             return view('admin.ft-manage')->with('message','FT Activation code not saved well');
}
}
}