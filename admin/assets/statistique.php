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
require "../class/backend.php";

 $derniere_date=backend::get_lastday();

 $derniere_date=backend::take_day($derniere_date);


?>

<script>
    $.ajax({
    url: "functions/get_vente_day.php", // La ressource ciblée
    type: "GET", // Le type de la requête HTTP
    /**
     * data n'est plus renseigné, on ne fait plus passer de variable
     */
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
      $(code_html).insertAfter("#inset_vente_day");
    },
  });


    $.ajax({
    url: "functions/get_all_days.php", // La ressource ciblée
    type: "GET", // Le type de la requête HTTP
    /**
     * data n'est plus renseigné, on ne fait plus passer de variable
     */
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
      $(code_html).insertAfter("#inset_days");
     
    },
  });



  $.ajax({
    url: "functions/Nbr_commande.php", // La ressource ciblée
    type: "POST", // Le type de la requête HTTP
    data: { date:<?=$derniere_date ?>},
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
  
    
      $("#NBRE_COMMANDE").text(code_html);
     
    },
  });

  $.ajax({
    url: "functions/Nbr_vente.php", // La ressource ciblée
    type: "POST", // Le type de la requête HTTP
    data: { date: <?=$derniere_date ?>},
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
  
    
      $("#NBRE_VENTE").text(code_html);
     
    },
  });


  $.ajax({
    url: "functions/recette_vente.php", // La ressource ciblée
    type: "POST", // Le type de la requête HTTP
    data: { date: <?=$derniere_date ?>},
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
  
      total=separateur_millier(Number(code_html), ',')
      $("#RECETTE").text(total);
     
    },
  });



</script>

  <div data-aos="fade-down">

    <div class="Titre" data-aos="fade-down">
        <span class="text1">Statitiques des ventes</span>
        <span class="text2">Filtrer les historiques de ventes par jour</span>
      </div>
    
    
      <div class="box_stat_filter flex_center">
      <div class="struct">
        <div class="flex">
          <select class="input_day" name="day_select" id="liste_day">
            <option id="inset_days" value=""> Date</option>
            
            
          </select>
    
          <div class="stat_item_box">
            <span class="val" id="RECETTE">850,000</span>
            <span class="unit">XAF Recette totale</span>
          </div>
    
          <div class="stat_item_box">
            <span class="val" id="NBRE_COMMANDE">30</span>
            <span class="unit">commade(s)</span>
          </div>
          <div class="stat_item_box">
            <span class="val" id="NBRE_VENTE" >30</span>
            <span class="unit">Vente(s)</span>
          </div>
          
        </div>
      </div>
      </div>
      <div class="medicament_container">
        <div class="medicament_container_struct">
          <table id="Table_vente_day" class="table_container">
            <tr id="inset_vente_day">
              <th>Id</th>
              <th>Nom</th>
              <th>Tel</th>
              <th>Categorie</th>
              <th>Type</th>
              <th>Medicament</th>
              <th>Qté</th>
              <th>Prix</th>
              <th>Ordonance</th>
              <th>Ville</th>
              <th>Quartier</th>
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