<?php
session_start();
require "admin/class/backend.php";

if(isset($_POST['nom'],$_POST['categorie'],$_POST['type'],$_POST['ville'],$_POST['quatier'],$_POST['tel'],$_POST['medoc'],$_POST['qte'])){


    if(isset($_FILES['ordonance'],$_FILES['ordonance']['name'])){

        $image=$_FILES['ordonance'];
        $image_name=$_FILES['ordonance']['name'];
        $image_size=$_FILES['ordonance']['size'];
        $image_temp=$_FILES['ordonance']['tmp_name'];
        $extensionUpload = strtolower(substr(strrchr($image_name, '.'), 1));


        $result=backend::upload_image($image,$image_name,$image_size,$image_temp);
        /*$result["extentionUpload"]*/
         
        if($result['error']==""){ 

            if($_POST['categorie']=="VIH SIDA"){

                $prix_medoc="";
                $frais_livraison=2000;
                $Total=2000;

            }else{
                $prix_medoc=backend::price_medoc($_POST['medoc']) * $_POST['qte'];
                $frais_livraison=backend::frais_ville($_POST['ville']);
                $Total=$prix_medoc + $frais_livraison;
            }
                
            
            
            backend::save_commande($_POST['nom'],$_POST['tel'],$_POST['categorie'],$_POST['type'],$_POST['medoc'],$prix_medoc,$_POST['qte'],$result['name'],$_POST['ville'],$_POST['quatier']);
            
            
            //send email notification

            $news='
            Cancer-VHI : Commande en ligne'. "\r\r".

            'Nom: '  . $_POST["nom"] ."\r".
            
            'Categorie: '  . $_POST["categorie"]  ."\r".
            'Type: ' .$_POST['type']  ."\r".
            'Medicament: ' .$_POST['medoc']  ."\r".
            'Quantité: ' .$_POST["qte"]  ."\r".
            'Télephone: ' .$_POST["tel"]  ."\r".
            'Ville: ' .$_POST["ville"]  ."\r".
            'Quartier: ' .$_POST["quatier"] ."\r".
            'Frais de livraison: ' .$frais_livraison ."\r".
            'Montant TTC: ' .$Total;
            
            backend::email('florian.tchomga@gmail.com','Commande en ligne',$news);
            backend::email('YouthOffice@cmfidouala.com','Commande en ligne',$news);


            ?>
                <script type="text/javascript">
                    window.location.replace("index.php?info=<?php echo 'commande envoyée';?>");
                </script>
            <?php


         }else{
          
            ?>
                <script type="text/javascript">
                    window.location.replace("index.php?info=<?php echo $result['error'];?>");
                </script>
            <?php
          
         }


    }else{
            ?>
                <script type="text/javascript">
                    window.location.replace("index.php?info=Image incorrecte");
                </script>
            <?php
    }





}else{

        ?>

        <script type="text/javascript">
            window.location.replace("index.php?info=Veuillez entrez les elements");
        </script>
        
        <?php

}










?>