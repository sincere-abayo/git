 <?php

    use Illuminate\Support\Facades\Auth;
    use App\Models\User;
use Illuminate\Support\Facades\Session;

    $user = Auth::user();
    $name = $user->name;
    $ref_code = $user->activation;


// echo $variable3;
    ?>


 <div>
     <?php echo $__env->make('admin.admin-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <div class="row mb-2">
              <div style="padding: 10px 0;margin-top:60px;height:100%;">
 <div>
   
         <?php if(session('message')): ?>
         <p class="alert alert-success" style="margin-left: 600px; width: 400px;">
             <?php echo e(session('message')); ?>

         </p>
         <?php endif; ?>
         

     </div>
     <style>
     .cc .col {
         background-color: #fff5aa;
         border-radius:12px;
         /* Add desired background color */
         border: 1px solid #ccc;
         /* Add desired border style */
         display: flex;
         width: 12px;
         border: 4px solid white;
         height: 100px;
         text-align: center;
         left: 40px;
         padding-top: 30px;
         padding-left: 25px;
     }

     #founder {
         background-color: lightgreen;
         border-raius: 1px solid #ccc;
         display: flex;
         width: 80px;
         height: 100px;
         text-align: center;
         left: 80px;
         padding-top: 30px;
         padding-left: 45px;
     }

     .coming .info-box {
         display: flex;
         width: 100%;
         height: 100%;
         justify-content: center;
         text-align: center;
         float: right;
         padding-top: 5px;
     }


     @media (max-width: 768px),
     @media  screen and (min-width: 768px) {
         .cc .col {
             /*  border: 1px solid #ccc; /* Add desired border style */
             */ background-color: red;
             width: 100%;
             flex: 0 0 60%;
             border: 4px solid white;
              height: 100px; 
             text-align: center;
             left: 40px;
             padding-top: 30px;
             padding-left: 25px;
         }

         #hide {
             display: none;
         }
     }


     .coming {
         display: flex;
         width: 100%;
         height: 120px;
         justify-content: center;
     }
     </style>
     <!-- Content Wrapper. Contains page content -->
     
     <div class="content-wrapper right-side"> 
        

    <?php $results=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NOT NULL");
     $verified=count($results);
      $result=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NULL");
     $unverified=count($result);
     
     $f2=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NOT NULL and has_paid_package='fc2'");
     $fc2=count($f2);
      $f1=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS  NOT NULL and has_paid_package='fc1'");
     $fc1=count($result);
           $std=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NOT NULL and has_paid_package='standard'");

     $sta=count($std);
       $fc1=count($result);
           $ft=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NOT NULL and has_paid_package='ft'");
     $ftt=count($ft);
     ?>

     <div class="container cc">
         <div class="ad-main-box">
             <!-- <div class="" style="background-color: white;" id="hide"></div> -->
             
             <div class="ad-box bg-info " id="not"><a class="nav-icon fas fa-window-restore" href="#">Verified user<br><span class="bg-secondary"><?php echo e($verified); ?></span></b></a></div>
             <div class="ad-box bg-success "> <a href="<?php echo e(route('user.dashboard.activate')); ?>" class="nav-icon fas fa-window-restore" >Pending user<br><span class="bg-danger"><?php echo e($unverified); ?></span></a></div>
             <div class="ad-box bg-primary"><a class="nav-icon fas fa-wallet" href="#"><br>Projects<br>0:0</a>  </div>
             <div class="ad-box bg-danger"><a class="nav-icon fas fa-bookmark" href="#"> <br>FC $100 <br><?php echo e($fc1); ?></a>  </div>
             <div class="ad-box bg-warning"><a class="nav-icon fas fa-money" href="#"> <br>FC $200<br /><?php echo e($fc2); ?></a></div>
             <div class="ad-box bg-info"><a class="nav-icon fas fa-gift" href='#'> <br>Standard <br><?php echo e($sta); ?></a></div>
             <div class="ad-box bg-success"><a class="nav-icon fas fa-gift" href="<?php echo e(route('admin.ft')); ?>"> <br>FT worker <br><?php echo e($ftt); ?></a></div><br> 
         </div>
     </div>

    
     
         <!-- Content Header (Page header) -->
         <div class="content-header">
             <div class="container-fluid">
                 <!-- /.row -->
             </div><!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->
         <div class="row">
             

             </div>
             <!-- /.col -->
             
             <!-- /.col -->

             <!-- fix for small devices only -->
             <div class="clearfix hidden-md-up"></div>

          
                 <div class="col-lg-12">
                     <!-- Map card -->
                     <div class="card " style="background-color:; width: 100%; ">
                       
                         <div class="card-body">
                             <div class="row">
                              


    <?php 

$results=DB::select("SELECT * from users where utype != 'ADM'");
    ?>
  <h3 style="margin-left: 300px;">REGISTERED USER  <span style="color:red;">(<?php echo e(count($results)); ?>)</span></h3><br>
                    <table align="center" style="width:70%;margin-left: 110px;">

                        <thead class="bg-gradient-primary ">
                            <tr>
                                <th>N<sup>0</sup></th>
                                 <th>Username</th>
                                <th>Names</th>

                                <th>email</th>

                                <th>phone</th>
                                 <th>Country</th>
                                <th>package</th>

                                <th>stutus</th>
                            </tr>
                        </thead>
                        <?php

$n=1;
foreach ($results as $row):
    

?>
<!--<span class="bg-success">verified</span>':'<span class="bg-danger"></span>pending'}}-->

<?php
$verified="<span class='bg-success'>verified</span>";
$pending="<span class='bg-danger'>pending</span>";
?>
                        <tbody>
                            <tr>
                                <td><?php echo e($n); ?></td>
                                <td><?php echo e($row->user); ?></td>
                                <td><?php echo e($row->name); ?></td>
                                <td><?php echo e($row->email); ?></td>
                                <td><?php echo e($row->phone); ?></td>
                                <td><?php echo e($row->country); ?></td>

                                <td><?php echo e($pack=$row->has_paid_package=='no'?'not activated':$row->has_paid_package); ?></td>
                                <td><?php echo $stutus=$row->email_verified_at?$verified:$pending?></td>
                            </tr>
                            <?php echo e($n++); ?>

                            <?php endforeach;  ?>
                        </tbody>
                    </table>
                             </div>
                             <!-- /.card -->
                          
                        

                     </div>
                     <!-- /.card -->

                     <!-- solid sales graph -->

                 </div>
             </div>
            
 </div>
 <!-- END OF CARD -->
 </div>
 <!-- /.col-md-6 -->
 </div>

 </div><?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </div><?php /**PATH B:\node tot\esmscript\affiliate.muhahe.com\resources\views/admin/admin-dashboard.blade.php ENDPATH**/ ?>