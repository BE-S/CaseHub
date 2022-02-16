<?php

echo random();

function random() {
    require '../../../DataBase/WriteDB.php';
    
    $id_drop;
	for(;;) {   
        if ($random = rand(0,100) <= 55) { //ширп
			$id_drop = 1;
            break;
        } else if($random = rand(0,100) <= 40) { //фиолетовое
			$id_drop = 2;
            break;
        } else if($random = rand(0,100) <= 4) { //красное
			$id_drop = 3;
            break;
        } else if ($random = rand(0,100) == 1) {
			$id_drop = 4;
            break;
        }
    }
    Write_drop("inventory_players", $id_drop);
    
    echo $id_drop;
}
?>