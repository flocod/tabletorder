<?php
session_start();
require "../class/backend.php";


if(isset($_POST['nom_ville'],$_POST['frais_livraison'])){
    backend::add_ville($_POST['nom_ville'],$_POST['frais_livraison']);
}else{
    echo "Une erreur reessayez";
}

?>