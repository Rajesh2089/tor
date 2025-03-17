<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  <title>Document</title>
</head>
<body>  
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
// echo "<pre>";print_r($_POST);exit;
$name       = $_POST['name'];
$mobile     = $_POST['mobile'];
$email      = $_POST['email'];
$feedback   = $_POST['feedback'];

// if($refer != 'no'){
// $ref_name   = $_POST['ref_name'];
// $ref_id     = $_POST['ref_des']; 
// }else{ 
//     $ref_name   = 'no';
//     $ref_id     = 'no';}

// $resume     = $_FILES['file']['name'];
// $file_tmp   = $_FILES['file']['tmp_name'];

// move_uploaded_file($file_tmp,'./career_pdf/'.$resume);
// preparing mail content
$user_subject   = "Registration Confirmation";
$messagecontent = "
<html> 
<head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
<style>
  .txt{
    text-align  : center;
   }
  p{
    color       : black;
 
   }
  footer{
    background-color: darkgray;
    padding        :  1em;
    border-radius  :  10px;
    box-shadow     :  rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
   }
  .logo_mail{
    border-radius  : 10px;
    background-color:#0dcaf05c;
    text-align     :center;
   }
</style>
</head>
<body>
    <div class='logo_mail'>
        
        <img src='./asset/image/logo4.png'style='width: 50%;'>

    </div>
    <br><br>
    <div>
        <p>Hello <b>Rk</b>,<br>
           we've successfully received your submission and we will get back to you within business day.
        </p><br>
        <P  class='txt'>Thank you!</p>
        <br><br><br>
        <p><b>CHEERS,</b></p>
        <p>RK Team</p>
    </div> 
    <br><br>
    <footer class='txt'>
        ©Sholaa Plantation Pvt.ltd . All right reserved by 2024.
    </footer>  
</body>
</html>
";

$admin_subject = "New User Registration";
$mail_admin    = "
<html lang='en'>
<head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
<style>
 .txt,#stl{
    text-align     : center !important;
  }
 th{
    text-align     : left;
  }
 .shadw{
    border-radius  : 10px;
  }
 table,td,th {
    border         : 1px solid black;
    border-collapse: collapse;
    padding        : 20px;
    width          : 100%;
  }
 table,td,th,p{
    color          : black;
  }
 .fot{
    background-color: darkgray;
    padding        : 1em;
    border-radius  : 10px;
    box-shadow     : rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
 }
</style>
</head>
<body>
  <div class='shadw'>
    <div class='shadw' style='background-color:#0dcaf05c; text-align:center;' >
        <img src='../asset/image/logo4.png'style='width: 50%;'>
    
    </div>
    <br>
    <div>
        <p>Hello <b>Rk</b>,<br><br>
           we've received new employee mail.<br><br>Details Below Here..<br><br>
        <br>
        </p>
    </div>  
    <div  style='overflow-x: auto;'>
        <table class='table table-bordered'> 
            <tr>
            <th id='stl' colspan='2'style='background-color: #0dcaf054;'>DETAILS</th>
            </tr>
            <tr>
                <th>".'NAME'."</th>
                <td>".$name."</td>
            </tr> 
            <tr>
                <th>".'EMAIL'."</th>
                <td><a href='mailto:.$email.'>".$email."</a></td>
            </tr> 
            <tr>
                <th>".'MOBILE'."</th>
                <td><a href='tel:.$mobile.'>".$mobile."</a></td>
            </tr> 
            <tr>
                <th>".'YEAR'."</th>
                <td>".$feedback."</td>
            </tr> 
            
        </table> 
    </div>
    <footer class='txt fot'>
        ©Sholaa Plantation Pvt.ltd . All right reserved by 2024.
    </footer>  
  </div>
</body>
</html>";

        //Create an instance; passing `true` enables exceptions
$mail    = new PHPMailer(true);
$mail_ad = new PHPMailer(true);
try {
                                                    //***Server settings***
                            //**Admin email**
 
    $mail_ad->isSMTP();                                              //Send using SMTP
    $mail_ad->Host       = 'smtp.gmail.com';                         //Set the SMTP server to send through
    $mail_ad->SMTPAuth   = true;                                     //Enable SMTP authentication
    $mail_ad->Username   = 'rajshkanan1220@gmail.com';               //SMTP username
    $mail_ad->Password   = 'vyee bybo rrph juat';                    //SMTP password
    $mail_ad->Port       = 465;
    $mail_ad->SMTPSecure = 'ssl';

if(isset($mail_admin)){
    $mail_ad->isHTML(true); 
    $mail_ad->setFrom($email, $name);
    // $mail_ad->addAddress('gayathri.r@tecnovasolutions.com');
    $mail_ad->addAddress('rk0123612@gmail.com');
    $mail_ad->Subject = $admin_subject;
    $mail_ad->Body    = $mail_admin;
    // $mail_ad->addAttachment("./career_pdf/".$resume); 
    $mail_ad->send();
}

                            //**User email**
    $mail->isSMTP();                                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                         //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                     //Enable SMTP authentication
    $mail->Username   = 'rajshkanan1220@gmail.com';               //SMTP username
    $mail->Password   = 'vyee bybo rrph juat';                    //SMTP password
    $mail->Port       = 465;
    $mail->SMTPSecure = 'ssl';

if(isset($messagecontent)){
    $mail->isHTML(true); 
    $mail->clearAddresses();
    // $mail->clearAttachment();
    $mail->addAddress($email);
    $mail->Subject    = $user_subject;
    $mail->Body       = $messagecontent;
   $r= $mail->send();
}

                            //** pop alert**
if(isset($r)!=0 && $r !=0){
    session_start();
    $_SESSION['variable_name'] = "somevalue";
    $_SESSION['variable_used'] = false; // Flag indicating the variable has not been used yet
    header("Location: ./dash1.php");
}
} catch (Exception $e) {
    header("Location: ./dash1.php");
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
// }
?>
</body>
</html>