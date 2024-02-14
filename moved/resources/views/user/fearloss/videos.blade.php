   <?php

    use Illuminate\Support\Facades\Auth;
   use Illuminate\Support\Facades\DB;


    use App\Models\User;
    $user = Auth::user();

    $name = $user->user;
    ?>

 <div>
     @include('user.user-dashboard-base')


        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"  style="width: 100%;">
    <br><br>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
    <ul class="nav nav-tabs">
          <li><a  href="{{route('user.dashboard.payclick')}}">Pay clicks</a></li>
        <li class="active"><a  href="{{route('user.dashboard.payvideo')}}">Watch Videos</a></li>
        <li><a  href="#">Download App <i style="color: red">Coming soon</i></a></li>
             
          <!-- <center>
          <h3>My Click View </h3></center> -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" style="margin-left: -200px;">
      <div class="container">
      <div class="row" >
        <?php 

$results=db::SELECT("SELECT * from videos where status='approved' order by id desc");
if (count($results)) {
  foreach ($results as $row) {
   
  
        ?>
        <div class="col-md-4" >
           
            <div class="card-body " >
              <div class="info card-header ">
  
                  <center>
                    <div class="text-center ">
                      <h4 class="font-size-20 font-weight-600">

 <a style="color: #007bff" target="__blank" href="{{route('user.watch')}}?video={{$row->id}}">{{$row->tittle}}</a>
  </h4>
                 <p style="color:black;">
                    <?php 
$view=db::SELECT("SELECT * from videos where id='$row->id' ");

                 ?><br>
                   
                 </p>
             
              </div>
                    <hr>
                   
                 
                <!-- /.info-box-content -->
              <div style="height: 150;width: 100%;">

                  <?php 
                  echo " <video src='".asset('video/'.$row->video)."' style='width:100%;height:100%;' style='margin-top:-80px' >";
                  ?>     
                 <!-- <p> {{$row->description}} </p> -->
                 
              
              </div>

                <div class="bg-info container-fluid">
                  <div class="col-md-12">
                    <center>
    <!-- <br>       <div class="alert alert-info"> -->
<!-- <a href="{{route('user.dashboard.ptc')}}?id={{$row->id}}"> View</a> -->
<br>
  <a style="color:white;text-decoration: underline;" href="{{route('user.watch')}}?video={{$row->id}}">
  Click to watch this video for {{$row->time}} sec  and get paid 0.1$</a>
  
        <!-- </div> -->
</center>
                    <br>
                  </div>
                </div>
              </div>
            </div>
         
         
        </div>
        <?php

      }
}
else{
    echo "<span class='btn btn-primary'>No videos availlable. come back later  </span>";
}
         ?>

         <script>
    
  </script>
<!-- end of col -->

       <div>
        </div>    
      </div>  
    </div> 
        </div>  


<!-- /.container-fluid -->
      </div>
    </div>
    <!-- /.content -->
    <!-- /.row -->

  </div>
 </div>