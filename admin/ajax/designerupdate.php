<?php
include('../connection.php');
$pid = mysqli_real_escape_string($conn,$_POST['id']);
$tsql="SELECT * FROM `designer` WHERE `designer_id`='$pid'";
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);

      $designerfname=mysqli_real_escape_string($conn,$_POST['designerfname']);
      $designerlname=mysqli_real_escape_string($conn,$_POST['designerlname']);
      $designeremail=mysqli_real_escape_string($conn,$_POST['designeremail']);
      $designerdob=mysqli_real_escape_string($conn,$_POST['designerdob']);
      $designergender=mysqli_real_escape_string($conn,$_POST['designergender']);
      $designerphone=mysqli_real_escape_string($conn,$_POST['designerphone']);
      $designercity=mysqli_real_escape_string($conn,$_POST['designercity']);
      $designerexperience=mysqli_real_escape_string($conn,$_POST['designerexperience']);
      $designerorderdesign=mysqli_real_escape_string($conn,$_POST['designerorderdesign']);
      $designerdescription=mysqli_real_escape_string($conn,$_POST['designerdescription']);
      $designercompany=mysqli_real_escape_string($conn,$_POST['designercompany']);
      $designercolor=mysqli_real_escape_string($conn,$_POST['designercolor']);
      $designertools=mysqli_real_escape_string($conn,$_POST['designertools']);
      $designerwrittencontent=mysqli_real_escape_string($conn,$_POST['designerwrittencontent']);
      $designernumdesign=mysqli_real_escape_string($conn,$_POST['designernumdesign']);
      $designerpassword=mysqli_real_escape_string($conn,$_POST['designerpassword']);
      $designerconfirmpassword=mysqli_real_escape_string($conn,$_POST['designerconfirmpassword']);
      $designeraddress=mysqli_real_escape_string($conn,$_POST['designeraddress']);
      $designerpic=$_FILES['designerpic']['name'];
    
      // if(empty($designerfname) || empty($designerlname) || empty($designeremail) || empty($designerdob) || empty($designergender) || empty($designerphone) || empty($designercity) || empty($designerexperience) || empty($designerorderdesign)|| empty($designerdescription) || empty($designercompany) || empty($designercolor) || empty($designertools) || empty($designerwrittencontent) || empty($designernumdesign) || empty($designerpassword) || empty($designerconfirmpassword) || empty($designeraddress) || empty($designerpic)){
      //   $msg="please fill all fields";
      //   }else{
            if(!empty($designerpic)){
                $exe=strtolower(pathinfo($designerpic,PATHINFO_EXTENSION));
                $arr=array("jpg","jpeg","png");
            if(in_array($exe,$arr)){
                $filename=date("h-i-s").rand(1,10000).".".$exe;
                if(file_exists("../img/".$tfet['designerpic'])){
                    unlink("../img/".$tfet['designerpic']);
                 }
                 $sql="UPDATE `designer` SET `designerfname`='$designerfname',`designerlname`='$designerlname',`designeremail`='$designeremail',`designerdob`='$designerdob',`designergender`='$designergender',`designerphone`='$designerphone',`designercity`='$designercity',`designerexperience`='$designerexperience',`designerorderdesign`='$designerorderdesign',`designerdescription`='$designerdescription',`designercompany`='$designercompany',`designercolor`='$designercolor',`designertools`='$designertools',`designerwrittencontent`='$designerwrittencontent',`designernumdesign`='$designernumdesign',`designerpassword`='$designerpassword',`designerconfirmpassword`='$designerconfirmpassword',`designeraddress`='$designeraddress',`designerpic`='$filename' WHERE `designer_id`='$pid'";
                 $run=mysqli_query($conn,$sql);
                 if($run){
                     move_uploaded_file($_FILES['designerpic']['tmp_name'],"../img/".$filename);
                    echo 1;
                 }else{
                     echo 2;
                 }
             }else{
                 echo 3;
             }
            }
            else{
                $ofilename=$tfet['designerpic'];
                $osql="UPDATE `designer` SET `designerfname`='$designerfname',`designerlname`='$designerlname',`designeremail`='$designeremail',`designerdob`='$designerdob',`designergender`='$designergender',`designerphone`='$designerphone',`designercity`='$designercity',`designerexperience`='$designerexperience',`designerorderdesign`='$designerorderdesign',`designerdescription`='$designerdescription',`designercompany`='$designercompany',`designercolor`='$designercolor',`designertools`='$designertools',`designerwrittencontent`='$designerwrittencontent',`designernumdesign`='$designernumdesign',`designerpassword`='$designerpassword',`designerconfirmpassword`='$designerconfirmpassword',`designeraddress`='$designeraddress',`designerpic`='$ofilename' WHERE `designer_id`='$pid'";
            
                $orun=mysqli_query($conn,$osql);
                if($orun){
                   echo 4;
                }else{
                  echo 5;
                }
               }
            
            // }
            ?>