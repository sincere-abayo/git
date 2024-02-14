    
    <?php

    use Illuminate\Support\Facades\Auth;
   use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

    use App\Models\User;
    $user = Auth::user();

    $name = $user->user;
   
    ?>
     <?php echo $__env->make('user.user-dashboard-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br><br>
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li class="active"><a  href="<?php echo e(route('user.dashboard.payclick')); ?>">Pay clicks</a></li>
        <li><a  href="<?php echo e(route('user.dashboard.payvideo')); ?>">Watch Videos</a></li>
        <li><a  href="#">Download App <i style="color: red">Coming soon</i></a></li>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
        <div class="row">
                    <?php 

$results=db::SELECT("SELECT * from ads order by id desc");
if (count($results)) {
  foreach ($results as $row) {
   
  
        ?>
            <div class="col-md-3">
            <div class="card card-primary card-outline">
            <a href="">  
                     <div class="card-header">
                <h5 class="m-0">  <?php if($row->url!=NULL): ?>
                 <a style="color: #007bff" target="__blank"  href="<?php echo e(route('user.url')); ?>?url=<?php echo e($row->url); ?>"><?php echo e($row->tittle); ?>


</a>
  <?php endif; ?> 
  <!--  -->
<?php if($row->url==NULL): ?>
<a style="color: #007bff" target="__blank" href="<?php echo e(route('user.click')); ?>?ads=<?php echo e($row->id); ?>"><?php echo e($row->tittle); ?></a>

                  <?php endif; ?> 
          
                 </h5>
                    </div>
                   



              <?php if($row->banner!=NULL ): ?>
     
               <!-- <div class="card-body click-title" id="mmm"> -->
                <?php   

             echo "<div class='card-body click-title' style='height: 180px;background-repeat: round;background:url(".asset('ads/'.$row->banner).")'>";
                 ?>
    <span>
        <?php endif; ?>       
                         
             <?php if($row->banner==NULL ): ?>  
             <div class="card-body click-title ">
             <div style="height: 80%;width:100%"><?php echo e($row->description); ?></div>
    
<?php endif; ?>
     </span>
                          
                    </div>   
                     <hr>
                         <h5 class="text-center">

<?php if($row->url!=NULL): ?>
                 <a style="color: #007bff" target="__blank" href="<?php echo e($row->url); ?>">View for 10 sec and Earn free $ 

</a>
  <?php endif; ?> 
<?php if($row->url==NULL): ?>
  <a style="color: #007bff" target="__blank" href="<?php echo e(route('user.click')); ?>?ads=<?php echo e($row->id); ?>">
    View for 10 sec and Earn free $ </a>
<?php endif; ?>
                         </h5>
                         
                        </a>
                    
            </div>
           
          </div>
       <?php

      }
}
         ?>           <!-- END OF click column -->
           

           
        </div>
        <!-- /.row -->
  
          <!-- Main row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>
</div><?php /**PATH /home/afonliww/public_html/resources/views/user/fearloss/payclick.blade.php ENDPATH**/ ?>