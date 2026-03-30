<?php
include('../connection.php');
$id=$_POST['delete'];
$tsql="SELECT `newspic` FROM `news` WHERE `news_id`='$id'"; 
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);
$pic=unserialize($tfet['newspic']);
if($pic){
foreach($pic as $key=>$pics){
        unlink("../img/".$pics);
    }
 }

$sqldel="DELETE FROM `news` WHERE `news_id`='$id'";
$rundel=mysqli_query($conn,$sqldel);
if($sqldel){
    echo 1;
}else{
    echo 2;
}


?>