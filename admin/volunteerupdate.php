<?php
include('./include/header.php');
include('./include/sidebar.php');
include('./connection.php');
$id=$_GET['upid'];
$tsql="SELECT * FROM `volunteer` WHERE `volunteer_id`='$id'";
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);

?>
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form id="update_form" enctype="multipart/form-data">
                    <div class="card-header">
                      <h4>ADD volunteer</h4>
                    </div>
                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="id" value="<?php echo $tfet['volunteer_id']?>" >
                      </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" required="" name="volunteerfname" value="<?php echo $tfet['volunteerfname']?>" placeholder="Enter First Name">
                      </div>
                      <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" required="" name="volunteerlname" value="<?php echo $tfet['volunteerlname']?>" placeholder="Enter Last Name">
                      </div>
                       <div class="form-group">
                        <label>Email Address*</label>
                        <input type="email" class="form-control" required="" name="volunteeremail" value="<?php echo $tfet['volunteeremail']?>"placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <label>DOB*</label>
                        <input type="date" class="form-control" required="" name="volunteerdob" value="<?php echo $tfet['volunteerdob']?>">
                      </div>
                      <div class="form-group">
                      <label >Gender*</label>
                      <?php
                            if ($tfet['volunteergender'] == "male") {
                                $check_male = "checked";
                            } else if($tfet['volunteergender'] == "female"){
                                $check_female = "checked";
                            }else{
                              $check_others = "checked";
                          }
                            ?>
                        <input type="radio" name="volunteergender" <?php echo  @$check_male ?> value="male"> Male
                       <input type="radio" name="volunteergender" <?php echo  @$check_female ?> value="female"> Female
                      <input type="radio" name="volunteergender" <?php echo  @$check_others ?> value="others"> Others
                        
                      </div>
                      <div class="form-group">
                        <label>Phone*</label>
                        <input type="number" class="form-control" required="" value="<?php echo $tfet['volunteerphone']?>" name="volunteerphone" placeholder="+ ----">
                      </div>
                      <div class="form-group">
                        <label>City*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['volunteercity']?>" name="volunteercity" placeholder="Enter City Name">
                      </div>
                      <div class="form-group">
                        <label>Type Of Occassion*</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['volunteeroccassion']?>" required="" name="volunteeroccassion" placeholder="Enter Type Of Occassion">
                      </div>
                      <div class="form-group">
                        <label>Experience</label>
                        <input type="number" class="form-control" required="" value="<?php echo $tfet['volunteerexperience']?>" name="volunteerexperience" placeholder="Enter Experience">
                      </div>
                      <div class="form-group">
                        <label>Achievements*</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['volunteerachievements']?>"  required=""  name="volunteerachievements" placeholder="Enter Achievements">
                      </div>
                      <div class="form-group">
                        <label>Skills*</label>
                        <input type="text" class="form-control" required="" value="<?php echo $tfet['volunteerskills']?>"  name="volunteerskills" placeholder="Enter Skills">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['volunteerpassword']?>"  required="" name="volunteerpassword" placeholder="Enter Password">
                      </div>
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control" value="<?php echo $tfet['volunteerconfirmpassword']?>"  required="" name="volunteerconfirmpassword" placeholder="Enter Password Again">
                      </div>
                      <div class="form-group ">
                        <label>Addresss*</label>
                        <textarea class="form-control" required="" value="" name="volunteeraddress"><?php echo $tfet['volunteeraddress']?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Image</label><br>
                        <input type="file" class="form-control" value="<?php echo $tfet['volunteerpic']?>" name="volunteerpic" placeholder="" />
                    </div>
                    <div class="card-footer text-right">
                    <input type="submit" name="sub" id="btn_update" value="update" style="border-radius:5px; border:2px solid black; font-weight:bold; background-color:blue;color:white;padding:10px;" >
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


<script>
        $(document).ready(function(){
            $("#btn_update").on("click",function(e){
             
                e.preventDefault();
                var form=new FormData(update_form);
               
                $.ajax({
                    url:"./ajax/volunteerupdate.php",
                    method:"POST",
                    contentType:false,
                    processData:false,
                    data:form,
                    success:function(res){
                        // alert(res);
                        if(res==1){
                           alert ("data has been updated");
                           window.location.replace("./volunteerview.php");                         
                        }else if(res==2){
                            
                            alert (" not updated");  
                             window.location.replace("./volunteerview.php");                          
                        }else if(res==3){
                            alert ("img not right");
                             window.location.replace("./volunteerview.php");   
                        }else if(res==4){
                            alert("data updated with old img");
                             window.location.replace("./volunteerview.php");   
                        }else if(res==5){
                            alert("data not updated with old img");
                             window.location.replace("./volunteerview.php");   
                        }
                    }
                });
            });
        });
        </script>