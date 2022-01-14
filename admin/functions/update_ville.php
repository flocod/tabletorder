<?php 

require "../class/backend.php";


// Envoie des resultats dans la base de donnees
backend::update_ville($_POST["md_ville_id"],$_POST["md_nom_ville"],$_POST["md_frais"]);



?>