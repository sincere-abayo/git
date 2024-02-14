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
    <div>
   
         <?php if(session('message')): ?>
         <p class="alert alert-success d-flex justify-content-center">
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
     
     <div class="content-wrapper" style="width: 80%;"> 
        

    <?php $results=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NOT NULL");
     $verified=count($results);
      $result=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NULL");
     $unverified=count($result);
     
     $f2=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NOT NULL and has_paid_package='fc2'");
     $fc2=count($f2);
      $f1=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS  NOT NULL and has_paid_package='fc1'");
     $fc1=count($f1);
           $std=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NOT NULL and has_paid_package='standard'");

     $sta=count($std);
      
           $ft=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NOT NULL and has_paid_package='ft'");
     $ftt=count($ft);
     ?>


         <div class="ad-main-box mt-3 mb-3">
             <!-- <div class="" style="background-color: white;" id="hide"></div> -->
             <div class="ad-sub-box1 ">
                    <div class="sub-box-1">   
                        <div class="ad-box bg-info " id="not"><a class="nav-icon fas fa-window-restore" href="<?php echo e(route('admin.verify')); ?>" ><br>Verified <br> user<br> <?php echo e($verified); ?></a></div>

                        <div class="ad-box bg-success "> <a href="<?php echo e(route('admin.pending')); ?>" class="nav-icon fas fa-window-restore" ><br>Pending <br> user<br><span class="text-white"><?php echo e($unverified); ?></span></a></div>
                    </div>
                    <div class="sub-box-1">  
                        <div class="ad-box bg-primary"><a class="nav-icon fas fa-wallet" href="#"><br>Projects<br>0:0</a>  </div>
                        <div class="ad-box bg-danger"><a class="nav-icon fas fa-bookmark"  href="<?php echo e(route('admin.fc1')); ?>"> <br>FC $100 <br><?php echo e($fc1); ?></a>  </div>   
                    </div>
                    
             </div>

             <div class="ad-sub-box2">
                <div  class="sub-box-1">
                    <div class="ad-box bg-warning mr-2 ml-1"><a class="nav-icon fas fa-money"  href="<?php echo e(route('admin.fc2')); ?>"> <br>FC $200<br /><?php echo e($fc2); ?></a></div>
                  
                </div>
                <div class="sub-box-1">   
                     <div class="ad-box bg-success col"><a class="nav-icon fas fa-gift" href="<?php echo e(route('admin.ft')); ?>"> <br>FT worker <br><?php echo e($ftt); ?></a></div><br> 
                </div>
                   
               
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
    <?php 

$requested=DB::select("SELECT * from users where utype !='ADM' and has_request ='requested' order by id desc");
    ?>       
        <div class="table-container rounded ">
                    <div class="pt-3 border">
                    <p class="text-center font-weight-bold table-title">Requested user to join  <span class="text-success">(<?php echo e(count($requested)); ?>)</span>
                              <?php if(session('created')): ?>
    <div class="btn btn-success" style="width:400px">
        <?php echo e(session('created')); ?>

    </div>
<?php endif; ?>

          <?php if(session('failed')): ?>
    <div class="btn btn-danger" style="width:400px">
        <?php echo e(session('failed')); ?>

    </div>
<?php endif; ?></p>
                  </div>

                 <div class="tb">
                    <?php if(count($requested)>0): ?>
                        <table class="table table-striped " style="text-align: center;">    
                            <thead class="bg-gradient-primary">
                                  <tr>
                                    <th>#</th>
                                     <!-- <th>Userame</th> -->
                                    <th>Names</th>
                                    <th> E-mail</th>
                                    <th> Phone</th>
                                    <th>Country</th>
                                    <th>Status</th>
                                  <th> Requested_at</th>
                                  <th> Action</th>
                                  </tr>
                            </thead>
                             <?php
                                $n=1;
                                foreach ($requested as $requested):
// $timestamp = "2023-07-22 10:24:04";
// $year = date("Y-m-d", strtotime($row->email_verified_at));
                            ?>
                            <?php
                                $verified="<span class='bg-success p-1 rounded'>verified</span>";
                                $pending="<span class='bg-danger p-1 rounded'>pending</span>";
                            ?>

                         <tbody>
                            <tr>
                                <td><?php echo e($n); ?></td>
                             
                                <!-- <td><?php echo e($requested->user); ?></td> -->
                                <td><?php echo e($requested->name); ?></td>
                                <td><?php echo e($requested->email); ?></td>
                                <td><?php echo e($requested->phone); ?></td>
                                <td><?php echo e($requested->country); ?></td>
                                <td><?php echo $requested->has_request=='requested'?$pending:$verified?>
                                    
                                </td>
                                                           
                                <td><?php echo e($requested->created_at); ?></td><td><a href="<?php echo e(route('admin.user.confirm')); ?>?id=<?php echo e($requested->id); ?>">confirm</a></td>
                            </tr>
                        </tbody>
                        <!-- <?php echo e($n++); ?> -->
                        <?php endforeach;  ?>
                   <?php else: ?>
                   <span>No requested user yet</span>
                   <?php endif; ?>
                    </table>
                  </div>

            </div>


 </div>

 <?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laraver pro\git\resources\views/admin/user-request.blade.php ENDPATH**/ ?>