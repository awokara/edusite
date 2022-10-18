<?php 
session_start();
include 'config.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $user = cleanInput($_POST['user']);
    $pass = md5(cleaninput($_POST['pass']));

    $sql = $conn->query("SELECT userid, demail FROM login WHERE (demail='$user' OR dusername='$user') AND dpass='$pass' ");
    if($sql->num_rows>0){
        //login user
        $row = $sql->fetch_assoc();
        $_SESSION['loginUser']=true;
        $_SESSION['email']=$row['demail'];
        $_SESSION['userid']=$row['userid'];

        header("Location: profile.php");
    }else{
        
        $_SESSION['mgs']='
        <div class="alert-danger" role="alert">
        Invalid input submitted!
        </div>';
        echo "yes";
        header("Location: login.php");
    }
}