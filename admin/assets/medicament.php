<?php
session_start();
if(!isset($_SESSION["pseudo"]))
{
  ?>

  <script type="text/javascript">
     window.location.replace("../index.php?info=Veuillez vous reconnectez svp!");
    </script>
  
  
  <?php

}

?>

<script>
    $.ajax({
    url: "functions/get_medoc.php", // La ressource ciblée
    type: "GET", // Le type de la requête HTTP
    /**
     * data n'est plus renseigné, on ne fait plus passer de variable
     */
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
      $(code_html).insertAfter("#inset_produit");
     

    },
  });

</script>









  <div data-aos="fade-down">
    <div class="Titre">
      <span class="text1">MEDICAMENTS</span>
      <span class="text2"
        >Ajoutez, modifiez ou supprimer des medicaments</span
      >
    </div>
  
   
    <div class="box_name">Ajoutez un medicament</div>
    <div class="war_add_medoc"></div>
    <form id="add_medoc" action="functions/add_medoc.php"  method="post" class="BOX_add_medoc">
        <div class="struct">
            <div class="flex_input">
               <input class="input_sheme input nom_produit" type="text" placeholder="Nom du medicament" name="nom_produit">
               <select class="input_sheme input categorie_medoc" name="categorie_medoc" id="">
                   <option value="VIH SIDA">VIH SIDA</option>
                   <option value="CANCER">CANCER</option>
               </select>
            </div>
            <div class="flex_input">
               <input class="input_sheme input prix_produit" type="number" placeholder="Prix du medicament" name="prix_produit">
               <input class="input_sheme input qte_produit" type="number" placeholder="Qté du medicament" name="qte_produit">
            </div>
  
            <div id="bnt_add_medoc" type="submit" class="btn_save flex_center">Ajouter</div>
  
        </div>
    </form>
  
    
  
  
    <div class="box_name">Medicaments Recents</div>
    <div class="medicament_container">
      <div class="medicament_container_struct">
        <table class="table_container">
          <tr id="inset_produit">
            <th>Id</th>
            <th>Designation</th>
            <th>Categorie</th>
            <th>Prix</th>
            <th>Qté</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
       
        </table>
      </div>
    </div>
  
    <div class="load_more">
      <div class="btn_load_more">Charger plus</div>
    </div>

  </div>