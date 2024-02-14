    
<?php    
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;  
  $user=Auth::User();
    $username=$user->user;
        $events = Event::where('user', $username)
    ->orderByRaw("CASE WHEN status = 'pending' THEN 0 ELSE 1 END") // Order by 'pending' first
    ->get();


        ?>
<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px;
}

main {
  padding: 20px;
}

.deposit-form {
  border-radius: 4px;
  padding: 20px;
}

.deposit-form h2 {
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="number"] {
  width: 100%;
  border: none;
  padding: 10px;
  border-bottom: 1px solid gray;
  background-color: black;
}

button {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #555;
}

footer {
  background-color: #f2f2f2;
  text-align: center;
  padding: 10px;
}
.main_head{
  width: 90%;
  margin: 0 auto;
  font-size: 30px;
  border-bottom: 2px solid darkred;
  padding: 15px 0;
  text-align: center;
}
.dep_hist_head{
  border-bottom: 1px solid gray;
}
h3{
  font-size: 20px;
  margin: 10px 0;
}
.small_text{
  font-size: 14px;
}
.convert{
  background-color: inherit;
  width: 100%;
  border: 2px solid red;
  padding: 7px 20px;
  border-radius: 0;
  color:  red;
}
.convert:hover{
  background-color: #111;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
     <?php echo $__env->make('user.user-dashboard-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="content-wrapper" style="position: relative;">
        <div class="container"> 
          <div class="row">
              <div class="col-12 col-sm-12 col-md mx-md-2 mx-xl-3 shadow">
                 <h1 class="main_head">My Event Histroy </h1>

                <main>
               <?php if(!$events): ?>
               <span class="ml-2 bg bg-primary"> No events reported yet</span>
              
               <?php else: ?>
               <div class="recentEvent  my-2 py-3 ">
               <!-- <a href="<?php echo e(asset('events/'.$event->img1)); ?>"><img src="<?php echo e(asset('events/'.$event->img1)); ?>" class="links "></a> -->
                  
                  <?php foreach ($events as $event) { ?>
                     <div class="recbox">
                      <a href="<?php echo e(route('user.dashboard.events')); ?>" class="box  d-flex justify-content-between align-items-center py-2  px-2"> 
                        <div class="d-flex">
                        
                          <div ><img src="<?php echo e(asset('events/'.$event->img1)); ?>" class="links "></div> 
                          <?php if($event->img2): ?>
                          <div ><img src="<?php echo e(asset('events/'.$event->img2)); ?>" class="links "></div><?php endif; ?> 
                        </div>
                          <div class="font-weight-bold border"><?php echo e($event->desc); ?></div>
                          <div class="font-weight-bold border"><?php echo e($event->date_on); ?></div>
                          <div> 
                              <div class="date"><?php echo e($event->created_at); ?></div>
                              <?php if($event->status=='pending'): ?>
                              <div class="status status-pending"><?php echo e($event->status); ?></div>
                              <?php else: ?>
                              <div class="status status-verified"><?php echo e($event->status); ?></div>
                              <?php endif; ?>
                          </div>
                      </a>
                  </div>
                  <?php } ?>
                  
                  </div>
                  <?php endif; ?>
               
             
                </main>
              </div>

              <div class="col-12 col-sm-12 col-md-5 mx-md-2 text-white px-4 h-75 mx-xl-3" style="background-color: #000050;"> 
                 <h1 class="main_head">Report Event 
<br>
<small>
  <?php if($die): ?>

                  <i class="bg bg-danger"> <?php echo e($die); ?></i>
                  <?php endif; ?>
                   <?php if($success): ?>

                  <i class="bg bg-success"><?php echo e($success); ?></i>
                  <?php endif; ?>
                    <?php if($failed=='img1'): ?>

                  <i class="bg bg-danger">error while uploading first image</i>
                  <?php endif; ?>
                    <?php if($failed=='img2'): ?>

                  <i class="bg bg-danger">error while uploading second image</i>
                  <?php endif; ?>
</small>
                 </h1>

                 <div class="">

                    <form method="post" action="<?php echo e(route('user.event.report')); ?>"> 
                    <?php echo csrf_field(); ?> 
                        <label>image 1  <small>required</small></label><br>
                        <input type="file" required name="img1" class="form-control">
                 
                        <label>image 2  <small>option</small> </label><br>
                        <input type="file" name="img2" class="form-control">
                        <label>Description  <small>required</small></label><br>
                        <textarea required name="desc" class="form-control"></textarea>
                         <label>Event doned on    <small>date required</small> </label><br>
                        <input type="date" name="date" required class="form-control">
                        <input type="submit" class="btn btn-primary font-weight-bold w-100 my-3">
                    </form>
                 </div>
              </div>
          </div>
        </div>
     
  </div>  

    <?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
 

</body>
</html>
<?php /**PATH B:\node tot\esmscript\git\resources\views/user/events.blade.php ENDPATH**/ ?>