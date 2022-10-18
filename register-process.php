<?php
include 'config.php';
// 
if ($_SERVER['REQUEST_METHOD']=="POST"){

    // echo "Submited";
    // print_r($_POST);}

    //Validation
    $isError = false;
    if(empty($_POST['fname'])){
        $fError = "Fullname is required!";
        $isError = true;
    }
    elseif (is_numeric($_POST['fname'])){
        $fError = "Fullname cannot be number!";
        $isError = true;
    }
    else{
        $fname = cleanInput($_POST['fname']);
    }



//validate for phone number
    if(empty($_POST['pnum'])){
        $pError = "phone number is required";
        $isError = true;
    }elseif (!is_numeric($_POST['pnum'])){
        $pError = "Number required!";
        $isError = true;
    }
    else{
        $pnum = cleanInput($_POST['pnum']);
    }

    //validate username
    if(empty($_POST['username'])){
        $uError = "username is required";
        $isError = true;
    }
    else{
        $username = cleanInput(ucfirst(strtolower(str_replace(' ','',$_POST['username']))));
        //check username in the db
        $sql = $conn->query("SELECT dusername FROM login WHERE dusername='$username'");
        if($sql->num_rows>0){
            $uError = "username already taken";
            $isError = true;
        }
    }


    //validate email
    if(empty($_POST['email'])){
        $eError = "Email is required";
        $isError = true;
    }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $eError = "Bro, put valid email now!";
        $iError = true;
    }else{
        $email = cleanInput($_POST['email']);
        //check the username in the db
        $sql = $conn->query("SELECT demail FROM login WHERE demail='$email'");
        if($sql->num_rows>0){
            $eError = "email address already taken";
            $isError = true;
        }
    }
    


    //validate password
    if(empty($_POST['pass'])){
        $passError = "password is required";
    }elseif (strlen($_POST['pass']) <3){
        $passError = "Bro, your password is too short!";
    }elseif (strlen($_POST['pass']) > 10){
        $passError = "Password is too long!";
    }else{
        $pass = cleanInput($_POST['pass']);
    }

    //Validate confirm password
    if(empty($_POST['cpass'])){
        $cpassError = "confirm password is required!";
        $isError = true;
    }
    else{
        $cpass = cleanInput($_POST['cpass']);
        if(empty($passError) && ($pass != $cpass)){
            $cpassError = "Password doesn't match!";
            $isError = true;
        }
    }


    if($isError==false){
        //run sql
        $pass = md5($pass);
        $userid = md5(date("Ymdhis").rand(203991, 483678));

        $sql = $conn->query("INSERT INTO login SET userid='$userid', dfname='$fname', dusername='$username', dphone='$pnum', demail='$email', dpass='$pass'  ");

        if($sql){
            echo "<h2>Registration Successfull</h2>";
        }else{
            echo "<h2>Fail<h2>";
        }
    }
}

    // function cleanInput($data){
    //     $data = trim($data);
    //     $data = strip_tags($data);
    //     $data = htmlspecialchars($data);
    //     $data = htmlentities($data);
    //     return $data;
    // }
    
