<?php


session_start();
include 'head.php';?>
<body>
    <?php 
    include 'header.php';
    include 'config.php';

    $sql = $conn->query("SELECT * FROM login");
    ?>


<html>
    <section>
        <div class="mt-5">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <?php echo isset($_SESSION['mgs'])?$_SESSION['mgs']:""?>                   
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="table">
                                <thead>
                                    <th>#</th>
                                    <th>Fullname</th>
                                    <th>Username</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>----</th>
                                </thead>

                                <tbody>
                                    <?php 
                                    if($sql->num_rows>0){
                                        $num=1;
                                        while($row = $sql->fetch_assoc()){
                                
                                    ?>
                                    <tr>
                                        <td><?php echo $num++; ?></td>
                                        <td><?php echo $row['dfname']; ?></td>
                                        <td><?php echo $row['dusername']; ?></td>
                                        <td><?php echo $row['dphone']; ?></td>
                                        <td><?php echo $row['dstatus']; ?></td>
                                        <td>

                                    <?php if($row['dstatus']=='pending'){?>
                                    <a href="controller.php?id=<?php echo 
                                    $row['userid']; ?>&status=verify"
                                    class="btn btn-primary btn-sm">verify</a>
                                    <?php } else { ?>
                                        <a href="#" class="btn btn-success btn-sm">Verified</a>
                                        <?php } ?>

                                        <?php if($row['dstatus']=='verified'){?>
                                            <a href="controller.php?id=<?php echo
                                            $row['userid']; ?>&status=un-verify" 
                                            class="btn btn-warning btn-small">Unverify</a>
                                        <?php } else{ ?>
                                            <a href="#" class="btn btn-muted btn-small">Un-verify</a>
                                            <?php } ?>

                                        <a href="controller.php?id=<?php echo $row
                                        ['userid']; ?>&status=delete" class="btn btn-danger btn-sm">Delete</a>
                                    </td><br>
                                    </tr>
                                            <?php } }?>
                                </tbody>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
</html>
