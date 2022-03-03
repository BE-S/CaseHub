<html>
<head>
    
</head>

<body>
<?php
    require '../../Scripts/php/steamauth/steamauth.php';
    require '../../Scripts/php/steamauth/userInfo.php';
    
    if (isset($_SESSION['steamid'])) {
        logoutButton();
    }
?>
</body>
</html>