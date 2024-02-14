

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="AFONETE Template">
    <meta name="keywords" content="AFONETE, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verfiy-Email </title>
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/jquery-ui.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/booststrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/font-awesome.min.css')); ?>">
    <link rel="icon" href="<?php echo e(asset('assets/front/img/log1.png')); ?>">

</head>

<body class="fd-flex justify-content-center align-items-center">

    <div style="" class="fd-flex justify-content-around align-self-center">

        <div class="text-center" style="width: 80%">
            <div class="card-body">
                <h5 class="card-title mb-3">
                    Email Verification

                </h5>

                <p class="card-text">Thanks for signing up! Before getting started, verify your email address
                    by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send
                    you another</p>

                <?php if(session('status') == 'verification-link-sent'): ?>
                <div style="color: green" class=" mb-4 font-medium text-sm">
                    <?php echo e(__('A new verification link has been sent to the email address you provided during registration.')); ?>

                </div>
                <?php endif; ?>


            </div>


            <div class="mt-4 d-flex justify-content-center">
                <form method="POST" action="<?php echo e(route('verification.send')); ?>">
                    <?php echo csrf_field(); ?>

                    <div>
                        <button class="btn btn-sm btn-primary" type="submit">
                            <?php echo e(__('Resend Verification Email')); ?>

                        </button>
                    </div>
                </form>

                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>

                    <button class="ml-3" type="submit"
                        class="border border-1 text-md text-gray-600 hover:text-blue-900">
                        <?php echo e(__('Log Out')); ?>

                    </button>
                </form>
            </div>
        </div>

    </div>


    <!-- Js Plugins -->
    <script src="<?php echo e(asset('assets/front/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/booststrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/jquery.stellar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/jquery.animateNumber.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/mainj.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/jquerry.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/mainn.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

</body>

</html><?php /**PATH /home/afonliww/marathon.fonepo.com/f/resources/views/auth/verify-email.blade.php ENDPATH**/ ?>