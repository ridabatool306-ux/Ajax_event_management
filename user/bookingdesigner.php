<?php
include('./include/header.php');
include('./connection.php');
?>
 <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/hero_area/banner_bg.jpg)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Booking</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="#">Exhibit /</a>
                  </li>
                  <li>
                     Booking
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
                      <h4>ADD BOOKING</h4>
                    </div>
                    <div class="mb-3">
                    <label for="">Select Category*</label><br>
                    <select name="categoryname" id="" class="form-control">
                    <option value="">Select Category Name</option>
                    <?php
                    $csql="SELECT * FROM `category`";
                    $crun=mysqli_query($conn,$csql);
                    while($cfet=mysqli_fetch_array($crun)){
                        ?>
                        <option value="<?php echo $cfet['category_id'];?>"><?php echo $cfet['categoryname'];?></option>
                        <?php
                    }
                    ?>
                    </select>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Client Name*</label>
                        <input type="text" class="form-control" required="" name="clientname" placeholder="Enter Client Name">
                      </div>  
                       <div class="form-group">
                        <label>Email Address*</label>
                        <input type="email" class="form-control" required="" name="bookingemail" placeholder="Enter Email Address">
                      </div>
                      <div class="form-group">
                        <label>Contact*</label>
                        <input type="number" class="form-control" required="" name="bookingcontact" placeholder="+ ----">
                      </div>
                      <div class="form-group">
                        <label>Occassion Title*</label>
                        <input type="text" class="form-control" required="" name="occassiontitle" placeholder="Enter Occassion title">
                      </div>
                      <div class="form-group">
                        <label>Occassion Start Date*</label>
                        <input type="date" class="form-control" required="" name="occassiondate" >
                      </div>
                      <div class="form-group">
                        <label>Occassion Start Time*</label>
                        <input type="time" class="form-control" required="" name="occassiontime" >
                      </div>
                      <div class="form-group">
                        <label>Number Of Seats*</label>
                        <input type="text" class="form-control" required="" name="numberofseats" placeholder="Enter Number Of Seats">
                      </div>
                      <div class="mb-3">
                    <label for="">Select Venue</label><br>
                    <select name="venuename" id="" class="form-control">
                    <option value="">Select Venue</option>
                    <?php
                    $csql="SELECT * FROM `venue`";
                    $crun=mysqli_query($conn,$csql);
                    while($cfet=mysqli_fetch_array($crun)){
                        ?>
                        <option value="<?php echo $cfet['venue_id'];?>"><?php echo $cfet['venuename'];?></option>
                        <?php
                    }
                    ?>
                    </select>
                    </div>
                      <div class="form-group ">
                        <label>Description*</label>
                        <textarea class="form-control" required="" name="bookingdescription">Enter Description Here....</textarea>
                      </div>
                      <div class="form-group">
                  <label for="">worker Name</label>
                    <?php
                    $id=$_GET['sid'];
                    $csql="SELECT * FROM `designer` WHERE `designer_id`='$id'";
                    $crun=mysqli_query($conn,$csql);
                    $cfet=mysqli_fetch_array($crun);
                        ?>
                   <input type="text" class="form-control" readonly value="<?php echo $cfet['designerfname']?>" name="workername" placeholder="">
                      </div>
                      <div class="form-group">
                  <label for="">worker Email</label>
                    <?php
                    $id=$_GET['sid'];
                    $csql="SELECT * FROM `designer` WHERE `designer_id`='$id'";
                    $crun=mysqli_query($conn,$csql);
                    $cfet=mysqli_fetch_array($crun);
                        ?>
                   <input type="text" class="form-control" readonly value="<?php echo $cfet['designeremail']?>" name="workeremail" placeholder="">
                      </div>
                      <div class="form-group">
                  <label for="">worker Contact</label>
                    <?php
                    $id=$_GET['sid'];
                    $csql="SELECT * FROM `designer` WHERE `designer_id`='$id'";
                    $crun=mysqli_query($conn,$csql);
                    $cfet=mysqli_fetch_array($crun);
                        ?>
                   <input type="text" class="form-control" readonly value="<?php echo $cfet['designerphone']?>" name="workercontact" placeholder="">
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
              url:"./ajax/designerbooking.php",
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
                }
              }
            });
          });
        });
      </script>