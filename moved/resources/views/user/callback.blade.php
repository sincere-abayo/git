 <?php

    use Illuminate\Support\Facades\Auth;
    use App\Models\User;

    $user = Auth::user();
    $name = $user->name;
     $email = $user->email;
    $ref_code = $user->activation;
    ?>
<div>
  @include('user.user-dashboard-base')
 
 <div>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <div class="row mb-2">
         <div style="padding: 0px;">
            
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
     

     <div class="content-wrapper" id="center-side">
            <section class="content">
                
            <div class="container-fluid">

            <div>
       
                 @if(session('message'))
                <p class="alert alert-success d-flex justify-content-center">
                     {{ session('message') }}
                 </p>
                 @endif
                 <marquee behavior="" direction="">
                    <i style="color: brown">Welcome Back To Millionaire Site,We're Here for
                         you,now
                         you can make money online without Imvestments,work hard and get yourself imverstements to buy new
                         package.
                         And don't Hesitate to Contact us
                    </i>
                 </marquee>

         </div>
            <div class="">
             <div class="row">
                <div>
                    <div class="col bg-info " id="not">
                     <a class="nav-icon fas fa-window-restore" href="#"><br>Acount stutus<br /><b>Not active</b></a>
                     </div>
                     <div class="col bg-success ">
                         <a href="{{route('user.dashboard.activate')}}" class="nav-icon fas fa-window-restore" ><br>Activate package</a>
                         </div>
                          <div class="col bg-primary"><a class="nav-icon fas fa-wallet" href="#"><br>Cash&deposit <br>0:0</a> </div>
                     <div class="col bg-danger"><a class="nav-icon fas fa-bookmark" href="#"> <br>Cash out <br>0:0</a> </div>
                </div>

               
             </div>
         </div>

         <div class="">
             <div class="row">
                 <!-- <div class="col " style="background-color: white;" id="hide"></div> -->
                 <div class="col bg-success"><a class="nav-icon fas fa-gear" href="{{route('user.package.history')}}"><br>My package</a></div>
                 <div class="col bg-primary"><a class="nav-icon fas fa-user" href="#"><br>My invetees</a></div>
                 <div class="col bg-danger"><a class="nav-icon fas fa-users" href="#"><br>My Team</a></div>
                 <div class="col bg-warning"><a class="nav-icon fas fa-gift" href="#"><br>Mcoin <sub>coming soon</sub></a></div>
                 <div class="col bg-info"><a class="nav-icon fas fa-gift" href="#"><br>Total Balance</a></div>
                 <div class="col bg-success"><a class="nav-icon fas fa-gift" href="#"><br>Income</a></div>
                 <div class="col bg-info"><a class="nav-icon fas fa-gift" href="#"><br>Wallet Balance <sub>coming soon</sub></a></div>
             </div>
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
                                 94
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

                         <div class="info-box-content">
                             <span class="info-box-text">Referrals</span>
                             <span class="info-box-number">0</span>
                         </div>

                     </div>
                 </a>

             </div>
             <!-- /.col -->

             <!-- fix for small devices only -->
             <div class="clearfix hidden-md-up"></div>

             <div class="col-12 col-sm-6 col-md-3">
                 <div class="info-box mb-3">
                     <span class="info-box-icon bg-success elevation-1"><i class="fas fa-list"></i></span>

                     <div class="info-box-content">
                         <span class="info-box-text">Tasks</span>
                         <span class="info-box-number">0</span>
                     </div>

                 </div>

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
             <div class="container-fluid">

                 <div class="row">
                     <div class="col-md-8">

                         <div class="row">
                             <div class="card card-primary card-outline col col-sm-6" style="height:120px">

                                 <h5 class="card-title">Refferral id</h5><br>
                                 <input type="text" id="link"
                                     value="http://localhost:8000/register?referral={{$ref_code}}"
                                     class="form-control" readonly>
                                 <!-- <a href="">{{$ref_code}}</a> -->
                                 <i class="fas fa-arrow-circle-right">
                                     <a href="#" id="btn">Copy Link</a></i><br>

                             </div>
                             <div class="col">

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

                     <!-- /.col-md-6 -->

                     <!-- Map card -->
                     <div class="col-12 col-sm-6 col-md-3 container float-right" style="margin-right:0px;">
                         <div class="info-box mb-3" style="background-color:lightgreen;width: 250px;height: 100px;">

                             <span class="info-box-icon  elevation-1"><i class="fas fa-users"></i></span>

                             <div class="info-box-content">
                                 <span class="info-box-text">Total Founders</span>
                                 <span class="info-box-number">512,444</span>
                             </div>

                         </div>


                         <div class="info-box mb-4 " style="background-color:lightgreen;width: 270px; height: 10px;">
                             <div class="row">
                                 <div class="col">Top users</div>
                                 <div class="col bg-dark" style="width:160px;height: 30px;">coming soon</div>

                             </div>


                         </div>
                     </div>


                     {{-- start OF LEADER --}}
                 </div> <span style="color: blue;font-size: 20px;"><b>Upcoming Projects</b> </span>
                 <div class="row my-2">

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box main-upcoming">
                        <div class="upcoming ">
                            <div>
                                <img src="{{asset('assets/a/img/blessing.png')}}" alt="">
                            </div>
                            <div class="info-box-content text-center">
                                <b>O-Bless</b>Empower global change
                            </div>
                        </div>

                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">

                        <div class="info-box mb-3  main-upcoming">
                        <div class="upcoming">
                            <div>
                                <img src="{{asset('assets/a/img/booking.png')}}" alt="">
                            </div>
                            <div class="info-box-content text-center">
                            <b> O-Booking</b>Your fovorite booking site
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
                                <img src="{{asset('assets/a/img/page.png')}}" alt="">
                            </div>
                            <div class="info-box-content text-center">
                                <b>O-create</b>Design websites with al insights
                            </div>
                        </div>

                        </div>

                    </div>
                        <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">

                        <div class="info-box mb-3  main-upcoming">
                        <div class="upcoming">
                            <div>
                                <img src="{{asset('assets/a/img/http.png')}}" alt="">
                            </div>
                            <div class="info-box-content text-center">
                            <b>O-domain</b> Give your website digital indentity
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
                                                 <td>1. John</td>
                                                 <td></td>
                                                 <td>$5000</td>
                                             </tr>
                                             <tr>
                                                 <td>2. Mary</td>
                                                 <td></td>
                                                 <td>$2000</td>
                                             </tr>
                                             <tr>
                                                 <td>3. July</td>
                                                 <td></td>
                                                 <td>$1500</td>
                                             </tr>
                                             <tr>
                                                 <td>4. July</td>
                                                 <td></td>
                                                 <td>$1000</td>
                                             </tr>
                                             <tr>
                                                 <td>5. JackMan
                                                 </td>
                                                 <td></td>
                                                 <td>$500</td>
                                             </tr>
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
                                         <a href="#" class="fa fa-facebook"></a><button class="btn-success">share
                                             link</button>
                                         <hr>

                                         <a href="#" class="fa fa-twitter"></a><button class="btn-success">share
                                             link</button>

                                         <hr>
                                         <a href="#" class="bi-whatsapp" style="background-color: darkblue; font-size: 30px;"></a><button class="btn-success">share
                                             link</button>
                                         <!-- <hr>
                                         <a href="#" class="fa fa-linkedin"></a> <button class="btn-success">share
                                             link</button> -->
                                         <!-- <hr>
                                         <a href="#" class="fa fa-youtube"></a> <button class="btn-success">share
                                             link</button> -->
                                         <hr>
                                         <a href="#" class="fa fa-instagram"></a><button class="btn-success">share
                                             link</button>
                                         <hr>

                                     </div>


                                 </div>
                             </div>

                         </div>

                     </div>

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
                                                     <h5><b class="text-warning">Members:</b> 20</h5>

                                                     <p>
                                                     <h4>1500 <small>Vp</small></h4>
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
                                                     <h5><b class="text-warning">Members:</b> 44</h5>

                                                     <p>
                                                     <h4>3000 <small>Vp</small></h4>
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
                                                         <h5 class="description-header">100 Vp</h5>

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
                                                         <h5 class="description-header">150 Vp</h5>

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
        </section>
     </div>



