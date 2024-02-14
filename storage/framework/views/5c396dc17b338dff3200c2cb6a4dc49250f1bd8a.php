<?php

    use Illuminate\Support\Facades\Auth;

    use App\Models\User;
    $user = Auth::user();

    $name = $user->name;
    $position=$user->has_paid_package;
    ?>


</div><!DOCTYPE html>
<html>
<head> 
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Contarct</title>
   <!-- <link rel="stylesheet" href="../libs/css/bootstrap.v3.3.6.css"> -->
   <!-- <script type="text/javascript" src="signature.js"></script> -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/booststrap_changed.min.css')); ?>">

  <script src="<?php echo e(asset('assets/a/dist/js/signature.js')); ?>"></script>

   <style>
     body{
     padding: 15px;
     }
     .div{
      position:absolute;left:20px;
     }
     #note{position:absolute;left:50px;top:35px;padding:0px;margin:0px;cursor:default;}
</style>
</head>
<body>
	<center>
<h1>Contract</h1>
<div class="row">
<div class="col" style="width:350px height:100px">
	<h4>Mperekeje kanani</h4><br>
	<p>Id: 11998236542899</p><br>
	<h5>Position: (Founder and CEO)</h5>
        <h5>Signature: <?php
     echo "<img src='".asset('signature/admin.png')."' style='width:60px;height:50px;'>";?></h5>
	<p>Date: <?php echo e(date('Y/m/d')); ?></p>
</div>
<div class="col" style="width:350px height:100px">
	<h4><?php echo e($name); ?></h4><br>
	<p>Id: 11998236542899</p><br>
	<h5>Position: <?php echo e($position); ?></h5>
    <h5>Signature: <?php
// $message='admin.png';
     echo "<img src='".asset('signature/'.$message)."' style='width:60px;height:50px;'>";?></h5>
	<p>Date: <?php echo e(date('Y/m/d')); ?></p>
</div></div>
<div>
   
</div>
<br>
<form method="post" action="<?php echo e(route('user.contract.confirm')); ?>">
	<?php echo csrf_field(); ?>
   <div id="signature-pad">
  
     <div style="margin:10px;">
        <input type="hidden" id="signature" name="signature" value="<?php echo e($message); ?>">
        <button type="button" id="clear_btn" class="btn btn-danger" data-action="clear" 
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg><a href="<?php echo e(route('user.contract')); ?>">&nbsp;&nbsp;Cancer contract</a>
</button>
        <button type="submit" id="save_btn" class="btn btn-primary" data-action="save-png"><span class="glyphicon glyphicon-ok"></span> Confirm contract</button>
     </div>
   </div>
<form>
</body>
</html>
<?php /**PATH B:\node tot\esmscript\affiliate.muhahe.com\resources\views/user/previeu.blade.php ENDPATH**/ ?>