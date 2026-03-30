<?php
include('../connection.php');

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
$status="pending";
$role="planner";

  if(empty($plannerfname) || empty($plannerlname) || empty($planneremail) || empty($plannerdob) || empty($plannergender) || empty($plannerphone) || empty($plannercity) || empty($plannerexperience) || empty($plannerachievements)|| empty($plannerskills) || empty($plannerpartners) || empty($plannerpassword) || empty($plannerconfirmpassword) || empty($planneraddress) || empty($plannerpic)){
    $msg="please fill all fields";
    }else{
       $exe=strtolower(pathinfo($plannerpic,PATHINFO_EXTENSION));
    $arr=array("jpg","jpeg","png");
    if(in_array($exe,$arr)){
        $picname=rand(1000,100000);
        $pic=$picname.'.'.$exe;
        move_uploaded_file($_FILES['plannerpic']['tmp_name'],'../../admin/img/'.$pic);
        $sql="INSERT INTO `planner`(`plannerfname`,`plannerlname`,`planneremail`,`plannerdob`,`plannergender`,`plannerphone`,`plannercity`,`plannerexperience`,`plannerachievements`,`plannerskills`,`plannerpartners`,`plannerpassword`,`plannerconfirmpassword`,`planneraddress`,`plannerpic`,`status`,`role` ) VALUES ('$plannerfname','$plannerlname','$planneremail','$plannerdob','$plannergender','$plannerphone','$plannercity','$plannerexperience','$plannerachievements','$plannerskills','$plannerpartners','$plannerpassword','$plannerconfirmpassword','$planneraddress','$pic','$status','$role' )";
        $run=mysqli_query($conn,$sql);
        if($run){
           echo 1;
        }else{
            echo 2;
        }
    }else{
       echo 3;
    }
   }

?>