<?php
session_start();
require "../class/backend.php";


 $resulta=backend::Nbr_vente($_POST['date']);

echo $resulta;




?>