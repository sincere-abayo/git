<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add responsive styles here */
        /*.row::after {*/
        /*    content: "";*/
        /*    clear: both;*/
        /*    display: table;*/
        /*}*/
        /*.col-md-4{*/
        /*margin-left:40px;*/
        /*}*/

        /*.col-md-4, .col-lg-5, .col-lg-6, .col-lg-12 {*/
        /*    float: left;*/
        /*    width: 100%;*/
        /*}*/

        /*@media  screen and (min-width: 576px) {*/
        /*    .col-sm-10 {*/
        /*        width: 83.33333333%;*/
        /*    }*/

        /*    .col-md-4, .col-lg-5, .col-lg-6, .col-lg-12 {*/
        /*        width: 50%;*/
        /*    }*/
        /*}*/

        /*@media  screen and (min-width: 768px) {*/
        /*    .col-md-4, .col-lg-5, .col-lg-6 {*/
        /*        width: 33.33333333%;*/
        /*    }*/

        /*    .col-lg-12 {*/
        /*        width: 100%;*/
        /*    }*/
        /*}*/

        /*@media  screen and (min-width: 992px) {*/
        /*    .col-md-4 {*/
        /*        width: 33.33333333%;*/
        /*    }*/

        /*    .col-lg-5 {*/
        /*        width: 41.66666667%;*/
        /*    }*/

        /*    .col-lg-6 {*/
        /*        width: 50%;*/
        /*    }*/

        /*    .col-lg-12 {*/
        /*        width: 100%;*/
        /*    }*/
        /*}*/

        /* Other styles... */
        /*body {*/
        /*    margin: 0;*/
        /*    font-family: Arial, sans-serif;*/
        /*}*/

        /*h1, h2, h3 {*/
        /*    margin: 0;*/
        /*}*/

        /*.row {*/
        /*    margin: 20px 0;*/
        /*}*/

        /*img {*/
        /*    max-width: 100%;*/
        /*    height: auto;*/
        /*}*/

        /*ul {*/
        /*    list-style: none;*/
        /*    padding: 0;*/
        /*}*/

        /*.info-btn {*/
        /*    display: inline-block;*/
        /*    margin-top: 10px;*/
        /*    padding: 10px 20px;*/
        /*    background-color: #dc3545;*/
        /*    color: #fff;*/
        /*    text-decoration: none;*/
        /*    border-radius: 5px;*/
        /*}*/

        /*.aboutus-page-section {*/
        /*    padding: 40px 0;*/
        /*    background-color: #f5f5f5;*/
        /*}*/

        /*.container {*/
        /*    width: 90%;*/
        /*    margin: 0 auto;*/
        /*}*/

        /*.about-page-text {*/
        /*    margin-top: 20px;*/
        /*}*/

        /*.ap-title h2 {*/
        /*    color: #dc3545;*/
        /*}*/

        /*.ap-title h3 {*/
        /*    font-size: 20px;*/
        /*    margin-bottom: 10px;*/
        /*}*/

        /*.ap-title p {*/
        /*    margin: 0 0 10px;*/
        /*}*/

        /*.ap-title .paragraph {*/
        /*    margin-bottom: 20px;*/
        /*}*/
    </style>
</head>
<body>
    <div>
        <!-- END OF HEADER -->
        <?php echo $__env->make("home.include.user-base", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

           <!-- Breadcrumb Section Begin -->
    <div class="row">
        <div class="sections-navs col-sm-10">
            <h1 style="color:black; text-align: center;margin-top: 10px;">Project.</h1>
        </div></div>
<!--<div class="container">-->
<!--  <div class="row">-->
<!--    <div class="col-md-6">-->
<!--      <img src="assets/front/img/projecs-as1.jpg" alt="" style="max-width: 100%; border-radius: 10px;">-->
<!--    </div>-->
<!--    <div class="col-md-6 ap-title">-->
<!--      <p>-->
<!--        STAGE 1 – has two phases PRELAUNCH. The afonete Prelaunch process phase1 open website phase2-->
<!--        process starting 10 June 2023 and is running until 3rd of October 2023. During the pre-launch,-->
<!--        allow partners to contribute this project and will get the unique opportunity to build a global-->
<!--        business in a way that never been possible before anywhere! As a partner, you’ll be able to take-->
<!--        part in the company’s success in your hands and a greater part of all future so this partner has-->
<!--        a specific limited number worldwide mix 200,000 people only allowed to participate.-->
<!--      </p>-->
<!--      <p>-->
<!--        STAGE 2 – afonete will LAUNCH, fomo(watch video, gameplay, complete tasks, click views, and online-->
<!--        gaming players), and open global partners. And afonete enters full operational mode. The revolutionary-->
<!--        recurring bonus systems are activated and all members can now invite friends from all over the world.-->
<!--      </p>-->
<!--      <p>-->
<!--        STAGE 3 – afonete will LAUNCH, Ebusiness activated Eshop, future market, distribution token, and investment option.-->
<!--      </p>-->
<!--      <p>-->
<!--        STAGE 3 – afonete will LAUNCH, crypto loan, activated transfer, exchange, and investment option.-->
<!--      </p>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<style>
     #jjj{
      display:none;
  }
    @media  screen and (max-width: 876px) {
  .col-md-6 {
    width: 100%;
    text-align: center;
  }
  #jjj{
      display:block;
      width:100%;
  }
}

