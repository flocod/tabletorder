<?php
require "../class/backend.php";
backend::confirm_commande($_POST["temp_id"]);
echo "Commande confirmée";

?>
