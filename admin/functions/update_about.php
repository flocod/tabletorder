<?php 

require "../class/backend.php";


// Envoie des resultats dans la base de donnees
backend::update_about($_POST["tel"],$_POST["frais"],$_POST["titre1"],$_POST["titre2"],$_POST["description"]);



?>