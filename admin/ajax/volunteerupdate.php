<?php
include('../connection.php');
// echo "hello";
// die();
$pid=mysqli_real_escape_string($conn,$_POST['id']);
$usql="SELECT * FROM `volunteer` WHERE `volunteer_id`='$pid'";
$urun=mysqli_query($conn,$usql);
$ufet=mysqli_fetch_assoc($urun);

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
    $exe=strtolower(pathinfo($volunteerpic,PATHINFO_EXTENSION));

    if(!empty($volunteerpic)){
        $exe=strtolower(pathinfo($volunteerpic,PATHINFO_EXTENSION));
        $arr=array("jpg","jpeg","png");
    if(in_array($exe,$arr)){
        $filename=date("h-i-s").rand(1,10000).".".$exe;
        if(file_exists("../img/".$ufet['volunteerpic'])){
            unlink("../img/".$ufet['volunteerpic']);
         }
        $sql="UPDATE `volunteer` SET `volunteerfname`='$volunteerfname',`volunteerlname`='$volunteerlname',`volunteeremail`='$volunteeremail',`volunteerdob`='$volunteerdob',`volunteergender`='$volunteergender',`volunteerphone`='$volunteerphone',`volunteercity`='$volunteercity',`volunteeroccassion`='$volunteeroccassion',`volunteerexperience`='$volunteerexperience',`volunteerachievements`='$volunteerachievements',`volunteerskills`='$volunteerskills',`volunteerpassword`='$volunteerpassword',`volunteerconfirmpassword`='$volunteerconfirmpassword',`volunteeraddress`='$volunteeraddress',`volunteerpic`='$filename' WHERE `volunteer_id`='$pid'";
        $run=mysqli_query($conn,$sql);
        if($run){
            move_uploaded_file($_FILES['volunteerpic']['tmp_name'],"./img/".$filename);
         echo 1;
        }else{
           echo 2;
        }
    }else{
       echo 3;
    }
   }
   else{
    $ofilename=$ufet['volunteerpic'];
       $osql="UPDATE `volunteer` SET  `volunteerfname`='$volunteerfname',`volunteerlname`='$volunteerlname',`volunteeremail`='$volunteeremail',`volunteerdob`='$volunteerdob',`volunteergender`='$volunteergender',`volunteerphone`='$volunteerphone',`volunteercity`='$volunteercity',`volunteeroccassion`='$volunteeroccassion',`volunteerexperience`='$volunteerexperience',`volunteerachievements`='$volunteerachievements',`volunteerskills`='$volunteerskills',`volunteerpassword`='$volunteerpassword',`volunteerconfirmpassword`='$volunteerconfirmpassword',`volunteeraddress`='$volunteeraddress',`volunteerpic`='$ofilename' WHERE `volunteer_id`='$pid'";

    $orun=mysqli_query($conn,$osql);
    if($orun){
        echo 4;
    }else{
        echo 5;
    }
   }


?>