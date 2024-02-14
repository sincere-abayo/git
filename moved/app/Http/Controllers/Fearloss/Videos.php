<?php

namespace App\Http\Controllers\fearloss;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
   use Illuminate\Support\Facades\DB;
   use Illuminate\Support\Facades\Auth;

    use App\Models\video;
   use App\Models\Balance; 
   use App\Models\views; 
class Videos extends Controller
{
   public function Showvideo()
    {
        return view('user.fearloss.videos');
    }
    public function watch(Request $request)
    {
        $id=$request->video;
         $user=Auth::user();
        $name=$user->user;
        
        $checked=array(
        'already'=> 'You have already watched this ads, try onather one to earn',
        'id'=> $id,

     );
     $check=db::SELECT("SELECT * from views where user='$name' and ads='$id'");
     if (count($check)) {
       return view('user.fearloss.video',$checked);
         
     }
     return view('user.fearloss.video')->with('id',$id);
    }




     public function Paywatch(Request $request)
    {
        $answer=$request->answer;
        $id=$request->id;
        $user=Auth::user();
        $name=$user->user;

    $message=array(
    'id'=>$request->id,
    'success'=>"Thank you for watching video you earn 0.1$",
        'already'=> 'You have already watched this video, try onather one to earn',
    
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
        'fail'=> 'wrong answer,you failed to earn money try viewing and answer correctly with other videos',
        'id'=> $request->id,
        'already'=> 'You have already watched this video, try onather one to earn',


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
      $check=db::SELECT("SELECT * from videos where id='$id'");
        foreach ($check as $value) {
        $reached=$value->reached_views;
        $new=$reached+1;
        $update=db::UPDATE("UPDATE videos set reached_views='$new'");
        if (!$update) {
           return view('user.fearloss.video',$checke);
        }
        }
     $views=new views();
   $views->user=$name;
   $views->ads=$request->id;
   
   if (!$views->save()) 
   {
       return view('user.fearloss.video',$ads);

   }
$results=db::SELECT("SELECT question from videos where id='$id' and answer='$answer'");

   if (count($results)) 
   {
$balance=new Balance();
$balance->user=$name;
$balance->earning=0.1;  
if ($balance->save()) {
   
       return view('user.fearloss.video',$message);

} else{
       return view('user.fearloss.video',$balanc);

   }

   }
   else{
       return view('user.fearloss.video',$fmsg);
   }
   }
    }

