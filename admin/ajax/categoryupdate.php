<?php
include('../connection.php');
$category_id = mysqli_real_escape_string($conn, $_POST['id']);
$tsql = "SELECT * FROM `category` WHERE `category_id`='$category_id'";
$trun = mysqli_query($conn, $tsql);
$tfet = mysqli_fetch_assoc($trun);

$categoryname = mysqli_real_escape_string($conn, $_POST['categoryname']);
$categorydescription = mysqli_real_escape_string($conn, $_POST['categorydescription']);

$sql = "UPDATE `category` SET `categoryname`='$categoryname',`categorydescription`='$categorydescription' WHERE `category_id`='$category_id'";

$run = mysqli_query($conn, $sql);

if ($run) {
    echo 1;
} else {
    echo 2;
}
