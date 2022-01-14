<?php
require "../class/backend.php";
backend::delete_admin($_POST["temp_id"]);
echo "administrateur supprimé";

?>
