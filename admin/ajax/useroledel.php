<?php
include('../connection.php');
$sid=$_POST['delete'];
$sql="DELETE FROM `login_table` WHERE `id`='$sid'"; 
$run=mysqli_query($conn,$sql);
if($run){
   echo 1;
}else{
    echo 2;
}
?>