    
    <?php

    use Illuminate\Support\Facades\Auth;
   use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

    use App\Models\User;
    $user = Auth::user();

    $name = $user->user;
     if (!$id) {
        header("location:user.fearloss.payclick");    }
    ?>
<link rel="stylesheet" href="{{asset('assets/a/dist/css/bootstrap.min.css')}}">
<style type="text/css">
    .waiting{
        position:relative;
        width: 30%;
        margin: 20px auto;
        padding: 20px;
        height: 150px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        text-align: center;
    }
    #leftSec{
        padding-top: 20px;
        text-align:center;
        font-size: 30px;
        font-weight: bold;
        color: #1565C0;
    }
    @media screen and (max-width: 750px){
        .waiting{
            width: 70%;
        }
        #leftSec{
            font-size:20px;  
             padding-top: 10px;
        }
    }
    #powed{
        position: absolute;
        bottom:0;
        left: 50%;
        transform: translate(-50%, 0);
    }
    .answerForm{
        display: none;
        padding: 20px;
        background-color: #f7f7f9;
        width: 50%;
        margin: 10px auto;
    }
</style>
<span id="msg" style="color: red;">
  <?php 
$mine=db::SELECT("SELECT * from ads where id='$id' and user='$name'");

  ?>
  @if(count($mine))
  Viewing my ads
@else
        
<div class="waiting" id="waitBox">
    <div class="flex-column justify-content-around">
      <p class"text-center">{{$already??'Earn money by viewing advertisments '}}  
      {{$update??''}}
      {{$errora??''}}
{{$errorb??''}}</span><br></p>
      <p class" text-lg" id="leftSec" style="margin-top: -20px"></p>
      <p class"text-center" style="font-size: 10px;" id="powed">Powered by Fonepo </p>
    </div>
</div>
@if(!$already )
<?php
$results=db::SELECT("SELECT question from ads where id='$id'");
  foreach ($results as $row) {


?>
    
<div class="answerForm" >
     <div id="done" class="alert alert-success text-center">answer responded</div>
    <span id="msg" style="color: red;">Answer this question related to this ads<span>
   
     <form method="post" id="form" action="{{route('user.ads.url')}}" class="my-3">
         @csrf
      <span class="font-weight-bold text-dark" style="font-size: 18px;">{{$row->question}}?</span>
        <input type="hidden" name="id" value="{{$id}}">
         <div class="d-flex my-2">
            <input type="text" name="answer" placeholder="Answer question" class="form-control">
            <input type="submit" name="sub" value="submit" class="btn btn-primary">
        </div>

    </form>
    
    
  
</div>
   <?php
             }
             
?> 

@endif
@if(!$fail )
<span id="countdown-timer" class="alert-success">
</span>
@endif
<span class="alert-success">
{{$success??''}}

{{$fail??''}}
</span>
<span id="done"></span>
@endif
<!-- script for time counter down        -->
<script type="text/javascript">
    const waitBox = document.getElementById('waitBox');
    const answerForm = document.querySelector('.answerForm');
    const countdownTimer = document.getElementById('leftSec');
    let countdownSeconds =10; // Number of seconds for the countdown
    let countdownInterval;

    function startCountdown() {
      countdownInterval = setInterval(updateCountdown, 1200);
    }

    function updateCountdown() {
      countdownSeconds--;
    
      if (countdownSeconds >= 0) {
        countdownTimer.textContent = countdownSeconds+" second left";
      } else {
        clearInterval(countdownInterval);
        waitBox.style.display = "none";
        performTask(); // Call the function to perform your desired task Thank you for watching ads you earn 0.0001$
      }
    }

    function performTask() {
        answerForm.style.display = "block"
     }
    startCountdown();

</script> 
        
<!-- Display the content of the external URL -->
<div>
    {!! $externalContent !!}
</div>
    