<?php

// use Illuminate\Support\Facades\Auth;
// use App\Models\User;

// $user = Auth::user();
// $name = $user->name;
// $ref_code = $user->activation;

// if($user->has_free_package=='no'):
// header("location:user.user-package");
// endif;
?>

<div style="width:100%">
<div class="">

    <?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
    
    <!-- About Us Page Section End -->
    
    <!-- Video Section Begin -->
    <section class="hero-section">

        <div class="hero-slider owl-carousel ">
            <div class="hs-item set-bg" data-setbg="<?php echo e(asset('assets/front/img/hero/big-banner2.jpg')); ?>">
                <div class="col hero-text hello">
                    <h2 style="">Join Afonete<br>  today</h2>
                    <p> All in one, innovator web3 and blockchain technology and
                    </br> The platform for success-minded people
                    </p>
            </div>
                <div class="hero-btns">
                    <button class="hero-btn register"><a href="<?php echo e(route('register')); ?>">JOIN NOW</a></button>
                    <button class="hero-btn login"><a href="<?php echo e(route('login')); ?>">Login</a></button>
                </div>
            </div>
            <div class="bg-2">
                <div class="col hero-text">

<style>
 #afo1{
            display:none;
           
        }
    
    @media  screen and (max-width:867px){
        #afo1{
            display:block;
            
        }
        
        /* .hero-section{
            height:400px;
            width:100%;
        } */
        
         #afo{
            display:none;
        }
    } 
  @media (max-width: 868px) and (max-height: 851px) {
      .hero-section {
       
        height: 480px;
        /*max-height: 330px;*/
        
      
      }
    }
      @media (max-width: 868px) and (max-height: 700px) {
      .hero-section {
       
        height: 530px;
        /*max-height: 330px;*/
        
      
      }
      .img,#rep,#rep1,.rep,.rep1{
          width:100%;
      }
      .img{
          width:500px;
      }
      
    }
 
</style>
         <div class="hello-content">
                 <h3>
                    Afonete have created unique innovative 
                    affiliate platform solutions for global community of 
                    people who love  innovative technologies, web3,
                </h3>
                <h3>
                    blockchain technologies  and opened access
                    for all people  to benefit from a system can implement
                </h3>

                <h3>
                    future innovations todaywhich just  a few years 
                    ago was only accessible for big companies.
                </h3>
            </div>
  <!--                  <p class="float-right hero-text" style="font-size:25px" id="afo">Afonete have created unique innovative <br>affiliate -->
  <!--                      platform solutions for global community of <br>people who-->
  <!--                      love  innovative technologies, web3,<br> blockchain-->
  <!--                      technologies  and opened access<br> for all people  to-->
  <!--                      benefit from a system can implement<br> future-->
  <!--                      innovations todaywhich just  a few years <br>ago-->
  <!--                      was only accessible for big companies.-->
  <!--                  </p>-->
  <!--<p style="font-size:25px" id="afo1">Afonete have created unique <br>innovative affiliate -->
  <!--                      platform solutions for global <br>community  of people who-->
  <!--                      love  innovative technologies,<br> web3, blockchain-->
  <!--                      technologies  and opened <br>access for all people  to-->
  <!--                      benefit from a system can<br>  implementfuture-->
  <!--                      innovations todaywhich just  a few<br> years ago-->
  <!--                      was only accessible for big companies.-->
  <!--                  </p>-->
                </div>
            </div>



    </section>
    <!-- Hero Section End -->