</style>

<section class="aboutus-page-section spad">
    <div class="container">
        <div class="about-page-text">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="text-center">
                        <img src="<?php echo e(asset('assets/front/img/projecs-as1.jpg')); ?>" alt="fail" style="border-radius: 10px; margin-bottom: 20px; height:400px">
                    </div>
                </div>
                <div class="col-lg-6">
                    <br><br>
                    <div class="ap-title">
                        <p>
                            <span class="stage"> STAGE 1 –</span> has two phases PRELAUNCH. The afonete Prelaunch process phase1 open website phase2
                            process starting 10 June 2023 and is running until 3rd of October 2023. During the pre-launch,
                            allow partners to contribute this project and will get the unique opportunity to build a global
                            business in a way that never been possible before anywhere! As a partner, you’ll be able to take
                            part in the company’s success in your hands and a greater part of all future so this partner has
                            a specific limited number worldwide mix 200,000 people only allowed to participate.
                        </p>
                        <p>
                            <span class="stage"> STAGE 2 –</span> afonete will LAUNCH, fomo(watch video, gameplay, complete tasks, click views, and online
                            gaming players), and open global partners. And afonete enters full operational mode. The revolutionary
                            recurring bonus systems are activated and all members can now invite friends from all over the world.
                        </p>
                        <p>
                           <span class="stage"> STAGE 3 –</span> afonete will LAUNCH, Ebusiness activated Eshop, future market, distribution token, and investment option.
                          </p>
                          <p>
                          <span class="stage"> STAGE 4 –</span> afonete will LAUNCH, crypto loan, activated transfer, exchange, and investment option.
                          </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="aboutus-page-section spad" style="margin-top:-170px">
    <div class="container">
        <div class="about-page-text">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ap-title">
                        <p>
                            Mcoin DURING PRELAUNCH The earlier you join and activate your account during prelaunch,
                            the more beneficial the mcoin program will be for you more feature activated, as the mcoin
                            will steadily increase in value. The mcoin will only be available during the prelaunch and
                            with the growth during prelaunch and directly after launch in 2024.
                        </p>
                        <p class="paragraph">
                            THIS IS EXCLUSIVE ACCESS TO AFONETE - AFONETE reserves 100 people for the first 100 members
                            in a country activated account become FCM and first-come-first-serve basis for FCM (founder
                            Club Members) this benefit is very huge.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 set-bg" data-setbg="<?php echo e(asset('assets/front/img/proj.png')); ?>" style="border-radius: 10px;">
                   
                </div>
                   <div id="jjj" class="col-lg-5 offset-lg-1 set-bg" >
                    <img src="<?php echo e(asset('assets/front/img/proj.png')); ?>" width="100%" style="border-radius: 10px;" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<center>
<section class="aboutus-page-section" style="margin-top:-120px;margin-buttom:0px;">
    <div class="container">
        <div class="about-page-text">
          
                    <div class="ap-title">
                        <h3>Amazing & innovative products</h3>
                        <p>
                            Afonete offers a wide range of products and services. Some are already available; others are
                            currently being developed. We are constantly looking at our offering and adding products that
                            we know will best serve our affiliates on their quest for a happier life.
                        </p>
               
        </div>
    </div>
</section></center>
    <!-- STARTING OF FOOTER -->
    <?php echo $__env->make("home.include.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\Andela\Documents\WEB DEVELOPMENT\Sincer\New\affiliate.muhahe.com\resources\views/home/project.blade.php ENDPATH**/ ?>