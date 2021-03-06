<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tablet Order</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Tablet Order | Acceuil - commandez les medicaments du cancers et du VIH
      SIDA
    </title>
    <meta
      name="keywords"
      content="Medicaments, Order, VIH SIDA, cancers, Cameroun, Cameroon, Institut, Diplôme, Qualification, Attestation, MINEFOP, Ministère, Emploi, Stage, Placement, www.cisformation.com"
    />
    <meta
      name="description"
      content="Au terme de la formation, nous assistons dans la recherche d'emploi après obtention du diplôme national CQP, DQP émis par L'Etat du Cameroun."
    />

    <meta
      name="thumbnail"
      content="https://cisformation.com/images/google_thumbnail.jpg"
    />
    <meta property="og:site_name" content="CIS Formation" />
    <meta
      property="og:title"
      content="Centre de Formation professionnel et diplômes délivrés par l'Etat du Cameroun"
    />
    <meta property="og:type" content="Education" />
    <meta
      property="og:description"
      content="Formations professinnelles dans les filières: Douane-Transit, Logistique & Transport, Secrétariat Secrétariat Assistance de Direction, Secrétariat Comptable, Secrétariat bureautique Bilingue, Infographie Multimédia 2D/3D, Dessin Industriel AutoCAD 2D/3D, Montage Audiovisuel et reportage vidéo, Comptabilité Informatisée (Sage SAARI) et Gestion, Gestion des Ressources Humaines (GRH), Fiscalité et Audit, Banque et Assurance, Qualité Hygiène Sécurité Environnement (QHSE), Gestion des Projets, Marketing Communication Digitale, Maintenance Informatique & Réseau, Electricité Bâtiment Industrielle & Groupes électrogènes, Chaudronnerie Industrielle, Soudure et Tuyautage, Froid et Climatisation, Mécanique Automobile, Instrumentation et Régulation, Réseau & Télécommunications d'Entreprise, Développement d'Application et web."
    />
    <meta property="og:url" content="https://www.cisformation.com" />
    <meta
      property="og:image"
      content="https://www.cisformation.com/images/backtoschool.jpg"
    />

    <script
      src="https://kit.fontawesome.com/762c591422.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="shortcut icon"
      href="images/graduation-cap.png"
      type="image/x-icon"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/admin.css" />
  </head>
  <body class="body">
    <header class="header">
      <div class="struct">
        <a href="tel:697132706" class="info_header">
          <span class="ico ico_rot"><i class="fas fa-phone-volume"></i></span>
          <span class="text">
            <span class="text1">0800 0487211</span>
            <span class="text2">Call us anytime</span>
          </span>
        </a>

        <span class="logo_header home">
          <img src="../images/logo_header.png" alt="" />
        </span>

        <span class="info_header info_header_facultatif">
          <span class="ico"><i class="fas fa-shipping-fast"></i></span>
          <span class="text">
            <span class="text1">Livrason rapide</span>
            <span class="text2">En 24h/48h</span>
          </span>
        </span>


        


      </div>
    </header>

    <div class="container_page FORM_LOG_BOX" style="margin-top:0px">
        <div class="form_log flex_center">
            <div class="struct">
                <div class="titre1">Hi Administrator</div>
                <div class="titre2">Fill the form to connect
                    <div style="color: rgb(77, 255, 41);">
                    <?php

                        if(isset($_GET["info"])){
                          echo $_GET["info"];
                        }

                    ?>
                    </div>
                </div>

                <form class="form_connect" method="post" action="functions/connexion.php" >
                        <input type="tel" name="tel" placeholder="Tel" require>
                        <input type="password" name="pass" placeholder="password" require>
                        <input type="submit" value="Connexion">
                </form>

            </div>
        </div>
    
    </div>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
   
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