<div>
        <!-- START OF VIDEO SLIDER -->

        <!-- row -->
        <div class="slide-row ">

            <!-- section title -->

            <div class="container" style="width=100%">
                <div class="sections-tittle">
                    <div class="sect2-title head">
                        <h3 class="common-header font-weight-bold">LET'S PUT OUR FAITH  INTO ACTION, TAKE RISKS AND START SOMETHING</h3>
                        <p class="par mt-3">Many people lose more money for bundle/mbs internet with out generate even
                            $0.1 still We all  spend LOT of timeonline,?  Change your mind this is your way You
                            can earn money  $10 perday (dollar Bitcoin,  or usdt) by doing the things you
                            love online.Turn Your Time Into Money.
                        </p>
                    </div>
                    <!-- <center>
                        <div class="responsive rep1">
                            <h3>LET'S PUT OUR FAITH  INTO ACTION, TAKE RISKS AND START SOMETHING!*</h3>
                            <p>Many Peaple lose more money for bundle/mbs internet without generate even
                                $0.1 still We all spend a LOT of <br>time online,? Change your
                                mind this is your way You can earn money $10 per day
                                (dollar Bitcoin, or usdt) by doing <br>the things you
                                love online.Turn Your Time Into Money.<br>
                            </p>
                        </div>
                    </center> -->
                    
                    <div class="benef-part marg row ">
                        <div class="benef-img col-lg-6 pr-4" >
                            <img src="<?php echo e(asset('assets/front/img/aff2-small.jpg')); ?>" alt="" style="">
                        </div>

                        <div class="benef-list list-one col-lg-5 pl-5">
                            <div>
                                <ul >
                                    <li>
                                        <p class="par">Get rewards/money for watching videos, shopping online,
                                            or signing up for exciting services</p>
                                    </li>
                                    <li>
                                        <p class="par">Earn anywhere you are even your home get money</p>
                                    </li>
                                    <li>
                                        <p class="par">Get money just for using social media!</p>
                                    </li>
                                    <li>
                                        <p class="par">Earn money for simple just click viewing ads </p>
                                    </li>
                                    <li>
                                        <p class="par">Earn crypto by playing fun games online.</p>
                                    </li>
                                    <li>
                                        <p class="par">Get rewards for referral people</p>
                                    </li>
                                    <a href="<?php echo e(route('register')); ?>" class="info-btn  signup">Sign up & start earning</a>
                                </ul>
                            </div>
        
                        </div>
                </div>
                </div>
         
                <!-- place benefit section -->
            </div>
        </div>

    </div>
    <!-- /section title -->


    <!-- sliddings tabs & slick -->
</div>
<br>
<!-- /row -->

<!-- END OF VIDEO SLIDER -->
<!-- Hero Section Begin -->

<!-- About Us Page Section Begin -->
<section class=" marg">
    <div class="container">
        <div class="about-page-text ">
            <div class="head">
                <h3  class="common-header font-weight-bold">DO YOU WANT TO LIVE YOUR DREAMS?</h3>
                <p class="par">
                    Our story began with an inner desire to change the world while creating a
                    fair opportunity for all individuals involved right now 
                </p>
               
            </div>
            <div class="benef-part row mt-5">
                <div class="col-lg-5" id="">    <br>
                    <ul class="">
                        <li>
                            <p class="par">Earn from your mbs/internet used to $5 for every task you participate in.</p>
                           
                        </li>
                        <li>
                            <p class="par">Get reward 100 000 projects/client uploaded </p>
                        </li>
                        <li>
                            <p class="par">Get lifetime passive income </p>
                        </li>
                        <li>
                            <p class="par">Free space room shop </p>
                        </li>
                        <li>
                            <p class="par">Get 15% directs projects Uploaded</p>
                        </li>
                        <li>
                            <p class="par">The buying and selling of products and services online.</p>
                        </li><br>
                    </ul>
                      
                </div>
              <div class="benef-img mt-0 bo col-lg-6" id="">
                    <img src="<?php echo e(asset('assets/front/img/dream.jpg')); ?>" alt="">
               </div> 
            </div>
        </div>
    </div>
</section>

<!-- About Us Page Section End -->

<!-- Video Section Begin -->

<!-- sergr -->
<div class="well marg border " style=""> 
    <div class="site-wrap">
        <div class="site-section first-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-center box">
                            <span class="icon d-block">
                                <img src="<?php echo e(asset('assets/front/img/add-user.png')); ?>" alt="">
                            </span>
                            <h3 class="text-uppercase h4">Sign Up</h3>
                            <p  class="par">Feel free to join us, members from all countries are allowed. Registration is absolutely free.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="text-center box">
                        <span class="icon d-block">
                                <img src="<?php echo e(asset('assets/front/img/salary.png')); ?>" alt="">
                            </span>
                            <h3 class="text-uppercase h4 mb-3">Earn</h3>
                            <p class="par">At afonete, it is a unique platform where you can earn by performing simple tasks like clicking views, watching videos, referring new members, and completing offers.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="text-center box">
                        <span class="icon d-block">
                                <img src="<?php echo e(asset('assets/front/img/money.png')); ?>" alt="">
                            </span>
                            <h3 class="text-uppercase h4 mb-3">Cashout</h3>
                            <p class="par">Cash out your earnings via mobile money, Perfect Money, or Cash Cheque.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="text-center box">
                        <span class="icon d-block">
                                <img src="<?php echo e(asset('assets/front/img/online-shop.png')); ?>" alt="">
                            </span>
                            <h3 class="text-uppercase h4 mb-3">Online Shop</h3>
                            <p class="par">Explore our online shop with various services, including software, booking hotel/air tickets, and business services for users and social media companies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- serge end -->

