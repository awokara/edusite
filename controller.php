<?php
include 'config.php';

session_start();
if(isset($_GET['id'])){
    $userid = $_GET['id'];

    if($_GET['status']=='delete'){
        //delete user account
        $sql = $conn->query("DELETE FROM login WHERE userid='$userid' ");
        if($sql){
            $_SESSION['mgs'] = "Account deleted successfully!";
        }
    }else{
        //verify user account
        $sql = $conn->query("UPDATE login SET dstatus='verify' WHERE userid='$userid'");
        if($sql){
            $_SESSION['mgs'] = "Account has been verified!";
        }
    }
    else{
        //un-verify user account
        $sql = $conn->query("UPDATE login SET dstatus='un-verify' WHERE userid='$userid'");
        if($sql){
            $_SESSION['mgs'] = "Account has been un-verified!";
        }
    }

    header("Location: admin.php");
}