<?php if(!session('admin')): ?>
<script type="text/javascript">
window.location.href = "<?php echo e(route('admin.log')); ?>";
</script>
<?php endif; ?>
<?php

use Illuminate\Support\Facades\Auth;
use App\Models\User;

$user = Auth::user();
$name = $user->name??'';
?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Afonete Affiliate</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- <link rel="icon" href="<?php echo e(asset('assets/a/img/small-logo.png')); ?>"> -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/a/plugins/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/a/dist/css/adminlte.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/a/dist/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/a/dist/css/tree_style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/a/plugins/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('assets/a/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/a/dist/css/adminlte.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/a/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/a/css/style.css')); ?>">

</head>

<body class="hold-transition sidebar-mini">
    <div class="">
        <!-- Navbar -->

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav menu-bar-icon">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button" ><i class="fas fa-bars"></i></a>
                </li>
            </ul>

    
                <div class="account"> 
                     <div class="user-panel d-flex justify-content-end" data-widget="control-sidebar" data-slide="true">
                        <div class="info">
                            <a href="#" class="d-block"><?php echo e($name); ?></a>
                        </div>
                        <div class="user-img">
                            <img src="<?php echo e(asset('assets/a/img/user.png')); ?>" class="" alt="User Image">
                        </div>
                    </div>
                    
                    <div class=" drop-content">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="setting">
                                <a class="nav-link d-flex ">
                                    <i class="nav-icon fas fa-cog align-self-center mx-2"></i>
                                    <p>
                                        Profile Settings
                                        <span class="right badge badge-success">New</span> 
                                    </p>
                                </a>
                            </div> 
                            <div class="logout d-flex justify-content-center border-top pt-1">
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"> <?php echo csrf_field(); ?>
                                    <img src="https://cdn-icons-png.flaticon.com/128/4436/4436954.png" width="25px" height="25px"> 
                                    <button type='submit'>Logout</button>
                                </form>
                            </div>
                        </div>
                        
                       
                    </div>
                </div> 
                

            </nav>
    </div>

    </li>
    </ul>
    </nav>
    <!-- /.navbar -->

    
<style type="text/css">
    ul li img{
        width: 25px;
        height: 25px;
    }
</style>
   
    <!-- Main Sidebar Container -->
       <aside class="main-sidebar sidebar-dark-info elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link">
            <img src="<?php echo e(asset('assets/a/img/log1.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-fixed" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview ">
                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                <p>
                                    Dashboard
                                </p>
                            </p>
                        </a>

                    </li>


                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Profile Settings
                               
                            </p>
                        </a>
                    </li>
                     <li class="nav-item">
                        <a href="<?php echo e(route('admin.contacted')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>
                                Contacted
                                <sup><span class="right badge badge-success"></span></sup>
                                
                               
                            </p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                FAQ

                            </p>
                        </a>
                    </li>
               <li> <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                <img src="https://cdn-icons-png.flaticon.com/128/4436/4436954.png" width="25px" height="25px">  
 Log out</a><form id="logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST"> <?php echo csrf_field(); ?>                
                     </form>
                    </li>

                </ul>
            </nav><br><br>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- REQUIRED SCRIPTS -->
    </div>

    <aside class="control-sidebar control-sidebar-dark profile-drop">
        <!-- Control sidsbar content goes here -->
            <div class="p-2 ml-3">
                <h3 id="prof"></h3>

                <p><i class="las la-id-card mr-2"></i><a  href="<?php echo e(route('profile.edit')); ?>">Profile</a></p>
                <p> <i class="fas fa-cog mr-2"></i> <a href="">Settings</a></p>
                <hr id="hrs">

                <p><i class="las la-question-circle mr-2"></i> <a href="">Need Help</a></p>
                <p>
                    <i class="las la-sign-out-alt text-danger"></i>
                    <a class="text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                        Logout</a></p>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"> <?php echo csrf_field(); ?>
                </form>
            </div>
    </aside>

    <!-- /.control-sidebar -->


    <script type="text/javascript">

        // hide and show setting box
        document.getElementById('drop-btn').addEventListener('click', function() {
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
          } else {
            dropdownContent.style.display = 'block';
          }
        });
        //dashboard menu
        document.getElementById('menu').addEventListener('click', function() {
            let navbar = document.getElementById('topnav');
            navbar.classList.toggle("topnav")
        });

    </script>
</body>

</html><?php /**PATH C:\Users\Andela\Documents\WEB DEVELOPMENT\Sincer\New\affiliate.muhahe.com\resources\views/admin/admin-base.blade.php ENDPATH**/ ?>