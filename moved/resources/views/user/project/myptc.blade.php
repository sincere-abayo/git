   <?php

    use Illuminate\Support\Facades\Auth;
   use Illuminate\Support\Facades\DB;


    use App\Models\User;
    $user = Auth::user();

    $name = $user->user;
    ?>

 <div>
     @include('user.user-dashboard')


        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"  style="width: 100%;">
    <br><br>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
     <ul class="nav nav-tabs">
            <li ><a  href="{{route('user.dashboard.ptc')}}">Create new Click View</a></li>
            <li class="active"><a  href="{{route('user.dashboard.myptc')}}">My Click view</a></li>
            <li ><a  href="{{route('user.dashboard')}}">Deposit</a></li>
          
          </ul>
          
          </ul> 
          <!-- <center>
          <h3>My Click View </h3></center> -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" style="margin-left: -250px;">
      <div class="container">
      <div class="row" >
        <?php 

$results=db::SELECT("SELECT * from ads where user='$name'");
if (count($results)) {
  foreach ($results as $row) {
   
  
        ?>
        <div class="col-md-4" >
           
            <div class="card-body " >
              <div class="info bg-secondary ">
  
                  <center>
                    <div class="text-center ">
                      <h4 class="font-size-20 font-weight-600">
                         @if($row->url!=NULL)
                 <a style="color: yellow" href=" {{$row->url}}">{{$row->tittle}}
</a>
  @endif 
@if($row->url==NULL)
  <a style="color: yellow" href="?ads={{$row->id}}">
    {{$row->tittle}}</a>

                  @endif    </h4>
                 <p style="color:black;">
                    <?php 
$view=db::SELECT("SELECT * from ads where id='$row->id' ");
  foreach ($view as $views) {
$view=$views->reached_views>0?$views->reached_views:'0';
    // $remaining=$views->targeted_views-$views->reached_views;
                echo "Targeted_view: $views->targeted_views reached_view: ".$view;
                echo "<br>Created at $views->created_at";
                } 
                global $status;
                if($row->status=='pending'){
                    $status="Pending, Waiting for approval";
                }
                 elseif($row->status=='approved'){
                    $status="Approved, Enjoy your ads";
                }
                else{
                    $status="Declained, your ads does not match with our standard policy";
                }
                
                   ?><br>
                   <span class="bg bg-secondary">Status: {{$status}}</span>
                 </p>
             
              </div>
                    <hr>
                   
                 
                <!-- /.info-box-content -->
              <div style="height: 200px;width: 100%;">

              @if($row->banner!=NULL )
                  <?php 
                  echo " <img src='".asset('ads/'.$row->banner)."' style='width:100%;height:100%;' style='margin-top:-20px'>";
                  ?>     
                 <!-- <p> {{$row->description}} </p> -->
                 
                  @endif
                  @if($row->banner==NULL)

                      <p>{{$row->description}}</p>

 @endif
              
              </div>

                <div class="bg-info container-fluid">
                  <div class="col-md-12">
                    <center>
                        <div class="btn btn-warning">
<!-- <a href="{{route('user.dashboard.ptc')}}?id={{$row->id}}"> View</a> -->
@if($row->url!=NULL)
                 <a href=" {{route('user.url')}}?url={{$row->url}}">View
</a>
  @endif 
@if($row->url==NULL)
  <a href="{{route('user.click')}}?ads={{$row->id}}">
    View</a>
    @endif
        </div>&nbsp;&nbsp;&nbsp;<div class="btn btn-danger">
<a href="{{route('user.dashboard.ptc')}}?ads={{$row->id}}"> Edit</a>
        </div>
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
    echo "<span class='btn btn-primary'>No videos you have uploaded. click to upload </span>";
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