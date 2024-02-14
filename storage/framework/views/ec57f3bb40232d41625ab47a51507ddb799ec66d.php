<?php

use Illuminate\Support\Facades\Auth;
use App\Models\User;

$user = Auth::user();
$name = $user->name;
$ref_code = $user->activation;


?>



<div>
 <?php echo $__env->make('admin.admin-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


 </style>
 
 <div class="content-wrapper right-side"> 
    

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
             
               
    
             <?php 
                                $messages=DB::select("SELECT * from contacteds");
                                ?>
     </div>

             <div class="table-container rounded ">
                    <div class="pt-3 border">
                    <p class="text-center font-weight-bold table-title">Messages</span></p>
                  </div>

                 <div class="tb">
                    <?php if(count($messages)): ?>
                        <table class="table table-striped " style="text-align: center;">    
                            <thead class="bg-gradient-primary ">
                                <tr>
                                    <th>#</th>
                                    <th>Names</th>
                                    <th>Surnmae</th>
                                    <th>email</th>

                                    <th>phone</th>
                                    
                                    <th>Messages</th>
                                </tr>
                            </thead>
                        
                            <?php
                                $n=1;
                                foreach ($messages as $row):
                            ?>

                            <tbody>
                                <tr>
                                    <td><?php echo e($n++); ?></td>
                                    <td><?php echo e($row->name); ?></td>
                                    <td><?php echo e($row->sur); ?></td>
                                    <td><?php echo e($row->email); ?></td>
                                    <td><?php echo e($row->phone); ?></td>
                                    
                                    <td><?php echo e($row->message); ?></td>
                                </tr>
                                <!-- <?php echo e($n++); ?> -->
                                <?php endforeach;  ?>
                            </tbody>
                    <?php else: ?>
                   <span>No messages yet</span>
                   <?php endif; ?>
                    </table>
                  </div>

            </div>

</div>
</div>
<?php /**PATH D:\laraver pro\git\resources\views/admin/contacted.blade.php ENDPATH**/ ?>