<style>
/* The Modal (background) */
.card_payment {
    width: 80px;
    height: 40px
}

.PayImage {
    width: 100%;
    height: 40px;
}

.modal {
    display: inline;
    position: fixed;
    z-index: 999999;
    padding-top: 20px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow-x: auto;
  overflow-y: hidden;
    /*    background-color: rgb(0, 0, 0);*/
    background-color: rgba(0, 0, 0, 0.4);
}

#div {
    display: none;
}
</style>
</div>
        </div>
    </div>
</div>

<script>
document.addEventListener('livewire:load', function() {

    // $('#exampleModal').modal('show');

})
</script>


<style>
/* The Modal (background) */
.card_payment {
    width: 80px;
    height: 40px
}

.PayImage {
    width: 100%;
    height: 40px;
}

.modal {
    display: inline;
    position: fixed;
    z-index: 999999;
    padding-top: 20px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow-x: auto;
  overflow-y: hidden;
    /*    background-color: rgb(0, 0, 0);*/
    background-color: rgba(0, 0, 0, 0.4);
}

#div {
    display: none;
}



#pay {
    display: none;

}

#choose {
    display: none;

}

.chose {

    width: 50%;
}

.bg-dark {
    width: 250px;
    height: 400px;
}

.card-body1 {
    width: 250px;
    height: 80px;
}

.div1 {
    width: 250px;
    height: 100px;
}
.submit-btn{
padding:12px;
border:none;
border-radius: 8px;
font-size: 17px;
background:white;
color:#fff; 

width:138px;
  
}
</style>

<div id="exampleModal" class="modal" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content" style="background: linear-gradient(190deg, #2ecd71 60%, #27ae60 40.1%); color: black; width: auto; margin: 0 auto;">
            <div class="flex justify-content-between mb-4 fc_container">
                <a href="/"><button type="button" class="btn btn-outline-info btn-primary"> Back</button></a>
                <a class="float-right" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                    <button type="button" class="btn btn-outline-info btn-danger"> Logout</button>
                </a>
                <br><center>
                @if($error)<span class="bg-danger ">{{$error??''}}</span>@endif
                @if($back)<span class="bg-danger ">{{$back??''}}</span>@endif
                </center>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                              @if($status === 'success')
        <h1>Payment Update Successful</h1>
        <p>Your payment was processed successfully.</p>
    @else
        <h1>Error</h1>
        <p>There was an error processing your payment update.</p>
        <p>Error Message: {{ $message }}</p>
    @endif
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--    


                    </form> <br>
            </div>
        </div>
    </div>
</div>
</div>

<script>
document.addEventListener('livewire:load', function() {

    // $('#exampleModal').modal('show');

})
</script>
 </div>


 -->


