<?php

namespace App\Http\Controllers\Fearloss;
   use Illuminate\Support\Facades\DB;
   use Illuminate\Support\Facades\Auth;

    use App\Models\ads;
   use App\Models\Balance; 
   use App\Models\views; 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Payclick extends Controller
{
      public function Showclick()
    {
        return view('user.fearloss.payclick');
    }
       public function click(Request $request)
    {
        $id=$request->ads;
         $user=Auth::user();
        $name=$user->user;
        
        $checked=array(
        'already'=> 'You have already watched this ads, try onather one to earn',
        'id'=> $id,

     );
     $check=db::SELECT("SELECT * from views where user='$name' and ads='$id'");
     if (count($check)) {
       return view('user.fearloss.ads',$checked);
         
     }
     return view('user.fearloss.ads')->with('id',$id);
    }
        public function url(Request $request)
    {
        return ($request->url);
    }

        public function Payads(Request $request)
    {
        $answer=$request->answer;
        $id=$request->id;
        $user=Auth::user();
        $name=$user->user;

    $message=array(
    'id'=>$request->id,
    'success'=>"Thank you for watching ads you earn 0.0001$",
        'already'=> 'You have already watched this ads, try onather one to earn',
    
   );
    $ads=array(
    'id'=>$request->id,
    'errora'=>"failed to verify view",
   );
     $balanc=array(
    'id'=>$request->id,
    'errorb'=>"failed to give balance",
   );
     $fmsg=array(
        'fail'=> 'wrong answer,you failed to earn money try viewing and answer correctly with other ads',
        'id'=> $request->id,
        'already'=> 'You have already watched this ads, try onather one to earn',


     );
       $checked=array(
        'already'=> 'You have already watched this ads, try onather one to earn',
        'id'=> $request->id,
     );
         $checke=array(
        'update'=> 'failed to increase view',
        'id'=> $request->id,
     );

     // $check=db::SELECT("SELECT * from views where user='$name' and ads='$id'");
     // if (count($check)) {
     //   return view('user.fearloss.ads',$checked);     
     // }
      $check=db::SELECT("SELECT * from ads where id='$id'");
        foreach ($check as $value) {
        $reached=$value->reached_views;
        $new=$reached+1;
        $update=db::UPDATE("UPDATE ads set reached_views='$new' where id='$id'");
        if (!$update) {
           return view('user.fearloss.ads',$checke);
        }
        }
     $views=new views();
   $views->user=$name;
   $views->ads=$request->id;
   
   if (!$views->save()) 
   {
       return view('user.fearloss.ads',$ads);

   }
$results=db::SELECT("SELECT question from ads where id='$id' and answer='$answer'");

   if (count($results)) 
   {
$balance=new Balance();
$balance->user=$name;
$balance->earning=0.0001;  
if ($balance->save()) {
   
       return view('user.fearloss.ads',$message);

} else{
       return view('user.fearloss.ads',$balanc);

   }

   }
   else{
       return view('user.fearloss.ads',$fmsg);
   }
    }

}
