<?php session_start();
  if(isset($_SESSION['loginUser'])){
    header("Location: profile.php");
  }
?>
<?php 
include 'head.php';
include 'header.php';
?>
<body>
  <section class="pt-5">
    <div class="container pt-5">
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="./img/reg1.png" alt=""  class="mt-4"  width="550px" height="400px">
            </div>

            <div class="col-md-6 mt-5">
                <h2>Login Your Account</h2>
                <small>Fill the form below with the right information to login your account</small>
                <?php echo isset($_SESSION['mgs']) ? $_SESSION['mgs'] : ''?>

                <form action="login-process.php" method="POST">
                      <input type="text" name='user' class="form-control  my-3 mt-5" style="width: 400px; height: 60px;" id="fname" placeholder="Username or email address" required>
                    
                    
                    <input type="text" name='pass' class="form-control my-3"  style="width: 400px; height: 60px;"  id="Username" placeholder="Password" required>
                  
                    <button type="submit" name="btnlogin" class="btn btn-primary pt-3 bg-navy" style="width: 400px; height: 60px;">Login</button>
                </form>
            </div>
        </div>
    </div>
  </section>

  <section>
    <div style="height:215px;"></div>
  </section>

  <?php 
include 'footer.php'; if(isset($_SESSION['mgs'])){unset($_SESSION['mgs']);}
?>
</body>
</html>