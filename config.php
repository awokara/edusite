<?php
$conn = new mysqli('localhost','root','','2022batch1');

function cleanInput($data){
       $data = trim($data);
      $data = strip_tags($data);
       $data = htmlspecialchars($data);
        $data = htmlentities($data);
      return $data;
}

function formatDate($date){
  return date("d M, Y", strtotime($date));
}

// $localhost = 'localhost';
// $user = 'root';
// $password = '';
// $dbname = '2022batch1';


// $conn = new mysqli($localhost, $user, $password, $dbname)