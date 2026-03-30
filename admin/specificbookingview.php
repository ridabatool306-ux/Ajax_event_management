<?php
include('./include/header.php');
include('./include/sidebar.php');
include('./connection.php');
?>
<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Booking Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <div>
                    <button id="btnshow" style="background-color:red;color:white;border:none;padding:10px;margin-bottom:5px">View</button>
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Category Name</th>
                            <th>Client Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Occassion Title</th>
                            <th>Occassion Date</th>
                            <th>Occassion Time</th>
                            <th>Number Of Seats</th>
                            <th>Venue Name</th>
                            <th>Booking Description</th>
                            <th>Worker Name</th>
                            <th>Worker Email</th>
                            <th>Worker Contact</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody id="sp_data">
                        
                        </tbody>
                      </table>
</div>
                    </div>
                  </div>
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
            $("#btnshow").on("click",function(){
                $.ajax({
                    url:"./ajax/spbookingview.php",
                    method:"GET",
                    success:function(res){
                        $("#sp_data").html(res);
                    }
                });
            });
        });

 //delete
           $(document).ready(function(){
                $(document).on("click", "#btn_del", function(){
                var del=$(this).data("del");
                var del_id=this;

                $.ajax({
                    url:"./ajax/spbookingdelete.php",
                    method:"POST",
                    data: {
                        delete:del
                    },
                    success:function(res){
                        if(res==1){
                            $(del_id).closest("tr").fadeOut("slow");
                            alert("data has been deleted");
                            
                        }else if(res==2){
                            alert("data has not been deleted");
                        }
                    }
                });
            });
            });

      </script>