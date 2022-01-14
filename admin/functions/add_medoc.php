<?php
session_start();
require "../class/backend.php";


if(isset($_POST['nom_produit'],$_POST['prix_produit'],$_POST['qte_produit'],$_POST['categorie_medoc'])){
    backend::add_medoc($_POST['nom_produit'],$_POST['prix_produit'],$_POST['qte_produit'],$_POST['categorie_medoc']);
}else{
    echo "Une erreur reessayez";
}

?>