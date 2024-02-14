<?php

    use Illuminate\Support\Facades\Auth;

    use App\Models\User;
    $user = Auth::user();

    $name = $user->name;
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
<h2>Sign contract</h2><br>
<?php if($message): ?>
<span class="alert alert-danger"> <?php echo e($message??''); ?></span><br><br><?php endif; ?>
<form method="post" action="<?php echo e(route('user.contract.save')); ?>" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
   <div id="signature-pad">
     <div style="border:solid 1px teal; width:360px;height:110px;padding:3px;position:relative;">
        <div id="note" onmouseover="my_function();">The signature should be inside box</div>
        <canvas id="the_canvas" width="200px" height="100px"></canvas>
     </div>
     <div style="margin:10px;">
        <input type="hidden" id="signature" name="signature" >
        <button type="button" id="clear_btn" class="btn btn-danger" data-action="clear">
        	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>&nbsp;&nbsp;Clear</button>
        <button type="submit" id="save_btn" class="btn btn-primary" data-action="save-png"><span class="glyphicon glyphicon-ok"></span> Save Contract</button>
     </div>
   </div>
<form>
   
<script>
var wrapper = document.getElementById("signature-pad");
var clearButton = wrapper.querySelector("[data-action=clear]");
var savePNGButton = wrapper.querySelector("[data-action=save-png]");
var canvas = wrapper.querySelector("canvas");
var el_note = document.getElementById("note");
var signaturePad;
signaturePad = new SignaturePad(canvas);
clearButton.addEventListener("click", function (event) {
   document.getElementById("note").innerHTML="The signature should be inside box";
   signaturePad.clear();
});
savePNGButton.addEventListener("click", function (event){
   if (signaturePad.isEmpty()){
     alert("Please provide signature first.");
     event.preventDefault();
   }else{
     var canvas  = document.getElementById("the_canvas");
     var dataUrl = canvas.toDataURL();
     document.getElementById("signature").value = dataUrl;
   }
});
function my_function(){
   document.getElementById("note").innerHTML="";
}
</script>
</body>
</html>
<?php /**PATH C:\Users\Andela\Documents\WEB DEVELOPMENT\Sincer\New\affiliate.muhahe.com\resources\views/user/contract.blade.php ENDPATH**/ ?>