<?php
include('../connection.php');
$pid = mysqli_real_escape_string($conn,$_POST['id']);
$tsql="SELECT * FROM `event` e INNER JOIN `category` c ON e.categoryname=c.category_id WHERE `event_id`='$pid'";
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);

      $categoryname=mysqli_real_escape_string($conn,$_POST['categoryname']);
      $eventtitle=mysqli_real_escape_string($conn,$_POST['eventtitle']);
      $eventdate=mysqli_real_escape_string($conn,$_POST['eventdate']);
      $eventdescription=mysqli_real_escape_string($conn,$_POST['eventdescription']);
      $eventpic=$_FILES['eventpic']['name'];
      $msg="";
      
      if(!empty($eventpic)){
        foreach($eventpic as $pic2){
            $exe=strtolower(pathinfo($pic2,PATHINFO_EXTENSION));
            $arr=array('png','jpg','jpeg');
            if(in_array($exe,$arr)){
                $pic3=rand(1,99999);
                $pic4=$pic3.'.'.$exe;
                $new_pic[]=$pic4;
                $msg="right";
            }else{
                $msg="not right";
                break;
            }
        }
    }
    if($msg=="right"){
        $pic5=unserialize($tfet['eventpic']);
        foreach($pic5 as $key=>$pic6){
            unlink('../img/'.$pic6);
        }
    }
    if($msg=="right"){
        $pic7=serialize($new_pic);
        $sql = "UPDATE `event` SET `categoryname`='$categoryname',`eventtitle`='$eventtitle',`eventdate`='$eventdate',`eventdescription`='$eventdescription',`eventpic`='$pic7' WHERE `event_id`='$pid'";
        $run = mysqli_query($conn, $sql);
        if ($run) {
            foreach($new_pic as $key=>$pic8){
                move_uploaded_file($_FILES['eventpic']['tmp_name'][$key],'../img/'.$pic8);
            }
            echo 1;
        } else {
            echo 2;

        }
    }else{
        $old_pic=$tfet['eventpic'];
        $sql = "UPDATE `event` SET `categoryname`='$categoryname',`eventtitle`='$eventtitle',`eventdate`='$eventdate',`eventdescription`='$eventdescription',`eventpic`='$old_pic' WHERE `event_id`='$pid'";
        $run = mysqli_query($conn, $sql);
        if ($run) {
            echo 3;
        } else {
            echo 4;

        }
    }

?>