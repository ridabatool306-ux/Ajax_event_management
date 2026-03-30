<?php
include('./include/header.php');
include('./connection.php');
?>
<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
            <div class="login-brand">
              Otika
            </div>
            <div class="card card-primary">
              <div class="row m-0">
                <div class="col-12 col-md-12 col-lg-5 p-0">
                  <div class="card-header text-center">
                    <h4>Reply</h4>
                  </div>
                  <div class="card-body">
                    <form id="form1">
                      
                      <div class="form-group floating-addon">
                        <label>Email</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-envelope"></i>
                            </div>
                          </div>
                          <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Subject</label>
                        <textarea class="form-control" placeholder="Type your Subject" name="subject" data-height="150"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="message" placeholder="Type your message" data-height="150"></textarea>
                      </div>
                      <div class="form-group text-right">
                        <button type="submit" id="btn_sub" name="send" class="btn btn-round btn-lg btn-primary">
                          Send Message
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7 p-0">
                  <div id="map" class="contact-map"></div>
                </div>
              </div>
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
              url:"./ajax/contact.php",
              method:"POST",
              contentType:false,
              processData:false,
              data:form,
              success:function(res){
                // alert(res);
                // die();
                if(res==1){
                  $("#form1").trigger("reset");
                  alert("send successfully");
                }else if(res==2){
                  $("#form1").trigger("reset");
                  alert("not send successfully");
                }
              }
            });
          });
        });
        </script>