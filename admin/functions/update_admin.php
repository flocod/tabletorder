<?php 

require "../class/backend.php";


// Envoie des resultats dans la base de donnees
backend::update_admin($_POST["id"],$_POST["password"],$_POST["tel"]);



?>