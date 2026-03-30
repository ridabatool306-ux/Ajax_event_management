<?php
include('./connection.php');
?>

<!DOCTYPE html>
<html lang="en">


<!-- index12:16-->
<head>
   <!-- Basic Page Needs ================================================== -->
   <meta charset="utf-8">

   <!-- Mobile Specific Metas ================================================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

   <!-- Site Title -->
   <title>Exhibz - Conference &amp; Event HTML Template</title>



   <!-- CSS
         ================================================== -->
   <!-- Bootstrap -->
   <link rel="stylesheet" href="css/bootstrap.min.css">

   <!-- FontAwesome -->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!-- Animation -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- magnific -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <!-- carousel -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- isotop -->
   <link rel="stylesheet" href="css/isotop.css">
   <!-- ico fonts -->
   <link rel="stylesheet" href="css/xsIcon.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="css/responsive.css">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>
              <div class="card-body">
                <form id="form1" class="needs-validation" novalidate="">
                <div class="form-group">
                        <label>First Name*</label>
                        <input type="text" class="form-control" required="" name="firstname" placeholder="Enter First Name">
                      </div>
                      <div class="form-group">
                        <label>Last Name*</label>
                        <input type="text" class="form-control" required="" name="lastname" placeholder="Enter Last Name">
                      </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" placeholder="Enter Email"   class="form-control" name="email"  required >
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" required="" name="password" placeholder="Enter Password">
                      </div>
                  <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control" required="" name="confirmpassword" placeholder="Enter Password Again">
                      </div>
                  <div class="form-group"> 
                   <input type="submit" name="submit" id="btn_sub" value="register" class="btn btn-primary">
                  </div>
                </form>
          </div>
        </div>
      </div>
    </section> 
  </div>
 <!-- Javascript Files
            ================================================== -->
      <!-- initialize jQuery Library -->
      <script src="js/jquery.js"></script>

      <script src="js/popper.min.js"></script>
      <!-- Bootstrap jQuery -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Counter -->
      <script src="js/jquery.appear.min.js"></script>
      <!-- Countdown -->
      <script src="js/jquery.jCounter.js"></script>
      <!-- magnific-popup -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- carousel -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Waypoints -->
      <script src="js/wow.min.js"></script>
      <!-- isotop -->
      <script src="js/isotope.pkgd.min.js"></script>

      <!-- Template custom -->
      <script src="js/main.js"></script>


	</div>
	<!-- Body inner end -->
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>

<script>
        $(document).ready(function(){
          $("#btn_sub").on("click",function(e){
            e.preventDefault();
            var form=new FormData(form1);

            $.ajax({
              url:"./ajax/register.php",
              method:"POST",
              contentType:false,
              processData:false,
              data:form,
              success:function(res){
                if(res==1){
                  window.location.replace("./index.php"); 
                  alert("register successfully");
                }else if(res==2){
                  window.location.replace("./index.php"); 
                  alert("register not successfully");
                }
              }
            });
          });
        });
      </script>