<?php
include('../connection.php');

  $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
  $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
  $subject=mysqli_real_escape_string($conn,$_POST['subject']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $message=mysqli_real_escape_string($conn,$_POST['message']);
  

  if(empty($firstname) || empty($lastname) || empty($subject) || empty($email) || empty($message)){
    $msg="please fill all fields";
    }else{
        $sql="INSERT INTO `contact`(`firstname`,`lastname`,`subject`,`email`,`message`) VALUES ('$firstname','$lastname','$subject','$email','$message')";
        $run=mysqli_query($conn,$sql);
        if($run){
            echo 1;
        }else{
            echo 2;
        }
    }
   
   ?>