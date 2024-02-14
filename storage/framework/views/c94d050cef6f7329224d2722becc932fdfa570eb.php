  <?php

    use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

    use Illuminate\Http\Request;
    use App\Models\User;

    $user = Auth::user();
    $name = $user->name;
    $email = $user->email;
    $package = $user->has_paid_package;

    $ref_code = $user->activation;

    $jsonString = file_get_contents(resource_path('dummydata/task.json'));
    $data = json_decode($jsonString);

    $totalSum = 0;

    if($user->has_free_package=='no'):
    header("location:user.user-package");
    endif;
    ?> 

 
 <div class="wrapper">
     <?php echo $__env->make('user.user-dashboard-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="content-wrapper"> 
        <div class="container-fluid">
     <div class="row mb-2">
              <div style="padding: 10px 0;height:100%;">
        <div>
       
             <?php if(session('message')): ?>
             <p class="alert alert-success" style="margin-left: 600px; width: 600px;">
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
     
  
        

        <marquee behavior="" direction=""><i style="color: brown">Welcome Back To Millionaire Site,We're Here for
                 you,now
                 you can make money online without Imvestments,work hard and get yourself imverstements to buy new
                 package.
                 And don't Hesitate to Contact us</i> </marquee>


         <div class="ad-main-box mt-3 mb-3">
             <!-- <div class="" style="background-color: white;" id="hide"></div> -->
             <div class="ad-sub-box1 ">
                    <div class="sub-box-1">   
                        <div class="ad-box bg-info" id="not"> <a class="nav-icon fas fa-window-restore" href="#"><br>Acount stutus<br /><b><?php echo e($package); ?></b></a></div>
                         <div class="ad-box bg-success"> <a href="<?php echo e(route('user.dashboard.activate')); ?>" class="nav-icon fas fa-window-restore" ><br>Activate <br> package</a></div>
                    </div>
                    <div class="sub-box-1">  
                        <div class="ad-box bg-primary"><a class="nav-icon fas fa-wallet" href="#"><br>Cash&deposit <br>0:0</a> </div>
                        <div class="ad-box bg-danger"><a class="nav-icon fas fa-bookmark" href="#"> <br>Cash out <br>0:0</a> </div>    
                    </div>
                    
             </div>

             <div class="ad-sub-box2">
                <div  class="sub-box-1">
                    <div class="ad-box bg-warning mr-2 ml-1"><a class="nav-icon fas fa-money" href="#"> <br>Total Direct <br />0</a></div>
                    <div class="ad-box bg-info mr-2 ml-1"><a class="nav-icon fas fa-gift" href='#'> <br>Total working team <br>0</a></div>
                </div>
                <div class="sub-box-1">   
                     <div class="ad-box bg-success col"><a class="nav-icon fas fa-gift" href='#'> <br>Pending <br> Derect <br>0</a></div><br> 
                </div>
                   
               
             </div>
             
            
         </div>


        <div class="ad-main-box mt-3 mb-3">
             <!-- <div class="" style="background-color: white;" id="hide"></div> -->
             <div class="ad-sub-box1 ">
                    <div class="sub-box-1">   
                         <div class=" ad-box bg-success "><a class="nav-icon fas fa-gear" href="<?php echo e(route('user.package.history')); ?>"><br>My package</a></div>
                        <div class="ad-box bg-primary"><a class="nav-icon fas fa-user" href="#"><br>My invetees</a></div>
                    </div>
                    <div class="sub-box-1">  
                        <div class="ad-box bg-danger"><a class="nav-icon fas fa-users" href="#"><br>My Team</a></div>
                        <div class="ad-box bg-warning "><a class="nav-icon fas fa-gift" href="#"><br>Mcoin <br> coming some</a></div> 
                    </div>
                    
             </div>

             <div class="ad-sub-box2">
                <div  class="sub-box-1">
                    <div class="ad-box bg-info mr-2 ml-1"><a class="nav-icon fas fa-gift" href="#"><br>Total <br> Balance</a></div>
                    <div class="ad-box bg-success mr-2 ml-1"><a class="nav-icon fas fa-gift" href="#"><br>Income</a></div>
                </div>
                <div class="sub-box-1">   
                    <div class="ad-box bg-info col"><a class="nav-icon fas fa-gift" href="#"><br>Wallet  Balance <sub>coming some</sub></a></div>
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
             <div class="col-12 col-sm-6 col-md-3">
                 <a href="">
                     <div class="info-box">
                         <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>
                                
                         <div class="info-box-content">
                             <span class="info-box-text">Clicks</span>
                             <span class="info-box-number">
                                 
                             </span>
                         </div>

                     </div>
                 </a>

             </div>
             <!-- /.col -->
             <div class="col-12 col-sm-6 col-md-3">
                 <a href="<?php echo e(route('user.referral.show')); ?>">
                     <div class="info-box mb-3">
                         <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
 <?php
        $referrals=db::SELECT("SELECT * from users where referee_id= :ref",['ref'=>$ref_code]);

$task=db::SELECT("SELECT * FROM users join activations on(users.email=activations.email) join tasks ON(activations.code=tasks.code)  WHERE users.has_paid_package='ft' and  activations.package='ft' and users.email='$email'");
 ?>
                         <div class="info-box-content">
                             <span class="info-box-text">Referrals</span>
                             <span class="info-box-number"><?php echo e(count($referrals)); ?></span>
                         </div>

                     </div>
                 </a>

             </div>
             <!-- /.col -->

             <!-- fix for small devices only -->
             <div class="clearfix hidden-md-up"></div>

             <div class="col-12 col-sm-6 col-md-3">
                <a href="<?php echo e(route('user.task.show')); ?>">
                 <div class="info-box mb-3">
                     <span class="info-box-icon bg-success elevation-1"><i class="fas fa-list"></i></span>

                     <div class="info-box-content">
                         <span class="info-box-text">Tasks</span>
                         <span class="info-box-number"><?php echo e(count($task)); ?></span>
                     </div>

                 </div>
</a>
             </div>
         
             <!-- /.col -->
             <div class="col-12 col-sm-6 col-md-3">
                 <div class="info-box mb-3">
                     <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                     <div class="info-box-content">
                         <span class="info-box-text">Earnings</span>
                         <span class="info-box-number">0</span>
                     </div>

                 </div>

             </div>
             <!-- /.col -->
         </div>
         <!-- /.row ENDING RIGHT HERE AND BE READY TO START -->
         <!-- Main content -->
         <div class="content">
             <div class="container-fluid ">

                 <div class="row ">
                             <div class="card card-primary card-outline col-lg-4">
                                
                                 <h5 class="card-title">Refferral id: /<input type="hidden" value="<?php echo e($ref_code); ?>" id="link1"> 
                                            <a href="#" style="color:red;text-decoration:none;" 
                                            id="btn2"> <?php echo e($ref_code); ?></a></h5><br>
                                 <input type="text" id="link"value="http://localhost:8003/register?referral=<?php echo e($ref_code); ?>"
                                     class="form-control" readonly>

                                     <script type="text/javascript">
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

                                     <i class="fas fa-arrow-circle-right">
                                     <a href="#" id="btn">Copy Link</a></i><br>

                             </div>
                             <div class="col-lg-5">

                                 <div class="col-sm-md-4">
                                     <!-- Map card -->
                                     <div class="card bg-gradient-primary">
                                         <div class="card-header border-0">
                                             <h3 class="card-title">
                                                 <i class="fas fa-edit mr-1"></i>
                                                 Survey
                                             </h3>

                                             <!-- /.card-tools -->
                                         </div>
                                         <div class="card-body"
                                             style="background-color:white;height: 180px; width: 100%; ">
                                             <center><a href="#">
                                                     <h4>Earn $30 By SURVEYS & APPS</h4>
                                                     <i class="fas fa-share "></i>
                                                 </a>
                                             </center>

                                         </div>

                                     </div>
                                 </div>
                             </div>
                                <?php 
        $fcuser=db::SELECT("SELECT * from users where has_paid_package= 'fc1' or has_paid_package= 'fc2'");
$user=db::SELECT("SELECT * from users");
                                   



                                ?>
                                <div class="col-lg-3" style="margin-right:0px;">
                                    <div class="">
                                         <div class="info-box mb-3 w-100" style="background-color:lightgreen;width: 250px;height: 100px;">
                                             <span class="info-box-icon  elevation-1"><i class="fas fa-users"></i></span>

                                             <div class="info-box-content">
                                                 <span class="info-box-text">Total Founders</span>
                                                 <span class="info-box-number">512,444</span>
                                             </div>

                                         </div>
                                         <div class=" info-box mb-4 w-100" style="background-color:lightgreen;width: 270px; height: 10px;">
                                             <div class="row">
                                                 <div class="col">Top users</div>
                                                 <div class="col bg-dark" style="width:160px;height: 30px;">coming soon</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                            </div>
                         <script type="text/javascript">
                         function copylink() {
                             var linkinput = document.getElementById('link');
                             linkinput.select();
                             document.execCommand("copy");
                             alert("Link copied to clipbord");
                         }
                         var copybtn = document.getElementById('btn');
                         copybtn.addEventListener("click", copylink);
                         </script>
                  


                     
                 </div> 
                 <span style="color: blue;font-size: 20px;"><b>Upcoming Projects</b> </span>
                 
                 <div class="row my-2">

                     <div class="col-12 col-sm-6 col-md-3">
                         <div class="info-box main-upcoming">
                            <div class="upcoming ">
                                <div>
                                    <img src="<?php echo e(asset('assets/a/img/blessing.png')); ?>" alt="">
                                </div>
                                <div class="info-box-content text-center">
                                    <b>Impact</b>Empower global change
                                </div>
                            </div>

                         </div>
                     </div>
                     <!-- /.col -->
                     <div class="col-12 col-sm-6 col-md-3">

                         <div class="info-box mb-3  main-upcoming">
                            <div class="upcoming">
                                <div>
                                    <img src="<?php echo e(asset('assets/a/img/booking.png')); ?>" alt="">
                                </div>
                                <div class="info-box-content text-center">
                                <b> BookItEasy</b>Your fovorite booking site
                                </div>
                            </div>

                         </div>

                     </div>
                     <!-- /.col -->

                     <!-- fix for small devices only -->
                     <div class="clearfix hidden-md-up"></div>

                     <div class="col-12 col-sm-6 col-md-3">

                         <div class="info-box mb-3  main-upcoming">
                            <div class="upcoming">
                                <div>
                                    <img src="<?php echo e(asset('assets/a/img/page.png')); ?>" alt="">
                                </div>
                                <div class="info-box-content text-center">
                                 <b>WebWise</b>Design websites with al insights
                                </div>
                            </div>

                         </div>

                     </div>
                         <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">

                         <div class="info-box mb-3  main-upcoming">
                            <div class="upcoming">
                                <div>
                                    <img src="<?php echo e(asset('assets/a/img/http.png')); ?>" alt="">
                                </div>
                                <div class="info-box-content text-center">
                                <b>DigitalEmblem</b> Give your website digital indentity
                                </div>
                            </div>

                         </div>

                     </div>
                     
                 </div>
                 <div class="row" style="margin-top:15px">
                     <div class="col-lg-6">
                         <div class="card direct-chat direct-chat-primary">
                             <div class="card-header">
                                 <h3 class="card-title">LEADERBOARD</h3>

                                 <div class="card-tools">
                                     <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                         <i class="fas fa-minus"></i>
                                     </button>
                                     <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                                         data-widget="chat-pane-toggle">
                                         <i class="fas fa-comments"></i>
                                     </button>
                                     <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                             class="fas fa-times"></i>
                                     </button>
                                 </div>
                             </div>
                             <!-- /.card-header -->
                             <div class="card-body">
                                 <div class="direct-chat-messages">

                                     <table class="table">
                                         <thead class="bg-gradient-primary">
                                             <tr>
                                                 <th>Username</th>
                                                 <th></th>
                                                 <th>Total Earned</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                         <!--         <td>1. John</td>
                                                 <td></td>
                                                 <td>$0</td>
                                             </tr>
                                             <tr>
                                                 <td>2. Mary</td>
                                                 <td></td>
                                                 <td>$0</td>
                                             </tr>
                                             <tr>
                                                 <td>3. July</td>
                                                 <td></td>
                                                 <td>$0</td>
                                             </tr>
                                             <tr>
                                                 <td>4. July</td>
                                                 <td></td>
                                                 <td>$0</td>
                                             </tr>
                                             <tr>
                                                 <td>5. JackMan
                                                 </td>
                                                 <td></td>
                                                 <td>$0</td>
                                             </tr> -->
                                         </tbody>
                                     </table>




                                 </div>


                             </div>

                         </div>

                         



                     </div>
                     <div class="col">

                         <div class="col-md-12">
                             <div class="card direct-chat direct-chat-primary">
                                 <div class="card-header">
                                     <h3 class="card-title">Social Media Share</h3>

                                     <div class="card-tools">
                                         <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                             <i class="fas fa-minus"></i>
                                         </button>

                                         <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                                 class="fas fa-times"></i>
                                         </button>
                                     </div>
                                 </div>
                                 <!-- /.card-header -->
                                 <div class="card-body">
                                     <div class="direct-chat-messages">
                                         <!-- Add font awesome icons -->
                                         <a href="#" id="facebook-share-button" class="fa fa-facebook mr-2"></a><button class=" btn btn-success" onclick="shareOnFacebook()">share
                                             link</button>
                                         <hr>

                                         <a href="#" id="twitter-share-button" class="fa fa-twitter mr-2"></a><button class="btn btn-success" onclick="shareOnTwitter()">share
                                             link</button>

                                         <hr>
                                         <a href="#" id="whatsapp-share-button" class="fa fa-whatsapp bg-success mr-2"></a><button class="btn btn-success" onclick="shareOnWhatsApp()">share
                                             link</button>
                                         <!-- <hr> -->
                                        <!--  <a href="#" class="fa fa-linkedin"></a> <button class="btn-success">share
                                             link</button> -->
                                         <!-- <hr> -->
                                         <!-- <a href="#" class="fa fa-youtube"></a> <button class="btn-success">share
                                             link</button> -->
                                         <hr>
                                         
             <a   href="instagram://caption?text=infinity earning https:localhost:8003/register?referral=<?php echo e($ref_code); ?>" target="_blank" rel="noopener" class="fa fa-instagram mr-2"></a><button class="btn btn-success" onclick="shareOnInstagram()">share
                                             link</button>
                                         <hr>

                                     </div>


                                 </div>
                             </div>

                         </div>

                     </div>








<!-- js share logic -->
 <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="YOUR_NONCE_VALUE"></script>
 <script src="https://cdn.jsdelivr.net/npm/whatsapp-web@1.9.0/dist/browser.js"></script>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>




  <!-- Add your own JavaScript code -->
  <script>

    document.getElementById('facebook-share-button').addEventListener('click', shareOnFacebook);
    document.getElementById('whatsapp-share-button').addEventListener('click', shareOnWhatsApp);
    document.getElementById('twitter-share-button').addEventListener('click', shareOnTwitter);



    // Function to handle the Facebook sharing
    function shareOnFacebook() {
      FB.ui({
        method: 'share',
        href: 'https:localhost:8003/register?referral=<?php echo e($ref_code); ?>',
      }, function(response){});
    }

  // Function to handle the WhatsApp sharing
    function shareOnWhatsApp() {
      // Replace 'YOUR_SHARE_TEXT' with the desired text to share
      var shareText = encodeURIComponent('Infinite earning: https:localhost:8003/register?referral=<?php echo e($ref_code); ?>');
      var whatsappURL = 'https://api.whatsapp.com/send?text=' + shareText;
      window.open(whatsappURL, '_blank');
    }

   // Function to handle the Twitter sharing
    function shareOnTwitter() {
      // Replace 'YOUR_SHARE_TEXT' with the desired text to share
      var shareText = 'Infinite earning: https:localhost:8003/register?referral=<?php echo e($ref_code); ?>';

      // Open the Twitter share popup
      window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(shareText), '_blank');
    }

    // Add an event listener to the button
 
  </script>









                     <!-- /.row -->

                 </div>
                 <div class="col-lg-12">
                     <!-- Map card -->
                     <div class="card " style="background-color:#000050; width: 100%; ">
                         <div class="card-header " style="background-color:gray;">
                             <h3 class="card-title" style="color: white">
                                 Earn Type
                             </h3>


                             <!-- /.card-tools -->
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-md-9">
                                     <h3 style="color: white">Tasks</h3>
                                 </div>
                                 <div class="col-md-3">

                                     <h3 style="color: white">Earn</h3>
                                 </div>
                             </div>
                             <!-- /.card -->
                             <div class="row" style="margin-top:10px;">
                                 <div class="col-md-9">
                                     <li style="color: white">Create YouTube videos</li>
                                 </div>
                                 <div class="col-md-3 btn btn-success">
                                     50$
                                 </div>
                             </div>
                             <!-- /.card -->
                             <div class="row" style="margin-top:10px;">
                                 <div class="col-md-9">
                                     <li style="color: white">Complete surveys</li>
                                 </div>
                                 <div class="col-md-3 btn btn-success">
                                     30$
                                 </div>
                             </div>
                             <!-- /.card -->
                             <div class="row" style="margin-top:10px;">
                                 <div class="col-md-9">
                                     <li style="color: white">Download apps</li>
                                 </div>
                                 <div class="col-md-3 btn btn-success">
                                     20$
                                 </div>
                             </div>
                             <!-- /.card -->
                             <div class="row" style="margin-top:10px;">
                                 <div class="col-md-9">
                                     <li style="color: white">Refer friends</li>
                                 </div>
                                 <div class="col-md-3 btn btn-success">
                                     10$
                                 </div>
                             </div>
                             <!-- /.card -->
                             <div class="row" style="margin-top:10px;">
                                 <div class="col-md-9">
                                     <li style="color: white">Get clicks</li>
                                 </div>
                                 <div class="col-md-3 btn btn-success">
                                     2$
                                 </div>
                             </div>
                             <!-- /.card -->
                         </div>

                     </div>
                     <!-- /.card -->

                     <!-- solid sales graph -->

                 </div>
             </div>
             <div class="row">
                 <div class="col-md-12">
                     <div class="card card-secondary card-outline">

                         <div class="card-body card-warning">
                             <div class="row">
                                 <div class="col-md-6">
                                     Total Volume
                                     <div class="row">
                                         <div class="col-lg-12">
                                             <!-- Map card -->
                                             <div class="card bg-gradient-primary">

                                                 <div class="card-body"
                                                     style="background-color:white;color:black;height: 180px; width: 100%; ">
                                                     <h5><b class="text-warning">Members:</b> 0</h5>

                                                     <p>
                                                     <h4>0 <small>Vp</small></h4>
                                                     </p>


                                                     <h3 class="text-success">
                                                         <i class="fas fa-users mr-1"></i>
                                                         Left Team
                                                     </h3>
                                                     <hr>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                     <!-- solid sales graph -->
                                     <div class="row">

                                         <div class="col-lg-12">
                                             <!-- Map card -->
                                             <div class="card bg-gradient-primary">

                                                 <div class="card-body"
                                                     style="background-color:white;color:black;height: 180px; width: 100%; ">
                                                     <h5><b class="text-warning">Members:</b> 0</h5>

                                                     <p>
                                                     <h4>0 <small>Vp</small></h4>
                                                     </p>

                                                     <h3 class="text-success">
                                                         <i class="fas fa-users mr-1"></i>
                                                         Right Team
                                                     </h3>
                                                     <hr>
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- solid sales graph -->
                                     </div>
                                 </div>
                                 
                                 <div class="col-md-6">
                                     Commissions
                                     <div class="card">

                                         <div class="card-body">
                                             <div class="row">
                                                 <div class="col-md-6"></div>
                                                 <div class="col-md-6">
                                                     <select name="" id=""
                                                         class="form-control float-sm-right float-md-right">
                                                         <option value="">This week</option>
                                                     </select>

                                                 </div>


                                             </div><br><br>
                                             <div class="row">
                                                 <div class="col-md-4"></div>
                                                 <!-- /.col -->
                                                 <div class="col-md-6">
                                                     <div class="col-6 text-center">
                                                         <input type="text" class="knob" data-readonly="true" value="30"
                                                             data-width="90" data-height="90" data-fgColor="#39CCCC">

                                                     </div>

                                                     <b> Week 27 July - 02 August</b>

                                                 </div>
                                                 <div class="col-md-3">

                                                 </div>
                                                 <!-- /.col -->
                                             </div>
                                             <br>

                                             <div class="row">
                                                 <div class="col-sm-3 col-6">
                                                     <div class="description-block border-right">
                                                         <span class="description-text"><b>Left Team</b></span><br>
                                                         <h5 class="description-header">0 Vp</h5>

                                                     </div>
                                                     <!-- /.description-block -->
                                                 </div>
                                                 <!-- /.col -->
                                                 <div class="col-sm-6 col-6">
                                                     <div class="description-block border-right">
                                                         <span class="description-text"> <b>Volume Bonus</b></span><br>
                                                         <h5 class="description-header">0 EUR</h5>

                                                     </div>
                                                     <!-- /.description-block -->
                                                 </div>
                                                 <!-- /.col -->
                                                 <div class="col-sm-3 col-6">
                                                     <div class="description-block">
                                                         <span class="description-text"><b>Right Team</b></span><br>
                                                         <h5 class="description-header">0 Vp</h5>

                                                     </div>
                                                     <!-- /.description-block -->
                                                 </div>


                                             </div>


                                         </div>
                                     </div>
                                     <!-- END OF CARD -->

                                 </div>

                             </div>

                         </div>
                     </div>
                     <!-- END OF CARD -->
                 </div>
                 <!-- /.col-md-6 -->
             </div>

         


     </div>


 </div>
 </div>
        <div class="myTask">
            <div>
                <h1 class="task-head">Task progress</h1>

                <div class="clock">
                    <div class="task-content">
                        <div class="perc"></div>
                        <div class="taskText"> Task Progress</div> 
                    </div>
                    <!-- this one is that yellow background indicating progress -->
                    <div class="indicator">
                        <div class="bcindicator indicatorTask"></div>
                    </div>
                    <!-- this below div contain ticks of task don't delete it -->
                    <div class="task-ticks">
                    </div>
                    <div class="task-ticks-miror-one"></div>
                    <div class="task-ticks-miror"></div>
                </div>
            </div>
        </div>  

        <div id="jsonDataContainer">
          
        </div>
        <script type="text/javascript" >
            //  all variables
            let perc = document.querySelector('.perc');
            let taskIndic = document.querySelector(".indicator");
            let taskIndicLine = document.querySelector(".indicatorTask");
            let task_content = document.querySelector(".task-content");
            let task_ticks = document.querySelector(".task-ticks");
            let sec, totalTask, completedTask = 0;

            let taskData = <?php echo json_encode($data); ?>;
            totalTask = taskData.length;

            // append task tiks to html element
            taskData.forEach((data, index )=> {
                task_ticks.innerHTML += `
                    <span style="--i:${index + 1}; --total: ${totalTask}"></span>
                `;

                if(data.completed == "true"){
                    completedTask++
                }
            });

            setInterval(myFunct, 1000);
            
            function myFunct(){
                let percentage = completedTask / totalTask * 100;
                perc.innerHTML = Math.round(percentage) + "%";    
                indicator(Math.round(percentage));
                function indicator(sec){

                    let progress = 180 / totalTask * completedTask;
                    taskIndic.style.background =  `conic-gradient(var(--yellow) ${progress}deg, #000 0deg)`
                    taskIndicLine.style.transform = `rotate(${progress}deg)`;

                    if (totalTask ==  completedTask) {
                        taskIndic.style.background =  `conic-gradient(var(--green) ${progress}deg, #000 0deg)`
                        task_content.style.color = `var(--green)`;
                        taskIndicLine.style.setProperty('--yellow', 'var(--green)');
                    }
                }

            }

            
        </script>

        
        
    
    </div>

 </div>
  <footer class="main-footer text-center" >
      <!-- To the right -->
      <div class="float-left d-none d-sm-block">

      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy;<?php echo e(date('Y')); ?> <a href="https://muhahe.com">Afonete
              Ltd</a>.</strong>
      All
      rights
      reserved.
  </footer>
 </div>

<?php /**PATH C:\Users\Andela\Documents\WEB DEVELOPMENT\Sincer\New\affiliate.muhahe.com\resources\views/user/dashboard.blade.php ENDPATH**/ ?>