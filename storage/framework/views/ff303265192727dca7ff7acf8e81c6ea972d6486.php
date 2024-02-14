
<?php
use Illuminate\Support\Facades\DB;
?>
<!DOCTYPE html>
<html>
<head>
 <div>
     <?php echo $__env->make('admin.admin-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <style>
        /* Custom styles for the form */
        .form-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 900px;
            margin-left: 120px;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container .form-group label {
            font-weight: bold;
        }

        .form-container .form-group input[type="text"],
        .form-container .form-group input[type="number"],

        .form-container .form-group textarea,
        .form-container .form-group input[type="time"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-container .form-group .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container .form-group .submit-btn:hover {
            background-color: #0056b3;
        }

        .data-table {
            width: 100%;
            margin-top: 20px;
        }

        .data-table th,
        .data-table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .data-table th {
            font-weight: bold;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div>
                <h2 class="text-lg text-center font-weight-bold pt-3">FT Activations Task Orginize </h2>
                <?php
                $act=request()->query('code')??$code;
                ?>
                <p class="text-danger text-center font-weight-bold"> (<?php echo e($act); ?>)</p>

                <p class="bg-secondary">
                    <?php echo e($message??''); ?>

                </p>

                <form action="<?php echo e(route('admin.task.store')); ?>" method="post" class="form border border-secondary rounded task-form">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="code" value="<?php echo e(request()->query('code')); ?>">
                    <div>
                        <div class="form-group">
                            <label for="name">Task to  be completed:</label>
                            <input type="text" id="name" name="task" required class="form-control">
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input-label','data' => ['for' => 'message']]); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'message']); ?>Description:  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <textarea id="message" name="desc" required class="form-control">
                            
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="months">Months:</label>
                        <input type="number" id="months" name="month" min="1" max="12" required class="form-control">
                    </div>

                    <div class="form-group">
                        <center>
                             <button type="submit" class="btn btn-primary px-5 font-weight-bold">Add task</button>
                        </center>
                    </div>
                </form>
            </div>

            <div> <button class="btn btn-primary mx-3 my-2" style="float: right;" onclick="history.back()"><i class="las la-arrow-circle-left"></i> back</button>
            <?php

                $results=db::SELECT("SELECT * from tasks where code='$act'");

                $i=1;
                ?>
                <?php if(count($results)): ?> 


                <div class="table-responsive container">
                    <table class="table table-striped rounded">
                        <thead class="bg-gradient-primary">
                            <tr>
                                <th>#</th>
                                <th>Task</th>
                                <th>Status </th>
                                <th>Time(Month)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr><td><?php echo e($i++); ?></td>
                                    <td><?php echo e($data->task); ?></td>
                                    <td><?php echo e($data->status); ?></td>
                                    <td><?php

                               echo $due=$data->month;
                                     ?>
                                         
                                     </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH B:\node tot\esmscript\git\resources\views/admin/task.blade.php ENDPATH**/ ?>