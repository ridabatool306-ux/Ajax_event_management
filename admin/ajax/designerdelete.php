<?php
include('../connection.php');
$stdid=$_POST['delete'];
$tsql="SELECT `designerpic`,`designer_id` FROM `designer` WHERE `designer_id`='$stdid'"; 
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);
if(file_exists("../img/".$tfet['designerpic'])){
    unlink("../img/".$tfet['designerpic']);
}

$sqldel="DELETE FROM `designer` WHERE `designer_id`='$stdid'";
$rundel=mysqli_query($conn,$sqldel);
if($sqldel){
   echo 1;
}else{
    echo 2;
}


?>