<?php
session_start();
require "../class/backend.php";


if(isset($_POST['nom'],$_POST['tel'],$_POST['password'])){
    backend::add_admin($_POST['nom'],$_POST['tel'],$_POST['password']);
}else{
    echo "Une erreur reessayez";
}

?>