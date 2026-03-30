<?php
include('../connection.php');
// echo "hello";
// die();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

// if(isset($_POST["send"])){
    $mail=new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='ridabatool306@gmail.com';
    $mail->Password='hxzzrjucljdiccnh';
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('ridabatool306@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject=$_POST["subject"];
    $mail->Body=$_POST["message"];

    $mail->send();
    echo 1;

    // echo
    // "
    // <script> 
    // alert('Send Successfully');
    // document.location.href='contact.php';
    // </script>
    // ";
// }
?>