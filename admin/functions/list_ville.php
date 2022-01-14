<?php
session_start();
require "../class/backend.php";

 $table=backend::get_ville();

 for($i=0;$i<count($table);$i++){

    echo'
        <option  value="'.$table[$i]["nom_ville"].'" frais="'.$table[$i]["frais_livraison"].'"  item="'.$table[$i]["id"].'" >'.$table[$i]["nom_ville"].'</option>
    ';
}

?>