
<?php 
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include('user/quest_header.php'); 
include('user/quest_top.php'); 
$t_num="";
if (isset($_GET['t_num'])) {
$t_num=$_GET['t_num']; 
}
else{
$t_num=$_SESSION['buyed'];

   } 
 include 'dbcon.php';

$events=$conn->query("SELECT * from ticket where t_number='$t_num'");
$event=$events->fetch();
$ev_id=$event['e_id'];

$results=$conn->query("SELECT * from event where e_id='$ev_id'");
 $row=$results->fetch();
    $seats=$conn->query("SELECT * from seats where e_id='$ev_id'");
$prices=$conn->query("SELECT * from price where e_id='$ev_id'");
$seat=$seats->fetch();
$price=$prices->fetch();
$onlineEvent=$conn->query("SELECT * from online join event on(online.e_id=event.e_id) join ticket on(event.e_id=ticket.e_id) where ticket.t_number='$t_num'");
$venueEvent=$conn->query("SELECT * from event join venue on(event.e_id=venue.e_id) join ticket on(event.e_id=ticket.e_id) where ticket.t_number='$t_num'");
$online="";
$venue="";
if ($onlineEvent) {
    $online=$onlineEvent->fetch();
}
if ($venueEvent) {
    $venue=$venueEvent->fetch();
}
$mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_OFF;  // Set to `SMTP::DEBUG_SERVER` for debugging
   $mail->Host = 'smtp.gmail.com';    // Your SMTP server host
    $mail->SMTPAuth = true;
  $mail->Username = 'infoafonete@gmail.com'; // Your SMTP username
$mail->Password = 'fzrtkipkhurdizgm'; // Your SMTP password
    $mail->SMTPSecure = 'tls';          // Enable TLS encryption; `ssl` also accepted
    $mail->Port = 587;
 // Recipient's email and name

$mail->Subject = 'Ticket confirmation'; // Email subject

// Create the HTML body
$htmlBody = '<h1>Thank u for purchasing ticket </h1>';
$htmlBody .= '<p> for: '.$event['name'].'</p>';
$htmlBody .= '<p>Event: '.$row['e_name'].'</p>';
$htmlBody .= '<p>Required: Download ticket Attachment </p>';
$htmlBody .= '<p>Contact organizer: '.$row['e_org'].' ';
$htmlBody .= ' : '.$row['e_phone'].'</p>';

$mail->msgHTML($htmlBody);