<!-- <section class="video-section co-lg-5 ">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p>SIGN UP Feel free to join us, members from all countries are allowed. 
                        Registration is absolute free </p>
                </div>
                <div class="col-3">
                    <p>At afonete is unique platform you can earn option you wantsimple task ,click views,
                     watch videoreferring new members completing offer</p>
                </div>
                <div class="col-3">
                    <p>Cashout  your earn Mobile money perfect moneyCashcheaper </p>
                </div>
                <div class=" col-3">
                    <p>Online shop Service companies Social media  
                       br userBusiness service( software, Booking hote/ airticket). 
</p>
                </div>
            </div>
        </div>
    </section> -->
<!-- Video Section End -->

<br>
<!-- START OF COUNTER NUMBER -->

    <!-- serge end -->

    <!-- <section class="video-section co-lg-5 ">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p>SIGN UP Feel free to join us, members from all countries are allowed. 
                        Registration is absolute free </p>
                </div>
                <div class="col-3">
                    <p>At afonete is unique platform you can earn option you wantsimple task ,click views,
                     watch videoreferring new members completing offer</p>
                </div>
                <div class="col-3">
                    <p>Cashout  your earn Mobile money perfect moneyCashcheaper </p>
                </div>
                <div class=" col-3">
                    <p>Online shop Service companies Social media  
                       br userBusiness service( software, Booking hote/ airticket). 
</p>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Video Section End -->

     <!-- START OF COUNTER NUMBER -->

   
<div class="well marg">
    <div class="site-wrap">
        <div class="site-section section-counter"></div>
        <div class="site-section first-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center" data-aos="fade"> <br>
                        <h2 class="site-section-heading text-uppercase text-center font-secondary">Our
                            Satisified Customers</h2>
                    </div>
                </div>
                <div class="row border-responsive">
                    <div class="col-md-2 col-lg-2" data-aos="fade-up" data-aos-delay=""></div>

                    <div class="col-md-3 col-lg-3 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="">
                        <div class="text-center">
                            <span
                                class="flaticon-money-bag-with-dollar-symbol display-4 d-block mb-3 text-primary"></span>
                            <h3 class="text-uppercase h4 mb-3">New Users</h3>
                            <div class="col-lg-6">
                                <div class="counter">
                                    <span class="number" data-number="78">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="">
                        <div class="text-center">
                            <span
                                class="flaticon-money-bag-with-dollar-symbol display-4 d-block mb-3 text-primary"></span>
                            <h3 class="text-uppercase h4 mb-3">Added Today</h3>
                            <div class="col-lg-6">
                                <div class="counter">
                                    <span class="number" data-number="20">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="">
                        <div class="text-center">
                            <span
                                class="flaticon-money-bag-with-dollar-symbol display-4 d-block mb-3 text-primary"></span>
                            <h3 class="text-uppercase h4 mb-3">Total Users</h3>
                            <div class="col-lg-6">
                                <div class="counter">
                                    <span class="number" data-number="125">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
    <!-- END OF COUNTER NUMBER -->
    <!-- start Our mission -->
   <!--<div class="well2" style="background: linear-gradient(135deg, #ff6a00, #ff004f); border-radius: 20px; overflow: hidden;">-->
   <div class="bg-dark mb-5 marg" style="background: linear-gradient(135deg, #000000, #1a1a1a); padding: 20px;">
        <div class="site-wrap">
            <div class="site-section section-counter"></div>
            <div class="site-section first-section">
                <div class="container">
                    <div class=" mb-2">
                        <div class="col-md-12 text-center" data-aos="fade">
                            <br>
                            <h3 class="site-section-heading text-uppercase text-center font-secondary text-white" style="" >
                                afonete - The Future Of Internet User</h3>
                            <h4 style="color: white;">
                                We are an innovative technology company building a massive infrastructure project
                                that combines web3 development and blockchain technology. We believe that everybody
                                deserves a fair chance for success and we aim to show people that there is more than
                                one path to success in life. Join us and become successful. Take a look
                            for yourself,
                            and find out which products best fit your personal goals and start growing
                            your own business today!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--</div>-->

