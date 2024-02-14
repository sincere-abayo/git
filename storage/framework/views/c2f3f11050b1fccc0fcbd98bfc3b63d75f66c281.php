 <?php

    use Illuminate\Support\Facades\Auth;
    use App\Models\User;

    $user = Auth::user();
    $name = $user->name;
    $ref_code = $user->activation;
  
  function generateActivationCode($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($characters) - 1);
        $code .= $characters[$randomIndex];
    }

    return $code;
}
    ?>

 
 
 <div>
     <?php echo $__env->make('admin.admin-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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

         <div class="ad-main-box mt-3 mb-3">
             <!-- <div class="" style="background-color: white;" id="hide"></div> -->
             <div class="ad-sub-box1 ">
                    <div class="sub-box-1">   
                        <div class="ad-box bg-info " id="not"><a class="nav-icon fas fa-window-restore" href="#"><br>Verified <br> user<br> <?php echo e($verified); ?></a></div>

                        <div class="ad-box bg-success "> <a href="<?php echo e(route('admin.pending')); ?>" class="nav-icon fas fa-window-restore" ><br>Pending <br> user<br><span class="text-white"><?php echo e($unverified); ?></span></a></div>
                    </div>
                    <div class="sub-box-1">  
                        <div class="ad-box bg-primary"><a class="nav-icon fas fa-wallet" href="#"><br>Projects<br>0:0</a>  </div>
                        <div class="ad-box bg-danger"><a class="nav-icon fas fa-bookmark" href="#"> <br>FC $100 <br><?php echo e($fc1); ?></a>  </div>   
                    </div>
                    
             </div>

             <div class="ad-sub-box2">
                <div  class="sub-box-1">
                    <div class="ad-box bg-warning mr-2 ml-1"><a class="nav-icon fas fa-money" href="#"> <br>FC $200<br /><?php echo e($fc2); ?></a></div>
                   <div class="ad-box bg-info mr-2  ml-1"><a class="nav-icon fas fa-gift" href='#'> <br>Standard <br><?php echo e($sta); ?></a></div>
                </div>
                <div class="sub-box-1">   
                     <div class="ad-box bg-success col"><a class="nav-icon fas fa-gift" href="<?php echo e(route('admin.ft')); ?>"> <br>FT worker <br><?php echo e($ftt); ?></a></div><br> 
                </div>
                   
               
             </div>
             
            
         </div>

    
         <!-- Content Wrapper. Contains page content -->
         <?php $results=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NOT NULL");
         $verified=count($results);
          $result=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NULL");
         $unverified=count($result);
         ?>

<div class="card direct-chat direct-chat-primary">
    <div class="card-header">
              
        <!-- /.card-header -->
        <button class="btn btn-primary" style="float: right;" onclick="history.back()"><i class="las la-arrow-circle-left"></i> back</button>
        
        <div class="ft-activ">
            <div class="sub-ft-active d-flex flex-column py-2">
                <h3 class="ft-title" >Manage FT USER</h3>
                <center>
                     <form method="post" action="<?php echo e(route('admin.ft.save')); ?>" class="form">
                            <?php echo csrf_field(); ?>
                            <div>
                           
                                <div>
                                   
                                        <a href="?req=gen" class="btn btn-secondary btn-sm gnl-btn"> Generate FT activation code</a>
                                   
                                </div>
                                <div>   
                                    <?php if(request()->query('req')): ?>
                                        <label class="text-info">new generated key: </label>
                                        <div class="d-flex saveKey">
                                            <div>
                                                 <input class="code" type="text" name="code" value="<?php echo e(generateActivationCode(20)); ?>">    
                                            </div>
                                            <div>
                                                 <button class="btn btn-success btn-sm" type="submit">Save</button><br>
                                            </div>
                                            
                                        </div>
                                       
                                       
                                    <?php endif; ?>
                            </div>  
                            </div>    
                             <span class="text-success" style="margin-left:830px;"><?php echo e($message??''); ?></span>            
                        </form>  
                        </center>
            </div>
                     
        </div>
    <div class="row container-fluit">
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="bg-gradient-primary ">
                        <tr>
                            <th>#</th>
                            <th>Usename</th>
                     
                            <th>Code</th>

                            <th>Task</th>
                            
                            <th>Date_created</th>
                        </tr>
                    </thead>
                    <?php
                    $results=DB::select("SELECT * from users where has_paid_package='ft'");
                    $n=1;
                    foreach ($results as $row):
                    ?>

                    <tbody>
                        <tr>
                            <td><?php echo e($n++); ?></td>
                            <td><?php echo e($row->user); ?></td>
                            <td><?php echo e($row->activation); ?></td>
                            <td><?php echo e($row->task); ?></td>
                            <td><?php echo e($row->created_at); ?></td>
                        </tr>
                    </tbody>
                    <?php endforeach;  ?>
                </table>
            </div>
            

        </div>

        <div class="col-md-6 ">
             <div class="">
                <?php

                 $activation=DB::select("SELECT * from activations where package='ft' ");
                 if (count($activation)) {
                     // code...
                 
                 ?>
                 <div class="table-responsive">
                    <table class="table table-striped">
                                           
                        <thead class="bg-gradient-primary ">
                            <tr>
                                <th>Activations</th>

                                <th>Date_created</th>
                               
                            </tr>
                        </thead>
                            <?php
                            $n=1;
                            foreach ($activation as $row):
                                

                            ?>

                            <tbody>
                                <tr>
                                    <!-- <td><?php echo e($n++); ?></td> -->
                                    <td><a href="<?php echo e(route('admin.user.task')); ?>?code=<?php echo e($row->code); ?>"> <?php echo e($row->code); ?></a></td>
                                    <td><?php echo e($row->created_at); ?></td>
                                </tr>
                            </tbody>
                             <?php endforeach; }; ?>
                    </table>
                </div>
            </div>
        </div> 

    </div>
</div>
</div>
</div>
</div>
<?php /**PATH C:\Users\Andela\Documents\WEB DEVELOPMENT\Sincer\New\affiliate.muhahe.com\resources\views/admin/ft-manage.blade.php ENDPATH**/ ?>