<?php
    session_start();  

    require_once '../../Scripts/Account/Account.php';
    require_once "../../Scripts/CMS/Admin_panel.php";
?>

<!Doctype html> 
<html>
<head>
    <link rel = 'stylesheet' href = '../../../Css/Index/Index.css'>
    <link rel = 'stylesheet' href = '../../../Css/Adaptability/Adaptability.css'>
    <link rel = 'stylesheet' href = '../../../Css/CMS/Admin_panel.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<header>
    <?php  
        if($_SESSION["authorized"]) Get_admin_panel_logo();
        ?>
    <div class = 'header-icons'></div>
    <nav class = 'header-navigation-block'>
        <ul>
            <li><a>Мини игры</a></li>
            <li><a>Апгрейд</a></li>
            <li><a>Придумать</a></li>
            <li><a>Придумать</a></li>
        </ul>
            <div class = 'header-avatar'>
                <?php Check_logged(); ?>
            </div>
    </nav>

</header>
<main>
    <?php if($_SESSION["authorized"]) Admin_panel_body(); ?> 

    <div class = 'main-fixed-block'></div>
    <div class = 'main-block-content'>
        <div class = 'main-block-group'>
                <div class = 'main-name-case top'>Классные кейсики</div>
                <div class = 'main-block-cases'>
                    <a class = 'case one' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case one' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case one' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case one' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case one' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case one' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case one' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case one' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case one' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case one' href = 'http://casehub/Web/CaseDrop/'></a>
                </div>
                <div class = 'main-name-case'>Прикольненькие кейсики</div>
                <div class = 'main-block-cases'>
                    <a class = 'case two' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case two' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case two' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case two' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case two' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case two' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case two' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case two' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case two' href = 'http://casehub/Web/CaseDrop/'></a>
                    <a class = 'case two' href = 'http://casehub/Web/CaseDrop/'></a>
            </div>
        </div>
    </div>
</main>
    
<footer></footer>
    <script src = "../../Scripts/CMS/Plugins/Exit/Exit.js"></script>
    <script src = "../../Scripts/CMS/Plugins/New_Block/Add.js"></script>
</body>
</html>