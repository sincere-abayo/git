 <?php
    use Illuminate\Support\Facades\DB;
    use App\Models\ads;
$ads=ads::find($id);
 ?>
 <div>
     <?php echo $__env->make('user.user-dashboard-base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: #1c1d20; color: #888b95;">
    <br><br><br>

    <!-- Content Header (Page header) -->

        <ul class="nav nav-tabs">
            <li class="active"><a  href="<?php echo e(route('user.dashboard.ptc')); ?>">Create new Click View||</a></li>
            <li ><a  href="<?php echo e(route('user.dashboard.myptc')); ?>">My Click view||</a></li>
            <li ><a  href="<?php echo e(route('user.dashboard')); ?>">Deposit</a></li>
          
          </ul>
          <!-- <h3> Create a New PTC (Paid to Click) Advertisement</h3> -->
     
    <!-- /.content-header -->

    <!-- Main content -->
   <div class="content">
      <div class="container">
      <div class="row">
        <div class="col-md-6">
          
            <div class="card-body ">
              <div class="info">
  
                  <center>
                    <div class="text-center "><h3 class="font-size-20 "> Create a New PTC (Paid to Click) <br>Advertisement</h3> 
                    <hr><br>
                    <!-- <input type="text" class="fo" id="text" onkeypress="text(this.value)" name=""> -->

</body>
</html>

                   </div>
                 
                <!-- /.info-box-content -->

       <div class="add_ads">
  <form id="adForm" method="post" action="<?php echo e(route('user.ptc')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
  <div>
      <?php if($message=='success'): ?>

    <span class="alert alert-success">
      Click View has been uploaded
    </span>
    <?php endif; ?>
    <?php if($message=='error'): ?>
    <span class="alert alert-danger">
      Failed to upload Click View
    </span>
    <?php endif; ?>
    <?php if($error=='url'): ?>
      <span class="alert alert-danger">
      Invalid url, Upload new link
    </span>
    <?php endif; ?>
    <?php if($rror=='empty'): ?>
      <span class="alert alert-danger">
      Please choose url link or banner to upload
    </span>
    <?php endif; ?>
      <?php if($rror=='file'): ?>
      <span class="alert alert-danger">
      failed to upload banner
    </span>
    <?php endif; ?>
  </div>
    <div class="my-3">
   <table class="ads_table" cellspacing="10">
    <tr class="my-3">
     
        <div class="user-box" >
           <td colspan="2">
              <select onclick="choose(this.value)" class="form-control"> 
                <option value="both">Add banner and Url to upload  your advertise</option>
                <option value="link">Add Url link of your business</option>
                <option value="banner">Create and upload banner of your business</option>
              </select>
           </td>
         </div>
     
    </tr>
        
    <tr class="my-3">
      <td>
         <div class="user-box" id="urli">
     
            <input type="url" name="url" style="color: white;" id="url" placeholder="Ad URL" value="<?php echo e($ads->url??''); ?>" class="form-control">
             <span class="clear-icon" id="sel"  onclick="clearInput('url')">&#10005;</span>
          </div>
      </td>
    </tr>
   
    <td>
        <div class="user-box" id="file">
     
        <input type="file" name="file" style="color: white;" class="form-control">
         <span class="clear-icon" id="sel"  onclick="clearInput('file')">&#10005;</span>
      </div>
    </td>

    <div class="">
      <tr class="user-box-add">
        <td>
          <input type="text" id="titt" oninput="changetittle(this.value)"  name="tittle" maxlength="25" value="<?php echo e($ads->tittle??''); ?>" required="" class="form-control">
        </td>
        <td>
          <span class="" id="sel" onclick="clearInput('titt')">&#10005;</span>
          <label>Ad tittle</label>
        </td>
      </tr>
    </div>  
         <div class="mt-5 d-block"></div>
     <div class="user-box ">
  
        <tr>
          <td>
                <textarea type="text" id="description" oninput="changedesc(this.value)" name="description" value="<?php echo e($ads->description??''); ?>" required="" class="form-control"></textarea>
          </td>
          <td>
            <span class="clear-icon" id="sel"  onclick="clearInput('description')">&#10005;</span>
            <label>Ad description</label>
          </td>
      </tr>

    </div>
   
    
   <div class="user-box">
      <tr>
        <td>
          <select name="views" id="views" onchange="calculate()" class="form-control">
            <option value="<?php echo e($ads->targeted_views??'1000'); ?>"><?php echo e($ads->targeted_views??'1000 views'); ?></option>
            <option value="5000">5000 Views</option>
            <option value="10000">10000 views</option> 
            <option value="500000">500000 Views</option>
            <option value="250000">250000 views</option>   
            <option value="500000">50000 Views</option>
          </select>
        </td>
        <td>
          <span class="clear-icon" id="sel" onclick="clearInput('views')">&#10005;</span>
            <label class="label text-sm">Total Views / Clicks</label>
            
        </td>
      </tr>
        


    </div>

     <div class="user-box">
        <tr>
          <td>
             <select name="duration" id="duration" onchange="calculate()" class="form-control">
                <option value="<?php echo e($ads->targeted_duration??'1'); ?>"><?php echo e($ads->targeted_duration??'1 day ($1 per views)'); ?></option>
                <option value="2">3day ($2 per views)</option>
                <option value="6">7day ($6 per views)</option>   
                <option value="12">15day ($12 per views)</option>

                <option value="24">30day ($24 per views)</option>   
                <option value="42">60day ($42 per views)</option>   

              </select>
          </td>
          <td>
             <span class="clear-icon" id="sel" onclick="clearInput('duration')">&#10005;</span>
              <label class="label">View Duration/Time:</label>
          </td>
        </tr>
    </div>

    <div class="user-box">
      <tr>
        <td>
          <select name="geo" id="geo" class="form-control">
          <option ><?php echo e($ads->location??'North America'); ?></option>
          <option>United states</option>
          <option>Europe</option>   
          <option>Africa</option>  
          <option>Asia</option>
          <option>United kingdom</option>   
          <option>ociania</option>   
        </select>
        </td>
        <td>
          <span class="clear-icon" id="sel" onclick="clearInput('geo')">&#10005;</span>
           <label class="label">Geo Targeting:</label>
            
        </td>
      </tr>

    </div>
    <div class="user-box">
      <tr>
        <td>
          <input type="text" id="question" value="<?php echo e($ads->question??''); ?>" name="question"  maxlength="60" required="" class="form-control">
        </td>
        <td>
          <span class="clear-icon" id="sel"  onclick="clearInput('question')">&#10005;</span>
           <label>Set question related your ads</label>
        </td>
      </tr>
     

    </div>

     <div class="user-box">
      <tr>
        <td>
          <input type="text" id="answer"  name="answer" value="<?php echo e($ads->answer??''); ?>" maxlength="60" required="" class="form-control">
        </td>
        <td>
            <span class="clear-icon" id="sel"  onclick="clearInput('answer')">&#10005;</span>
           <label>Set answer to your question</label>
        </td>
      </tr>
    </div>

    <tr>
        <td>
            <div style="float: right;">
             <h5 id="all" class="text-white">20$</h5> 
             <p id="single" class="text-white">1$ per views</p>
          </div>
        </td>
      </tr>
   
      </table>
   <button class="btn btn-success" type="submit">Submit For Approval</button>
    
   </div>
  </form>
</div>
 
              </div>
            </div>
         <style type="text/css">
           #show{
            display: none;
           }
            #file{
            display: none;
           }
 #urli{
            display: none;
           }

         </style>

 
  <script>
   
    var all=document.getElementById('views').value;
    var single=document.getElementById('duration').value;
      var views=all*single;
      document.getElementById('all').innerHTML=views+"$";
      document.getElementById('single').innerHTML=single+"$ per views";
