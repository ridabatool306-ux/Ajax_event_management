<?php
include('../connection.php');

  $venuename=mysqli_real_escape_string($conn,$_POST['venuename']);
  $venuedescription=mysqli_real_escape_string($conn,$_POST['venuedescription']);

  if(empty($venuename) || empty($venuedescription)){
    $msg="please fill all fields";
    }else{
        $sql="INSERT INTO `venue`(`venuename`,`venuedescription`) VALUES ('$venuename','$venuedescription')";
        $run=mysqli_query($conn,$sql);
        if($run){
            echo 1;
        }else{
            echo 2;
        }
    }

?>