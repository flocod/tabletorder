<?php
require "../class/backend.php";
backend::delete_commande($_POST["temp_id"]);
echo "Commande supprimée";

?>
