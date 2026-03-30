<?php
include('../connection.php');
// echo "hello";
// die();
$pid=mysqli_real_escape_string($conn,$_POST['id']);
$usql="SELECT * FROM `planner` WHERE `planner_id`='$pid'";
$urun=mysqli_query($conn,$usql);
$ufet=mysqli_fetch_assoc($urun);

    $plannerfname=mysqli_real_escape_string($conn,$_POST['plannerfname']);
    $plannerlname=mysqli_real_escape_string($conn,$_POST['plannerlname']);
    $planneremail=mysqli_real_escape_string($conn,$_POST['planneremail']);
    $plannerdob=mysqli_real_escape_string($conn,$_POST['plannerdob']);
    $plannergender=mysqli_real_escape_string($conn,$_POST['plannergender']);
    $plannerphone=mysqli_real_escape_string($conn,$_POST['plannerphone']);
    $plannercity=mysqli_real_escape_string($conn,$_POST['plannercity']);
    $plannerexperience=mysqli_real_escape_string($conn,$_POST['plannerexperience']);
    $plannerachievements=mysqli_real_escape_string($conn,$_POST['plannerachievements']);
    $plannerskills=mysqli_real_escape_string($conn,$_POST['plannerskills']);
    $plannerpartners=mysqli_real_escape_string($conn,$_POST['plannerpartners']);
    $plannerpassword=mysqli_real_escape_string($conn,$_POST['plannerpassword']);
    $plannerconfirmpassword=mysqli_real_escape_string($conn,$_POST['plannerconfirmpassword']);
    $planneraddress=mysqli_real_escape_string($conn,$_POST['planneraddress']);
    $plannerpic=$_FILES['plannerpic']['name'];
    $exe=strtolower(pathinfo($plannerpic,PATHINFO_EXTENSION));

    if(!empty($plannerpic)){
        $exe=strtolower(pathinfo($plannerpic,PATHINFO_EXTENSION));
        $arr=array("jpg","jpeg","png");
    if(in_array($exe,$arr)){
        $filename=date("h-i-s").rand(1,10000).".".$exe;
        if(file_exists("./img/".$ufet['plannerpic'])){
            unlink("./img/".$ufet['plannerpic']);
         }
        $sql="UPDATE `planner` SET `plannerfname`='$plannerfname',`plannerlname`='$plannerlname',`planneremail`='$planneremail',`plannerdob`='$plannerdob',`plannergender`='$plannergender',`plannerphone`='$plannerphone',`plannercity`='$plannercity',`plannerexperience`='$plannerexperience',`plannerachievements`='$plannerachievements',`plannerskills`='$plannerskills',`plannerpartners`='$plannerpartners',`plannerpassword`='$plannerpassword',`plannerconfirmpassword`='$plannerconfirmpassword',`planneraddress`='$planneraddress',`plannerpic`='$filename' WHERE `planner_id`='$pid'";
        $run=mysqli_query($conn,$sql);
        if($run){
            move_uploaded_file($_FILES['plannerpic']['tmp_name'],"../img/".$filename);
           echo 1;
        }else{
            echo 2;
        }
    }else{
       echo 3;
    }
   }
   else{
    $ofilename=$ufet['plannerpic'];
       $osql="UPDATE `planner` SET  `plannerfname`='$plannerfname',`plannerlname`='$plannerlname',`planneremail`='$planneremail',`plannerdob`='$plannerdob',`plannergender`='$plannergender',`plannerphone`='$plannerphone',`plannercity`='$plannercity',`plannerexperience`='$plannerexperience',`plannerachievements`='$plannerachievements',`plannerskills`='$plannerskills',`plannerpartners`='$plannerpartners',`plannerpassword`='$plannerpassword',`plannerconfirmpassword`='$plannerconfirmpassword',`planneraddress`='$planneraddress',`plannerpic`='$ofilename' WHERE `planner_id`='$pid'";

    $orun=mysqli_query($conn,$osql);
    if($orun){
      echo 4;
    }else{
       echo 5;
    }
   }


?>