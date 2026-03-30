<?php
include('./include/header.php');
include('./include/sidebar.php');
include('./connection.php');
$id=$_GET['upid'];
$tsql="SELECT * FROM `city` WHERE `city_id`='$id'";
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
                      <h4>ADD City</h4>
                    </div>
                    <div class="card-body">
                    <div class="">
                           
                           <input type="hidden" class="form-control"   value="<?php echo $tfet['city_id'] ?>" name="id">
                       </div>
                      <div class="form-group">
                        <label>Name*</label>
                        <input type="text" class="form-control" required="" name="cityname" value="<?php echo $tfet['cityname']?>" placeholder="Enter Name">
                      </div>
                      <div class="form-group ">
                        <label>Description*</label>
                        <textarea type="text" class="form-control" required="" value="" name="citydescription"><?php echo $tfet['citydescription']?></textarea>
                      </div>
                    <div class="card-footer text-right">
                    <input type="submit" name="sub" id="btn_update" value="update" >
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
              url:"./ajax/cityupdate.php",
              method:"POST",
              contentType:false,
              processData:false,
              data:form,
              success:function(res){
                if(res==1){
                  
                  alert("data updated");
                  window.location.replace("./cityview.php");
                }else{
                 
                  alert("data not updated");
                  window.location.replace("./cityview.php");
                }
              }
            });
          });
        });
      </script>