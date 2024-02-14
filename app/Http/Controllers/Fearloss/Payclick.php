<?php

namespace App\Http\Controllers\Fearloss;
   use Illuminate\Support\Facades\DB;
   use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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
         $ads=array(
    'id'=>$request->id,
    'errora'=>"failed to verify view",
   );
   
     $check=db::SELECT("SELECT * from views where user='$name' and ads='$id'");
     
     if (count($check)) {
          
  
       return view('user.fearloss.ads',$checked);
         
     }
     $views=new views();
      $views->user=$name;
   $views->ads=$id;
   
   if (!$views->save()) 
   {
       return view('user.fearloss.ads',$ads);

   }
     return view('user.fearloss.ads')->with('id',$id);
    }
    //     public function url(Request $request)
    // {
    //     return ($request->url);
    // }


public function url(Request $request)
{
    $url = $request->input('url'); // Get the URL from the request
     $id = $request->input('ads');
         $user=Auth::user();
        $name=$user->user;
        
        $checked=array(
        'already'=> 'You have already watched this ads, try onather one to earn',
        'id'=> $id,
     );
     
     
         $ads=array(
    'id'=>$id,
    'errora'=>"failed to verify view",
   );
   

//fixing non www link
  if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
            $url = "http://" . $url;
        }
// Check if the URL is valid
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // Check if the URL has a scheme (http:// or https://), and add http:// if it doesn't
       
try {
           // Set up context options including user agent and timeout
        $context = stream_context_create([
            'http' => [
                'timeout' => 10,
                'user_agent' => 'Mozilla/5.0', // Simulate a browser user agent
                'follow_location' => true, // Follow redirects
            ],
        ]);
        $externalContent = file_get_contents($url, false, $context);

        if ($externalContent === false) {
            return view('user.myview', ['externalContent' => 'Failed to fetch URL']);
        }
        
             $check=db::SELECT("SELECT * from views where user='$name' and ads='$id'");
     if (count($check)) {

  
        // Pass the external content to the view and status
        return view('user.myview', ['externalContent' => $externalContent,
        'checked'=>$checked]);
     }
      $views=new views();
    $views->user=$name;
   $views->ads=$id;
//   $views->save();
  if (!$views->save()) 
  {

        // Pass the external content to the view and status
        return view('user.myview', ['externalContent' => $externalContent,
        'ads'=>$ads]);
      
  }
    return view('user.myview', ['externalContent' => $externalContent,
        'id'=>$id]);

    }
    catch (Exception $e) {
        // Handle exceptions (e.g., timeout, invalid URL) gracefully
        return view('user.myview', ['externalContent' => 'Error: ' . $e->getMessage()]);
    }
    
       
    } else {
        // If the URL is not valid, return an error response
        return response()->json([
            'error' => 'Invalid URL',
        ], 400);
    }

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
    
            public function Payurl(Request $request)
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
           return view('user.myview',$checke);
        }
        }
     $views=new views();
   $views->user=$name;
   $views->ads=$request->id;
   
   if (!$views->save()) 
   {
       return view('user.myview',$ads);

   }
$results=db::SELECT("SELECT question from ads where id='$id' and answer='$answer'");

   if (count($results)) 
   {
$balance=new Balance();
$balance->user=$name;
$balance->earning=0.0001;  
if ($balance->save()) {
   
       return view('user.myview',$message);

} else{
       return view('user.myview',$balanc);

   }

   }
   else{
       return view('user.myview',$fmsg);
   }
    }


}
