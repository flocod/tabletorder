<?php
session_start();
require "../class/backend.php";


 $table=backend::get_medoc();

 for($i=0;$i<count($table);$i++){

    echo'
        <option  value="'.$table[$i]["nom_produit"].'" prix="'.$table[$i]["prix_produit"].'"  item="'.$table[$i]["id"].'" >'.$table[$i]["nom_produit"].'</option>
    ';
}

?>