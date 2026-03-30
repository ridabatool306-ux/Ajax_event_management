<?php
include('../connection.php');
// echo "hello";
// die();
$pid = mysqli_real_escape_string($conn,$_POST['id']);
$usql="SELECT * FROM `booking` b INNER JOIN `category` c ON b.category_name=c.category_id INNER JOIN `venue` v ON b.venue_name=v.venue_id WHERE `booking_id`='$pid'";
$urun=mysqli_query($conn,$usql);
$ufet=mysqli_fetch_assoc($urun);

  $categoryname=mysqli_real_escape_string($conn,$_POST['categoryname']);
  $clientname=mysqli_real_escape_string($conn,$_POST['clientname']);
  $bookingemail=mysqli_real_escape_string($conn,$_POST['bookingemail']);
  $bookingcontact=mysqli_real_escape_string($conn,$_POST['bookingcontact']);
  $occassiontitle=mysqli_real_escape_string($conn,$_POST['occassiontitle']);
  $occassiondate=mysqli_real_escape_string($conn,$_POST['occassiondate']);
  $occassiontime=mysqli_real_escape_string($conn,$_POST['occassiontime']);
  $numberofseats=mysqli_real_escape_string($conn,$_POST['numberofseats']);
  $venuename=mysqli_real_escape_string($conn,$_POST['venuename']);
  $bookingdescription=mysqli_real_escape_string($conn,$_POST['bookingdescription']);
  $occassiontype=mysqli_real_escape_string($conn,$_POST['occassiontype']);

        $sql="UPDATE `booking` SET `category_name`='$categoryname',`clientname`='$clientname',`bookingemail`='$bookingemail',`bookingcontact`='$bookingcontact',`occassiontitle`='$occassiontitle',`occassiondate`='$occassiondate',`occassiontime`='$occassiontime',`numberofseats`='$numberofseats',`venue_name`='$venuename',`bookingdescription`='$bookingdescription',`occassiontype`='$occassiontype' WHERE `booking_id`='$pid'";
        
        $run=mysqli_query($conn,$sql);
        if($run){
         echo 1;
        }else{
           echo 2;
        }
    
    ?>