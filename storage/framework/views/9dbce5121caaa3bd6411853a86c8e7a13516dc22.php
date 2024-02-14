 <?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
// use App\Models\Activations
$user = Auth::user();
$name = $user->user;
$email=$user->email;
$activated=$user->has_paid_package;
$created=$user->created_at;
// $act=find::Activations()
$sponsored=$user->referee_id??'System';
    $ref_code = $user->activation;

?>

 <div>
     <?php echo $__env->make('user.user-dashboard-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<center>
              
              
                         <?php
        $result=db::SELECT("SELECT * from activations where email= :email",['email'=>$email]);

    if (count($result)<1)
     {

 ?>
  <span class="bg-danger"> You have activated standard package please, please Upgrade to get more earning</span>
 <?php
     }
          if (count($result)>0){


    ?>

  <span class="bg-success"> You have activated <?php echo e($activated); ?> package please, please Upgrade to get more earning</span>


<?php
     }
         
       
    $results=db::SELECT("SELECT * from users where referee_id= :ref",['ref'=>$ref_code]);
 ?>
<div class="container"><h4 class=" pull-left">Your Referrals</h4>
 <div class="padding-15 ref"> 
                                Your Referral Link
                                <br> 
        <input type="hidden" id="link" value="http://localhost:8000/register?referral=<?php echo e($ref_code); ?>">
    
      <a href="#" style="color: white;text-decoration: none;"  
                id="btn1">  <img src="https://cdn-icons-png.flaticon.com/128/455/455691.png" style="width:20px;height: 20px;float: left;">http://localhost:8000/register?referral=<?php echo e($ref_code); ?>

                                 </a></div> <br><div class="pea col-lg-12  md-whiteframe-3dp bg-dark-transparent text-center ">
                                    <span class="info-box-text">Total Referrals</span>
                                
                                <br> <span class="font-size-16 margin-top-10 font-weight-600 text-upper">
                                    <i class="fas fa-users" style="color:black;float:left "></i><?php echo e(count($results)); ?></span></div><br> <div  class="ear col-lg-12  md-whiteframe-3dp bg-dark-transparent text-center  ">
                                Referral Earnings Today
                                <br> <span class="font-size-16 margin-top-10 font-weight-600 ">0 Coins</span><!--  </div><br><div class="act col-lg-12  md-whiteframe-3dp bg-dark-transparent text-center  ">
                                Active Referrals This Week
                                <br> <span class="font-size-16 margin-top-10 font-weight-600 ">0</span>-->
                            </div> <table style=" width: 300px;">
                                    <tr >
                                        <th>Referral_code: </th>
                                         <td>
                                            <input type="hidden" value="<?php echo e($ref_code); ?>" id="link1"> 
                                            <a href="#" style="color:red;text-decoration:none;" 
                                            id="btn2"> <?php echo e($ref_code); ?></a></td>

                                    </tr>
                                   





                                </table>
  <script type="text/javascript">
                         function getlink() {http://localhost:8000/register?referral=<?php echo e($ref_code); ?>

                             // var linkinput = document.getElementById('link');
                             var linkinput = document.getElementById('link');
                             var newlink=linkinput.value;
                             var tempInput = document.createElement("input");
                             tempInput.value = newlink;
                              document.body.appendChild(tempInput);
                            tempInput.select();
                     document.execCommand("copy");
                     document.body.removeChild(tempInput);
                     alert('Referral link copied to clickboard ');
                         }
                         var copybtn = document.getElementById('btn1');
                         copybtn.addEventListener("click", getlink);

                          function getreferral() {
                             var codeinput = document.getElementById('link1');
                             var newcode=codeinput.value;
                             var tempInput = document.createElement("input");
                             tempInput.value = newcode;
                              document.body.appendChild(tempInput);
                            tempInput.select();
                     document.execCommand("copy");
                     document.body.removeChild(tempInput);
                     alert('Referral code copied to clickboard ');
                         }
                         var copybtn = document.getElementById('btn2');
                         copybtn.addEventListener("click", getreferral);
                         </script>


                            </div>
<br><br>

                  <style>
.list table, .list td,.list th 
{  
  border: 1px solid #ddd;
  text-align: left;
}

.list table {
  border-collapse: collapse;
  width: 400px;
}

.list th, .list td {
  padding: 5px;
}
</style>
      <div class="list" style="overflow-x: auto;">
  <table>
    <thead>
        <?php
       
    $results=db::SELECT("SELECT * from users where referee_id= :ref",['ref'=>$ref_code]);
    if (count($results)) {
        // code...
    
 ?>
      <tr>
        <th>#</th>
        <th>Username</th>
         <th>Package</th>
          <!-- <th></th> -->
          
        
      </tr>
    </thead>
    <tbody>
  <?php
$a=1;
foreach ($results as $row) {
    
    ?>
      <tr>
        <td><?php echo e($a); ?></td>
        <td><?php echo e($row->user); ?></td>
        <td><?php echo e($row->has_paid_package=='no'?'No Package':($row->has_paid_package=='fc1'?'FC $100':'FC$200')); ?></td>
      </tr>
     <?php    }?>
    </tbody>
  </table>
  <?php 


}

?>
                        </div>
       
    <style type="text/css">
.container{
    background: #212121;
    color: #e7e7e7;
    width: 500px;
}
.container table{
    color: #e7e7e7;
    width: 200px;
}
.container td{
    color: yellow;
}
.ref,.pea,.ear,.act{
    background: #2d2e3126;
    padding: 4px;
    width: 450px;
}
        .fl-ad-left {
        position: fixed;
        bottom: 0px;
        left: 0px;
        height: 280px;
        width: 300px;
        max-width: 300px;
        background-color: #1A1E2F;
        z-index: 10000;
    }
    
    .fl-header .md-icon {
        width: 16px;
        min-width: 16px;
        height: 16px;
        min-height: 16px;
        color: #E91B61;
    }

    .fl-header .md-button {
        min-height: 20px;
        line-height: 20px;
        z-index: 10003 !important;
        min-width: 24px !important;
    }

    .fl-header {
        background-color: transparent;
        height: 20px;
        max-width: 300px;
    }

.md-theme-default :not(input):not(textarea)::selection {
    background: #e91e63;
    color: rgba(255, 255, 255, .87);
}

</style><?php /**PATH B:\node tot\esmscript\affiliate.muhahe.com\resources\views/user/referral.blade.php ENDPATH**/ ?>