<?php
session_start();
require "../class/backend.php";

if(isset($_POST["tel"],$_POST["pass"])){

    $bool=backend::authentification($_POST["tel"],$_POST["pass"]);
 
 if($bool=="good"){
    $pseudo=backend::connexion($_POST["tel"],$_POST["pass"]);

    $_SESSION["pseudo"]=$pseudo;
    header("location:../session.php");
    ?>
    <script>
        window.location.replace("../session.php");
    </script>
    
    <?php

 }else{
  
    ?>

    <script type="text/javascript">
       window.location.replace("../index.php?info=Telephone ou mot de pass incorrect!");
      </script>
    
    
    <?php
 }



}else{
    ?>
    <script type="text/javascript">
       window.location.replace("../index.php?info=Verifiez vos informations");
      </script>
    
    <?php
}








?>