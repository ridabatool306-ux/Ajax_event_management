<?php
include('../connection.php');
session_start();

     $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
     $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
     $email=mysqli_real_escape_string($conn,$_POST['email']);
     $password=mysqli_real_escape_string($conn,$_POST['password']);
     $confirmpassword=mysqli_real_escape_string($conn,$_POST['confirmpassword']);
     $role="client";
    if(empty($email) || empty($password)){
        $msg="Fill all fields";
    }else{
         $sql="INSERT INTO `login_table`(`firstname`,`lastname`,`email`,`password`,`confirmpassword`,`role`) VALUES('$firstname','$lastname','$email','$password','$confirmpassword','$role')";  
        $run=mysqli_query($conn,$sql);
        if($run){
            // $fet=mysqli_fetch_assoc($run);

            //  $_SESSION['email']=$fet['email'];
           echo 1;
           
        }else{
            echo 2;
        }
    }

?>