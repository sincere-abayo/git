    
    <?php

    use Illuminate\Support\Facades\Auth;
   use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

    use App\Models\User;
    $user = Auth::user();

    $name = $user->user;
     if (!$id) {
        header("location:user.fearloss.payclick");    }
    ?>

     <?php echo $__env->make('user.user-dashboard-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <style type="text/css">
       #form{
        display: none;
       }
     </style>
     <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br><br>
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li class="active">
<span id="msg" style="color: red;">
  <?php 
$mine=db::SELECT("SELECT * from ads where id='$id' and user='$name'");

  ?>
  <?php if(count($mine)): ?>
  Viewing my ads
<?php else: ?>
            <?php echo e($already??'Earn money by viewing advertisments '); ?>

            <?php echo e($update??''); ?>

            
  <?php echo e($errora??''); ?>

<?php echo e($errorb??''); ?>

</span>
<?php if(!$already ): ?>
<?php
$results=db::SELECT("SELECT question from ads where id='$id'");
  foreach ($results as $row) {


?>
             <form method="post" id="form" action="<?php echo e(route('user.ads')); ?>">
              <?php echo csrf_field(); ?>
              <span> <?php echo e($row->question); ?></span>

              <input type="text" name="answer" placeholder="Answer question">
              <input type="hidden" name="id" value="<?php echo e($id); ?>">
              <input type="submit" name="sub" value="submit">

            </form>
            <?php
             }
             
?>
<?php endif; ?>
<?php if(!$fail ): ?>
<span id="countdown-timer" class="alert-success">
</span>
<?php endif; ?>
<span class="alert-success">
<?php echo e($success??''); ?>


<?php echo e($fail??''); ?>

</span>
<span id="done"></span>
<?php endif; ?>
<script type="text/javascript">
  const countdownTimer = document.getElementById('countdown-timer');
let countdownSeconds =10; // Number of seconds for the countdown
let countdownInterval;

function startCountdown() {
  countdownInterval = setInterval(updateCountdown, 1200);
}

function updateCountdown() {
  countdownSeconds--;

  if (countdownSeconds >= 0) {
    countdownTimer.textContent = countdownSeconds+" remaining seconds";
  } else {
    clearInterval(countdownInterval);
    countdownTimer.textContent = '';
    performTask(); // Call the function to perform your desired task Thank you for watching ads you earn 0.0001$
  }
}

function performTask() {
  // Implement your task logic here
  document.getElementById('done').innerHTML='<input type="hidden" name="done" value="performed">';
  document.getElementById('form').style.display="block";
  document.getElementById('msg').innerHTML="Answer this question related to this ads";

  
}

startCountdown();

</script>          </li>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
        <div class="row">
                    <?php 
$results=db::SELECT("SELECT * from ads where id='$id' order by id desc");
  foreach ($results as $row) {
   
  
        ?>
            <div class="col-md-8">
            <div class="card card-primary card-outline">
            <center>
       <h4>   <?php echo e($row->tittle); ?>

        <br></h4>
        <style type="text/css">
   /* #mmm{
        background: url("<?php echo e(asset('ads/'.$row->banner)); ?>");
        height: 165px;
        background-repeat: no-repeat;
width: 800px;

    }*/
</style>
       <div id="mmm">
<img src="<?php echo e(asset('ads/'.$row->banner)); ?>" width="100%" style="height: 300px;width: 60%;" class="img click-img" alt="click adds">
         
       </div>
       <p><?php echo e($row->description); ?> 
<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
<!--  -->
       </p>
         
           </center>
        </div>
       

      </div> 
 <?php }?>
 <div class="col-md-4">
  <h3>
    Trendings
  </h3>
                  <?php 
$results=db::SELECT("SELECT * from ads order by id desc");
  foreach ($results as $row) {
   
  
        ?>
            <div class="card card-primary card-outline">
            <center>
       <h4> 
    <?php if($row->url!=NULL): ?>
                 <a style="color: #007bff" target="__blank"  href="<?php echo e(route('user.url')); ?>?url=<?php echo e($row->url); ?>"><?php echo e($row->tittle); ?>


</a>
  <?php endif; ?> 
  <!--  -->
<?php if($row->url==NULL): ?>
<a style="color: #007bff" target="__blank" href="<?php echo e(route('user.click')); ?>?ads=<?php echo e($row->id); ?>"><?php echo e($row->tittle); ?></a>

                  <?php endif; ?>    
   <br></h4>
       <div class="">

              <?php if($row->banner!=NULL ): ?>
    <span><center>
<img src="<?php echo e(asset('ads/'.$row->banner)); ?>" style="margin-left: -18px ;height: 115px;width: 200px;" class="img click-img" alt="click adds">
                     </center><?php endif; ?>       
                         
             <?php if($row->banner==NULL ): ?>  
             <div style="height: 100%;width:100%"><?php echo e($row->description); ?></div>
    
<?php endif; ?>
     </span>
                          
                    </div>   
       <p>
<?php if($row->url!=NULL): ?>
                 <a style="color: #007bff" target="__blank" href="<?php echo e($row->url); ?>">View for 10 sec and Earn free $

</a>
  <?php endif; ?> 
<?php if($row->url==NULL): ?>
  <a style="color: #007bff" target="__blank" href="<?php echo e(route('user.click')); ?>?ads=<?php echo e($row->id); ?>">
    View for 10 sec and Earn free $</a>
<?php endif; ?>

       </p>
         
           </center>
        </div>
     
 <?php }?>
        
      </div> 
       <!-- END OF click column -->
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>
</div><?php /**PATH B:\node tot\esmscript\git\resources\views/user/fearloss/ads.blade.php ENDPATH**/ ?>