function calculate(){
  var all=document.getElementById('views').value;
    var single=document.getElementById('duration').value;
      var views=all*single;
      document.getElementById('all').innerHTML=views+"$";
      document.getElementById('single').innerHTML=single+"$ per views";
}
 function choose(id){
if (id=='link')
{
            document.getElementById('urli').style.display="block";
            document.getElementById('file').style.display="none";

}
 
 if (id=='banner')
{
            document.getElementById('file').style.display="block";
            document.getElementById('urli').style.display="none";

} 
 if (id=='both')
{
            document.getElementById('file').style.display="block";
            document.getElementById('urli').style.display="block";

}   
}
    function clearInput(inputId) {
      document.getElementById(inputId).value = '';
    }
      function changedesc(desc) {
            document.getElementById('show').style.display="block";
            document.getElementById('descriptions').innerHTML=desc;
           }

    function changetittle(tittle) {
            document.getElementById('show').style.display="block";
            document.getElementById('titts').innerHTML=tittle;
           }

    
  </script>


    
        </div>
         <!-- END OF cl -->
         <div class="col-md-6" >
          
          <div class="card-body">
            <div class="info">

                <center> <div class="text-center">
  <h4 class="font-size-20 " style="color: #888b95;">
                  How does this work?
              <hr>  </h4> 
                <div style="width: 100%;background: #2e2e32;overflow-wrap: break-word; " id="show">
                 <h3 id="titts"></h3>
                 <hr>
                 <p id="descriptions"></p>
                </div>
                <div class="font-size-14 " style="color:#e7e7e7">
<p >You can create a PTC (Paid to Click) advertisement and purchase traffic for any website that does not break our rules. After your purchase is complete and your ad is approved, Afonete users will view your website for the amount of time you have chosen. Every time a user views your ad they will receive a small number of money.</p>

<p>You can pay PTC ads with your main Coin balance, or you can <a href="" style="color:red">Deposit</a> to add Coins to your balance.</p>
                </div>

  <h4 class="font-size-20" style="color: #888b95;">
                <br>  Advertisement Guidelines
   
   <style type="text/css">
     li{
      color: #e7e7e7;
     }
   </style>           <hr>  </h4> </center>
<ul>
  <li>No URL shorteners</li>
<li>No illegal products or services (weapons, drugs, escorts etc.)</li>
<li>No malicious websites or frame breakers / frame busters.</li>
<li>No malware, viruses, spyware or ransomware.</li>
<li>No infinite redirect loops.</li>
<li>No browser locking scripts or other attempts to hijack the browser.</li>
<li>No copyright infringing material.</li>
<li>No x-rated adult content.</li></ul>
              </div>
            </div>
          </div>
       
       
      </div>
       <!-- END OF cl -->
    
 </div><?php /**PATH /home/afonliww/marathon.fonepo.com/f/resources/views/user/project/ptc.blade.php ENDPATH**/ ?>