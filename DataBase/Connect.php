<?php

function connect($db_host, $db_name, $db_login, $db_password) {
    try {    
        $conn = new PDO("mysql:host=$db_host; dbname=$db_name", $db_login, $db_password);
        return $conn;
    } catch (PDOException $e) {
        echo $e;
    }
}

function CheckAcc() {
    require_once '../../DataBase/Info.php';
    [$steamid] = info_steam_ajax();
    [$db_host, $db_login, $db_password] = info_db();
    [$db_name, $db_table_account] = info_table_user();
    
    try {
    $conn = connect($db_host, $db_name, $db_login, $db_password);
            $sql = "SELECT steamid FROM $db_table_account";
             
        if($result = $conn->query($sql)) {
            foreach($result as $row) {
                if ($row["steamid"] == $steamid) {
                    return true;
                    break;
                } 
            }
        }
    } catch(PDOException $e) {
        echo $e;
    }
}

?>