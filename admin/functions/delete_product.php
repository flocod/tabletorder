<?php
require "../class/backend.php";
backend::delete_product($_POST["temp_id"]);
echo "produit supprime";

?>
