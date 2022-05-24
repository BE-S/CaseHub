<?php 

function Check_logged() {
    if(Authorization()) {
        require_once '../../DataBase/User_part/Write.php';
        Registration();
    } 
}

/*____________________________________________________________________________________________________________________________________*/

function Authorization() { //Authorization account in steam
    require_once '../../Scripts/steamauth/steamauth.php'; //connection file about author SmItH197
    require_once '../../Scripts/steamauth/userInfo.php'; //connection file about author SmItH197
    
        if (isset($_SESSION['steamid'])) { //if steamid not null
            $avatar = $_SESSION['steam_avatarmedium']; //get avatar
            echo "<a class = 'Profile' href = '../Profile/Index.php'>"; //button transition to profile
            echo "<img class = 'Icon-avatar' src = '$avatar'>"; //output avatar
            echo "<div class = 'Account'>";
            echo $steamprofile['personaname']; //output account name
            echo '</div>';
            echo "</a>";
            return true;
        } else {
            echo "<div class = 'Sign-in'>";
            loginButton(); //button authentication
             echo "</div>";
        }
        return true;
}

function Start() { //function start
    if (isset($_SESSION['steamid'])) {
            echo "<div class = 'main-buttons'>";
            echo "<buttons class = 'main-button'>";
            echo "Просрать деньги"; //start
            echo "</buttons>";
            echo "</div>";
        } else {
            echo "<div class = 'Info-authorization'>";
            echo "Необходимо авторизоваться!"; //you need logged
            echo "</div>";
        }
}
?>
