<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

    use Illuminate\Support\Facades\Auth;

    use App\Models\User;
    use App\Models\Contract;

use Illuminate\Support\Facades\Redirect;
class UserpackageController extends Controller
{
    public function index()
    {
        return view('user.user-package');
    }
   
public function contract()
    {
return view('user.contract');

    }
   
public function Savecontract(Request $request)
    {

    $user = Auth::user();

    $name = $user->user;
    $contract=new Contract();
    
   $sig_string=$request->signature;
   $file=$name.".png";
   $path=public_path('signature');
   $nama_file=$path . '/' . $file;
   if (file_exists($nama_file)) {
     unlink($nama_file);
   }
    file_put_contents($nama_file, file_get_contents($sig_string)); 

   if(file_exists($nama_file)){
    // return ('well');
    // $path_to_file='signature /'.$file;
    

                    $user->contract='Signed';
                    $pack=$user->has_paid_package;
                    $contract->name=$name;
                        $contract->contract=$file;
                    if ($user->save() && $contract->save()) {
                       
                        
  return Redirect::route('user.dashboard')->with('message','You have been  activated Fonepo account , Enjoy unlimited earning on Afonete');
}
                    
                    
    return view('user.preview')->with('message',$file);
     // echo "<p>File Signature saved well - ".$nama_file."</p>";
     // echo "<p style='border:solid 1px teal;width:355px;height:110px;'><img src='".asset($nama_file)."'></p>";
   }
    return view('user.contract')->with('message',$nama_file);

    }
    public function Confirmcontract()
    {
                    $user = Auth::user();

                    $name = $user->user;

                    // $user = User::find($name);

                    $user->contract='Signed';
                    $pack=$user->has_paid_package;
                    // return ($user);
if ($user->save()) {
  return Redirect::route('user.dashboard')->with('message','You have been  activated '.$pack.' account , Enjoy unlimited earning on Afonete');
}
return view('user.previeu');

    }
   
}



