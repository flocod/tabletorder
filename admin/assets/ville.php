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
    url: "functions/get_ville.php", // La ressource ciblée
    type: "GET", // Le type de la requête HTTP
    /**
     * data n'est plus renseigné, on ne fait plus passer de variable
     */
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
      $(code_html).insertAfter("#inset_ville");
     

    },
  });


    $.ajax({
    url: "functions/list_ville.php", // La ressource ciblée
    type: "GET", // Le type de la requête HTTP
    /**
     * data n'est plus renseigné, on ne fait plus passer de variable
     */
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
     
      $("#list_ville").html($("#list_ville").html()+code_html);

     

    },
  });

</script>



  <div data-aos="fade-down">

    <div class="Titre">
        <span class="text1">Villes</span>
        <span class="text2"
          >Ajouter, modifier, ou supprimer une ville</span
        >
      </div>
    
      <div class="ville_form">
        <div class="ville_form_item">
          <div class="box_name">Ajouter une ville</div>
          <div class="war_add_ville"></div>
          <form id="add_ville" action="" class="form_item flex_center">
            <div class="struct">
              <input
                type="text"
                placeholder="Nom de la ville"
                class="input_styling nom_ville"
                name="nom_ville"
                required
              />
              <input
                type="number"
                placeholder="Frais de Livraison"
                class="input_styling frais_livraison"
                name="frais_livraison"
              />
              <div id="btn_add_ville" class="btn_sub flex_center">Ajouter</div>
            </div>
          </form>
        </div>
    
        <div class="ville_form_item">
          <div class="box_name">Modifier une ville</div>
          <form action="" id="update_ville" class="form_item flex_center">
            <div class="struct">
    
              <select class="input_styling md_nom_ville" name="md_nom_ville" id="list_ville" required>
                <option value="">Selectionner une ville</option>
               
              </select>
    
          
              <input type="hidden" class="md_ville_id" name="md_ville_id" value="">

              <input
                type="number"
                placeholder="Frais de Livraison"
                class="input_styling md_frais"
                name="md_frais"
              />
              <div id="btn_update_ville" class="btn_sub flex_center">Modifier</div>
            </div>
          </form>
        </div>
    
    
    
      </div>
    
    
      <div class="box_name">Liste des villes</div>
      <div class="medicament_container">
        <div class="medicament_container_struct">
          <table class="table_container">
            <tr id="inset_ville">
              <th>Id</th>
              <th>Nom de la ville</th>
              <th>Frais de livrason</th>
              <th>Action</th>
            </tr>
            
            
          </table>
        </div>
      </div>
    
     

  </div>