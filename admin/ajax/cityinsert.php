<?php
include('../connection.php');

  $cityname=mysqli_real_escape_string($conn,$_POST['cityname']);
  $citydescription=mysqli_real_escape_string($conn,$_POST['citydescription']);

  if(empty($cityname) || empty($citydescription)){
    $msg="please fill all fields";
    }else{
        $sql="INSERT INTO `city`(`cityname`,`citydescription`) VALUES ('$cityname','$citydescription')";
        $run=mysqli_query($conn,$sql);
        if($run){
           echo 1;
        }else{
            echo 2;
        }
    }
   

?>