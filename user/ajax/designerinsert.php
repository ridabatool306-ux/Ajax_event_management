<?php
include('../connection.php');

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
   $status="pending";
   $role="designer";

  if(empty($designerfname) || empty($designerlname) || empty($designeremail) || empty($designerdob) || empty($designergender) || empty($designerphone) || empty($designercity) || empty($designerexperience) || empty($designerorderdesign)|| empty($designerdescription) || empty($designercompany) || empty($designercolor) || empty($designertools) || empty($designerwrittencontent) || empty($designernumdesign) || empty($designerpassword) || empty($designerconfirmpassword) || empty($designeraddress) || empty($designerpic)){
    $msg="please fill all fields";
    }else{
       $exe=strtolower(pathinfo($designerpic,PATHINFO_EXTENSION));
    $arr=array("jpg","jpeg","png");
    if(in_array($exe,$arr)){
        $picname=rand(1000,100000);
        $pic=$picname.'.'.$exe;
        move_uploaded_file($_FILES['designerpic']['tmp_name'],'../../admin/img/'.$pic);
        $sql="INSERT INTO `designer`(`designerfname`,`designerlname`,`designeremail`,`designerdob`,`designergender`,`designerphone`,`designercity`,`designerexperience`,`designerorderdesign`,`designerdescription`,`designercompany`,`designercolor`,`designertools`,`designerwrittencontent`,`designernumdesign`,`designerpassword`,`designerconfirmpassword`,`designeraddress`,`designerpic`,`status`) VALUES('$designerfname','$designerlname','$designeremail','$designerdob','$designergender','$designerphone','$designercity','$designerexperience','$designerorderdesign','$designerdescription','$designercompany','$designercolor','$designertools','$designerwrittencontent','$designernumdesign','$designerpassword','$designerconfirmpassword','$designeraddress','$pic','$status')";
       
          $drun=mysqli_query($conn,$sql);
          if($drun){
           echo 1;
          }else{
            echo 2;
          }
        }else{
            echo 3;
         }
    }
   

?>