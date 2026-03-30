<?php
include('../connection.php');

  $categoryname=mysqli_real_escape_string($conn,$_POST['categoryname']);
  $categorydescription=mysqli_real_escape_string($conn,$_POST['categorydescription']);

  if(empty($categoryname) || empty($categorydescription)){
    $msg="please fill all fields";
    }else{
        $sql="INSERT INTO `category`(`categoryname`,`categorydescription`) VALUES ('$categoryname','$categorydescription')";
        $run=mysqli_query($conn,$sql);
        if($run){
            echo 1;
        }else{
           echo 2;
        }
    }
   

?>