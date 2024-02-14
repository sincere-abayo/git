<?php

use Illuminate\Support\Facades\Auth;
use App\Models\User;

$user = Auth::user();
$name = $user->user??'';
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

    <title>Fonepo Affiliate</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="<?php echo e(asset('assets/a/dist/js/adminlte.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <link rel="icon" href="<?php echo e(asset('assets/a/img/big-logo.png')); ?>">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/a/plugins/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/a/dist/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/a/dist/css/tree_style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/a/plugins/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('assets/a/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/a/dist/css/adminlte.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/a/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/a/dist/css/proje.css')); ?>">
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
                     <div class="user-panel d-flex justify-content-end" id="drop-btn" data-widget="control-sidebar" data-slide="true" role="button">
                        <div class="info">
                            <a href="#" class="d-block"><?php echo e($name); ?></a>
                        </div>
                        <div class="user-img">
                           <img src="<?php echo e(asset('assets/a/img/user.png')); ?>" class="" alt="User Image">
                        </div>
                    </div>
                    
                  
                </div> 
                

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
            <img src="<?php echo e(asset('assets/a/img/big-logo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">Fonepo</span>
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
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                <p>
                                    Dashboard
                                </p>
                            </p>
                        </a>

                    </li>

                    <!-- End of nav-item -->
                    <li class="nav-item has-treeview ">
                        <a href="<?php echo e(route('user.dashboard.payclick')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-share"></i>
                            <p>
                                <p>
                                    FOMO
                                </p>

                            </p>
                        </a>

                    </li>

                    <!-- End of nav-item -->

                    <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('user.dashboard.balance')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-signal"></i>
                            <p>
                                Balance
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link">
                          <img src="https://cdn-icons-png.flaticon.com/256/7544/7544957.png">
                               <span class="push">  Investment Package</span> 
                        </a>
                    </li>
                    <!-- End of nav-item -->

                    <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('user.dashboard.payments')); ?>"  class="nav-link">
                            <i class="nav-icon fas fa-road"></i>
                            <p>
                                Payments
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link">
                         <img src="https://cdn-icons-png.flaticon.com/128/999/999346.png" >
                          <p>
                                Featured
                                   <span class="right badge badge-danger">coming soon</span>
                                
                            </p>
                         
                        </a>
                    </li>
                    <!-- End of nav-item -->
                    <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-star"></i>
                            <p>
                                Upgrade Package
                            </p>
                        </a>
                    </li>

                   <li> <a class="nav-link"  href="<?php echo e(route('user.dashboard.project')); ?>">
                            <img src="https://cdn-icons-png.flaticon.com/128/4595/4595164.png">
                            <span class="push">  Upload Project</span> 
                            
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link ">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Team Building

                            </p>
                        </a>

                    </li>
                    <!-- start my link-->
                     <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('user.referral.show')); ?>" class="nav-link ">
                            <i class="nav-icon fas fa-link"></i>
                            <p>
                                My Links

                            </p>
                        </a>

                    </li>
                     <!-- end my link-->

                    <!-- End of nav-item -->

                    <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link ">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Education
                            </p>
                        </a>

                    </li>

                    <!-- End of nav-item -->
                     <!-- start Rewards center -->
                     <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link ">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Reward Center
                                 <span class="right badge badge-success">New</span>
                            </p>
                        </a>

                    </li>
                     <!-- end Rewards center-->

                    <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link ">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Exchange
                            </p>
                        </a>
                    </li>

                    

                    <!-- End of nav-item -->

                    <li class="nav-item has-treeview">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-plus"></i>
                            <p>
                                Products
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="background-color: blanchedalmond">
                            <li class="nav-item">
                                <a href="www.muhahe.com" class="nav-link" target=__blank>
                                    <i class="fas fa-shopping-cart nav-icon" style="color: black"></i>
                                    <p style="color: black">Our Shop</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="www.booking.muhahe.com" class="nav-link " target="__blank">
                                    <i class="fas fa-home nav-icon" style="color: black"></i>
                                    <p style="color: black">Our Booking</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon" style="color: black"></i>
                                    <p style="color: black">Other Products</p>
                                </a>
                            </li>
                        </ul>
                    </li> <!-- End of nav-item -->
                    
                      <li class="nav-item">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link ">
                            <i class="nav-icon fas fa-money"></i>
                            <p>
                                Bonos
                                   <span class="right badge badge-danger">coming soon</span>
                                
                            </p>
                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link ">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Refer & Earn
                            </p>
                        </a>

                    </li>

                    <!-- End of nav-item -->
                        <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>
                                Inbox
                                <sup><span class="right badge badge-success">0</span></sup>
                                
                               
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link">
                            <i class="fa-duotone fa-location-arrow"></i>
                            <p>
                                My Invitations

                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>
                                My Invetees(1)
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                My Team
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Team Summary
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>
                                Leaderboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>
                                Marketing campaigns
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>
                                Testimonials
                            </p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                FAQ

                            </p>
                        </a>
                    </li>
                    <li>
                         <p>
                    <i class="las la-sign-out-alt text-danger"></i>
                    <a class="text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                        Logout</a></p>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"> <?php echo csrf_field(); ?>
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
    

    </script>


</body>

</html><?php /**PATH /home/afonliww/public_html/resources/views/user/user-dashboard-base.blade.php ENDPATH**/ ?>