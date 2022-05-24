<?
    require_once "../../DataBase/Connect.php";
    require_once "../../DataBase/Info.php";
?>

<!Doctype html>
<html>
<head>
    <link rel = "stylesheet" href = "../../Css/CMS/Entrance.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>
</head>
<body>
    <form action="../../Scripts/CMS/Check_admin.php" method="POST">
        <span class = "LOGO">CaseHub</span>
        <div>
            <span>Логин</span>
            <br>
            <input name = "Login">
            <br>
            <span>Пароль</span>
            <br>
            <input type = "password" name = "Pass">
            <br>
            <button>Войти</button>
            <p>
                <?php 
                    session_start();
                    if ($_SESSION['msg']) {
                        echo $_SESSION["msg"];
                        unset($_SESSION["msg"]);
                    }
                ?>
            </p>
        </div>
    </form>
</body>
<script src = "../../Scripts/js/CMS/CheckPass.js"></script>
</html>