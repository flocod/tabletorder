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




<div data-aos="fade-down">
<script>
                  $.ajax({
                  url: "functions/get_medoc_home.php", // La ressource ciblée
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
              <div class="Titre" data-aos="fade-down">
                <span class="text1">Hi, <?=$_SESSION["pseudo"] ?> !</span>
                <span class="text2"
                  >Bienvenue et bonne session de travail...</span
                >
              </div>

              <div class="dash_stat" data-aos="fade-down">
                <div class="box_stat">
                  <div class="struct_stat">
                    <div class="val"> <?=$_SESSION["recette_today"] ?> XAF</div>
                    <div class="descr">VENTES JOURNALIERE</div>
                  </div>
                </div>
                <div class="box_stat">
                  <div class="struct_stat">
                    <div class="val"><?=  $_SESSION["Actual_commande"] ?></div>
                    <div class="descr">COMMANDES ACTUELLES</div>
                  </div>
                </div>
                <div class="box_stat">
                  <div class="struct_stat">
                    <div class="val"><?= $_SESSION["Total_vente"]?> XAF</div>
                    <div class="descr">VENTES TOTALES</div>
                  </div>
                </div>
                <div class="box_stat">
                  <div class="struct_stat">
                    <div class="val"><?=$_SESSION["NBR_PRODUITS"] ?></div>
                    <div class="descr">PRODUITS TOTAL</div>
                  </div>
                </div>
              </div>

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
                    </tr>
                    
                  </table>
                </div>
              </div>

             
    

</div>
