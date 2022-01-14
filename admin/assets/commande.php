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
    url: "functions/get_commande.php", // La ressource ciblée
    type: "GET", // Le type de la requête HTTP
    /**
     * data n'est plus renseigné, on ne fait plus passer de variable
     */
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
      $(code_html).insertAfter("#inset_commande");
     

    },
  });

</script>

  <div data-aos="fade-down" >
    <div class="Titre">
        <span class="text1">Commandes</span>
        <span class="text2"
          >Liste des commandes recues</span
        >
      </div>
    
    
    
      
    
    
      <div class="box_name">Liste des commandes</div>
      <div class="medicament_container">
        <div class="medicament_container_struct">
          <table class="table_container">
            <tr id="inset_commande">
              <th>Id</th>
              <th>client</th>
              <th>Tel</th>
              <th>Categorie</th>
              <th>Type</th>
              <th>Medicament</th>
              <th>Qté</th>
              <th>Prix</th>
              <th>Ordonnace</th>
              <th>Ville</th>
              <th>Quartier</th>
           
              <th>Statut</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
           
          </table>
        </div>
      </div>
    
    
    
  </div>