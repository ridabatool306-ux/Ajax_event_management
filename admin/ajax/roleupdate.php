<?php
include('../connection.php');
$pid = mysqli_real_escape_string($conn,$_POST['id']);
$tsql="SELECT * FROM `role` WHERE `role_id`='$pid'";
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);

  $rolename=mysqli_real_escape_string($conn,$_POST['rolename']);
  $roleaccess=mysqli_real_escape_string($conn,$_POST['roleaccess']);
  $roledate=date('Y-m-d');

  if($roleaccess=="Custom"){
    $roles=$_POST['role'];   
    $roleper=serialize($roles);
  }else{
    $roleper=serialize([]);
  }
        $sql="UPDATE `role` SET `rolename`='$rolename',`roleaccess`='$roleaccess',`roleper`='$roleper',`roledate`='$roledate' WHERE `role_id`='$pid'";
        
        $run=mysqli_query($conn,$sql);
        if($run){
            echo 1;
        }else{
            echo 2;
        }
    
    ?>