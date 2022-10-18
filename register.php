<?php
if(isset($_POST['btnSave'])){
  include 'register-process.php';
}
?>


<?php 
include 'head.php';
include 'header.php';
?>

<style>
  #dob{
    gap: 15px;
    height: 30px;
    width: 400px;
  }
  .red{
    color: red;
  }
</style>
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
                
                <div class="col-md-6 pb-3">
                  <input type="text" name="fname"  class="form-control" value='<?php echo isset ($fname)? $fname: ''?>'  placeholder="Enter Fullname" style="width: 400px; height: 40px;">
                  <small class="red"><?php echo isset($fError)? $fError: '' ?></small>
                </div>

                <div class="col-md-6 pb-3">
                  <input type="text" name="pnum"  class="form-control"  value='<?php echo isset ($pnum)? $pnum: ''?>'  placeholder="Phone Number" style="width: 400px; height: 40px;">
                  <small class="red"><?php echo isset($pError)? $pError: '' ?></small>
                </div>

                <!-- <div class="col-md-6  pb-3">
                  <label for="validationDefault04"></label>
                  <input type="date" name="DOB" id="birthday"  class="form-control"  style="width: 400px; height: 40px;" name="birthday">
                </div> -->
                <div class="col-md-6  pb-3">
                <input type="text" name="username" class="form-control" value='<?php echo isset ($username)? $username: ''?>' style="width: 400px; height: 40px;"  id="Username" placeholder="Username">
                <small class="red"><?php echo isset($uError)? $uError: '' ?></small>
              </div>
              <div class="col-md-6  pb-3">
                <input type="email" name="email" class="form-control" value='<?php echo isset ($email)? $email: ''?>' style="width: 400px; height: 40px;" id="email" placeholder="Email Address">
                <small class="red"><?php echo isset($eError)? $eError: '' ?></small>
              </div>

              <div class="col-md-6  pb-3">
                  <p class=" text-white mt-3">Date of Birth:</p>
                  <div class="d-flex" id="dob">
                  <select name="dob-day" id="dob">
                      <option value="">Choose Day</option>
                      <?php for($i=1; $i<=31; $i++){?>

                          <option value="<?php echo $i?>"> <?php echo $i?> </option>
                      <?php }?>
                  </select>
                  <select name="dob-month" id="dob">
                      <option value="">Choose Month</option>
                      <?php for($i=1; $i<=12; $i++){?>

                          <option value="<?php echo $i?>"> <?php echo $i?> </option>
                      <?php }?>
                  </select>
                  <select name="dob-year" id="dob">
                        <option value="">Choose Year</option>
                        <?php for($i=2022; $i>=1960; $i--){?>

                            <option value="<?php echo $i?>"> <?php echo $i?> </option>
                        <?php }?>
                    </select>
                    </div>
                    </div>


              <div class="col-md-6  pb-3">
                <input type="text" name="pass" class="form-control"  style="width: 400px; height: 40px;" id="Password" placeholder="Password">
                <small class="red"><?php echo isset($passError)? $passError: '' ?></small>
              </div>
              <div class="col-md-6  pb-3">
                <input type="text" name="cpass" class="form-control"  style="width: 400px; height: 40px;" id="CPassword" placeholder="Confirm Password">
                <small class="red"><?php echo isset($cpassError)? $cpassError: '' ?></small>
              </div>
              <!-- <button type="submit" name="btnSave">Submit</button> -->
              <div class="col-sm-12 col-md-6  w-100">
                <button type="submit" name="btnSave"  class="btn text-black pt-3 bg-warn" style="width: 400px; height: 60px;">Sign Up</button>
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