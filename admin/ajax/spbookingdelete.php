<?php
include('./connection.php');
$id=$_GET['delete'];
$sql="DELETE FROM `specificbooking` WHERE `spbooking_id`='$id'"; 
$run=mysqli_query($conn,$sql);
if($run){
    echo 1;
}else{
    echo 2;
}
?>