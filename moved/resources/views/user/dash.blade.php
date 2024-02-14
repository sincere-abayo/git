 <?php

    use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

    use Illuminate\Http\Request;
    use App\Models\User;
  

    $user = Auth::user();
    $name = $user->name;
    $userr=$user->user;
    $email = $user->email;
    $package = $user->has_paid_package;
     $package1 = $user->has_paid_package;
    switch ($package)
{
    case 'ft':
        $package='FT';
        break;
        case 'fc1':
        $package='FC $100';
        break;
        case 'fc2':
        $package='FC $200';
        break;
}
$ref_code = $user->activation;

    $jsonString = file_get_contents(resource_path('dummydata/task.json'));
    $data = json_decode($jsonString);

    $totalSum = 0;

   
    
    
$deposit = db::SELECT("SELECT user, SUM(deposit) as deposit FROM balances WHERE user = :user GROUP BY user", ['user' => $userr]);
    ?> 

 <div class="wrapper">
     @include('user.user-dashboard')
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="content-wrapper"> 
        <div class="container-fluid">
     <div class="row mb-2">
              <div style="padding: 10px 0;height:100%;">
        <div>
       
             @if(session('message'))
             <p class="btn btn-success d-flex justify-content-center" >
                 {{ session('message') }}
             </p>
             @endif
             

         </div>
     <style>
     .cc .col {
         background-color: #fff5aa;
         border-radius:12px;
         /* Add desired background color */
         border: 1px solid #ccc;
         /* Add desired border style */
         display: flex;
         width: 12px;
         border: 4px solid white;
         height: 100px;
         text-align: center;
         left: 40px;
         padding-top: 30px;
         padding-left: 25px;
     }

     #founder {
         background-color: lightgreen;
         border-raius: 1px solid #ccc;
         display: flex;
         width: 80px;
         height: 100px;
         text-align: center;
         left: 80px;
         padding-top: 30px;
         padding-left: 45px;
     }
     .coming .info-box {
         display: flex;
         width: 100%;
         height: 100%;
         justify-content: center;
         text-align: center;
         float: right;
         padding-top: 5px;
     }


     @media (max-width: 768px),
     @media screen and (min-width: 768px) {
         .cc .col {
             /*  border: 1px solid #ccc; /* Add desired border style */
             */ background-color: red;
             width: 100%;
             flex: 0 0 60%;
             border: 4px solid white;
              height: 100px; 
             text-align: center;
             left: 40px;
             padding-top: 30px;
             padding-left: 25px;
         }

         #hide {
             display: none;
         }
     }


     .coming {
         display: flex;
         width: 100%;
         height: 120px;
         justify-content: center;
     }
     </style>
     <!-- Content Wrapper. Contains page content -->
     
  

  <script src="{{asset('assets/a/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('assets/a/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/a/plugins/sparklines/sparkline.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('assets/a/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/a/dist/js/adminlte.min.js')}}"></script>
  <script src="{{asset('assets/a/dist/js/adminlte.js')}}"></script>
  <script src="{{asset('assets/a/plugins/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('assets/a/dist/js/pages/dashboard2.js')}}"></script>
  <script src="{{asset('assets/a/dist/js/tree.js')}}"></script>
  <script src="{{asset('assets/a/plugins/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('assets/a/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

  <script src="{{asset('assets/a/dist/js/pages/dashboard.js')}}"></script>
  <script src="{{asset('assets/a/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <script src="{{asset('assets/a/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{asset('assets/a/plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('assets/a/dist/js/pages/dashboard3.js')}}"></script>
