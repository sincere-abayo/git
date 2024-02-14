<div>
     <?php echo $__env->make('home.include.user-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-text">
                        <h2>Contact Info</h2>
                        <p>We are combining traditional marketing, e-commerce and affiliate Parts for promoting products
                            and services.
                            We help you to spread potential information worldwide.
                        </p>
                        
                                            <div class="help-center">
                            <h4>Help Center</h4>
                            <div class="address">
                                <div class="simbol">
                                    <img src="<?php echo e(asset('assets/front/img/admin.png')); ?>" alt="">
                                </div>
                                <div class="addr-name">ADMIN: </div>
                                <div class="addr-link">
                                    <div><a href="mailto:info@afonete.com">info@afonete.com</a></div>
                                    <div><a href="mailto:Suport@afonete.com">Suport@afonete.com</a></div>
                                </div>
                                
                            </div>
                            <div class="address">
                                <div class="simbol">
                                    <img src="<?php echo e(asset('assets/front/img/white-house.png')); ?>" alt="">
                                </div>
                                <div class="addr-name">USA TEAM: </div>
                                <div class="addr-link">
                                    <div><a href="mailto:support@afonete.com">support@afonete.com</a></div>
                                    <div><a href="mailto:usahelp@gmail.com">usahelp@gmail.com</a></div>
                                </div>
                            </div>
                            <div class="address ">
                                <tr>
                                    <td>
                                    <div class="simbol">
                                        <img src="<?php echo e(asset('assets/front/img/houses.png')); ?>" alt="">
                                    </div>
                                    </td>
                                    <td>
                                         <div class="addr-name">SUEDE TEAM:</div>

                                    </td>
                                    <td>
                                        <div class="addr-link">
                                            <div><a href="mailto:info@afonete.com">info@afonete.com</a></div>
                                            <div><a href="mailto:shelpteam@gmail.com">shelpteam@gmail.com</a></div>
                                        </div>
                                
                                    </td>
                                </tr>
                               
                                
                            </div>
                            <div class="address">
                                <div class="simbol">
                                    <img src="<?php echo e(asset('assets/front/img/south-africa.png')); ?>" alt="">
                                </div>
                                <div class="addr-name south-team">SOUTHAFRICA TEAM: </div>
                                <div class="addr-link">
                                    <div><a href="mailto:info@afonete.com">info@afonete.com</a></div>
                                    <div><a href="mailto:sosuport@gmail.com">sosuport@gmail.com</a></div>
                                </div>
                                
                            </div>
                            <div class="address">
                                 <div class="simbol">
                                    <img src="<?php echo e(asset('assets/front/img/woman.png')); ?>" alt="">
                                </div>
                                <div class="addr-name">KENYA TEAM: </div>
                                <div class="addr-link">
                                    <div><a href="mailto:info@afonete.com">info@afonete.com</a></div>
                                    <div><a href="mailto:kehelp@gmail.com">kehelp@gmail.com</a></div>
                                </div>
                                
                            </div>
                            <div class="address">
                                <div class="simbol">
                                    <img src="<?php echo e(asset('assets/front/img/kigali.png')); ?>" alt="">
                                </div>
                                <div class="addr-name">RWANDA TEAM: </div>
                                <div class="addr-link">
                                    <div><a href="mailto:info@afonete.com">info@afonete.com</a></div>
                                    <div><a href="mailto:rwahelp@gmail.com.com">rwahelp@gmail.com</a></div>
                                </div>
                                
                            </div>
                        </div>
                        <!--<table>-->
                        <!--    <tbody>-->
                        <!--        <tr>-->
                                   
                        <!--            <style>-->
                        <!--                img{-->
                        <!--                    height:50px;-->
                        <!--                    width:50px;-->
                        <!--                    margin-left:10px;-->
                        <!--                    margin-top:-10px;-->
                        <!--                } -->
                        <!--                #img{-->
                        <!--                    height:60px;-->
                                         
                        <!--                    margin-top:-20px;-->
                        <!--                }-->
                        <!--            </style>-->
                                    
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <td class="c-o">-->
                        <!--                <img src="<?php echo e(asset('assets/front/img/phone.png')); ?>" id="img" alt="">-->
                        <!--            </td>-->
                        <!--            <td>-->
                        <!--                Marketing :(+250)786080119-->
                        <!--                <br>Our-Service : (+250)737909986-->
                        <!--            </td>-->
                        <!--        </tr><br><br>-->
                        <!--        <tr>-->
                        <!--            <td class="c-o">-->
                        <!--                <img src="<?php echo e(asset('assets/front/img/email.jpg')); ?>" alt="">-->
                        <!--            </td>-->
                        <!--            <i class="fa fa-phone"></i>-->
                        <!--            <td><a href="mailto:socialafonete@gmail.com" style="color:black;font-size:20px;">socialafonete@gmail.com</a></td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--            <td class="c-o">-->
                        <!--                <img src="<?php echo e(asset('assets/front/img/log1.png')); ?>" alt="">-->
                        <!--            </td>-->
                        <!--            <td>https://www.afonete.com/</td>-->
                        <!--        </tr>-->
                        <!--    </tbody>-->
                        <!--</table>-->
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                  <?php if($message=="error"): ?>
                   <span class="bg-danger">failed to send message, try again</span>
                   <?php endif; ?>
                    <?php if($message=="success"): ?>
                   <span class="bg-primary">Your message have been sent</span>
                   <?php endif; ?>
                   <!--    <?php if($message=="email"): ?>-->
                   <!--<span class="bg-primary"> Email not sent</span>-->
                   <!--<?php endif; ?>-->
                    <form action="<?php echo e(route('contact.us')); ?>" method="post" class="contact-form">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your First-Name" name="name" required>
                            </div>
                             <div class="col-lg-6">
                                <input type="text" placeholder="YourLast-Name" name="sur">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Phone example(+250)" name="phone">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Your Email" name="email" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Your Message" name="message" required></textarea>
                                <button type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">


                <!-- maplandia.com search-box 1.0 end -->
                <iframe
                    src="https://www.google.com/maps/embed?pb="
                    height="470" style="border:0;" allowfullscreen="">
                </iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

<?php echo $__env->make('home.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div><?php /**PATH B:\node tot\esmscript\affiliate.muhahe.com\resources\views/home/contact.blade.php ENDPATH**/ ?>