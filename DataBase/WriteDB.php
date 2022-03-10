<?php    

/*Admins*/
function Check_admin($login, $password) {
    require_once 'Info.php';
    [$db_host, $db_login, $db_password] = info_db();
    [$db_name, $db_table_admin] = info_table_admin();
    
    try {
    $conn = connect($db_host, $db_name, $db_login, $db_password);
        $sql = "SELECT Login, Password FROM $db_table_admin";

        if($result = $conn->query($sql)) {
            foreach($result as $row) {
                if (password_verify($login, $row["Login"]) && password_verify($password, $row["Password"])) {
                    return true;
                    break;
                }
            }
        }   
    } catch(PDOException $e) {
        echo $e;
    }
}

/*Users*/
if (isset($_POST['id'])) {
    echo Write_drop($_POST['id']);
} 

function Registration() {
        try {
            if (!CheckAcc()) { 
                Write_account();
            }
        } catch (PDOException $e) {
            echo $e;
        }
};

function Write_account() {
    [$db_host, $db_login, $db_password, $wallet, $link_to_exchange] = info_db();
    [$db_name, $db_table_account] = info_table_user();
    [$steamid, $name] = info_steam();
    
    try {
    $conn = connect($db_host, $db_name, $db_login, $db_password);
        $query = "INSERT INTO $db_table_account(steamid, name_users, wallet, link_to_exchange) VALUES (:steamid, :name_users, :wallet, :link_to_exchange)";
        $msg = $conn->prepare($query);
        $msg->execute(["steamid" => $steamid, "name_users" => $name, "wallet" => $wallet, "link_to_exchange" => $link_to_exchange]);
    } catch(PDOException $e) {
        echo $e;
    }
};

function Write_drop($id_drop) { 
    require_once "info.php";
    
    [$steamid, $name] = info_steam_ajax();
    [$db_host, $db_login, $db_password] = info_db();
    [$db_name, $db_table_account, $db_table_drop] = info_table_user();
    
    try {
    $conn = connect($db_host, $db_name, $db_login, $db_password);
        $query = "INSERT INTO $db_table_drop(steamid, id_drop) VALUES (:steamid, :id_drop)";
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

function CheckAcc() {
    require_once '../../DataBase/Info.php';
    [$steamid] = info_steam();
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