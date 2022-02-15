<?php
function info_steam() {
    require "../../Scripts/php/steamauth/userInfo.php";
    $steamid = $steamprofile['steamid'];
    $name = $steamprofile['personaname'];
    
    return [$steamid, $name];
}

function info_steam_ajax() {
    require "../Scripts/php/steamauth/steamauth.php";
    require "../Scripts/php/steamauth/userInfo.php";
    
    if (isset($_SESSION['steamid'])) {
        $steamid = $_SESSION['steam_steamid'];
        $name = $_SESSION['steam_personaname'];
    
    return [$steamid, $name];
    }
}

function info_db() {
    $db_host = "localhost";
    $db_name = "casehub";
    $db_login = "root";
    $db_password = "root";
    
    $wallet = 0;
    $link_to_exchange = "none";
    
    return [$db_host, $db_name, $db_login, $db_password, $wallet, $link_to_exchange];
}
?>