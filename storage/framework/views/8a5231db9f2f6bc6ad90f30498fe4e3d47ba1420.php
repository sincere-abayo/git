<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Activation Complete</title>
</head>
<body>
    <h1><?php echo e($message); ?></h1>
    <p>you are going to be redirected in 3 seconds</p>
    <!-- JavaScript code to redirect after 5 seconds -->
    <script>
        setTimeout(function() {
            window.location.href = "<?php echo e(route('front')); ?>"; 
        }, 3000); // 3000 milliseconds = 5 seconds
    </script>
</body>
</html>
<?php /**PATH /home/afonliww/public_html/resources/views/emails/activate_complete.blade.php ENDPATH**/ ?>