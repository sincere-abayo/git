    
    <?php

    use Illuminate\Support\Facades\Auth;
   use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

    use App\Models\User;
    $user = Auth::user();

    $name = $user->user;
   
    ?>
     @include('user.user-dashboard-base')
     <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br><br>
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li class="active"><a  href="{{route('user.dashboard.payclick')}}">Pay clicks</a></li>
        <li><a  href="{{route('user.dashboard.payvideo')}}">Watch Videos</a></li>
        <li><a  href="#">Download App <i style="color: red">Coming soon</i></a></li>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
        <div class="row">
                    <?php 

$results=db::SELECT("SELECT * from ads where status ='approved' order by id desc");
if (count($results)) {
  foreach ($results as $row) {
   
  
        ?>
            <div class="col-md-3">
            <div class="card card-primary card-outline">
            <a href="">  
                     <div class="card-header">
                <h5 class="m-0">  @if($row->url!=NULL)
                 <a style="color: #007bff" target="__blank"  href="{{route('user.url')}}?url={{$row->url}}">{{$row->tittle}}

</a>
  @endif 
  <!--  -->
@if($row->url==NULL)
<a style="color: #007bff" target="__blank" href="{{route('user.click')}}?ads={{$row->id}}">{{$row->tittle}}</a>

                  @endif 
          
                 </h5>
                    </div>
                   



              @if($row->banner!=NULL )
     
               <!-- <div class="card-body click-title" id="mmm"> -->
                <?php   

             echo "<div class='card-body click-title' style='height: 180px;background-repeat: round;background:url(".asset('ads/'.$row->banner).")'>";
                 ?>
    <span>
        @endif       
                         
             @if($row->banner==NULL )  
             <div class="card-body click-title ">
             <div style="height: 80%;width:100%">{{$row->description}}</div>
    
@endif
     </span>
                          
                    </div>   
                     <hr>
                         <h5 class="text-center">

@if($row->url!=NULL)
                 <a style="color: #007bff" target="__blank" href="{{$row->url}}">View for 10 sec and Earn free $ 

</a>
  @endif 
@if($row->url==NULL)
  <a style="color: #007bff" target="__blank" href="{{route('user.click')}}?ads={{$row->id}}">
    View for 10 sec and Earn free $ </a>
@endif
                         </h5>
                         
                        </a>
                    
            </div>
           
          </div>
       <?php

      }
}
else{
    echo "<span class='btn btn-primary'>No Ads Availlable. come back later</span>";
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
</div>