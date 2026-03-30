<?php
include('../connection.php');

  $categoryname=mysqli_real_escape_string($conn,$_POST['categoryname']);
  $newstitle=mysqli_real_escape_string($conn,$_POST['newstitle']);
  $newsdescription=mysqli_real_escape_string($conn,$_POST['newsdescription']);
  $newspic=$_FILES['newspic']['name'];

 foreach($newspic as $image){
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
                move_uploaded_file($_FILES['newspic']['tmp_name'][$key],'../img/'.$pic3);
                }
            }
        
        if($msg=="right"){
            $pix=serialize($images);
                $sql="INSERT INTO `news`(`categoryname`,`newstitle`,`newsdescription`,`newspic`) VALUES ('$categoryname','$newstitle','$newsdescription','$pix')";
                $run=mysqli_query($conn,$sql);
                if($run){
                    echo 1;
                }else{
                   echo 2;
                }
            }
        
        ?>