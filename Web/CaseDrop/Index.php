<!Doctype html>
<html>
<head>
    <link rel = 'stylesheet' href = '../../Css/CaseDrop/CaseDrop.css'>
    <link rel = 'stylesheet' href = '../../Css/Adaptability/Adaptability.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>
    
</head>
    
<body>
<header>
    <div class = 'header-icons'></div>
    <nav class = 'header-navigation-block'>
        <ul>
            <li><a>Отдай</a></li>
            <li><a>Мои</a></li>
            <li><a>Пять</a></li>
            <li><a>Тыщь</a></li>
        </ul>
            <div class = 'header-avatar'>
                <?php
                    require '../../Scripts/php/Account/Account.php';
                    if(Authorization()) {
                        require '../../DataBase/WriteDB.php';
                        Registration();
                    }  
                 ?>
            </div>
    </nav>
</header>
    
<main>
    <div class = 'main-fixed-block'></div>
    
    <div class = 'main-block-content'>
        <div class = 'main-block-information'>
            <div class = 'main-information'></div>
        </div>
    <div class = 'main-block-open-case'>
        <div class = 'block-open-case'>
            <div class = 'name-case'>Жопный кейс</div>
            <div class = 'case-drop-icons'></div>
            <a href = "../../Data/Players.php">link</a>
            <?php
                Start();
            ?>
            <a class = "a">что-то</a>
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
    <script src = '../../Scripts/js/Page_Drop/roulette.js'></script>
    //<script src = '../../Scripts/js/Page_Drop/choise.js'></script>
</body>
</html>