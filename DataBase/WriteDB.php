<?php    

if (isset($_POST['id'])) {
    echo Write_drop("inventory_players", $_POST['id']);
} 

function Registration($db_table) { 
        try {
            if (!CheckAcc($db_table)) 
                Write_account($db_table);
        } catch (PDOException $e) {
            echo $e;
        }
};

function Write_account($db_table) {
    [$db_host, $db_name, $db_login, $db_password, $wallet, $link_to_exchange] = info_db();
    [$steamid, $name] = info_steam();
    
    try {
    $conn = connect($db_host, $db_name, $db_login, $db_password);
        $query = "INSERT INTO $db_table(steamid, name_users, wallet, link_to_exchange) VALUES (:steamid, :name_users, :wallet, :link_to_exchange)";
        $msg = $conn->prepare($query);
        $msg->execute(["steamid" => $steamid, "name_users" => $name, "wallet" => $wallet, "link_to_exchange" => $link_to_exchange]);
    } catch(PDOException $e) {
        echo $e;
    }
};

function Write_drop($db_table, $id_drop) { 
    require "info.php";
    
    [$steamid, $name] = info_steam_ajax();
    [$db_host, $db_name, $db_login, $db_password] = info_db();
    
    try {
    $conn = connect($db_host, $db_name, $db_login, $db_password);
        $query = "INSERT INTO $db_table(steamid, id_drop) VALUES (:steamid, :id_drop)";
        $msg = $conn->prepare($query);
        $msg->execute(["steamid" => $steamid, "id_drop" => $id_drop]);
    } catch(PDOException $e) {
        echo $e;
    }
}

/*____________________________________________________________________*/

function connect($db_host, $db_name, $db_login, $db_password) {
    try {    
        $conn = new PDO("mysql:host=$db_host; dbname=$db_name", $db_login, $db_password);
        return $conn;
    } catch (PDOException $e) {
        echo $e;
    }
}

function CheckAcc($db_table) {
    require '../../DataBase/Info.php';
    [$steamid] = info_steam();
    [$db_host, $db_name, $db_login, $db_password] = info_db();
    
    try {
    $conn = connect($db_host, $db_name, $db_login, $db_password);
            $sql = "SELECT steamid FROM $db_table";
             
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