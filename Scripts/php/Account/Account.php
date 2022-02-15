<?php 
function Authorization() {
    require '../../Scripts/php/steamauth/steamauth.php';
    require '../../Scripts/php/steamauth/userInfo.php';
    
        if (isset($_SESSION['steamid'])) {
            $avatar = $_SESSION['steam_avatarmedium'];
            echo "<a class = 'Profile' href = '../Profile/Index.php'>";
            echo "<img class = 'Icon-avatar' src = '$avatar'>";
            echo "<div class = 'Account'>";
            echo $steamprofile['personaname'];
            echo '</div>';
            echo "</a>";
            return true;
        } else {
            echo "<div class = 'Sign-in'>";
            loginButton();
             echo "</div>";
        }
}

function Start() {
    if (isset($_SESSION['steamid'])) {
            echo "<div class = 'main-buttons'>";
            echo "<buttons class = 'main-button'>";
            echo "Просрать деньги";
            echo "</buttons>";
            echo "</div>";
        } else {
            echo "<div class = 'Info-authorization'>";
            echo "Необходимо авторизоваться!";
            echo "</div>";
        }
}
?>
