<?
    require_once '../../Scripts/Account/Account.php';
    require_once "../../Scripts/CMS/Admin_panel.php";
?>

<!Doctype html>
<html>
<head>
    <link rel = 'stylesheet' href = '../../Css/CaseDrop/CaseDrop.css'>
    <link rel = 'stylesheet' href = '../../Css/Adaptability/Adaptability.css'>
    <link rel = 'stylesheet' href = '../../../Css/CMS/Admin_panel.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
    
<body>
<header>
    <?php Admin_panel_logo(); ?>
    <div class = 'header-icons'></div>
    <nav class = 'header-navigation-block'>
        <ul>
            <li><a>Отдай</a></li>
            <li><a>Мои</a></li>
            <li><a>Пять</a></li>
            <li><a>Тыщь</a></li>
        </ul>
            <div class = 'header-avatar'>
                <?php Check_logged(); ?>
            </div>
    </nav>
</header>
    
<main>
    <?php Admin_panel_body(); ?> 
    <div class = 'main-fixed-block'></div>
    
    <div class = 'main-block-content'>
        <div class = 'main-block-information'>
            <div class = 'main-information'></div>
        </div>
    <div class = 'main-block-open-case'>
        <div class = 'block-open-case'>
            <div class = 'name-case'>Жопный кейс</div>
            <div class = 'case-drop-icons'></div>

            <?php Start(); ?>
        </div>
    </div>
        
    <div class = 'main-block-weapon'>
        <div class = 'main-block-group'>
                <div class = 'main-name-case top'>Ты можешь получить</div>
                <div class = 'main-block-cases'>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                    <a class = 'case one'></a>
                </div>
        </div>
    </div>
    </div>
</main>
    
<footer></footer>
    <script src = '../../Scripts/Page_Drop/roulette.js'></script>
    <script src = "../../Scripts/CMS/Plagins/Exit/Exit.js"></script>
</body>
</html>