<?php
include('../connection.php');
session_start();

     $email=mysqli_real_escape_string($conn,$_POST['email']);
     $password=mysqli_real_escape_string($conn,$_POST['password']);
    if(empty($email) || empty($password)){
        $msg="Fill all fields";
    }else{
         $sql="SELECT * FROM `login_table` WHERE `email`='$email' AND `password`='$password'";  
        $run=mysqli_query($conn,$sql);
        if($run){
            $fet=mysqli_fetch_assoc($run);

             $_SESSION['email']=$fet['email'];
            echo 1;
         
           
        }
    }


?>