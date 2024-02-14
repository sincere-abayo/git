    

<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px;
}

main {
  padding: 20px;
}

.deposit-form {
  border-radius: 4px;
  padding: 20px;
}

.deposit-form h2 {
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="number"] {
  width: 100%;
  border: none;
  padding: 10px;
  border-bottom: 1px solid gray;
  background-color: black;
}

button {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #555;
}

footer {
  background-color: #f2f2f2;
  text-align: center;
  padding: 10px;
}
.main_head{
  width: 90%;
  margin: 0 auto;
  font-size: 30px;
  border-bottom: 2px solid darkred;
  padding: 15px 0;
  text-align: center;
}
.dep_hist_head{
  border-bottom: 1px solid gray;
}
h3{
  font-size: 20px;
  margin: 10px 0;
}
.small_text{
  font-size: 14px;
}
.convert{
  background-color: inherit;
  width: 100%;
  border: 2px solid red;
  padding: 7px 20px;
  border-radius: 0;
  color:  red;
}
.convert:hover{
  background-color: #111;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
     @include('user.user-dashboard-base')

      <div class="content-wrapper" style="position: relative;">
        <div class="container"> 
          <div class="row">
              <div class="col-12 col-sm-12 col-md mx-md-2 mx-xl-3 shadow">
                 <h1 class="main_head">Event Histroy </h1>

                <main>
                <span class="ml-2">recent events</span>
               <div class="recentEvent  my-2 py-3 "> 

                  <?php for ($i = 1; $i <= 5; $i++) { ?>
                     <div class="recbox">
                      <a href="{{route('user.dashboard.events')}}" class="box  d-flex justify-content-between align-items-center py-2  px-2"> 
                          <div ><img src="{{asset('assets/a/img/event.png')}}" class="links "></div> 
                          <div class="font-weight-bold">Watch video</div>
                          <div ><img src="{{asset('assets/a/img/calendar.png')}}" class="links "></div> 
                          <div> 
                              <div class="date">12/05/2023</div>
                              <div class="status">pending</div>
                          </div>
                      </a>
                  </div>
                  <?php } ?>
                  
               
              </div>
                </main>
              </div>

              <div class="col-12 col-sm-12 col-md-5 mx-md-2 text-white px-4 h-75 mx-xl-3" style="background-color: #000050;"> 
                 <h1 class="main_head">Report Event </h1>

                 <div class="">
                    <form>  
                        <label>image 1</label><br>
                        <input type="file" name="img1" class="form-control">
                        <label>image 2</label><br>
                        <input type="file" name="img1" class="form-control">
                        <label>Description</label><br>
                        <textarea class="form-control"></textarea>

                        <input type="submit" name="" class="btn btn-primary font-weight-bold w-100 my-3">
                    </form>
                 </div>
              </div>
          </div>
        </div>
     
  </div>  

    @include('user.footer')
  </div>
 

</body>
</html>
