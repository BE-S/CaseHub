<?php
    require_once "../../DataBase/Connect.php";
    require_once "../../DataBase/Info.php";

    function Check_admin($login, $password) {
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

    
?>