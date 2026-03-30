<?php
include('../connection.php');
$pid= mysqli_real_escape_string($conn,$_POST['id']);
$tsql="SELECT * FROM `city` WHERE `city_id`='$pid'";
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);

    $cityname=mysqli_real_escape_string($conn,$_POST['cityname']);
    $citydescription=mysqli_real_escape_string($conn,$_POST['citydescription']);

        $sql="UPDATE `city` SET `cityname`='$cityname',`citydescription`='$citydescription' WHERE `city_id`='$pid'";
        $run=mysqli_query($conn,$sql);
        if($run){
            echo 1;
        }else{
            echo 2;
        }
    

?>