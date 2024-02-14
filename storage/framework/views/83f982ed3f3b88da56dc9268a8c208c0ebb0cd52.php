<?php

use Illuminate\Support\Facades\Auth;
use App\Models\User;

$user = Auth::user();
$name = $user->name;
$uname = $user->user;
$email=$user->email;
$phone=$user->phone;
$gender=$user->gender;
$country=$user->country;
$package=$user->has_paid_package;
?>

<?php echo $__env->make('user.user-dashboard-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div>

    
    <!DOCTYPE html>
    <html>

    <head>
        <title>Update Profile</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
   
        <br><br>
        <div class="container">
            <?php if(!$show): ?>
            <h2>User Information Update <br>
                <!-- <b> <?php echo e($package?'FC':'n'); ?></b> -->
                <br>
               <span class="bg-success"> 
   <?php echo e(session('success')??''); ?></span>
 <span class="bg-danger"> 
   <?php echo e(session('fail')??''); ?></span>
                
</span>
            </h2>
            <form action="<?php echo e(route('profile.updates')); ?>" method="post">
                <?php echo csrf_field(); ?>
              <!--   <div class=" form-group">
                    <label for="profile-pic">Profile Picture:</label>
                    <input type="file" id="profile-pic" name="pic">
                </div> -->
                <div class="form-group">
                    <label for="name">Username:</label>
                    <input type="text" id="name" name="username" value="<?php echo e($uname); ?>" required disabled>
                </div>
                   <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo e($name); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo e($email); ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" value="<?php echo e($phone); ?>" required>
                </div>
                  <div class="form-group">
                    <label for="phone">Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($country); ?></label>
                </div>
                 <!-- <div class="form-group">
                    <label for="phone">Gender: <?php echo e($gender); ?>

       <?php if($gender=='not' ): ?>       
&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="gender" value="not" checked> Custom &nbsp;&nbsp;&nbsp;
                   <input type="radio" name="gender" value="f" checked> Female&nbsp;&nbsp;

                   <input type="radio" name="gender" value="m"> Male</label>

<?php endif; ?>
<?php if($gender=='f'): ?> 
  &nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="gender" value="not"> Custom &nbsp;&nbsp;&nbsp;
                   <input type="radio" name="gender" value="f" checked> Female&nbsp;&nbsp;

                   <input type="radio" name="gender" value="m"> Male</label>

<?php endif; ?>
<?php if($gender=='m'): ?> 
                    &nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="gender" value="not" checked> Custom &nbsp;&nbsp;&nbsp;
                     <input type="radio" name="gender" value="f" > Female&nbsp;&nbsp;

             <input type="radio" name="gender" value="m" checked> Male</label>


            <?php else: ?>

            &nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="gender" value="not" > Custom &nbsp;&nbsp;&nbsp;
                     <input type="radio" name="gender" value="f" > Female&nbsp;&nbsp;

             <input type="radio" name="gender" value="m" checked> Male</label>
<?php endif; ?>

                   
                </div> -->
                <input type="submit" value="Update">
            </form>
         <center>  
          <a s href="<?php echo e(route('password.show')); ?>" tyle="color: red;">change password</a></center>
        
        <br>
        <?php else: ?>

    <h2>Change Password <br></h2>
  <center> <span class="bg-success"> 
   <?php echo e(session('status')??''); ?></span></center>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        
<form action="<?php echo e(route('password.update')); ?>" method="post">
                <?php echo csrf_field(); ?>
              <!--   <div class=" form-group">
                    <label for="profile-pic">Profile Picture:</label>
                    <input type="file" id="profile-pic" name="pic">
                </div> -->
                <div class="form-group">
                    <label for="name">Current password:</label>
                    <input type="password" id="current_password" name="current_password" placeholder="current password" required>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" name="password" type="password" placeholder="Enter Password"
                            name="password" required autocomplete="current-password">
                        <span class="focus-input100"></span>

                    </div>
                    <div class="wrap-input100 validate-input">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input-label','data' => ['for' => 'password_confirmation']]); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'password_confirmation']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><span class="btn-show-pass"><i
                            class="zmdi zmdi-eye"></i></span>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.text-input','data' => ['id' => 'password_confirmation','class' => 'input100','type' => 'password','name' => 'password_confirmation','required' => true,'placeholder' => 'Re-enter Password']]); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'password_confirmation','class' => 'input100','type' => 'password','name' => 'password_confirmation','required' => true,'placeholder' => 'Re-enter Password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><span
                        class="focus-input100"></span>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input-error','data' => ['messages' => $errors->get('password_confirmation'),'class' => 'mt-2']]); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('password_confirmation')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
                <br>
                <input type="submit" value="Change">
            </form>


<?php endif; ?>
    </body>

    </html>

    <style>
    .container{
        width: 100%;
        max-width: 500px;
          margin-left: 480px;
        padding-top: 40px;
        padding-right: 0px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
.row{
  
}
    h2 {
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="file"],input[type="password"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Responsive Styles */
    @media  screen and (max-width: 480px) {
        .container {
/*            padding: 10px;*/
            margin-left: 40px;
        }
     input[type="submit"] {
            font-size: 14px;
        }
    }
     
        @media  screen and (max-width: 876px) {
        .container {
            padding: 10px;
            margin-left: 80px;
        }
     input[type="submit"] {
            font-size: 14px;
        }
    }
  
    </style>
</div><?php /**PATH B:\node tot\esmscript\affiliate.muhahe.com\resources\views/user/profile-component.blade.php ENDPATH**/ ?>