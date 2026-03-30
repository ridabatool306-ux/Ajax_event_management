<?php
include('../connection.php');
$id=$_POST['delete'];
$sql="DELETE FROM `role` WHERE `role_id`='$id'"; 
$run=mysqli_query($conn,$sql);
if($run){
    echo 1;
}else{
    echo 2;
}
?>