<?php
include('../connection.php');

$sid = mysqli_real_escape_string($conn, $_POST['id']);



$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
$role = mysqli_real_escape_string($conn, $_POST['role']);

$sql = "UPDATE `login_table` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`confirmpassword`='$confirmpassword',`role`='$role' WHERE `id`='$sid'";


$run = mysqli_query($conn, $sql);


if ($run) {
    echo 1;
} else {
    echo 2;
}
