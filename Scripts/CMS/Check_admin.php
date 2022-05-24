<?php
session_start(); //start new session or renew the existing

Entry_admin(); //start function check value

function Entry_admin() {
    $login = $_POST['Login']; //get login
    $password = $_POST['Pass']; //get password

    if(empty($login) || empty($password)) { //if value empty
        $_SESSION["msg"] = "One of the fields contains nothing";
        header("Location: ../../Web/Entrance/Index.php");
    } else {        
        require_once '../../DataBase/Admin_part/Write.php'; //call file DB
        if (Check_admin($login, $password)) { //if true
            $_SESSION["authorized"] = true;
            header("Location: ../../Web/Index/Index.php");
        } else { 
            $_SESSION["msg"] = "Wrong password or login";
            header("Location: ../../Web/Entrance/Index.php");
        }
    }
}

function GetIp() { //function test
  $keys = [
    'HTTP_CLIENT_IP',
    'HTTP_X_FORWARDED_FOR',
    'REMOTE_ADDR'
  ];
  foreach ($keys as $key) {
    if (!empty($_SERVER[$key])) {
      $ip = trim(end(explode(',', $_SERVER[$key])));
      if (filter_var($ip, FILTER_VALIDATE_IP)) {
        return $ip;
      }
    }
  }
}
?>