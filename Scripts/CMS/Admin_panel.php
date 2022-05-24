<?php
    require "../../DataBase/Admin_part/Get_admin_panel.php";

    session_start();

    function Admin_panel_logo() {
        if ($_SESSION["authorized"]) Get_admin_panel_logo();
    }

    function Admin_panel_body() {
        if ($_SESSION["authorized"]) Get_admin_panel_body();
    }

    if (isset($_POST['exit'])) {
        unset($_SESSION['authorized'], $_POST['exit']);
    }

    

/*_________________________________________________________________________________________________*/
    /*Value*/
    /*require_once "../../DataBase/Info.php";
    require_once "../../DataBase/WriteDB.php";

    [$db_host, $db_login, $db_password] = info_db();
    [$db_name, $db_table_admin, $db_table_admin_logo, $db_table_admin_body, $db_table_admin_plugin ] = info_table_admin();
    $conn = connect($db_host, $db_name, $db_login, $db_password);*/

    /*Function*/
    /*function Get_admin_panel_logo() {
        global $db_host, $db_name, $db_login, $db_password, $db_table_admin_logo;
        global $conn;

        try {
            $sql = "SELECT * FROM $db_table_admin_logo";

            if($result = $conn->query($sql)) {
                foreach ($result as $row) {
                    echo $row["begin_panel_color"];
                    echo $row["end_panel"];
                }
            }
        } catch(PDOException $e) {
           echo $e;
        }
    }

    function Get_admin_panel_body() {
        global $db_host, $db_name, $db_login, $db_password, $db_table_admin_body, $db_table_admin_plugin;
        global $conn;

        $body_id = $db_table_admin_body . ".id";
        $plugin_id = $db_table_admin_plugin . ".id";

        try {
            //$sql = "SELECT begin_panel_color, end_panel FROM $db_table_admin_body";
            $sql_body = "SELECT * FROM $db_table_admin_body";
            $sql_button = "SELECT * FROM $db_table_admin_plugin";

            if($result = $conn->query($sql_body)) {
                foreach ($result as $row) {
                    echo $row["begin_panel_color"];
                    get_button($conn, $sql_button);
                    echo $row["end_panel"];
                }
            }
        } catch(PDOException $e) {
           echo $e;
        }
    }

    function Get_button($conn, $sql_button) {
        if($result = $conn->query($sql_button)) {
            foreach ($result as $row) {
                echo $row["button"];
            }
        }
    }

    function Get_case() {
        global $db_host, $db_name, $db_login, $db_password, $db_table_admin_left;
        global $conn; 

        try {
            $sql = "SELECT begin_panel_color, end_panel FROM $db_table_admin_left";

            if($result = $conn->query($sql)) {
                foreach ($result as $row) {
                    echo $row["begin_panel_color"];

                    echo $row["end_panel"];
                }
            }
        } catch(PDOException $e) {
           echo $e;
        }
    }*/
?>