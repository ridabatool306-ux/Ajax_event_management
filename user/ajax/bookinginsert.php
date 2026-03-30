<?php
include('../connection.php');
// echo "hello";
// die();
// $email=$_SESSION['email'];
// if(empty($email)){
//   header('Location:./login.php');
// }

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

  
   $categoryname=mysqli_real_escape_string($conn,$_POST['categoryname']);
   $clientname=mysqli_real_escape_string($conn,$_POST['clientname']);
   $bookingemail=mysqli_real_escape_string($conn,$_POST['bookingemail']);
   $bookingcontact=mysqli_real_escape_string($conn,$_POST['bookingcontact']);
   $occassiontitle=mysqli_real_escape_string($conn,$_POST['occassiontitle']);
   $occassiondate=mysqli_real_escape_string($conn,$_POST['occassiondate']);
   $occassiontime=mysqli_real_escape_string($conn,$_POST['occassiontime']);
   $numberofseats=mysqli_real_escape_string($conn,$_POST['numberofseats']);
   $venuename=mysqli_real_escape_string($conn,$_POST['venuename']);
   $bookingdescription=mysqli_real_escape_string($conn,$_POST['bookingdescription']);
   $occassiontype=mysqli_real_escape_string($conn,$_POST['occassiontype']);
  $role="pending";
  $msg2= "";
  if(empty($clientname) || empty($bookingemail) || empty($bookingcontact) || empty($occassiontitle) || empty($occassiondate) || empty($occassiontime)|| empty($numberofseats) || empty($bookingdescription) || empty($occassiontype)){
    $msg="please fill all fields";
    }else{
        $bsql="INSERT INTO `booking`(`category_name`,`clientname`,`bookingemail`,`bookingcontact`,`occassiontitle`,`occassiondate`,`occassiontime`,`numberofseats`,`venue_name`,`bookingdescription`,`occassiontype`,`role`) VALUES ('$categoryname','$clientname','$bookingemail','$bookingcontact','$occassiontitle','$occassiondate','$occassiontime','$numberofseats','$venuename','$bookingdescription','$occassiontype','$role')";
        $brun=mysqli_query($conn,$bsql);
        if($brun){
            echo 1;
        } 
        if($msg2==1){
          $mail=new PHPMailer(true);
      
          $mail->isSMTP();
          $mail->Host='smtp.gmail.com';
          $mail->SMTPAuth=true;
          $mail->Username='admin@gmail.com';
          $mail->Password='hxzzrjucljdiccnh';
          $mail->SMTPSecure='ssl';
          $mail->Port=465;
      
          $mail->setFrom('admin@gmail.com');
      
          $mail->addAddress($bookingemail);
      
          $mail->isHTML(true);
          
          $mail->Body=$occassiondate."<br>".$occassiontime;
      
          if($mail->send()){
            echo 1;
          }else{
            echo 2;
          }
      
          // document.location.href='bookinginsert.php';
      }
   }
  
?>