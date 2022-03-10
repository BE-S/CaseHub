<?php
session_start();

Entry_admin();

function Entry_admin() {    
    $login = $_POST['Login'];
    $password = $_POST['Pass'];

    if(empty($login) || empty($password)) {
        $_SESSION["msg"] = "One of the fields contains nothing";
        header("Location: ../../../Web/Entrance/Index.php");
    } else {        
        require '../../../DataBase/WriteDB.php';
        if (Check_admin($login, $password)) {
            $_SESSION["authorized"] = true;
            header("Location: ../../../Web/Index/Index.php");
        } else { 
            $_SESSION["msg"] = "Wrong password or login";
            header("Location: ../../../Web/Entrance/Index.php");
        }
    }
}

function GetIp() {
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

//if (preg_match("#[^a-zA-Z0-9]#", $password))