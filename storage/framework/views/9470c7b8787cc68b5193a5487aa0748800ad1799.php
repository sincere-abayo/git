    
    <?php

    use Illuminate\Support\Facades\Auth;
   use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

    use App\Models\User;
    $user = Auth::user();

    $name = $user->user;
     if (!$id) {
        header("location:admin.videos");    }
    ?>

     <?php echo $__env->make('admin.admin-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <style type="text/css">
       #form{
        display: none;
       }
       .show{
        display: block;
    }
      
   .popup-quest{
        background-color: white;
        border: 1px solid black;
        border-radius: 2px;
        padding: 10px;
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }

     </style>
     <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="width: 80%;">
    <!-- Content Header (Page header) -->
    <br><br>
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li class="active">
<span id="msg" style="color: red;">
    Checking video 
    <a href="<?php echo e(route('admin.video.approve')); ?>?video=<?php echo e($id); ?>" class="btn btn-primary">approve</a>
 <?php echo e($message??''); ?>


</span>
         </li>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" >
      <div class="container-fluid">
      
        <div class="row">
                    <?php 
$results=db::SELECT("SELECT * from videos where id='$id' order by id desc");
  foreach ($results as $row) {
   
  
        ?>
            <div class="col-md-8">
            <div class="card card-primary card-outline">
            <center>
       <h4>   <?php echo e($row->tittle); ?>

        <br></h4>
  
       <div id="video-container">
<video  src="<?php echo e(asset('video/'.$row->video)); ?>" id="video" width="100%" style="height: 300px;width: 100%;" class="img click-img" controls alt="click addvs" type="video/mp4">
         
       </div>

            
       <p><?php echo e($row->description); ?> 
 
       </p>
         
           </center>
        </div>
 <script>
        const video = document.getElementById("video");
        const popup_quest = document.getElementById("quest");
        let isTenSecondLeft = false;
        let startDate;

        video.onplay = ()=>{
            startDate = new Date();
var time="<?php echo $row->time ?>"
            // when video is playing
            video.ontimeupdate = ()=>{
                if(!isTenSecondLeft){
                    // calculate 10 second
                    let diff = new Date() - startDate; 
                    let second = Math.floor(diff / 1000);
                      document.getElementById('countdown-time').innerHTML=second+" second";

                    // when ten second left popup question form
                    if(second == time){
                        isTenSecondLeft = true;
                        // popup_quest.classList.add("show")
                        document.getElementById('form').style.display='block';
                      document.getElementById('countdown-time').innerHTML=" ";


                    }
                }
            }
        }
          

    </script>
      </div> 
 <?php }?>
 
  </div>
</div>







<?php /**PATH B:\node tot\esmscript\git\resources\views/admin/video.blade.php ENDPATH**/ ?>