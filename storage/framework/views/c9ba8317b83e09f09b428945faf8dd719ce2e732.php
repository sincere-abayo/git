<?php

use Illuminate\Support\Facades\Auth;
use App\Models\User;

$user = Auth::user();
$name = $user->name;
 $email = $user->email;
$ref_code = $user->activation;
?>
<div>
<?php echo $__env->make('user.user-dashboard-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
 <!-- Content Wrapper. Contains page content -->

 <div class="content-wrapper" id="center-side">
        <section class="content">
            <div class="container-fluid">
                <h1>balance page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             </div>
        </section>
 </div>

<div id="exampleModal" class="modal" data-backdrop="static" tabindex="-1" role="dialog">
<div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content" style="background: linear-gradient(190deg, #2ecd71 60%, #27ae60 40.1%); color: black;;">
        <div class="flex justify-content-between mb-4">
            <a href="/"><button type="button" class="btn btn-outline-info btn-primary"> Back</button></a>
            <a class="float-right" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                <button type="button" class="btn btn-outline-info btn-danger"> Logout</button>
            </a>
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

/* Modal Content */
/*.modal-content {*/
/*    background-color: #fefefe;*/
/*margin: auto;*/
/*    margin-left: 18%;*/
/*    border: 1px solid #888;*/
/*    width: 100%;*/
/*    height: content;*/
/*}*/

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
    <div class="modal-content" style="background: linear-gradient(190deg, #2ecd71 60%, #27ae60 40.1%); color: black;">
        <div class="flex justify-content-between mb-4">
            <a href="/"><button type="button" class="btn btn-outline-info btn-primary"> Back</button></a>
            <a class="float-right" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                <button type="button" class="btn btn-outline-info btn-danger"> Logout</button>
            </a>
            <br><center>
            <span class="bg-danger "><?php echo e($error??''); ?><?php echo e($back??''); ?></span>
            </center>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
            </form>

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <center class="bg-danger">
                                            <h3>FC </h3>
                                        </center>
                                        <center>
                                            FC VIP 100$
                                            <ul>
                                                <li><b>Buy Account $100</b></li>
                                            </ul>
                                        </center>
                                        <div class="text-center mt-3">
                                            <a href="<?php echo e(route('fc1')); ?>"><button class="btn btn-primary" value="100"> BUY NOW</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <center class="bg-danger">
                                            <h3>FC </h3>
                                        </center>
                                        <center>
                                            FC VIP 200$
                                            <ul>
                                                <li><b>Buy Account $200</b></li>
                                            </ul>
                                        </center>
                                        <div class="text-center mt-3">
                                            <a href="<?php echo e(route('fc2')); ?>"><button class="btn btn-primary"  value="200" > BUY NOW</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <center class="bg-danger">
                                    <h3>Standard</h3>
                                </center>
                                <center>
                                    Standard User
                                    <ul>
                                        <li><b>Activate free account</b></li>
                                    </ul>
                                </center>
                                <div class="text-center mt-3">
                                    <form action="<?php echo e(route('free')); ?>" method="get">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="amount" value="free">
                                        <button class="btn btn-primary">Activate</button>
                                    </form>
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
</script>


                    </span><br>
<br>
                    
                    <span class="visa"><input type="radio" name="option" value="card"> Visa Card||Mastercard &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         <img src="https://cdn-icons-png.flaticon.com/128/179/179457.png" style="width:34px; height: 44px;" alt="Visa Card"> 
                    </span>
                    <input type="submit" value="Proceed to Payment" style=" margin-left:100px;">

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


<?php /**PATH C:\Users\Andela\Documents\WEB DEVELOPMENT\Sincer\New\affiliate.muhahe.com\resources\views/user/balance.blade.php ENDPATH**/ ?>