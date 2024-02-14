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

<body class="hold-transition sidebar-mini">
<div class=" wrapper">

     @include('user.user-dashboard-base')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="content-wrapper"> 
        <div class="container-fluid">
             <!-- <div class="row mb-2"> -->
                <!-- <div style="padding: 10px 0;height:100%;"> -->
            <div>
           
                 @if(session('message'))
                 <p class="alert alert-success d-flex justify-content-center" >
                     {{ session('message') }}
                 </p>
                 @endif
                 

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
             @media screen and (min-width: 768px) {
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
                        <div class="ad-box bg-info" id="not"> <a class="nav-icon fas fa-window-restore" href="#"><br>Acount stutus<br /><b>{{$package}}</b></a></div>
                         <div class="ad-box bg-success"> <a href="{{route('user.dashboard.activate')}}" class="nav-icon fas fa-window-restore" ><br>Activate <br> package</a></div>
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
                         <div class=" ad-box bg-success "><a class="nav-icon fas fa-gear" href="{{route('user.package.history')}}"><br>My package</a></div>
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
                    <div class="ad-box bg-info col"><a class="nav-icon fas fa-gift" href="#"><br>Wallet  Balance <br> coming some</a></div>
                </div>
                   
               
             </div>
             
            
         </div>

     
         <!-- Content Header (Page header) -->
         <div class="content-header">
             <div class="container-fluid">
                 <!-- /.row -->
            
         <!-- /.content-header -->
         <div class="ref row">
            <div class="col-md-9 mx-div">
                <div class="row row1">
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
                     <a href="{{route('user.referral.show')}}">
                         <div class="info-box mb-3">
                             <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
                                 <?php
                                        $referrals=db::SELECT("SELECT * from users where referee_id= :ref",['ref'=>$ref_code]);

                                $task=db::SELECT("SELECT * FROM users join activations on(users.email=activations.email) join tasks ON(activations.code=tasks.code)  WHERE users.has_paid_package='ft' and  activations.package='ft' and users.email='$email'");
                                 ?>
                             <div class="info-box-content">
                                 <span class="info-box-text">Referrals</span>
                                 <span class="info-box-number">{{count($referrals)}}</span>
                             </div>

                         </div>
                     </a>

                 </div>
                 <!-- /.col -->

                 <!-- fix for small devices only -->
                 <div class="clearfix hidden-md-up"></div>

                 <div class="col-12 col-sm-6 col-md-3">
                    <a href="{{route('user.task.show')}}">
                     <div class="info-box mb-3">
                         <span class="info-box-icon bg-success elevation-1"><i class="fas fa-list"></i></span>

                         <div class="info-box-content">
                             <span class="info-box-text">Tasks</span>
                             <span class="info-box-number">{{count($task)}}</span>
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
            </div>

             <div class="row2 col-md-3 mx-div zoom">
                 <div class="subZoom row">  
                    <div class="img col-2">
                        <div class="zoomImg">
                            <img src="{{asset('assets/a/img/zoom.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-10 zoom-content">
                        <div>
                            <span class="text-warning">  we are live now on zoom</span><br>
                        <span class="font-weight-bold"><a href="#">CLICK  HERE  TO JOIN US</a></span>    
                        </div>
                        
                    </div>
                </div>
             </div>
         </div>
          </div><!-- /.container-fluid -->

         </div>
         <!-- /.row ENDING RIGHT HERE AND BE READY TO START -->




         <!-- Main content -->
                <div class="content">
                    <div class="container-fluid ">

                 
                        <div class="row ">
                             <div class="card card-primary card-outline col-lg-4">
                                
                                 <h5 class="card-title">
                                    Refferral id: 
                                    <button class="btn btn-default font-weight-bold" type="submit" id="btn2">
                                         <i class="las la-link" style="font-size: 20px;"></i>
                                          <input type="hidden" value="{{$ref_code}}" id="link1"> 
                                            <a href="#" style="color:red;text-decoration:none;" 
                                            > {{$ref_code}}</a><br>
                                
                                    </button></h5>
                                   

                                            <div class="input-group">
                                                <input type="text" id="link"value="http://localhost:8003/register?referral={{$ref_code}}"
                                              class="form-control" readonly class="form-control">
                                                <button class="btn btn-default" type="submit" id="btn">
                                                    <i class="las la-link" style="font-size: 20px;"></i>
                                                  </button>
                                            </div>
                                           
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

                                        <br>
                                        <p class="card-text">
                                            <i class="fas fa-arrow-circle-right"></i> Share this link and earn $2 for every person who clicks on it. Earn an additional $10 when they sign up!
                                            </p>
                                            <!-- <a href="#" id="btn">  <img src="https://cdn-icons-png.flaticon.com/128/455/455691.png" style="width:20px;height: 20px;float: left;">
                                        &nbsp;&nbsp;Copy Link</a></i><br> -->

                             </div>
                             <div class="col-lg-5">

                                 <div class="col-sm-md-4">
                                     <!-- Map card -->
                                     <div class="card bg-gradient-primary">
                                         <div class="card-header border-0 " style="position: relative;">
                                             <h3 class="card-title">
                                                 <i class="fas fa-edit mr-1"></i>
                                                 Survey <i style="color:#dc3545; font-size: 15px; position: absolute; right:20px;">comming soon</i>
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
                                         <div class="info-box mb-3 w-100" style="width: 250px;height: 70px;">
                                             <span class="info-box-icon  elevation-1"><i class="fas fa-users text-primary"></i></span>

                                             <div class="info-box-content">
                                                 <span class="info-box-text">Total Founders</span>
                                                 <span class="info-box-number">{{count($fcuser)}}</span>
                                             </div>

                                         </div>
                                         <div class="info-box mb-3 w-100 top-users" style="width: 250px;height: 130px;">
                                                <div class="topUser_title">Top Users</div>
                                                <div class="soon">comming soon</div>
                                                <div class="topUser_img">
                                                    <img src="{{asset('assets/a/img/team.png')}}" alt="">
                                                </div>
                                                <div class="Usersmsg">
                                                    <span class=""> No users joined yet</span>
                                                </div>
                                             <!-- <span class="info-box-icon  elevation-1"><i class="fas fa-users"></i></span>

                                             <div class="info-box-content">
                                                 <span class="info-box-text">Top users</span>
                                                 <span class="info-box-number">{{count($user)}}</span>
                                             </div> -->

                                         </div>
                                         <!-- <div class=" info-box mb-4 w-100" style="background-color:lightgreen;width: 270px; height: 10px;">
                                             <div class="row">
                                                 <div class="col">Top users</div>
                                                 <div class="col bg-dark" style="width:160px;height: 30px;">coming soon</div>
                                                 <p class=" col-12 info-box-number d-flex justify-content-center">{{count($user)}}</p>
                                            </div>
                                        </div> -->
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
                  


                     {{-- start OF LEADER --}}
                 </div> 
                 <span style="color: blue;font-size: 20px;"><b>Upcoming Products</b> </span>
                 
                 <div class="row">
                     <div class="comingSoon col-md-5">
                          <div class="row my-2">

                                 <div class="col-12 col-sm-6 col-md-6">
                                     <div class="info-box main-upcoming">
                                        <div class="upcoming ">
                                            <div>
                                                <img src="{{asset('assets/a/img/upcoming.png')}}" alt="">
                                            </div>
                                            <div class="info-box-content text-center">
                                                <b>upcoming    </b>Empower global change
                                            </div>
                                        </div>

                                     </div>
                                 </div>
                                 <!-- /.col -->
                                 <div class="col-12 col-sm-6 col-md-6">

                                     <div class="info-box mb-3  main-upcoming">
                                        <div class="upcoming">
                                            <div>
                                                <img src="{{asset('assets/a/img/booking.png')}}" alt="">
                                            </div>
                                            <div class="info-box-content text-center">
                                            <b>booking system</b>Your fovorite booking site
                                            </div>
                                        </div>

                                     </div>

                                 </div>
                                 <!-- /.col -->

                                 <!-- fix for small devices only -->
                                 <div class="clearfix hidden-md-up"></div>

                                 <div class="col-12 col-sm-6 col-md-6">

                                     <div class="info-box mb-3  main-upcoming">
                                        <div class="upcoming">
                                            <div>
                                                <img src="{{asset('assets/a/img/shopping.png')}}" alt="">
                                            </div>
                                            <div class="info-box-content text-center">
                                             <b>future shop</b>Design websites with al insights
                                            </div>
                                        </div>

                                     </div>

                                 </div>
                                     <!-- /.col -->
                                 <div class="col-12 col-sm-6 col-md-6">

                                     <div class="info-box mb-3  main-upcoming">
                                        <div class="upcoming">
                                            <div>
                                                <img src="{{asset('assets/a/img/crypto.png')}}" alt="">
                                            </div>
                                            <div class="info-box-content text-center">
                                            <b>crypto loans </b> Give your website digital indentity
                                            </div>
                                        </div>

                                     </div>

                                 </div>
                                 
                             </div>
                        </div>


                     <div class="clickEvents col-md-7">
                        <div class="container-fluid">
                            <div class="main_comingBox row d-flex justify-content-between ">
                                <div class="comingBox col-12 col-sm-6 col-md-5">  
                                    <div class="row">
                                        <div class="col-8 zoom-content">
                                            <div>
                                                <span><a href="#">CLICK  HERE  TO </a></span><br>
                                                <span>  STAKE YOUR TOKENS</span><br>
                                            </div>
                                            
                                        </div>

                                        <div class=" col-3 d-flex justify-content-end align-items-center">
                                            <div class="icon">
                                                <i class="las la-external-link-alt text-white "></i>
                                            </div>
                                             
                                        </div>
                                    </div>
                                    
                                </div>
                               <div class="comingBox col-12 col-sm-6 col-md-5">  
                                    <div class="row">
                                        <div class="col-8 zoom-content">
                                            <div>
                                                <span><a href="#">CLICK  HERE  TO </a></span><br>
                                                <span> UPGRADE MEMBERSHIP</span><br>
                                            </div>
                                            
                                        </div>

                                        <div class=" col-3 d-flex justify-content-end align-items-center">
                                            <div class="icon">
                                                <i class="las la-external-link-alt text-white "></i>
                                            </div>
                                             
                                        </div>
                                    </div>
                                    
                                </div>
                             </div>

                             <div class="main_comingBox row d-flex justify-content-between ">
                                <div class="comingBox col-12 col-sm-6 col-md-5">  
                                    <div class="row">
                                        <div class="col-8 zoom-content">
                                            <div>
                                                <span><a href="#">CLICK  HERE  TO </a></span><br>
                                                <span> UNSTAKE </span><br>
                                            </div>
                                            
                                        </div>

                                        <div class=" col-3 d-flex justify-content-end align-items-center">
                                            <div class="icon">
                                                <i class="las la-external-link-alt text-white "></i>
                                            </div>
                                             
                                        </div>
                                    </div>
                                    
                                </div>
                               <div class="comingBox col-12 col-sm-6 col-md-5">  
                                    <div class="row">
                                        <div class="col-8 zoom-content">
                                            <div>
                                                <span><a href="#">CLICK  HERE  TO </a></span><br>
                                                <span>TOKEN EARNINGS </span><br>
                                            </div>
                                            
                                        </div>

                                        <div class=" col-3 d-flex justify-content-end align-items-center">
                                            <div class="icon">
                                                <i class="las la-external-link-alt text-white "></i>
                                            </div>
                                             
                                        </div>
                                    </div>
                                    
                                </div>
                             </div>

                             <div class="findUs p-3">
                                 <div class="text-white text-center">Add Your self to our <a href="#"> <i class="lab la-facebook-f"></i>FaceBook page</a>   <a href="#"><i class="lab la-telegram-plane"></i>Telegram</a> </div>
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

                         {{-- END OF LEADER --}}



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
                                         <div class="px-3 d-flex justify-content-between align-items-center ">  
                                            <div class="link-icon">  
                                                <div><a href="#" class="links media_fb"><i class=" lab la-facebook-f "></i></a></div> 
                                                <div class="">Facebook</div>
                                            </div>
                                            <div>
                                             <button class=" btn btn-success" onclick="shareOnFacebook()">share link</button>
                                            </div>
                                         </div>
                                         <hr>
                                         
                                         <div class="px-3 d-flex justify-content-between align-items-center">  
                                             <div class="link-icon">  
                                                <div><a href="#" class="links media_tw"><i class=" lab la-twitter"></i></a></div> 
                                                <div class="">Twitter</div>
                                            </div>
                                            <div>
                                                <button class=" btn btn-success" onclick="shareOnTwitter()">share link</button>
                                            </div>
                                         </div>
                                         <hr>

                                          <div class="px-3 d-flex justify-content-between align-items-center">  
                                                <div class="link-icon">  
                                                    <div><a href="#" class="links media_wt"><i class=" lab la-whatsapp"></i></a></div> 
                                                    <div class="">Whatsapp</div>
                                                </div> 
                                            <div>
                                                <button class=" btn btn-success" onclick="shareOnWhatsApp()">share link</button>
                                            </div>
                                         </div>
                                         <hr>

                                         <div class="px-3 d-flex justify-content-between align-items-center">  
                                                <div class="link-icon">  
                                                    <div><a href="#" class="links media_in"><i class=" lab la-instagram"></i></a></div> 
                                                    <div class="">Instagram</div>
                                                </div> 
                                            <div>
                                                <button class=" btn btn-success" onclick="shareOnInstagram()">share link</button>
                                            </div>
                                         </div>
                                         <hr>
                                         <div class="px-3 d-flex justify-content-between align-items-center">  
                                                <div class="link-icon">  
                                                    <div><a href="#" class="links media_pi"><i class=" lab la-pinterest"></i></a></div> 
                                                    <div class="">Pinterest</div>
                                                </div> 
                                            <div>
                                                <button class=" btn btn-success" onclick="shareOnInstagram()">share link</button>
                                            </div>
                                         </div>
                                         <hr>

                                     </div>


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
        href: 'https:localhost:8003/register?referral={{$ref_code}}',
      }, function(response){});
    }

  // Function to handle the WhatsApp sharing
    function shareOnWhatsApp() {
      // Replace 'YOUR_SHARE_TEXT' with the desired text to share
      var shareText = encodeURIComponent('Infinite earning: https:localhost:8003/register?referral={{$ref_code}}');
      var whatsappURL = 'https://api.whatsapp.com/send?text=' + shareText;
      window.open(whatsappURL, '_blank');
    }

   // Function to handle the Twitter sharing
    function shareOnTwitter() {
      // Replace 'YOUR_SHARE_TEXT' with the desired text to share
      var shareText = 'Infinite earning: https:localhost:8003/register?referral={{$ref_code}}';

      // Open the Twitter share popup
      window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(shareText), '_blank');
    }

    // Add an event listener to the button
 
  </script>
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
                                  <div class="col-md-5">
                                     <li style="color: white">Create YouTube videos</li>
                                 </div>
                                  <div class="col-md-4 pt-2">
                                     <i style="color:#dc3545; font-size: 15px;">comming soon</i>
                                 </div>
                                 <div class="col-md-3 btn btn-success">
                                     50$
                                 </div>
                             </div>
                             <!-- /.card -->
                             <div class="row" style="margin-top:10px;">
                                  <div class="col-md-5">
                                     <li style="color: white">Complete surveys</li>
                                 </div>
                                  <div class="col-md-4 pt-2">
                                     <i style="color:#dc3545; font-size: 15px;">comming soon</i>
                                 </div>
                                 <div class="col-md-3 btn btn-success">
                                     30$
                                 </div>
                             </div>
                             <!-- /.card -->
                             <div class="row" style="margin-top:10px;">
                                  <div class="col-md-5">
                                     <li style="color: white">Download apps</li>
                                 </div>
                                  <div class="col-md-4 pt-2">
                                     <i style="color:#dc3545; font-size: 15px;">comming soon</i>
                                 </div>
                                 <div class="col-md-3 btn btn-success">
                                     20$
                                 </div>
                             </div>
                             <!-- /.card -->
                             <div class="row" style="margin-top:10px;">
                                  <div class="col-md-5">
                                     <li style="color: white">Refer friends</li>
                                 </div>
                                  <div class="col-md-4 pt-2">
                                     <i style="color:#dc3545; font-size: 15px;">comming soon</i>
                                 </div>
                                 <div class="col-md-3 btn btn-success">
                                     10$
                                 </div>
                             </div>
                             <!-- /.card -->
                             <div class="row" style="margin-top:10px;">
                                 <div class="col-md-5">
                                     <li style="color: white">Get clicks</li>
                                 </div>
                                  <div class="col-md-4 pt-2">
                                     <i style="color:#dc3545; font-size: 15px;">comming soon</i>
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
            
             <div class="row">
                 <div class="col-md-12 ">
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
                                                         Earn Bonus
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
                                                         Earn Bonus
                                                     </h3>
                                                     <hr>
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- solid sales graph -->
                                     </div>
                                 </div>
                                 {{-- END OF COL-MD-6 --}}
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
                     <!-- END OF CARD -->
                 </div>
                 <!-- /.col-md-6 -->
             </div>

         


     </div>


 <!-- </div>
    <p>ref: {{count($referrals)}}</p>
 </div> -->
    <div class="row container">
        <div class="myTask col-12 col-sm-6 col-md mx-md-2 my-2">
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
 
          <div class="recentEvent col-12 col-sm-6 shadow col-md mx-md-2 my-2 py-3 px-4"> 
            <h4 class="my-3 mx-2 font-weight-bold">Recent Events</h4>
            <?php for ($i=1; $i <= 3; $i++) { ?>
                <div class="recbox">
                <a href="{{route('user.dashboard.events')}}" class="box  d-flex justify-content-between align-items-center py-2  px-5"> 
                    <div class="font-weight-bold">event title</div>
                    <div> 
                        <div class="date">12/05/2023</div>
                        <div class="status">pending</div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>

    </div>

        

      
        <div id="jsonDataContainer"></div>
        <script type="text/javascript" >
            //  all variables
            let perc = document.querySelector('.perc');
            let taskIndic = document.querySelector(".indicator");
            let taskIndicLine = document.querySelector(".indicatorTask");
            let task_content = document.querySelector(".task-content");
            let task_ticks = document.querySelector(".task-ticks");
            let sec, totalTask, completedTask =  <?php echo count($referrals) ?>;

            let taskData = <?php echo json_encode($data); ?>;
            totalTask = 30;

            // append task tiks to html element
            
            for(let i = 1; i<=30; i++){
                task_ticks.innerHTML += `
                    <span style="--i:${i}; --total: ${totalTask}"></span>
                `;

            }

            // taskData.forEach((data, index )=> {
            //     task_ticks.innerHTML += `
            //         <span style="--i:${index + 1}; --total: ${totalTask}"></span>
            //     `;

            //     if(data.completed == "true"){
            //         completedTask++
            //     }
            // });

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
            <!-- </div> -->
        <!-- </div> -->
     </div>
</div>
 @include('user.footer')
 </div>
</body>