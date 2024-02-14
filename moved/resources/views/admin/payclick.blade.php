    
    <?php

    use Illuminate\Support\Facades\Auth;
   use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

    use App\Models\User;
    $user = Auth::user();

    $name = $user->user;
   
    ?>
     @include('admin.admin-base')

 <div class="content-wrapper" style="width: 83%;">
    <!-- Content Header (Page header) -->
    <br><br>
    <div class="content-header">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li class="active"><a  href="{{route('admin.ads')}}">Manage ads</a></li>
        <li><a  href="{{route('admin.videos')}}">Manage videos</a></li>
        <li><a  href="#">Manage download</a></li>
        <li><a  href="{{route('admin.ads.create')}}">Add ads</a></li>
      </div>
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
                <h5 class="m-0">  @if($row->url!=NULL)
                 <a style="color: #007bff" target="__blank"  href="{{route('user.url')}}?url={{$row->url}}">{{$row->tittle}}

</a>
  @endif 
  <!--  -->
@if($row->url==NULL)
<a style="color: #007bff" target="__blank" href="{{route('clicks')}}?ads={{$row->id}}">{{$row->tittle}}</a>

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
                 <a style="color: #007bff" target="__blank" href="{{$row->url}}">View  

</a>
  @endif 
@if($row->url==NULL)
  <a style="color: #007bff" target="__blank" href="{{route('clicks')}}?ads={{$row->id}}">
    View </a>
@endif &nbsp;&nbsp;&nbsp;<span class="bg bg-primary">{{$row->status}}</span>
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
</div>