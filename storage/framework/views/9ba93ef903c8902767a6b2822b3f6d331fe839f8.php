

<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   
        <!-- <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input-error','data' => ['messages' => $errors->get('email'),'class' => 'mt-2 bg-danger','style' => 'width:300px']]); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('email')),'class' => 'mt-2 bg-danger','style' => 'width:300px']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?> -->

    <style type="text/css">
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        .login-form{
            width: 40%;
            margin: 50px auto;
            border-radius: 3px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19) ;
            padding: 25px 30px;
        }
        .login-title{
            font-size: 35px;
        }
        .txt a{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            color: red;
        }
        @media  screen and (max-width: 700px){
            .login-form{
                width: 80%;
                margin: 80px auto;
            }
        }
    </style>

    <b>
            <div class="login-form">
            
                <form class="validate-form" method="POST" action="<?php echo e(route('login')); ?>">
                     <span class="login-title">
                       
                         <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                    </span>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input-error','data' => ['messages' => $errors->get('password'),'class' => 'mt-2 bg-danger ','style' => 'width:300px']]); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('password')),'class' => 'mt-2 bg-danger ','style' => 'width:300px']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input-error','data' => ['messages' => $errors->get('email'),'class' => 'mt-2 bg-danger','style' => 'width:300px']]); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('email')),'class' => 'mt-2 bg-danger','style' => 'width:300px']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <?php echo csrf_field(); ?>
                    <h2 class="form_header_login">Login</h2>
                    <div class="mt-5 mb-4 validate-input" data-validate="Valid email is: a@b.c">
                        <div class="input-group">
                            <div class="input-group-btn">
                              <button class="btn btn-default " type="submit">
                                 <i class="las la-envelope input_icon"></i>
                              </button>
                            </div>
                            <input class="input100 formInputs" name="email" type="email" placeholder="Enter Email" name="email"
                            :value="old('email')" required>
                        </div>
                     
                        <span class="focus-input100" ></span>
                    </div>

                    <div class="mt-3 mb-5 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                         <div class="input-group">
                            <div class="input-group-btn">
                              <button class="btn btn-default " type="submit">
                                 <i class="las la-key input_icon"></i>
                              </button>
                            </div>
                           <input class="input100 formInputs" name="password" type="password" placeholder="Enter Password"
                            name="password" required autocomplete="current-password">
                        </div>
                       
                        <span class="focus-input100"></span>

                    </div>
                    <div class="mt-5">
                        <label for="remember_me" style="display: flex; align-items: center;">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <span style="margin-left: 1.5rem; font-size: 1.575rem;"><?php echo e(__('Remember me')); ?></span>
                        </label>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" id="logbutton">
                                Login
                                <div class="spinner-border m-5" style="width: 3rem; height: 3rem;display:none"
                                    role="status" id="loader"></div>
                            </button>
                        </div>
                    </div>

                    <br>

                    <div class="text-center ">
                        <div class="d-flex justify-content-center align-items-center">
                            <span class="txt">
                                Don’t have an account?
                            </span>
                             <a href="<?php echo e(route('register')); ?>" class="text-primary ml-2">
                                Register Here
                            </a>
                        </div>
                        
                        <p class="txt">
                            
                            <a href="<?php echo e(route('password.request')); ?>" class="text-danger"> forget Password ?</a>
                        </p>
                      
                      </div>
                      
                </form>
            </div>
        </div>

        <script>
        document.getElementById("logbutton").addEventListener("click", function() {
            document.getElementById("loader").style.display = "block";
        });
        </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?><?php /**PATH /home/afonliww/marathon.fonepo.com/f/resources/views/auth/login.blade.php ENDPATH**/ ?>