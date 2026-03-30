<?php
include('./include/header.php');
include('./connection.php');
?>
      <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/hero_area/banner_bg.jpg)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Volunteer</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="#">Exhibit /</a>
                  </li>
                  <li>
                     Volunteer
                  </li>
               </ol>
            </div>
         </div><!-- Subpage title end -->
      </div><!-- Page Banner end -->
      <!-- Main Content -->

      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form id="form1" enctype="multipart/form-data">
                  <h3><?php echo @$msg?></h3>
                    <div class="card-header">
                      <h4>ADD VOLUNTEER</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" required="" name="volunteerfname" placeholder="Enter First Name">
                      </div>
                      <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" required="" name="volunteerlname" placeholder="Enter Last Name">
                      </div>
                       <div class="form-group">
                        <label>Email Address*</label>
                        <input type="email" class="form-control" required="" name="volunteeremail" placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <label>DOB*</label>
                        <input type="date" class="form-control" required="" name="volunteerdob" >
                      </div>
                      <div class="form-group">
                      <label >Gender*</label>
                        
                        <input type="radio" name="volunteergender"  value="male"> Male
                       <input type="radio" name="volunteergender" value="female"> Female
                      <input type="radio" name="volunteergender" value="others"> Others
                        
                      </div>
                      <div class="form-group">
                        <label>Phone*</label>
                        <input type="number" class="form-control" required="" name="volunteerphone" placeholder="+ ----">
                      </div>
                      <div class="form-group">
                        <label>City*</label>
                        <input type="text" class="form-control" required="" name="volunteercity" placeholder="Enter City Name">
                      </div>
                      <div class="form-group">
                        <label>Type Of Occassion*</label>
                        <input type="text" class="form-control" required="" name="volunteeroccassion" placeholder="Enter Type Of Occassion">
                      </div>
                      <div class="form-group">
                        <label>Experience</label>
                        <input type="number" class="form-control" required="" name="volunteerexperience" placeholder="Enter Experience">
                      </div>
                      <div class="form-group">
                        <label>Achievements*</label>
                        <input type="text" class="form-control" required="" name="volunteerachievements" placeholder="Enter Achievements">
                      </div>
                      <div class="form-group">
                        <label>Skills*</label>
                        <input type="text" class="form-control" required="" name="volunteerskills" placeholder="Enter Skills">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" required="" name="volunteerpassword" placeholder="Enter Password">
                      </div>
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control" required="" name="volunteerconfirmpassword" placeholder="Enter Password Again">
                      </div>
                      <div class="form-group ">
                        <label>Addresss*</label>
                        <textarea class="form-control" required="" name="volunteeraddress">Enter Address Here....</textarea>
                      </div>
                      <div class="form-group">
                        <label>Image</label><br>
                        <input type="file" class="form-control" name="volunteerpic" placeholder="" />
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" id="btn_sub" type="submit" name="sub">Submit</button>
                    </div>
                  </form>
                </div>
               
              </div>
              
            </div>
          </div>
        </section>
        
      </div>
    <?php 
      include('./include/footer.php');
      ?>
<script>
        $(document).ready(function(){
          $("#btn_sub").on("click",function(e){
            e.preventDefault();
            var form=new FormData(form1);

            $.ajax({
              url:"./ajax/volunteerinsert.php",
              method:"POST",
              contentType:false,
              processData:false,
              data:form,
              success:function(res){
                if(res==1){
                  $("#form1").trigger("reset");
                  alert("data inserted");
                }else if(res==2){
                  $("#form1").trigger("reset");
                  alert("data not inserted");
                }else if(res==3){
                  $("#form1").trigger("reset");
                  alert("img not right");
                }
              }
            });
          });
        });
      </script>
