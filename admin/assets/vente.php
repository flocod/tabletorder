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
    url: "functions/get_vente.php", // La ressource ciblée
    type: "GET", // Le type de la requête HTTP
    /**
     * data n'est plus renseigné, on ne fait plus passer de variable
     */
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
      $(code_html).insertAfter("#inset_vente");
    },
  });

</script>


  <div data-aos="fade-down">
    <div class="Titre">
        <span class="text1">Ventes</span>
        <span class="text2"
          >Liste des ventes</span
        >
      </div>
    
    
    
      
    
    
      <div class="box_name">Liste des ventes</div>
      <div class="medicament_container">
        <div class="medicament_container_struct">
          <table class="table_container">
            <tr id="inset_vente">
              <th>Id</th>
              <th>Nom</th>
              <th>Tel</th>
              <th>Categorie</th>
              <th>Type</th>
              <th>Medicament</th>
              <th>Qté</th>
              <th>Prix</th>
              <th>ordonance</th>
              <th>ville</th>
              <th>quartier</th>
              <th>Statut</th>
              <th>Date</th>
              
            </tr>
            <!-- <tr>
              <td>20</td>
              <td>Kamga luc</td>
              <td>677582411</td>
              <td>VIH-SIDA</td>
              <td>6000</td>
              <td>12-02-2022</td>
              <td>1</td>
              
            </tr>
            <tr>
              <td>20</td>
              <td>Kamga luc</td>
              <td>677582411</td>
              <td>VIH-SIDA</td>
              <td>6000</td>
              <td>12-02-2022</td>
              <td>1</td>
              
            </tr>
            <tr>
              <td>20</td>
              <td>Kamga luc</td>
              <td>677582411</td>
              <td>VIH-SIDA</td>
              <td>6000</td>
              <td>12-02-2022</td>
              <td>1</td>
             
            </tr>
            <tr>
              <td>20</td>
              <td>Kamga luc</td>
              <td>677582411</td>
              <td>VIH-SIDA</td>
              <td>6000</td>
              <td>12-02-2022</td>
              <td>1</td>
             
            </tr>
            <tr>
              <td>20</td>
              <td>Kamga luc</td>
              <td>677582411</td>
              <td>VIH-SIDA</td>
              <td>6000</td>
              <td>12-02-2022</td>
              <td>1</td>
              
            </tr>
            <tr>
              <td>20</td>
              <td>Kamga luc</td>
              <td>677582411</td>
              <td>VIH-SIDA</td>
              <td>6000</td>
              <td>12-02-2022</td>
              <td>1</td>
              
            </tr>
            <tr>
              <td>20</td>
              <td>Kamga luc</td>
              <td>677582411</td>
              <td>VIH-SIDA</td>
              <td>6000</td>
              <td>12-02-2022</td>
              <td>1</td>
              
            </tr>
            <tr>
              <td>20</td>
              <td>Kamga luc</td>
              <td>677582411</td>
              <td>VIH-SIDA</td>
              <td>6000</td>
              <td>12-02-2022</td>
              <td>1</td>
              
            </tr> -->
          </table>
        </div>
      </div>
    
      <div class="load_more">
        <div class="btn_load_more">Charger plus</div>
      </div>
    

</div>