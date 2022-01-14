<?php 

require "../class/backend.php";


// Envoie des resultats dans la base de donnees
backend::update_medoc($_POST["id_produit"],$_POST["nom_produit"],$_POST["prix_produit"],$_POST["qte_produit"],$_POST["categorie_medoc"]);



?>