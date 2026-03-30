<?php
include('./include/header.php');
include('./include/sidebar.php');
include('./connection.php');
$id = $_GET['upid'];
$usql="SELECT * FROM `designer` WHERE `designer_id`='$id'";
$urun=mysqli_query($conn,$usql);
$ufet=mysqli_fetch_assoc($urun);

?>
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form id="update_form" >
                  <!-- <h3><?php echo @$msg?></h3> -->
                    <div class="card-header">
                      <h4>UPDATE DESIGNER</h4>
                    </div>
                   
                    <div class="card-body">
                    <div class="form-group">
                        
                        <input type="hidden" class="form-control"  
                        value="<?php echo $ufet['designer_id']?>" name="id" >
                      </div>
                      <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" required="" 
                        value="<?php echo $ufet['designerfname']?>" name="designerfname" placeholder="Enter First Name">
                      </div>
                      <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $ufet['designerlname']?>" name="designerlname" placeholder="Enter Last Name">
                      </div>
                       <div class="form-group">
                        <label>Email Address*</label>
                        <input type="email" class="form-control" required="" value="<?php echo $ufet['designeremail']?>" name="designeremail" placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <label>DOB*</label>
                        <input type="date" class="form-control" required="" value="<?php echo $ufet['designerdob']?>" name="designerdob" >
                      </div>
                      <div class="form-group">
                      <label >Gender*</label>
                      <?php
                            if ($ufet['designergender'] == "male") {
                                $check_male = "checked";
                            } else if($ufet['designergender'] == "female"){
                                $check_female = "checked";
                            }else{
                              $check_others = "checked";
                          }
                            ?>
                        
                        <input type="radio" name="designergender" <?php echo  @$check_male ?>  value="male"> Male
                       <input type="radio" name="designergender" <?php echo  @$check_female ?> value="female"> Female
                      <input type="radio" name="designergender" <?php echo  @$check_others ?>  value="others"> Others
                        
                      </div>
                      <div class="form-group">
                        <label>Phone*</label>
                        <input type="number" class="form-control" required="" value="<?php echo $ufet['designerphone']?>" name="designerphone" placeholder="+ ----">
                      </div>
                      <div class="form-group">
                        <label>City*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $ufet['designercity']?>" name="designercity" placeholder="Enter City Name">
                      </div>
                      <div class="form-group">
                        <label>Experience</label>
                        <input type="number" class="form-control" required="" value="<?php echo $ufet['designerexperience']?>" name="designerexperience" placeholder="Enter Experience">
                      </div>
                      <div class="form-group">
                        <label>Ordered Design off*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $ufet['designerorderdesign']?>" name="designerorderdesign" placeholder="Enter Category of your design">
                      </div>
                      <div class="form-group ">
                        <label>Description <small>(optional)</small>*</label>
                        <textarea class="form-control" value="" name="designerdescription"><?php echo $ufet['designerdescription']?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Company*</label>
                        <input type="text" class="form-control" value="<?php echo $ufet['designercompany']?>" required="" name="designercompany" placeholder="Enter Company Name">
                      </div>
                      <div class="form-group">
                        <label>Prefer Color*</label>
                        <input type="color" class="form-control" value="<?php echo $ufet['designercolor']?>" required="" name="designercolor" >
                      </div>
                      <div class="form-group">
                        <label>Tools Worked On</label>
                        <input type="text" class="form-control" required="" value="<?php echo $ufet['designertools']?>" name="designertools" placeholder="Add Tools">
                      </div>
                      <div class="form-group">
                        <label>Written Content To Be Added*</label>
                        <input type="text" value="<?php echo $ufet['designerwrittencontent']?>" class="form-control" required="" name="designerwrittencontent" placeholder="Enter Written Content">
                      </div>
                      <div class="form-group">
                        <label>Number Of Designs</label>
                        <input type="number" class="form-control" value="<?php echo $ufet['designernumdesign']?>" required="" name="designernumdesign" placeholder="0">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" value="<?php echo $ufet['designerpassword']?>" required="" name="designerpassword" placeholder="Enter Password">
                      </div>
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control" value="<?php echo $ufet['designerconfirmpassword']?>" required="" name="designerconfirmpassword" placeholder="Enter Password Again">
                      </div>
                      <div class="form-group ">
                        <label>Addresss*</label>
                        <textarea class="form-control" value="" required="" name="designeraddress"><?php echo $ufet['designeraddress']?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Image</label><br>
                        <input type="file" class="form-control"  value="<?php echo $ufet['designerpic']?>" name="designerpic" placeholder="" />
                    </div>
                    <div class="card-footer text-right">
                    <input type="submit" id="btn_up" value="update" style="border-radius:5px; border:2px solid black; font-weight:bold; background-color:blue;color:white;padding:5px;">
                    </div>
                  </form>
                </div>
               
              </div>
              
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php 
      include('./include/footer.php');
      ?>
<script src="./Jquery/jquery-3.7.1.min.js"></script>
<script>
        $(document).ready(function(){
            $("#btn_up").on("click",function(e){
             
              e.preventDefault();
              var form=new FormData(update_form);
                $.ajax({
                    url:"./ajax/designerupdate.php",
                    method:"POST",
                    contentType:false,
                    processData:false,
                    data:form,
                    success:function(res){
                        // alert(res);
                        if(res==1){
                           alert ("data has been updated");
                           window.location.replace("./designerview.php");                         
                        }else if(res==2){
                            
                            alert (" not updated");  
                             window.location.replace("./designerview.php");                          
                        }else if(res==3){
                            alert ("img not right");
                             window.location.replace("./designerview.php");   
                        }else if(res==4){
                            alert("data updated with old img");
                             window.location.replace("./designerview.php");   
                        }else if(res==5){
                            alert("data not updated with old img");
                             window.location.replace("./designerview.php");   
                        }
                    }
                })
            })
        })
        </script>