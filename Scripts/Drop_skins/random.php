<?php

echo random();
function random() {
    require '../../DataBase/User_part/Write.php'; //call file DB

    $id_drop;
	for(;;) {   
        if ($random = rand(0,100) <= 55) { //Blue skins
			$id_drop = 1;
            break;
        } else if($random = rand(0,100) <= 40) { //Purple skins
			$id_drop = 2;
            break;
        } else if($random = rand(0,100) <= 4) { //Red skins
			$id_drop = 3;
            break;
        } else if ($random = rand(0,100) == 1) { //Gold skins
			$id_drop = 4;
            break;
        }
    }
    Write_drop($id_drop); //write skins id in DB
    
    echo $id_drop;
}
?>