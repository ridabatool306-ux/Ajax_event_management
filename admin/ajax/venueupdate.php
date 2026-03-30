<?php
include('../connection.php');
$pid = mysqli_real_escape_string($conn,$_POST['id']);
$tsql="SELECT * FROM `venue` WHERE `venue_id`='$pid'";
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);

    $venuename=mysqli_real_escape_string($conn,$_POST['venuename']);
    $venuedescription=mysqli_real_escape_string($conn,$_POST['venuedescription']);

        $sql="UPDATE `venue` SET `venuename`='$venuename',`venuedescription`='$venuedescription' WHERE `venue_id`='$pid'";
        $run=mysqli_query($conn,$sql);
        if($run){
           echo 1;
        }else{
           echo 2;
        }
    

?>