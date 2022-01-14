<?php
/**
 *backend.php
 *@author Florian Tchomga florian.tchomga@gmail.com
 *la connection à la base de donné
 *Cette classe permet l'authetification de l'administrateur
 *10/01/2022
 */


 class backend {

    // connect to the data base
     public static function dataB(){

        $data=new PDO('mysql:host=localhost;dbname=medic','root','');
         $data->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         return $data;
    }



    //  authentification of users
    public static function authentification($tel,$password){
    
    $data=backend::dataB();
    $sql='SELECT * FROM `administrateurs` WHERE (`tel`=? AND `password`=?)';
       $query=$data->prepare($sql);
       $query->execute([$tel,$password]);
       $result="";
      

       while($table=$query->fetch()){

        if( ($table["tel"]==$tel) && ($table["password"]==$password) ){
          $result="good";
        }else{
          $result="bad";
        }


       }

       $query->closeCursor();
       return $result;
    }



        // connected a user to a session
        public static function connexion ($tel,$password){
        
            $data=backend::dataB();
             $sql='SELECT * FROM `administrateurs` WHERE  (`tel`=? AND `password`=?)';
            $query=$data->prepare($sql);
            $query->execute([$tel,$password]);
            
            while($table=$query->fetch())
            {
              $pseudo=$table['nom'];
            }
            $query->closeCursor();   
            return $pseudo;
        }



        public static function is_produit($nom_produit){
  
          $data=backend::dataB();
          
          $sql='SELECT * FROM `produits` WHERE `nom_produit`= ? '; 
          $query=$data->prepare($sql);
          $query->execute([$nom_produit]);     
          $bool="";
          $table=$query->fetch();
   
          if(!empty($table)){
            $bool=false;
          }else{
            $bool=true;
          }
          
          $query->closeCursor();  


          return $bool;
      }

      
        public static function is_admin($nom){
  
          $data=backend::dataB();
          
          $sql='SELECT * FROM `administrateurs` WHERE `nom`= ? '; 
          $query=$data->prepare($sql);
          $query->execute([$nom]);     
          $bool="";
          $table=$query->fetch();
   
          if(!empty($table)){
            $bool=false;
          }else{
            $bool=true;
          }
          
          $query->closeCursor();  


          return $bool;
      }


        public static function is_ville($nom_ville){
  
          $data=backend::dataB();
          
          $sql='SELECT * FROM `villes` WHERE `nom_ville`= ? '; 
          $query=$data->prepare($sql);
          $query->execute([$nom_ville]);     
          $bool="";
          $table=$query->fetch();
   
          if(!empty($table)){
            $bool=false;
          }else{
            $bool=true;
          }
          
          $query->closeCursor();  


          return $bool;
      }







        public static function add_medoc($nom_produit,$prix,$quantite,$categorie){

          $bool=backend::is_produit($nom_produit);

          if($bool){

            $data=backend::dataB();

            $sql='INSERT INTO `produits`(`id`,`nom_produit`,`prix_produit`,`qte_produit`,`categorie_produit`,`date_upload`) VALUES(null,?,?,?,?,NOW())'; 
            $query=$data->prepare($sql);
            $query->execute([$nom_produit,$prix,$quantite,$categorie]);     
            
            $query->closeCursor();  
            echo "produit ajouté";
          }else{
            echo "produit existant";
          }
        }



        public static function add_ville($nom_ville,$frais_livraison){

          $bool=backend::is_ville($nom_ville);

          if($bool){

            $data=backend::dataB();

            $sql='INSERT INTO `villes`(`id`,`nom_ville`,`frais_livraison`) VALUES(null,?,?)'; 
            $query=$data->prepare($sql);
            $query->execute([$nom_ville,$frais_livraison]);     
            
            $query->closeCursor();  
            echo "ville ajoutée";
          }else{
            echo "ville existante";
          }
        }


        public static function add_admin($nom,$tel,$password){

          $bool=backend::is_admin($nom);

          if($bool){

            $data=backend::dataB();

            $sql='INSERT INTO `administrateurs`(`id`,`nom`,`tel`,`password`) VALUES(null,?,?,?)'; 
            $query=$data->prepare($sql);
            $query->execute([$nom,$tel,$password]);     
            
            $query->closeCursor();  
            echo "administrateur ajouté";
          }else{
            echo "administrateur existant";
          }
        }

        
        public static function save_commande($nom,$tel,$categorie,$type,$medicament,$prix,$qte,$ordonance,$ville,$quatier){

          $data=backend::dataB();

          $sql='INSERT INTO `commande`(`id`,`nom_client`,`tel`,`categorie`,`type`,`medicament`,`prix`,`quantite`,`ordonance`,`ville`,`quartier`,`date`) VALUES(null,?,?,?,?,?,?,?,?,?,?,NOW())'; 
          $query=$data->prepare($sql);
          $query->execute([$nom,$tel,$categorie,$type,$medicament,$prix,$qte,$ordonance,$ville,$quatier]);     
          
          $query->closeCursor();  
          echo "votre a ete commande envoyé";
         
        }



        public static function update_medoc($id_produit,$nom_produit,$prix_produit,$qte_produit,$categorie_produit){

          $data=backend::dataB();
        
          $sql='UPDATE `produits` SET `id`=?,`nom_produit`=?,`prix_produit`=?,`qte_produit`=?,`categorie_produit`=? WHERE id=?';
          $query=$data->prepare($sql);
          $query->execute([$id_produit,$nom_produit,$prix_produit,$qte_produit,$categorie_produit,$id_produit]);     
          
            $query->closeCursor();


            echo "Produit modifié";
          
         }



       
        public static function update_ville($md_ville_id,$md_nom_ville,$md_frais){

          $data=backend::dataB();
        
          $sql='UPDATE `villes` SET `id`=?,`nom_ville`=?,`frais_livraison`=? WHERE id=?';
          $query=$data->prepare($sql);
          $query->execute([$md_ville_id,$md_nom_ville,$md_frais,$md_ville_id]);     
          
            $query->closeCursor();


            echo "ville modifiée";
          
         }


        public static function update_admin($id,$password,$tel){

          $data=backend::dataB();
        
          $sql='UPDATE `administrateurs` SET `password`=?,`tel`=? WHERE id=?';
          $query=$data->prepare($sql);
          $query->execute([$password,$tel,$id]);     
          
            $query->closeCursor();


            echo "admin modifié";
          
         }


        
        public static function update_about($tel,$frais,$titre1,$titre2,$description){

          $data=backend::dataB();
        
          $sql='UPDATE `about` SET `tel`=?,`frais_livraison`=?,`titre1`=?,`titre2`=?,`description`=? WHERE id=1';
          $query=$data->prepare($sql);
          $query->execute([$tel,$frais,$titre1,$titre2,$description]);     
          
            $query->closeCursor();


            echo "Informations modifiées";
          
        }


        public static function update_cancer($titre1,$big_titre,$description){

          $data=backend::dataB();
        
          $sql='UPDATE `cancer` SET `titre1`=?,`big_titre`=?,`description`=? WHERE id=1';
          $query=$data->prepare($sql);
          $query->execute([$titre1,$big_titre,$description]);     
          
            $query->closeCursor();


            echo "Informations modifiées";
          
        }


        public static function update_vih($titre1,$big_titre,$description){

          $data=backend::dataB();
        
          $sql='UPDATE `vih` SET `titre1`=?,`big_titre`=?,`description`=? WHERE id=1';
          $query=$data->prepare($sql);
          $query->execute([$titre1,$big_titre,$description]);     
          
            $query->closeCursor();


            echo "Informations modifiées";
          
        }




      public static function get_medoc(){
        
          $data=backend::dataB();
            
          $sql='SELECT * FROM produits ORDER BY id desc';
          $query=$data->prepare($sql);
          $query->execute();
          $TAB=array();
          $i=0;
    
        while($table=$query->fetch()){
    
            $produit["id"]=$table["id"];
            $produit["nom_produit"]=$table["nom_produit"];
            $produit["prix_produit"]=$table["prix_produit"];
            $produit["qte_produit"]=$table["qte_produit"];
            $produit["categorie_produit"]=$table["categorie_produit"];
            $produit["date_upload"]=$table["date_upload"];
          
            $TAB[$i]= $produit;
            $i++;
    
        }
        $query->closeCursor();
        return $TAB;
      }



      public static function get_commande(){
        
          $data=backend::dataB();
            
          $sql='SELECT * FROM commande ORDER BY id desc';
          $query=$data->prepare($sql);
          $query->execute();
          $TAB=array();
          $i=0;
    
        while($table=$query->fetch()){
    
            $commande["id"]=$table["id"];
            $commande["nom_client"]=$table["nom_client"];
            $commande["tel"]=$table["tel"];
            $commande["categorie"]=$table["categorie"];
            $commande["type"]=$table["type"];
            $commande["medicament"]=$table["medicament"];
            $commande["prix"]=$table["prix"];
            $commande["quantite"]=$table["quantite"];
            $commande["ordonance"]=$table["ordonance"];
            $commande["ville"]=$table["ville"];
            $commande["quartier"]=$table["quartier"];
            $commande["date"]=$table["date"];
            $commande["statut"]=$table["statut"];
          
            $TAB[$i]= $commande;
            $i++;
    
        }
        $query->closeCursor();
        return $TAB;
      }


      public static function Nbr_commande($date){
        
          $data=backend::dataB();
            
          $sql='SELECT * FROM commande WHERE `date` LIKE ?';
          $query=$data->prepare($sql);
          $query->execute(["%".$date."%"]);
         
          $i=0;
    
        while($table=$query->fetch()){
            $i++;
        }
        $query->closeCursor();
        return $i;
      }

      public static function Actual_commande(){
        
          $data=backend::dataB();
            
          $sql='SELECT * FROM commande WHERE statut="\'En attente\'"';
          $query=$data->prepare($sql);
          $query->execute();
         
          $i=0;
    
        while($table=$query->fetch()){
            $i++;
        }
        $query->closeCursor();
        return $i;
      }

      public static function Nbr_vente($date){
        
          $data=backend::dataB();
            
          $sql='SELECT * FROM vente WHERE `date` LIKE ?';
          $query=$data->prepare($sql);
          $query->execute(["%".$date."%"]);
         
          $i=0;
    
        while($table=$query->fetch()){
            $i++;
        }
        $query->closeCursor();
        return $i;
      }

      public static function recette_vente($date){
        //date(y-m-d)
          $data=backend::dataB();
            
          $sql='SELECT * FROM vente WHERE `date` LIKE ?';
          $query=$data->prepare($sql);
          $query->execute(["%".$date."%"]);
         
          $recette=0;
    
        while($table=$query->fetch()){
          $recette=$recette + intval( $table['prix'] );
        }
        $query->closeCursor();
        return $recette;
      }

      public static function Total_vente(){
        //date(y-m-d)
          $data=backend::dataB();
            
          $sql='SELECT * FROM vente';
          $query=$data->prepare($sql);
          $query->execute();
         
          $recette=0;
    
        while($table=$query->fetch()){
          $recette=$recette + intval( $table['prix'] );
        }
        $query->closeCursor();
        return $recette;
      }


      public static function get_vente(){
        
          $data=backend::dataB();

          $sql='SELECT * FROM vente ORDER BY `date` desc';
          $query=$data->prepare($sql);
          $query->execute();
          $TAB=array();
          $i=0;
    
        while($table=$query->fetch()){
    
            $vente["id"]=$table["id"];
            $vente["nom"]=$table["nom"];
            $vente["tel"]=$table["tel"];
            $vente["categorie"]=$table["categorie"];
            $vente["type"]=$table["type"];
            $vente["medicament"]=$table["medicament"];
            $vente["prix"]=$table["prix"];
            $vente["quantite"]=$table["quantite"];
            $vente["ordonance"]=$table["ordonance"];
            $vente["ville"]=$table["ville"];
            $vente["quartier"]=$table["quartier"];
            $vente["date"]=$table["date"];
            $vente["statut"]=$table["statut"];
          
            $TAB[$i]= $vente;
            $i++;
    
        }
        $query->closeCursor();
        return $TAB;
      }


      public static function getMaxId(){
        $cnx =backend::dataB();
        $req ='SELECT * FROM `vente` WHERE id = (SELECT MAX(id) FROM `vente`)';
 
        $req2 = $cnx->prepare($req);
        $req2->execute();
        $resultat = $req2->fetch();
        $resultat = $resultat['id'];
        $res = intval($resultat);
     
        return $res;
      
      
}


    public static function take_day($date){
      // date (y/m/d hh:mm:ss)

      $day=substr($date, 0, 10);
      // date (y/m/d)
      return $day;
    }

      public static function get_lastday(){
        // RETOURNE LA DATE DE LA DERNIERE VENTE
          $data=backend::dataB();

          $sql='SELECT * FROM vente ORDER BY `date` desc LIMIT 1';
          $query=$data->prepare($sql);
          $query->execute();
        
        while($table=$query->fetch()){
          $jour =$table["date"];
        }
        $query->closeCursor();
        return $jour;
      }


      public static function get_vente_day($jour){
        
          $data=backend::dataB();

          $sql='SELECT * FROM vente';
          $query=$data->prepare($sql);
          $query->execute();
        
          $TAB=array();
          $i=0;
          $jour = backend::take_day($jour);


        while($table=$query->fetch()){

          $jour_temp = backend::take_day($table["date"]);

          if($jour==$jour_temp){
            // Recupere toutes les ventes de ce jours

            $vente["id"]=$table["id"];
            $vente["nom"]=$table["nom"];
            $vente["tel"]=$table["tel"];
            $vente["categorie"]=$table["categorie"];
            $vente["type"]=$table["type"];
            $vente["medicament"]=$table["medicament"];
            $vente["prix"]=$table["prix"];
            $vente["quantite"]=$table["quantite"];
            $vente["ordonance"]=$table["ordonance"];
            $vente["ville"]=$table["ville"];
            $vente["quartier"]=$table["quartier"];
            $vente["date"]=$table["date"];
            $vente["statut"]=$table["statut"];
          
            $TAB[$i]= $vente;
            $i++;
          }
        }

        $query->closeCursor();

        return  $TAB;
       
      }


   

      public static function get_All_days(){
        
          $data=backend::dataB();

          $sql='SELECT * FROM vente';
          $query=$data->prepare($sql);
          $query->execute();
        
          $TAB=array();
          $i=0;
       
         

        while($table=$query->fetch()){

          $date= backend::take_day($table["date"]);
          $TAB[$i]= $date;
          $i++;
        }

        $tab_day=array_unique($TAB);

        $query->closeCursor();
        return $tab_day;
       
      }







      public static function get_commande_id($id){
        
          $data=backend::dataB();
            
          $sql='SELECT * FROM commande WHERE id=?';
          $query=$data->prepare($sql);
          $query->execute([$id]);
        
          $i=0;

    
            $table=$query->fetch();
    
            $commande["id"]=$table["id"];
            $commande["nom_client"]=$table["nom_client"];
            $commande["tel"]=$table["tel"];
            $commande["categorie"]=$table["categorie"];
            $commande["type"]=$table["type"];
            $commande["medicament"]=$table["medicament"];
            $commande["prix"]=$table["prix"];
            $commande["quantite"]=$table["quantite"];
            $commande["ordonance"]=$table["ordonance"];
            $commande["ville"]=$table["ville"];
            $commande["quartier"]=$table["quartier"];
            $commande["date"]=$table["date"];
            $commande["statut"]=$table["statut"];
          
            $commande;
         

        return $commande;
      }


      public static function price_medoc($medoc){
        
          $data=backend::dataB();
            
          $sql='SELECT * FROM produits WHERE nom_produit=?';
          $query=$data->prepare($sql);
          $query->execute([$medoc]);
          $prix="";
    
        while($table=$query->fetch()){

            $prix=$table["prix_produit"];

        }
        return $prix;
      }


      public static function get_ville(){
        
          $data=backend::dataB();
            
          $sql='SELECT * FROM villes ORDER BY id desc';
          $query=$data->prepare($sql);
          $query->execute();
          $TAB=array();
          $i=0;
    
        while($table=$query->fetch()){
    
            $ville["id"]=$table["id"];
            $ville["nom_ville"]=$table["nom_ville"];
            $ville["frais_livraison"]=$table["frais_livraison"];
           
          
            $TAB[$i]= $ville;
            $i++;
    
        }
        return $TAB;
      }
      public static function frais_ville($name_ville){
        
          $data=backend::dataB();
            
          $sql='SELECT * FROM villes WHERE nom_ville=?';
          $query=$data->prepare($sql);
          $query->execute([$name_ville]);

          $frais="";
    
        while($table=$query->fetch()){
    
        
         
            $frais=$table["frais_livraison"];
           
          
         
        
    
        }
        return $frais;
      }


      public static function get_admin(){
        
          $data=backend::dataB();
            
          $sql='SELECT * FROM administrateurs ORDER BY id desc';
          $query=$data->prepare($sql);
          $query->execute();
          $TAB=array();
          $i=0;
    
        while($table=$query->fetch()){
    
            $admin["id"]=$table["id"];
            $admin["nom"]=$table["nom"];
            $admin["tel"]=$table["tel"];

            $TAB[$i]= $admin;
            $i++;
    
        }
        return $TAB;
      }



      public static function get_NBR_medoc($nbre){

          $data=backend::dataB();
          $sql = sprintf('SELECT * FROM produits ORDER BY `date_upload` desc LIMIT %d', $nbre);
        
          $query=$data->prepare($sql);
        
          $query->bindParam(1, $nbre,  PDO::PARAM_INT);
        
          // $comments->bindParam(1, $post, PDO::PARAM_STR);
        
          $data->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

          
          $query->execute();
          $TAB=array();
          $i=0;
    
        while($table=$query->fetch()){
    
            $produit["id"]=$table["id"];
            $produit["nom_produit"]=$table["nom_produit"];
            $produit["prix_produit"]=$table["prix_produit"];
            $produit["qte_produit"]=$table["qte_produit"];
            $produit["categorie_produit"]=$table["categorie_produit"];
            $produit["date_upload"]=$table["date_upload"];
          
            $TAB[$i]= $produit;
            $i++;
    
        }
        return $TAB;
      }



      public static function delete_product($id){
 
        $data=backend::dataB();
        $sql='DELETE FROM `produits` WHERE `id` =?'; 
        $query=$data->prepare($sql);
        $query->execute([$id]);     
        $query->closeCursor();  
      
      }


      public static function delete_commande($id){
 
        $data=backend::dataB();
        $sql='DELETE FROM `commande` WHERE `id` =?'; 
        $query=$data->prepare($sql);
        $query->execute([$id]);     
        $query->closeCursor();  
      
      }


      public static function confirm_commande($id){
 
        $data=backend::dataB();
        $sql='UPDATE `commande` SET `statut`="validé" WHERE id=?';
        $query=$data->prepare($sql);
        $query->execute([$id]);     
        $query->closeCursor();  


            $commande=backend::get_commande_id($id);

            $nom=$commande["nom_client"];
            $tel= $commande["tel"];
            $categorie=$commande["categorie"];
            $type=$commande["type"];
            $medicament=$commande["medicament"];
            $prix=$commande["prix"];
            $qte=$commande["quantite"];
            $ordonance=$commande["ordonance"];
            $ville=$commande["ville"];
            $quatier=$commande["quartier"];
            $statut=$commande["statut"];

     
          $data2=backend::dataB();
          // ajout dans la table vente
          $sql2='INSERT INTO `vente`(`id`,`nom`,`tel`,`categorie`,`type`,`medicament`,`prix`,`quantite`,`statut`,`ordonance`,`ville`,`quartier`,`date`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,NOW())'; 
          $query2=$data2->prepare($sql2);
          $query2->execute([$id,$nom,$tel,$categorie,$type,$medicament,$prix,$qte,$statut,$ordonance,$ville,$quatier]);     
          
          $query2->closeCursor();


      
      }


      public static function delete_ville($id){
 
        $data=backend::dataB();
        $sql='DELETE FROM `villes` WHERE `id` =?'; 
        $query=$data->prepare($sql);
        $query->execute([$id]);     
        $query->closeCursor();  
      
      }


      public static function delete_admin($id){
 
        $data=backend::dataB();
        $sql='DELETE FROM `administrateurs` WHERE `id` =?'; 
        $query=$data->prepare($sql);
        $query->execute([$id]);     
        $query->closeCursor();  
      
      }



      public static function get_produit_line($id){
      
        $data=backend::dataB();
          
        $sql='SELECT * FROM produits WHERE id=?';
        $query=$data->prepare($sql);
        $query->execute([$id]);
       
        $produit=array();


        $table=$query->fetch();

        $produit["id"]=$table["id"];
        $produit["nom_produit"]=$table["nom_produit"];
        $produit["prix_produit"]=$table["prix_produit"];
        $produit["categorie_produit"]=$table["categorie_produit"];
        $produit["qte_produit"]=$table["qte_produit"];
      
       
      return $produit;
      }


      public static function get_about(){
      
        $data=backend::dataB();
          
        $sql='SELECT * FROM about WHERE id=1';
        $query=$data->prepare($sql);
        $query->execute();
       
        $about=array();


        $table=$query->fetch();

        $about["id"]=$table["id"];
        $about["tel"]=$table["tel"];
        $about["frais_livraison"]=$table["frais_livraison"];
        $about["titre1"]=$table["titre1"];
        $about["titre2"]=$table["titre2"];
        $about["description"]=$table["description"];
      
       
      return $about;
      }


      public static function get_cancer(){
      
        $data=backend::dataB();
        
        $sql='SELECT * FROM cancer WHERE id=1';
        $query=$data->prepare($sql);
        $query->execute();
       
        $cancer=array();


        $table=$query->fetch();

        $cancer["id"]=$table["id"];
        $cancer["titre1"]=$table["titre1"];
        $cancer["big_titre"]=$table["big_titre"];
        $cancer["description"]=$table["description"];
      
       
      return $cancer;
      }
      public static function get_vih(){
      
        $data=backend::dataB();
        
        $sql='SELECT * FROM vih WHERE id=1';
        $query=$data->prepare($sql);
        $query->execute();
       
        $vih=array();


        $table=$query->fetch();

        $vih["id"]=$table["id"];
        $vih["titre1"]=$table["titre1"];
        $vih["big_titre"]=$table["big_titre"];
        $vih["description"]=$table["description"];
      
       
      return $vih;
      }
      






      public static function imageCreateFromAny($filepath){
        $type = exif_imagetype($filepath); // [] if you don't have exif you could use getImageSize()
        $allowedTypes = array(
            1,  // [] gif
            2,  // [] jpg
            3,  // [] png
            6   // [] bmp
        );
        if (!in_array($type, $allowedTypes)) {
            return false;
        }
        switch ($type) {
            case 1 :
                $im = imageCreateFromGif($filepath);
            break;
            case 2 :
                $im = imageCreateFromJpeg($filepath);
            break;
            case 3 :
                $im = imageCreateFromPng($filepath);
            break;
            case 6 :
                $im = imageCreateFromBmp($filepath);
            break;
        }   
        return $im; 
    } 
    
          
          


      public static function upload_image($image,$image_name,$image_size,$image_temp){
          
        if(isset($image) AND !empty($image_name))
          {
            $taillemax=5242880;/**5mo */
            $extensionValides=array('jpg','jpeg','png');
            
            
              $taille = getimagesize($image_temp);
              $largeur = $taille[0];
              $hauteur = $taille[1];
              $largeur_miniature = $largeur;
              $hauteur_miniature = $hauteur;/* $hauteur / $largeur * 300;*/
  
  

            
            
            
            if($image_size <= $taillemax)
               {
                $extensionUpload = strtolower(substr(strrchr($image_name, '.'), 1));
                if(in_array($extensionUpload, $extensionValides)){
                   
                    $name_save=rand(0,100000000);
                   $chemin="admin/ordonance/".$name_save.".".$extensionUpload;
                   $filename=$name_save.".".$extensionUpload;
                  
                  
                    $im=backend::imageCreateFromAny($image_temp);
                    
                       $im_miniature = imagecreatetruecolor($largeur_miniature, $hauteur_miniature);
                    imagecopyresampled($im_miniature, $im, 0, 0, 0, 0, $largeur_miniature, $hauteur_miniature, $largeur, $hauteur);
                    $resultat=imagejpeg($im_miniature, $chemin, 30);
                
                  
                  $msg="";
                  
                   if($resultat){
                      $msgresult="true";
                   }else{
                    
                    $msg="Erreur durant l'importation du fichier";
                
                   }
                   
                }else{
                   $msg="Votre photo de profil  doit être au format jpg, jpeg ou png";
                }
                
               }else{
                  $msg="Votre photo de profil ne doit pas dépassé 2Mo";
               }
               $result=array(
                             "name_save"=>$name_save,
                             "extention_upload"=>$extensionUpload,
                             "name"=>$filename,
                             "error"=>$msg
                            );
               return $result;
          }
   }






   public static function email( $to,$subject, $message){
    
    ini_set( 'display_errors', 1 );
 
    error_reporting( E_ALL );
 
    $from = "YouthOffice@cmfidouala.com";
 
    $headers = "From:" . $from;
 
    mail($to,$subject,$message, $headers);
 
   

    
   }
    
    
    public static function email2( $to,$subject, $message){
    
    ini_set( 'display_errors', 1 );
 
    error_reporting( E_ALL );
 
    $from = "contact@cmfidouala.com";
 
    $headers = "From:" . $from;
 
    mail($to,$subject,$message, $headers);
 
   

    
   }
        



 }











 ?>