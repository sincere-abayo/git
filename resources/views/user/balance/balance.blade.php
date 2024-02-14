
<div class="wrapper">
@include('user.user-dashboard-base')
<?php
use App\Models\Position;
use App\Models\User;
$user = Auth::user();
$name = $user->user;
$position=Position::where('user',$name)->first();
 ?>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
 <!-- Content Wrapper. Contains page content -->

 <div class="content-wrapper" id="center-side">

        <div class="content">
            <div class="container-fluid">
                                <div class="bal-box-container">
                    <div class="bal-box">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content ">
                           CASH OUT
                        </div>
                        <div class="bal-num font-weight-bold text-lg ">
                           $ 0.0
                        </div>
                    </div>    
                    <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content ">
                            TRADING
                        </div>
                        <div class="bal-num font-weight-bold text-lg ">
                           $ 0.0
                        </div>
                    </div> 
                    <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content ">
                            MCOIN
                        </div>
                        <div class="bal-num font-weight-bold text-lg ">
                           $ 0.0
                        </div>
                    </div>    
                    <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content ">
                            CASH & CASHOUT
                        </div>
                        <div class="bal-num font-weight-bold text-lg ">
                           $ 0.0
                        </div>
                    </div> 

                     <div class="bal-box">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content ">
                            Escrow MSHARE
                        </div>
                        <div class="bal-num font-weight-bold text-lg ">
                           $ 0.0
                        </div>
                    </div>    
                    <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content ">
                            HOLDING
                        </div>
                        <div class="bal-num font-weight-bold text-lg ">
                           $ 0.0
                        </div>
                    </div> 
                   
                    <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>TOTAL EARNING</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                          $ 0.0
                        </div>
                    </div> 

                    <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>TODAY EARNING</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                           $ 0.0
                        </div>
                    </div>    
                    <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>LAST WEEK'S EARNING</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                           $ 0.0
                        </div>
                    </div>

                     <div class="bal-box box-blue">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            COMING SOON
                        </div>
                    </div>    
                    <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>PACKAGE</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                          <i>upgrade package</i>
                        </div>
                    </div> 

                    <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>REQUIRED RE-ORDER PV</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                            1
                        </div>
                    </div>    
                    <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>PAIRING BONUS</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                            $ 0.0000
                        </div>
                    </div>  

                     <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>DIRECT SPONSORSHIP BONUS</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                            $ 0.0000
                        </div>
                    </div>    
                    <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>DOWNLINE MATCHING BONUS</p>
                        </div>
                        <!-- <div class="bal-num font-weight-bold text-lg">
                            0.0
                        </div> -->
                    </div>

                                        <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>SHOP BONUS</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                           $ 0.0000
                        </div>
                    </div>    
                    <div class="bal-box bg-danger">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content text-white">
                           SHOP MATCHING BONUS
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                            $ 0.0000
                        </div>
                    </div>  

                     <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>TOTAL MONTHLY PURCHASE PV</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                           $ 0.0000
                        </div>
                    </div>    
                    <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>INCOME WALLET</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                            $ 0.00
                        </div>
                    </div> 

                                        <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>SHOPPING WALLET</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                            $ 0.00
                        </div>
                    </div>    
                    <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>PACKAGE WALLET</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                           $ 0.00
                        </div>
                    </div>  

                     <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>ORDER WALLET</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                            $ 0.00
                        </div>
                    </div>    
                       <div class="bal-box box">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>MERCHANT & BUY</p>
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                             0:0
                        </div>
                    </div> 
 <div class="bal-box ">
                        <!-- <div class="point">
                            
                        </div> --> <br>
                        <div class="bal-content">
                            DIRECT SPONSORED LEFT & RIGHT
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                            0:0
                        </div>
                    </div>    
                    <div class="bal-box ">
                       <br>
                        <div class="bal-content">
                            ACCUMULATED TOTAL LEFT PV'S & RIGHT
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                           0:0
                        </div>
                    </div>  

                     <div class="bal-box ">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            REWARD
                            <!-- <p>SPLIT BAROMETER 25% DIFFICULTY INCREASEBAROMETER 98%</p> -->
                        </div>
                        <div class="bal-num font-weight-bold text-lg">
                           {{$position->cashout}}$
                        </div>
                    </div>    
                       <div class="bal-box box-blue">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content">
                            <p>COMING SOON</p>
                        </div>
                        
                    </div> 
                     <div class="bal-box box-lightBlue">
                        <div class="point">
                            
                        </div>
                        <div class="bal-content ">
                            TRAVELLING POINT
                        </div>
                        <div class="bal-num font-weight-bold text-lg ">
                            0:0
                        </div>
                    </div> 
   
                     
                    
                   




                </div>
                
        </div>
 </div>

</div>

<script>
document.addEventListener('livewire:load', function() {

// $('#exampleModal').modal('show');

})
</script>


