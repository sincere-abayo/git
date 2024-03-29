<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Position;
$user=request()->query('user');
if (!$user ) {
   $user=$username;
}
$leader=Position::where('user',$user)->first();
?>
<?php echo $__env->make('admin.admin-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
<style>
    .content-wrapper {
        position: relative;
    }
</style>
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row my-2">
           
            

            
        </div>

        <section class="edit-form">
            <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-10 col-12 text-center">
                        <div class="card p-5">
                            <h5 class="text-center mb-4 text-2xl font-semibold text-blue-500">Edit position (<?php echo e($user); ?>)<br>
                                <?php echo e($status??''); ?>

                            </h5>
                            <form method="post" action="<?php echo e(route('admin.position.edit')); ?>" class="form-card" >  <?php echo csrf_field(); ?>
                                <input type="hidden" name="user" value="<?php echo e($user); ?>">
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label
                                            class="form-control-label px-3">General Task FT<span class="text-danger">
                                                *</span></label> <input type="text" class="rounded-lg" id="fname"
                                            name="general_task" value="<?php echo e($leader->general_task); ?>" required onblur="validate(1)">
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label
                                            class="form-control-label px-3">Unique task<span class="text-danger">
                                                *</span></label> <input type="text" class="rounded-lg" required id="lname"
                                            name="unique_task" value="<?php echo e($leader->unique_task); ?>" onblur="validate(2)">
                                    </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label
                                            class="form-control-label px-3">Daily bonance<span class="text-danger">
                                                *</span></label>
                                                <select name="daily_bonus">
                                           <?php
                                           for ($i=1; $i<=100; $i++) { 
                                               echo "<option value='$i'>".$i."% of $leader->award$</option>";
                                           }


                                            ?></select>
                                             </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label
                                            class="form-control-label px-3">Cashout allowance <span class="text-danger">
                                                *</span></label> <input type="text" class="rounded-lg" id="mob"
                                            name="cashout" required value="<?php echo e($leader->cashout); ?>" onblur="validate(4)"> </div>
                                </div>
                                <div class="row justify-content-start text-left">
                                      <div class="form-group col-sm-6 flex-column d-flex"> <label
                                            class="form-control-label px-3">Amount to Withdraw<span class="text-danger">
                                                *</span></label>
                                              <div class="row justify-content-start">
                                              <div class="col">
                                <input type="radio" name="withdraw" value="active" class="rounded-lg">&nbsp;&nbsp;active
                                              </div>                          
                                              <div class="col">
                              <input type="radio" name="withdraw" value="disable" class="rounded-lg">&nbsp;&nbsp;disable
                                               </div> 
        <div class="col">
 <input type="radio" name="withdraw" value="locked" class="rounded-lg">&nbsp;&nbsp;locked
                                              </div>        
                                              </div>
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label
                                            class="form-control-label px-3">Task Duration<span class="text-danger">
                                                *</span></label>
                                         <input type="text" class="rounded-lg" id="job"
                                            name="duration"  required value="<?php echo e($leader->duration); ?>" onblur="validate(5)"> </div>
                                </div>

                                <div class="row mt-3">
                                    <input type="submit" value="Edit" class="btn btn-primary col-12">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        
        <div class="popup bg-white rounded-lg shadow-lg p-3" id="dailyModel">
            <div class="close cancel text-black text-3xl font-bold">&times;</div>
            <div class="font-bold text-lg text-center my-2">Daily Income</div>
            <div>
                <form action="">
                    <input type="text" class="form-controll rounded-md" placeholde="Enter Amount">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>

        
        <div class="approve bg-white rounded-lg shadow-lg " id="appvPopup">
            <div
                class="delIcon rounded-full bg-gray-100 h-16  w-16 d-flex justify-content-center align-items-center my-2">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="font-bold text-lg text-center">Are you sure you need to <span class="appvAction"></span>
            </div>
            <div class="actions">
                <button class="bg-gray-300 hover:bg-gray-400 rounded-lg px-2 py-1 cancel">Cancel</button>
                <button class="bg-blue-500 hover:bg-blue-600 rounded-lg px-2 py-1 text-white"><span
                        class="appvAction"></span></button>
            </div>
        </div>

        
        <div class="delete bg-white rounded-lg shadow-lg p-3 " id="delModel">
            <div
                class="delIcon rounded-full bg-gray-100 h-16  w-16 d-flex justify-content-center align-items-center my-2">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="font-bold text-lg text-center">Your are About to <span class="rejAction"></span></div>
            <div class="text-center">This will <span class="rejAction"></span> Permanently <br> are you sure ? </div>
            <div class="actions">
                <button class="bg-gray-300 hover:bg-gray-400 rounded-lg px-2 py-1 cancel">Cancel</button>
                <button class="bg-red-500 hover:bg-red-600 rounded-lg px-2 py-1 text-white">Yes, <span
                        class="rejAction"></span></button>
            </div>
        </div>

        

        
    </div>
</div>
<script>
    // ellipse more
    let ellipsMore = document.getElementsByClassName("ellipsMore");
</script>
<script src="<?php echo e(asset('assets/a/js/custom.js')); ?>"></script>
<?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\laraver pro\git\resources\views/admin/pos_edit.blade.php ENDPATH**/ ?>