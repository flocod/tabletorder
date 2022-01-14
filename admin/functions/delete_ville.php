<?php
require "../class/backend.php";
backend::delete_ville($_POST["temp_id"]);
echo "ville supprimée";

?>
