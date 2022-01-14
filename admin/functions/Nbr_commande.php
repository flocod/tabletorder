<?php
session_start();
require "../class/backend.php";


 $resulta=backend::Nbr_commande($_POST['date']);

echo $resulta;




?>