<div class="container ">
     <div class="site-wrap">

        <div class="site-section first-section">
            <div class="container">
                <div class="row mb-2">
                     <div class="col-md-12 text-center feat-head" data-aos="fade"> <br>
                        <h3 class="text-center common-header font-weight-bold"> MAINLY FEATURE</h3>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Hero Section End -->
</div>

</div>
    <!-- start features section -->
 
    <!-- Hero Section End -->
<div class="container">
  <div class="row feat  ">
    <div class="col-md-4  main-ft-left">
      <div class="text-center">
        <ul class="list-unstyled">
           <li class="list-item">
            <img src="https://cdn-icons-png.flaticon.com/128/2300/2300324.png" style="width:64px;height:64px;" alt="Image">
            <span>Fear of lose </span>
          </li>
          <li class="list-item">
            <img src="https://cdn-icons-png.flaticon.com/128/2393/2393626.png" style="width:64px;height:64px;" alt="Image">
            <span>Invest your money</span>
          </li>
          <li class="list-item">
            <img src="https://cdn-icons-png.flaticon.com/128/2300/2300324.png" style="width:64px;height:64px;" alt="Image">
            <span>Investment &Trading </span>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
         <!--imge https://ik.imagekit.io/earnly/cointiply/how-does-it-work_UpyIk0FbCk.webp?updatedAt=1628449789394-->
        <img src="<?php echo e(asset('assets/front/img/sm-banner1-feature.jpg')); ?>" width:"700px" style=" height:259px; border-radius:10px;" alt="Image">
      </div>
    </div>
    <div class="col-md-4  main-ft-right">
      <div class="text-center">
        <ul class="list-unstyled">
          <li class="list-item">
            <img src=https://cdn-icons-png.flaticon.com/128/898/898006.png style="width:64px;height:64px;" alt="Image">
            <span>Exchange</span>
          </li>
          <li class="list-item">
            <img src="https://cdn-icons-png.flaticon.com/128/5805/5805536.png" style="width:64px;height:64px;" alt="Image">
            <span>Crypto Loan</span>
          </li>
          <li class="list-item">
            <img src="https://cdn-icons-png.flaticon.com/128/2108/2108037.png" style="width:64px;height:64px;" alt="Image">
            <span>Token/coin</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </div>
</div>

<!-- start features section -->
<!-- End features section -->
<style>
    
  .well4 {
    background-color: #333; 
    padding: 0px;
    width:85%;
    margin: auto;
}
/*@media (min-width:876px){*/
/*    #text{*/
/*        margin-right:450px;*/
/*    }*/
   
/*     #text1{*/
/*        margin-right:420px;*/
/*    }*/
/*}*/
.primary-btn1 {
  display: inline-block;
  padding: 10px 5px;
  background-color: yellow; /* Yellow background color */
  color: #333; /* Text color */
  border-radius: 5px; /* Small border radius */
  text-decoration: none;
}

.primary-btn1:hover {
  background-color: #ffd700; /* Hover state color */
}


</style>
      <!--End features section -->
      <br><br><br>
<div>
  <div >
    <div>
      <div class="container">
        <div class="row main-club">
          <div class="text-center py-4 club" data-aos="fade">
              
            <h2 class=" text-center font-secondary text-white" id="text1">You want to become a founder club</h2><br>
            <h2 class=" text-uppercase text-center font-secondary">
               <a href="<?php echo e(route('register')); ?>" class="club-btn" id="text">Yes, I'd like to sign up</a>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><br>


    <!-- Hero Section End -->
    </div>

 
<?php echo $__env->make('home.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>

<?php /**PATH B:\node tot\esmscript\affiliate.muhahe.com\resources\views/home/welcome.blade.php ENDPATH**/ ?>