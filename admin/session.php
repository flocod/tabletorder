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


require "class/backend.php";


 $table=backend::get_medoc();
 $_SESSION["NBR_PRODUITS"]=count($table);


 $today=date("Y-m-d");
 $_SESSION["recette_today"]=backend::recette_vente($today);//recupere la recette  de ce jour
 $_SESSION["Actual_commande"]=backend::Actual_commande();//recupere les commandes non validées
 $_SESSION["Total_vente"]=backend::Total_vente();//Recupere la recette totale

 $_SESSION["Total_vente"]=number_format($_SESSION["Total_vente"],2,",",".")

?>





<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Tablet Order | administrateur
    </title>
    

    <script
      src="https://kit.fontawesome.com/762c591422.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="shortcut icon"
      href="images/graduation-cap.png"
      type="image/x-icon"
    />
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/admin.css" />
  </head>
  <body class="body">
    <header class="header">
      <div class="struct">
        

        <span class="logo_header home">
          <img src="../images/logo_header.png" alt="" />
        </span>

        <div class="btn_menu">
          <i class="far fa-bars" ></i>
        </div>

      </div>
    </header>

    <div class="container_page">
      <div class="menu_nav">
        <div id="Dashboard" class="nav_item active">
          <span class="text">Dashboard</span>
        </div>
        <div id="Medicament" class="nav_item">
          <span class="text">Medicaments</span>
        </div>
        <div id="Commande" class="nav_item">
          <span class="text">Commandes</span>
        </div>
        <div id="Vente" class="nav_item">
          <span class="text">Ventes</span>
        </div>
        <div id="Ville" class="nav_item">
          <span class="text">Villes</span>
        </div>
        <div id="CMS" class="nav_item">
          <span class="text">CMS</span>
        </div>
        <div id="Admin" class="nav_item">
          <span class="text">Admin</span>
        </div>
        <div id="Statistique" class="nav_item">
          <span class="text">Statistiques</span>
        </div>

        <div id="logout" class="logout">Deconnexion</div>
      </div>

      <div class="main_page">
        <div class="struct">
          <!-- load container -->
          <div
            id="loading_container"
            data-aos="fade-down"
            class="load_container"
          >

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
                    <div class="val"> <?= $_SESSION["Total_vente"]?> XAF</div>
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
          </div>

          <div style="margin-top: 100px; opacity: 0">d</div>
        </div>
      </div>
    </div>

    
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.18.2/core.js"
      integrity="sha512-kvRAEzU74MiFnY9BeeLz99N4jCgf6RpN3zNAkwzqysueZQtTbFSyBrfghW+2DLEOs6YiIq+6tKtNi6PyZvAhfA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
