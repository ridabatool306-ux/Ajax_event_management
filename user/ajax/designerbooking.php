<?php
include('../connection.php');

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
  $workername=mysqli_real_escape_string($conn,$_POST['workername']);
  $workeremail=mysqli_real_escape_string($conn,$_POST['workeremail']);
  $workercontact=mysqli_real_escape_string($conn,$_POST['workercontact']);
  $msg2= "";

  if(empty($clientname) || empty($bookingemail) || empty($bookingcontact) || empty($occassiontitle) || empty($occassiondate) || empty($occassiontime)|| empty($numberofseats) || empty($bookingdescription)){
    $msg="please fill all fields";
    }else{
        $sql="INSERT INTO `specificbooking`(`spcategoryname`,`spclientname`,`spbookingemail`,`spbookingcontact`,`spoccassiontitle`,`spoccassiondate`,`spoccassiontime`,`spnumberofseats`,`spvenuename`,`spbookingdescription`,`workername`,`workeremail`,`workercontact`) VALUES ('$categoryname','$clientname','$bookingemail','$bookingcontact','$occassiontitle','$occassiondate','$occassiontime','$numberofseats','$venuename','$bookingdescription','$workername','$workeremail','$workercontact')";
        $run=mysqli_query($conn,$sql);
        if($run){
            echo 1;
        }
        if($msg2==1){
          $mail=new PHPMailer(true);
      
          $mail->isSMTP();
          $mail->Host='smtp.gmail.com';
          $mail->SMTPAuth=true;
          $mail->Username='ridabatool306@gmail.com';
          $mail->Password='hxzzrjucljdiccnh';
          $mail->SMTPSecure='ssl';
          $mail->Port=465;
      
          $mail->setFrom('ridabatool306@gmail.com');
      
          $mail->addAddress($bookingemail);
      
          $mail->isHTML(true);
          
          $mail->Body=$occassiondate."<br>".$occassiontime."<br>".$venuename;
      
          if($mail->send()){
            echo "<script> alert('Send Successfully')</script>";
          }else{
            echo "<script> alert(' Not Send Successfully')</script>";
          }
      
          // document.location.href='bookinginsert.php';
      }
    }
   
?>