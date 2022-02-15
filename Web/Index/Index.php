<!Doctype html> 
<html>
<head>
    <link rel = 'stylesheet' href = '../../../Css/Index/Index.css'>
    <link rel = 'stylesheet' href = '../../../Css/Adaptability/Adaptability.css'>
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
                        $db_table = "players";
                        Registration($db_table);
                    }  
                 ?>
            </div>
    </nav>
</header>
    
<main>
    <div class = 'main-fixed-block'>
    
    </div>
    <div class = 'main-block-content'>
        <div class = 'main-block-group'>
                <div class = 'main-name-case top'>Классные кейсики</div>
                <div class = 'main-block-cases'>
                    <a class = 'case one' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case one' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case one' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case one' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case one' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case one' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case one' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case one' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case one' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case one' href = '../CaseDrop/Index.php'></a>
                </div>
                <div class = 'main-name-case'>Прикольненькие кейсики</div>
                <div class = 'main-block-cases'>
                    <a class = 'case two' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case two' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case two' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case two' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case two' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case two' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case two' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case two' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case two' href = '../CaseDrop/Index.php'></a>
                    <a class = 'case two' href = '../CaseDrop/Index.php'></a>
            </div>
        </div>
    </div>
</main>
    
<footer></footer>
    
<!--<script src = "../../js/Index/index.js"></script>-->
</body>
</html>