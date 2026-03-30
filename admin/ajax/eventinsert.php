<?php
include('../connection.php');

  $categoryname=mysqli_real_escape_string($conn,$_POST['categoryname']);
  $eventtitle=mysqli_real_escape_string($conn,$_POST['eventtitle']);
  $eventdate=mysqli_real_escape_string($conn,$_POST['eventdate']);
  $eventdescription=mysqli_real_escape_string($conn,$_POST['eventdescription']);
  $eventpic=$_FILES['eventpic']['name'];

  foreach($eventpic as $image){
    $exe=strtolower(pathinfo($image,PATHINFO_EXTENSION));
    $arr=array("jpg","jpeg","png");
    if(in_array($exe,$arr)){
        $picname=rand(1000,100000);
        $pic2=$picname.".".$exe;
        $images[]=$pic2;
        $msg="right";
    }else{
        $msg="not right";
    }
  }
  if($msg=="right"){
    foreach($images as $key=>$pic3){
        move_uploaded_file($_FILES['eventpic']['tmp_name'][$key],'../img/'.$pic3);
        }
    }

if($msg=="right"){
    $pix=serialize($images);
        $sql="INSERT INTO `event`(`categoryname`,`eventtitle`,`eventdate`,`eventdescription`,`eventpic`) VALUES ('$categoryname','$eventtitle','$eventdate','$eventdescription','$pix')";
        $run=mysqli_query($conn,$sql);
        if($run){
            echo 1;
        }else{
            echo 2;
        }
    }

?>