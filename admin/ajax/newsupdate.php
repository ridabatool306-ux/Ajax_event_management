<?php
include('../connection.php');

$pid = mysqli_real_escape_string($conn,$_POST['id']);
$tsql="SELECT * FROM `news` n INNER JOIN `category` c ON n.categoryname=c.category_id WHERE `news_id`='$pid'";
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);

  $categoryname=mysqli_real_escape_string($conn,$_POST['categoryname']);
  $newstitle=mysqli_real_escape_string($conn,$_POST['newstitle']);
  $newsdescription=mysqli_real_escape_string($conn,$_POST['newsdescription']);
  $newspic=$_FILES['newspic']['name'];
  $msg="";

    if(!empty($newspic)){
        foreach($newspic as $pic2){
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
        $pic5=unserialize($tfet['newspic']);
        foreach($pic5 as $key=>$pic6){
            unlink('../img/'.$pic6);
        }
    }
    if($msg=="right"){
        $pic7=serialize($new_pic);
        $sql = "UPDATE `news` SET `categoryname`='$categoryname',`newstitle`='$newstitle',`newsdescription`='$newsdescription',`newspic`='$pic7' WHERE `news_id`='$pid'";
        $run = mysqli_query($conn, $sql);
        if ($run) {
            foreach($new_pic as $key=>$pic8){
                move_uploaded_file($_FILES['newspic']['tmp_name'][$key],'../img/'.$pic8);
            }
            echo 1;
        } else {
            echo 2;

        }
    }else{
        $old_pic=$tfet['newspic'];
        $sql = "UPDATE `news` SET `categoryname`='$categoryname',`newstitle`='$newstitle',`newsdescription`='$newsdescription',`newspic`='$old_pic' WHERE `news_id`='$pid'";
        $run = mysqli_query($conn, $sql);
        if ($run) {
           echo 3;
        } else {
          echo 4;

        }
    }

?>