<?php 

require "../class/backend.php";


// Envoie des resultats dans la base de donnees
backend::update_vih($_POST["titre1"],$_POST["big_titre"],$_POST["description"]);



?>