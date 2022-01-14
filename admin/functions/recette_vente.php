<?php
session_start();
require "../class/backend.php";


 $resulta=backend::recette_vente($_POST['date']);

echo $resulta;




?>