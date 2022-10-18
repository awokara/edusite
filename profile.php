<?php session_start();
if(!isset($_SESSION['loginUser'])){
    header("Location:login.php");
}
include 'config.php';
include 'head.php';?>

<body>
    <?php include 'header.php';?>

    <section class="mt-5">
        <div class="container-fluid">
            <div class="col-md-6 py-3 px-5 loging"></div>
            <div class="col-md-6 py-3 px-5"></div>
        
            <?php
            $email= $_SESSION['email'];
            $userid= $_SESSION['userid'];
            $sql = $conn->query("SELECT * FROM login WHERE demail='$email' AND userid ='$userid' ");

            if($sql->num_rows>0){
                $row = $sql->fetch_assoc();
            }
            ?>

            <p>
                Fullname: <b><?php echo $row['dfname']?></b> <br>
                Username: <b><?php echo $row['dusername']?></b> <br>
                Email: <b><?php echo $row['demail']?></b> <br>
                Phone: <b><?php echo $row['dphone']?></b> <br>
                Status: <b><?php echo $row['dstatus']?></b> <br>
                Reg Date: <b><?php echo formatDate ($row['ddate'])?></b> <br>
            </p>

            <a href="logout.php">logout</a>
        </div>
    </section>
    <?php include 'footer.php'; if(isset($_SESSION['mgs'])){ unset($_SESSION['mgs']);} ?>
</body>