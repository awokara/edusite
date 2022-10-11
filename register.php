<?php
if(isset($_POST['btnSave'])){
  include 'sea-process.php';
}
?>


<?php 
include 'head.php';
include 'header.php';
?>
<body>
    <div class="container text-center mt-5 pb-5">
        <h1>REGISTER HERE</h1><hr>
    </div>
      <section class="container">
          <div class="row mt-4">
            <div class="col-md-7">
              <div style="height:150px"></div>
              <img src="./img/reg.jpg" class="img-fluid" alt="" class="mt-5 pt-3"  width="550px" height="400px">
            </div>

            <div class="col-md-5 my-2 bg-navy justify-content-center"> 
              <div class=""> 
              <div class="ml-5">
                <h1 class="mt-3 text-warn">Create Account</h1>
                <p class="text-white">Fill this form below to create an account with us.</p>
              </div>

              <form action="register.php" method="post" class="">
                <div class="col-md-6 ">
                  <input type="text" name="fname" class="form-control" style="width: 400px; height: 60px;" id="fname" placeholder="Enter Fullname">
                </div>
                <div class="col-md-6  pb-3">
                  <label for="validationDefault04"></label>
                  <input type="date" id="birthday"  class="form-control"  style="width: 400px; height: 60px;" name="birthday">
                </div>
                <div class="col-md-6  pb-3">
                <input type="text" name="uname" class="form-control"  style="width: 400px; height: 60px;"  id="Username" placeholder="Username">
              </div>
              <div class="col-md-6  pb-3">
                <input type="email" name="email" class="form-control"  style="width: 400px; height: 60px;" id="email" placeholder="Email Address">
              </div>
              <div class="col-md-6  pb-3">
                <input type="text" name="pass" class="form-control"  style="width: 400px; height: 60px;" id="Password" placeholder="Password">
              </div>
              <div class="col-md-6  pb-3">
                <input type="text" name="cpass" class="form-control"  style="width: 400px; height: 60px;" id="CPassword" placeholder="Confirm Password">
              </div>
              <!-- <button type="submit" name="btnSave">Submit</button> -->
              <div class="col-sm-12 col-md-6  w-100">
               <button type="submit" name="btnSave"><a href="#" class="btn text-black pt-3 bg-warn" style="width: 400px; height: 60px;">Sign Up</a></button>
              </div>
            </form>
            <div style="height: 50px;">
  
            </div>
            </div>
            </div>   
          </div>
        </section> 

        <section>
          <div style="height:115px;"></div>
        </section>
      

<?php 
include 'footer.php';
?>
</body>
</html>