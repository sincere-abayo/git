<?php

namespace App\Http\Controllers\admin;
 use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ads;
use App\Models\video;
class manage extends Controller
{
    public function ads(){
        return view('admin.payclick');
    }
    public function clicked(Request $request){
         $ads=$request->ads;
        return view('admin.ads')->with('id',$ads);
    }
     public function approveAds(Request $request){
      $ads=$request->ads;

        $approved=array(
        'message'=> 'Ads approved well',
        'id'=> $ads, );
         $failed=array(
        'message'=> 'Ads approve failed',
        'id'=> $ads, );
      $approve=DB::UPDATE('UPDATE ads set status=:st where id=:id',['st'=>'approved','id'=>$ads]);
      if($approve)
      {

        return view('admin.ads',$approved);
      }
      else{
        return view('admin.ads',$failed);
      }
    }
     public function addAds(){
        return view('admin.add-ads');
    }

public function createAds(Request $request)
    {
        $url=$request->url;
        $banner=$request->file;
        $tittle=$request->tittle;
        $desc=$request->description;
        $views=$request->views;
        $duration=$request->duration;
        $location=$request->geo;
         $question=$request->question;
        $answer=$request->answer;
    $name = "admin";

        $url = filter_var($url, FILTER_SANITIZE_URL);
        if (empty($url) && empty($banner)) {
           
        return view('admin.add-ads')->with('error','empty');
        
        }
         if (isset($banner))
 {
    $file=rand(00000000,99999999).".png";
   $path=public_path('ads');
   $nama_file=$path . '/' . $file;
    file_put_contents($nama_file, file_get_contents($banner)); 
if (!file_exists($path)) {
    return view('admin.add-ads')->with('error','file');
}

 }
else{
    $nama_file=NULL;
}
        if (!empty($url)) {
           if (filter_var($url, FILTER_VALIDATE_URL) === false)
       {
    return view('admin.add-ads')->with('error','url');
}

        }
        else{
    $url=NULL;
}
          $ads=new ads();
          
         
                  $ads->url=$url;
                   $ads->banner=$file;
                    $ads->tittle=$tittle;
                    $ads->description=$desc;
                    $ads->targeted_views=$views;
                    $ads->targeted_duration=$duration;
                    $ads->location=$location;
                    $ads->question=$question;
                    $ads->answer=$answer;
                     $ads->status='approved';
                    $ads->user=$name;
                   
                    if ($ads->save())
                 {
                        return view ('admin.add-ads')->with('message','success');
                    }
                    else{
                    return view ('admin.add-ads')->with('message','error');

                    }
    }

    public function videos(){
        return view('admin.videos');
    }
     public function watch(Request $request){
         $id=$request->video;
     return view('admin.video')->with('id',$id);
    }
    public function approveWatch(Request $request){
      $id=$request->video;

       
         
      $approve=DB::UPDATE('UPDATE videos set status=:st where id=:id',['st'=>'approved','id'=>$id]);
      if($approve)
      {
 $approved=array(
        'message'=> 'video approved well',
        'id'=> $id, );
        return view('admin.video',$approved);
      }
      else{
        $failed=array(
        'message'=> 'videos approve failed',
        'id'=> $id, );
        return view('admin.video',$failed);
      }
    }
      public function videoAds(){
        return view('admin.add-video');
    }
    public function createvideo(Request $request)
    {
       
        // $video=$request->video;
        $tittle=$request->tittle;
       
        $views=$request->views;
        $duration=$request->duration;
        $location=$request->geo;
         $question=$request->question;
        $answer=$request->answer;
        $time=$request->time;
    
    $user = Auth::user();

    $name = $user->user;
    
    if (!$_FILES['video']['error'] === UPLOAD_ERR_OK) {
        //  echo "Error during file upload: " . 
        $err=$_FILES['video']['error'];
         return view('admin.videos')->with('fail',$err);
        }

        else{
             // Check if the uploaded file is a video
        $allowedVideoTypes = ['video/mp4'];
        $uploadedFileType = $_FILES['video']['type'];
        if ($uploadedFileType =="video/mp4") {
            $uploadedFileSize = $_FILES['video']['size'];
            $maxFileSize = 62914560; // 60MB in bytes

            // Get the details of the uploaded file
       

        // Check if the file size exceeds the limit
        if ($uploadedFileSize <= $maxFileSize) {
                $targetDir = public_path('video/');
                 global $FileName;
                $file=uniqid() . basename($_FILES['video']['name']);
                $FileName = $targetDir . $file;
               
                 
            if (!move_uploaded_file($_FILES['video']['tmp_name'], $FileName)) {
                return view('admin.videos')->with('error','video');
            }
        }
        else {
            return view('admin.videos')->with('error','size');
        }
}
else{
            return view('admin.videos')->with('error','type');

}
          $video=new video();
          
         
               
                   $video->video=$file;
                    $video->tittle=$tittle;
                   
                    $video->targeted_views=$views;
                    $video->targeted_duration=$duration;
                    $video->location=$location;
                    $video->question=$question;
                    $video->answer=$answer;
                       $video->time=$time;
                     $video->status='approved';
                    $video->user=$name;
                     $video->time=$time;
                    if ($video->save())
                 {
                        return view ('admin.videos')->with('message','success');
                    }
                    else{
                    return view ('admin.videos')->with('message','error');

                    }
    }
}
}
