
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Subscribtion</title>
</head>
<body>
<?php if($status=='activate'): ?>
<h1>News and update subscription</h1>
<p>
	thank u for your activating Subscribtion, you will receive our news<br> and update of Afonete.
</p>
<br>
<p><a style="color: red;" href="http://localhost:9000/deactivate?email=<?php echo e($email); ?>">cancel subscription</a></p>
<!-- <p><a href="http://marathon.fonepo.com/f/public/deactivate?email=">cancel subscription</a></p> -->
<?php endif; ?>
<?php if($status=='deactivate'): ?>
<h1>News and update subscription</h1>
<p>
	You have deactivate your Subscribtion for receiving updates and news, <br>
	of Afonete. will miss to see you
</p>
<br>
<p><a style="color: green;" href="http://localhost:9000/activate?email=<?php echo e($email); ?>">Re_activate subscription</a></p>
<!-- <p><a href="http://marathon.fonepo.com/f/public/deactivate?email=">cancel subscription</a></p> -->
<?php endif; ?>
</body>
</html><?php /**PATH B:\node tot\esmscript\git\resources\views/emails/news.blade.php ENDPATH**/ ?>