// Send the email
// if ($mail->send()) {
//   echo "<br><span class='alert alert-success'> Thank u for purchasing Ticket, ticket sent to ".$event['email']." </span>";
// } else {
//     echo "<span class='alert alert-danger'Error sending email: " . $mail->ErrorInfo."</span>";
// } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .ticket_body{
            background-image: url('ticket.jpg');
            width: 100%;
            height: 100vh;
            position: relative;
        }
        .main_ticket{
            position: absolute;
            right: 0;
            top: 50%;
            transform: translate(0, -50%);
            width: 65%;
            height: 300px;
            background-color: white;
            border-radius: 20px;
            padding: 10px;
            display: flex;
            align-items: center;
        }
        .ticket_title{
            position: absolute;
            right: 50px;
            color: white;
            top: 5%;
        }
        /* .main_ticket_content{
            display: flex;
            justify-content: center;
        } */
        .banner{
            width: 200px;
            height: 200px;
        }
        .banner img{
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
        .main_ticket_content{
            width: 100%;
            display: flex;
        }
        .det1{
            flex: 1;
            padding: 5px;
        }
        .det2{
            flex: 1;
        }
        .det3{
            flex: 1;
            padding: 5px;
        }
        .tickeck_details.det2 p{
            font-weight: bold;
            margin: 10px 0;

        }
        .ticket_code{
            display: flex;
        }
        .ticket_code p,.ticket_code p{
            font-weight: bold;
        }
        .code{
            width: 150px;
            height: 150px;
            margin: 0 20px;
        }
        .code img{
            width: 100%;
            height: 100%;
            border-radius: 10px;
           
        }
        .ticket_subTitle{
            font-size: 20px;
            margin: 15px 0 0 0;
            font-weight: bold   ;
        }
        .bought{
            position: absolute;
            bottom: 0;
            font-size: 14px;
            padding: 5px 20px;
        }
        @media screen and (max-width: 700px) {
            .main_ticket{
                width: 85%;
                padding: 20px 0;
                height: auto;
                justify-content: center;
                align-items: center;
            }
            .ticket_title{
                right: 0;
                top: 15%;
            }
            .det1, .det2, .det3{
                margin: 10px 0;
            }
            .main_ticket_content{
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        }
                .loading-spinner {
            border: 4px solid rgba(0, 0, 0, 0.3);
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -25px;
            margin-left: -25px;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
      
</head>
<body>
    <br>
    <div class="ticket_body" id="myDiv">   
        <?php 
if ($onlineEvent) {

    ?>
    
    <?php
}
         ?>
            <?php 
if ($venueEvent) {

    ?>
    <h1 class="ticket_title">
        <?php echo $venue['v_name'] ?>
         &nbsp; <?php echo $venue['v_country']." ". $venue['v_prov']." ". $venue['v_city'] ." ".
    $venue['v_add1'] ." ". $venue['v_add2']; ?>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $venue['s_date'] ?> - <?php echo $venue['e_date'] ?></p>        
        </h1>
    <?php
}
         ?>
    <div class="loading-spinner"></div>
         
        <div class="main_ticket">
            <div class="main_ticket_content">
                <div class="tickeck_details det1">
                    <div class="">
                        <div class="banner">
                            <img src="<?php echo $row['e_banner'] ?>" alt="">
                        </div>
                        <div>
                            <p class="ticket_subTitle"> <?php echo $row['e_name'] ?> </p> 
                        </div>
                    </div>
                </div>
                <div class="tickeck_details det2" style="display: flex; align-items: center;">
                    <div>
                        <p>Ticket_Number: <span class="res"><?php echo $event['t_number'] ?></span></p>
                        <p>Name: <span class="res"><?php echo $event['name'] ?></span></p>
                        <p>Email: <span class="res"><?php echo $event['email'] ?></span></p>
                        <p>Status: <span class="res"><?php echo $event['status'] ?></span></p>
                        <p>Seats: <span class="res"><?php echo $event['p_place'] ?></span></p>
                        <p>price: <span class="res"><?php echo $event['p_price'] ?>$</span></p>
                    </div>
                   
                </div>
                <div class="tickeck_details det3">
                    <div class="ticket_code">
                        <br><br>
                         
                        <div class="code">
                            <?php echo "<img src='https://chart.googleapis.com/chart?chs=350x350&cht=qr&chl=$t_num&choe=UTF-8'>" ?>
                            <p style="font-size: 10px;">This Qr code is one time valid</p>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="bought">Purchased on: <?php echo $event['t_date'] ?> &nbsp;&nbsp;&nbsp;&nbsp;
                <i>organizer: <a href="mailto:<?php echo $row['e_org'] ?>" target="__blank"><?php echo $row['e_org'] ?></a>, <?php echo $row['e_phone'] ?></i></div>         </div>
         <!-- <button onclick="convertToImage()">Convert to Image</button> -->
<script>
      function convertToImage(name) {
            var divElement = document.getElementById("myDiv");
            var message = document.getElementById("message");

            // Use html2canvas library to capture the div content as an image
            html2canvas(divElement).then(function(canvas) {
                // Convert the canvas to a Blob object
                canvas.toBlob(function(blob) {
                    // Create a FormData object
                    var formData = new FormData();

                    formData.append("file", blob, name);

                    // Send the image file to the server using XMLHttpRequest
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "upload.php", true);
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            // Upload complete
                            // alert("Image uploaded successfully!");
                            message.style.display="none";
                        }
                        // else {
                        //     alert("failed to upload image")
                        // }
                    };
                    xhr.send(formData);
                }, "image/png");
            }).catch(function(error) {
                // Handle the error if image capture fails
                alert("Error capturing image: ", error);
            });
        }
       
             
        function ref() {
          location.reload();
        }
            
        
    </script>
<?php
if ($_SESSION['sent']=='sent') {
     echo "<br><span class='alert alert-success'> Your ticket has  been sent to, ".$event['email']."</br></span>";
}
else{
     echo "<br><span class='alert alert-success' id='message'> Refresh this page if you didn't <br>receive ticket on, ".$event['email']."</span>";

}
while ($_SESSION['sent']=='not') {
  
   echo " <script>setTimeout(convertToImage('ticket$t_num.png'), 1000);</script>";

       $image = "ticket/ticket$t_num.png";
$mail->addAttachment($image);
$mail->SMTPOptions = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
    ],
];

// Send the email
if ($mail->send()) {
    $_SESSION['sent']="sent";

  echo "<br><span class='alert alert-success'> Thank u for purchasing Ticket, ticket sent to ".$event['email']." </span>";
    echo " <script>setTimeout(ref(), 2000);</script>";
  
} else {
    echo "<span class='alert alert-danger'Error sending email: " . $mail->ErrorInfo."</span>";
} 
}?>
</body>
</html>