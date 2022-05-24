<?php
/*function info_steam() {
    require_once "../../Scripts/steamauth/userInfo.php";
    
    $steamid = $steamprofile['steamid'];
    $name = $steamprofile['personaname'];


    return [$steamid, $name];
}*/

function info_steam_ajax() {
    require_once "../../Scripts/steamauth/steamauth.php";
    require_once "../../Scripts/steamauth/userInfo.php";

    if (isset($_SESSION['steamid'])) {
        $steamid = $_SESSION['steam_steamid'];
        $name = $_SESSION['steam_personaname'];
    
    return [$steamid, $name];
    }
}

function info_db() {    
    /* Info DB*/
    $db_host = "localhost:3307";
    $db_login = "root";
    $db_password = "root";
    
    /* Info user*/
    $wallet = 0;
    $link_to_exchange = "none";
    
    return [$db_host, $db_login, $db_password, $wallet, $link_to_exchange];
}

function info_table_user() {
    $db_name = "casehub";
    
    $db_table_account = "players";
    $db_table_drop = "inventory_players";
    $db_table_skins = "skins_id";
    
    $wallet = 0;
    $link_to_exchange = "none";
    
    return [$db_name, $db_table_account, $db_table_drop, $db_table_skins];
}

function info_table_admin() {
    $db_name = "casehub_cms";
    
    $db_table_admin = "admins";
    $db_table_admin_logo = "admin_panel_logo";
    $db_table_admin_body = "admin_panel_body";
    $db_table_admin_plugin = "admin_panel_plugin";
    $db_table_admin_case = "case";
    $db_table_page_case = "page_case";
    
    return [$db_name, $db_table_admin, $db_table_admin_logo, $db_table_admin_body, $db_table_admin_plugin, $db_table_page_drop]; 
}
?>