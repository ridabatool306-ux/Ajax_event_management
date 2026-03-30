<?php
include('../connection.php');
// echo "hello";
// die();

$rolename=mysqli_real_escape_string($conn,$_POST['rolename']);
$roleaccess=mysqli_real_escape_string($conn,$_POST['roleaccess']);
$roledate=date('Y-m-d');

if($roleaccess=="Custom"){
    $roles=$_POST['role'];   
    $roleper=serialize($roles);
}else{
    $roleper=serialize([]);
}
$sql="SELECT * FROM `role` WHERE `rolename`='$rolename'";
$run=mysqli_query($conn,$sql);
// if(mysqli_num_rows($run)>0){
//    echo 3;
// }else{
    $sql="INSERT INTO `role`(`rolename`,`roleaccess`,`roleper`,`roledate`) VALUES ('$rolename','$roleaccess','$roleper','$roledate')";
   
    $run=mysqli_query($conn,$sql);
    if($run){
       echo 1;
    }else{
        echo 2;
    }
// }

?>