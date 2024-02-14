<?php

use Illuminate\Support\Facades\Auth;
use App\Models\User;

$user = Auth::user();


?>

<?php echo $__env->make('admin.admin-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="content-wrapper py-5" style="width: 70%;">
   
    <div class="prof-update" >
        <h2 class="upd-title">Add user </h2>

           <?php if(session('message')): ?>
    <div class="alert alert-success" style="width:400px">
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>

            <div class="row upd-row">   
               
                <div class="col-lg-8">
                        <div class="container-fluid">
                          
                            <form action="<?php echo e(route('admin.user.add')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                           
                <p class="bg-secondary">
                    <?php echo e($exist ?? ''); ?>

                    <?php echo e($ref ?? ''); ?>

                </p>

                <!-- Error Messages -->
                <?php $__currentLoopData = ['danger', 'warning', 'success', 'info', 'exist']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(Session::has('alert-'.$msg)): ?>
                        <div class="alert alert-<?php echo e($msg); ?>" role="alert">
                            <?php echo e(Session::get('alert-'.$msg)); ?>

                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    
                <?php endif; ?>
                  <?php if($request): ?>
                    <div class="alert alert-success">
                        <ul>
                           <?php echo e($request); ?>

                        </ul>
                    </div>
                    
                <?php endif; ?>
               
                                <div class="form-row"> 
                                    
                                    <div class="form-group col">
                                        <label for="name">Username:</label>
                                        <input type="text" id="user" name="user" required required>
                                    </div>
                                       <div class="form-group col">
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name"  required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email"  required>
                                    </div>
                                    <div class="form-group col">
                                        <label for="phone">Phone:</label>
                                        <input type="tel" id="phone" name="phone"  required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="email">Password:</label>
                                        <input type="text" id="password" name="password"  required style="width:280px">
                                    </div>
                                    
                                    <div class="form-group col"><br><br>
                                        <select style="width:280px" id="countrySelect" name="country"
                                        onchange="myFunction()">
                                        <option >Select a country</option>
                                    </select>
                                    </div>
                                </div>
                                   
                                </div>
                                       <br><br>
                                           
                                        </div> 
                                <input type="submit" class="font-weight-bold" value="Add user" style="width:400px">
                               
                       
                            <script type="text/javascript">
                            fetch("https://restcountries.com/v3.1/all")
                                .then(response => response.json())
                                .then(data => {

                                    // Extract country names from the API response
                                    var countryNames = data.map(country => country.name.common);
                                    countryNames.sort();
                                    // Populate the select element with country options
                                    var countrySelect = document.getElementById("countrySelect");
                                    countryNames.forEach(countryName => {
                                        var option = document.createElement("option");
                                        option.value = countryName;
                                        option.text = countryName;
                                        countrySelect.appendChild(option);
                                    });
                                })
                                .catch(error => {
                                    console.log("Error:", error);
                                });
</script>
 </form>
                         <center> 

                       
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
                        </div>            
                </div>
            </div>        
    </div>




</div><?php /**PATH B:\node tot\esmscript\git\resources\views/admin/add-user.blade.php ENDPATH**/ ?>