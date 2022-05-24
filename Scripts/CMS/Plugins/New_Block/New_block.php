<?php
    require_once "../../../../DataBase/Admin_part/Write_case.php";

    if (isset($_POST["add"]))
        Get_window_add_case();

/*_________________________________________________________________________________________________*/        

    function Get_window_add_case() {
        echo '<form class = "main-window-add-form">';
        echo '<input class = "name-block">';
        echo '<div class = "main-window-case">+</div>';
        echo '</form>';
    }
?>