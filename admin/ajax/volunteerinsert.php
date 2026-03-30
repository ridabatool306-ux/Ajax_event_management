<?php
include('../connection.php');
// echo "hello";
// die();
  $volunteerfname=mysqli_real_escape_string($conn,$_POST['volunteerfname']);
  $volunteerlname=mysqli_real_escape_string($conn,$_POST['volunteerlname']);
  $volunteeremail=mysqli_real_escape_string($conn,$_POST['volunteeremail']);
  $volunteerdob=mysqli_real_escape_string($conn,$_POST['volunteerdob']);
  $volunteergender=mysqli_real_escape_string($conn,$_POST['volunteergender']);
  $volunteerphone=mysqli_real_escape_string($conn,$_POST['volunteerphone']);
  $volunteercity=mysqli_real_escape_string($conn,$_POST['volunteercity']);
  $volunteeroccassion=mysqli_real_escape_string($conn,$_POST['volunteeroccassion']);
  $volunteerexperience=mysqli_real_escape_string($conn,$_POST['volunteerexperience']);
  $volunteerachievements=mysqli_real_escape_string($conn,$_POST['volunteerachievements']);
  $volunteerskills=mysqli_real_escape_string($conn,$_POST['volunteerskills']);
  $volunteerpassword=mysqli_real_escape_string($conn,$_POST['volunteerpassword']);
  $volunteerconfirmpassword=mysqli_real_escape_string($conn,$_POST['volunteerconfirmpassword']);
  $volunteeraddress=mysqli_real_escape_string($conn,$_POST['volunteeraddress']);
  $volunteerpic=$_FILES['volunteerpic']['name'];
  $status="confirm";
  $role="volunteer";

  if(empty($volunteerfname) || empty($volunteerlname) || empty($volunteeremail) || empty($volunteerdob) || empty($volunteergender) || empty($volunteerphone) || empty($volunteercity) || empty($volunteeroccassion) || empty($volunteerexperience) || empty($volunteerachievements)|| empty($volunteerskills) || empty($volunteerpassword) || empty($volunteerconfirmpassword) || empty($volunteeraddress) || empty($volunteerpic)){
    $msg="please fill all fields";
    }else{
       $exe=strtolower(pathinfo($volunteerpic,PATHINFO_EXTENSION));
    $arr=array("jpg","jpeg","png");
    if(in_array($exe,$arr)){
        $picname=rand(1000,100000);
        $pic=$picname.'.'.$exe;
        move_uploaded_file($_FILES['volunteerpic']['tmp_name'],'../img/'.$pic);
        $sql="INSERT INTO `volunteer`(`volunteerfname`,`volunteerlname`,`volunteeremail`,`volunteerdob`,`volunteergender`,`volunteerphone`,`volunteercity`,`volunteeroccassion`,`volunteerexperience`,`volunteerachievements`,`volunteerskills`,`volunteerpassword`,`volunteerconfirmpassword`,`volunteeraddress`,`volunteerpic`,`status` ) VALUES ('$volunteerfname','$volunteerlname','$volunteeremail','$volunteerdob','$volunteergender','$volunteerphone','$volunteercity','$volunteeroccassion','$volunteerexperience','$volunteerachievements','$volunteerskills','$volunteerpassword','$volunteerconfirmpassword','$volunteeraddress','$pic','$status' )";
        $run=mysqli_query($conn,$sql);
        if($run){
          $vsql="INSERT INTO `login_table`(`firstname`,`lastname`,`email`,`password`,`confirmpassword`,`role`) VALUES ('$volunteerfname','$volunteerlname','$volunteeremail','$volunteerpassword','$volunteerconfirmpassword','$role' )";
          $vrun=mysqli_query($conn,$vsql);
          if($vrun){
            echo 1;
          }else{
            echo 2;
          }
        }else{
            echo 2;
        }
    }else{
        echo 3;
    }
   }

?>