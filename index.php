<?php
session_start();
require "admin/class/backend.php";



$table_about=backend::get_about();
$table_cancer=backend::get_cancer();
$table_vih=backend::get_vih();

$_SESSION['tel']=$table_about['tel'];



?>

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
    <link rel="stylesheet" href="css/style.css" />

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
   


    <script>

</script>


  </head>
  <body class="body">
    <header class="header">
      <div class="struct">
        <a href="tel:+237<?= $_SESSION['tel'] ?>" class="info_header">
          <span class="ico ico_rot"><i class="fas fa-phone-volume"></i></span>
          <span class="text">
            <span class="text1">+237<?= $_SESSION['tel'] ?></span>
            <span class="text2">Call us anytime</span>
          </span>
        </a>

        <span class="logo_header home">
          <img src="images/logo_header.png" alt="" />
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

    <div id="loading_container">
      <div class="banner">
        <div class="struct">
          <div class="intro">
            <span class="icon"><i class="fad fa-capsules"></i></span>
            <span class="text1">MEDICAMENTS</span>
            <span class="text2" id="typewrite">VIH SIDA</span>
            <span class="text3"
              >La commande se fait exclusivement <br />
              sous ordonnance médicale</span
            >

            <div class="flex">
              <div class="btn_act COMMANDER" style="background: #f8f8f8">
                <span class="ico"><i class="fas fa-ambulance"></i></span>
                <span class="text">COMMANDER</span>
              </div>
              <a href="#about" class="btn_act">
                <span class="text" style="color: #f8f8f8">En savoir +</span>
              </a>
            </div>

            <a href="#about" class="scroll_indice">
              <i class="fal fa-chevron-down"></i>
            </a>
          </div>
        </div>
      </div>

      <div id="about" class="about space_object">
        <div class="inner_struct">
          <div class="services">
            <div class="image">
              <img src="images/illustration.svg" alt="" />
            </div>

            <div class="text_services">
              <div class="title_block">
                <span class="text1">De quoi avez vous besoin ?</span>
                <span class="text2">Selectionner le type de medicament</span>
              </div>

              <div class="service_contain">
                <div class="service_item">
                  <span class="ico_service"
                    ><i class="fas fa-capsules"></i
                  ></span>
                  <span class="t1"><?= $table_cancer['titre1']; ?> </span>
                  <span class="t2"><?= $table_cancer['big_titre']; ?></span>
                  <span class="desc_service">
                  <?= $table_cancer['description']; ?>
                  </span>

                  <div class="btn_act COMMANDER" style="background: #f8f8f8">
                    <span class="ico"><i class="fas fa-ambulance"></i></span>
                    <span class="text">COMMANDER</span>
                  </div>
                </div>
                <div class="service_item">
                  <span class="ico_service"
                    ><i class="fas fa-tablets"></i
                  ></span>
                  <span class="t1"><?= $table_vih['titre1']; ?> </span>
                  <span class="t2"><?= $table_vih['big_titre']; ?></span>
                  <span class="desc_service">
                  <?= $table_vih['description']; ?>
                  </span>
                  <div class="btn_act COMMANDER" style="background: #f8f8f8">
                    <span class="ico"><i class="fas fa-ambulance"></i></span>
                    <span class="text">COMMANDER</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="flex">
            <div class="text_block">
              <div class="title_block">
                <span class="text1"><?= $table_about['titre1']; ?></span>
                <span class="text2"><?= $table_about['titre2']; ?></span>
              </div>

              <div class="text_detail">
               <?= $table_about['description']; ?>
              </div>

              <div class="btn_act COMMANDER" style="background: #f8f8f8">
                <span class="ico"><i class="fas fa-ambulance"></i></span>
                <span class="text">COMMANDER</span>
              </div>
            </div>

            <div class="image_box">
              <div class="image">
                <img src="images/images_about.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="faq space_object">
        <div class="inner_struct">
          <div class="title_block">
            <span class="text1">Comment Ca marche ?</span>
            <span class="text2"
              >Suivez ces étapes pour passer votre comande</span
            >
          </div>

          <div class="contain_faq">
            <div class="faq_item">
              <div class="item_side left">
                <div class="step">Selectionner le type de medicament</div>
              </div>

              <span class="bx_check">
                <i class="far fa-check-double"></i>
              </span>

              <div class="item_side right">
                <div class="step_box">
                  <div class="numb">01</div>

                  <div class="image_step">
                    <img src="images/svg/step1.svg" alt="" />
                  </div>
                </div>
              </div>
            </div>

            <!-- text to right -->
            <div class="faq_item">
              <div class="item_side left">
                <div class="step_box">
                  <div class="numb">02</div>

                  <div class="image_step">
                    <img src="images/svg/step2.svg" alt="" />
                  </div>
                </div>
              </div>
              <span class="bx_check">
                <i class="far fa-check-double"></i>
              </span>

              <div class="item_side right">
                <div class="step">Remplissez vos informations requises</div>
              </div>
            </div>

            <div class="faq_item">
              <div class="item_side left">
                <div class="step">Selectionner le mode de paiement</div>
              </div>

              <span class="bx_check">
                <i class="far fa-check-double"></i>
              </span>

              <div class="item_side right">
                <div class="step_box">
                  <div class="numb">03</div>

                  <div class="image_step">
                    <img src="images/svg/step3.svg" alt="" />
                  </div>
                </div>
              </div>
            </div>

            <!-- text to right -->
            <div class="faq_item">
              <div class="item_side left">
                <div class="step_box">
                  <div class="numb">04</div>

                  <div class="image_step">
                    <img src="images/svg/step4.svg" alt="" />
                  </div>
                </div>
              </div>
              <span class="bx_check">
                <i class="far fa-check-double"></i>
              </span>

              <div class="item_side right">
                <div class="step">Validez votre commande en payant</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="commande space_object">
        <div class="inner_struct">
          <div class="title_block">
            <span class="text1">Commandez votre medicament !</span>
            <span class="text2">Selectionner le type de medicament</span>
           
          </div>

          <div class="flex_commande">
            <div class="box_commande">
              <div class="menu_commande">
                <div class="menu_cancer menu_commande_item active">
                  <span class="ico"><i class="fas fa-capsules"></i></span>
                  <span class="text">CANCER</span>
                </div>
                <div class="menu_VIH_SIDA menu_commande_item">
                  <span class="ico"><i class="fas fa-tablets"></i></span>
                  <span class="text">VIH SIDA</span>
                </div>
              </div>



              <div class="form_command">
              

                <!-- commande cancer -->
          <form class="form_cancer form active" action="commande.php" enctype='multipart/form-data' method="post">
            <div class="form_info">
              une charge vous sera appliquée pour <br />
              la livraison à domicile
            </div>

            <input type="hidden" name="categorie" value="cancer">

            <div class="flex_input">
              <div class="input_box">
                <span class="label">Nom et prenom *</span>
                <input
                  class="input_style"
                  type="text"
                  placeholder="Entrez votre nom"
                  required
                  name="nom"
                />
              </div>
              <div class="input_box">
                <span class="label">Type de cancer *</span>
                <input
                  name="type"
                  class="input_style"
                  type="text"
                  placeholder="Entrez le type de cancer"
                  required
                />
              </div>
            </div>

            <div class="flex_input">
              <div class="input_box">
                <span class="label">Ville de residence *</span>
                <select class="input_style ville_input" name="ville"  required>
                <option value="" id="inset_ville" >Selectionnez votre ville</option>
                  

                <?php 
                
                $table=backend::get_ville();

                for($i=0;$i<count($table);$i++){

                    echo'
                        <option  value="'.$table[$i]["nom_ville"].'" frais="'.$table[$i]["frais_livraison"].'"  item="'.$table[$i]["id"].'" >'.$table[$i]["nom_ville"].'</option>
                    ';
                }
                
                ?>


                </select>
              </div>
              <div class="input_box">
                <span class="label">Quartier de residence *</span>
                <input
                  class="input_style"
                  type="text"
                  placeholder="Quatier"
                  required
                  name="quatier"
                />
              </div>
            </div>
            <div class="flex_input">
              <div class="input_box">
                <span class="label"
                  >Joindre votre ordonnance ici (jpg, png, jpeg) *</span
                >
                <input class="btn_file" name="ordonance" accept="image/*" required type="file" />
              </div>
              <div class="input_box">
                <span class="label">Numero de telephone *</span>
                <input
                  class="input_style"
                  type="tel"
                  placeholder="Telephone"
                  name="tel"
                  required
                />
              </div>
            </div>

            <div class="flex_input">
              <div class="input_box" style="width: 100%">
                <span class="label">Medicament *</span>
                <select id="medoc_input"  class="input_style " name="medoc" required>
                  <option id="inset_medoc" value="" prix="0">Selectionnez le medicament</option>
                  <?php

                      $table=backend::get_medoc();

                      for($i=0;$i<count($table);$i++){

                        echo'
                            <option  value="'.$table[$i]["nom_produit"].'" prix="'.$table[$i]["prix_produit"].'"  item="'.$table[$i]["id"].'" >'.$table[$i]["nom_produit"].'</option>
                        ';
                      }

                   ?>
                </select>
              </div>
            </div>

            <div class="flex_input">
              <div class="input_box">
                <span class="label">Quantité *</span>
                <div class="box_add">
                  <div class="btn btn_minus "><i class="fas fa-minus"></i></div>
                  <input type="text" value="1" class="val_qte" readonly name="qte" required>
                  
                  <div class="btn btn_plus"><i class="fas fa-plus"></i></div>
                </div>
              </div>
              
              <div class="input_box display_prix">
                <input
                id="TTprix"
                  name="prix"
                  class="input_style TTprix"
                  type="text"
                  placeholder="0"
                  readonly
                 
                  style="border: none"
                />
                <span class="unit"> XAF</span>
              </div>

            </div>

            <div class="frais_text"> 
               frais de livraison : <span class="frais_livraison frais_livraison_cancer" class="value">2000</span> XAF
            </div>
         

            <button type="submit" style="border:none" class="submit">PAYER MAINTENAMT</button>

            <div class="payement_info">
              <div class="titre">Mode de paiement pris en charge</div>
              <div class="payement_box">
                <span class="payement_item">
                  <i class="fab fa-cc-mastercard"></i>
                </span>
                <span class="payement_item">
                  <i class="fab fa-cc-visa"></i>
                </span>
                <span class="payement_item">
                  <i class="fab fa-cc-paypal"></i>
                </span>
                <span class="payement_item">
                  <i class="fab fa-bitcoin"></i>
                </span>
                <span class="payement_item">
                  <img src="images/mtnmomo.png" alt="" />
                </span>
                <span class="payement_item">
                  <img src="images/orangemomo.png" alt="" />
                </span>
              </div>
            </div>
          </form>


          <!-- commande vih -->
                <form class="form_VIH_SIDA form" action="commande.php"  enctype='multipart/form-data' method="post">
                  <div class="form_info" style="color: red">
                    Les médicaments du VIH SIDA sont gratuits. Cependant une
                    charge moyenne de xaf 2000 vous sera appliqué pour
                    l’entretien du site et la livraison Express à domicile
                    partout dans le pays, en 24/48h Grand Maximum.
                  </div>

                  <input type="hidden" name="categorie" value="VIH SIDA">

                  <div class="flex_input">
                    <div class="input_box">
                      <span class="label">Nom et prenom *</span>
                      <input
                        class="input_style"
                        type="text"
                        placeholder="Entrez votre nom"
                        required
                        name="nom"
                      />
                    </div>
                    <div class="input_box">
                      <span class="label"
                        >Votre type de protocole 1 , 2 ou 3 *</span
                      >
                      <select class="input_style" name="type" id="" required>
                        <option value="">Selectionnez le type de protocole</option>
                        <option value="protocole 1">protocole 1</option>
                        <option value="protocole 2">protocole 2</option>
                        <option value="protocole 3">protocole 3</option>
                      </select>
                    </div>
                  </div>

                  <div class="flex_input">
                    <div class="input_box">
                      <span class="label">Ville de residence *</span>
                      <select class="input_style ville_input_cancer" name="ville" id="" required>
                        <option value="" id="inset_ville_sida">Selectionnez votre ville</option>
                        <?php 
                
                            $table=backend::get_ville();

                            for($i=0;$i<count($table);$i++){

                                echo'
                                    <option  value="'.$table[$i]["nom_ville"].'" frais="'.$table[$i]["frais_livraison"].'"  item="'.$table[$i]["id"].'" >'.$table[$i]["nom_ville"].'</option>
                                ';
                            }
                
                        ?>
                      </select>
                    </div>
                    <div class="input_box">
                      <span class="label">Quartier de residence *</span>
                      <input
                        class="input_style"
                        type="text"
                        placeholder="Quatier"
                        required
                        name="quatier"
                      />
                    </div>
                  </div>
                  <div class="flex_input">
                    <div class="input_box">
                      <span class="label"
                        >Joindre votre ordonnance ici (jpg, png, jpeg)  *</span
                      >
                      <input class="btn_file" name="ordonance" accept="image/*" required type="file" />
                    </div>
                    <div class="input_box">
                      <span class="label">Numero de telephone *</span>
                      <input
                        class="input_style"
                        type="tel"
                        placeholder="Telephone"
                        name="tel"
                        required
                      />
                    </div>
                  </div>

                  <input type="hidden" name="medoc" value="">
                  <input type="hidden" name="qte" value="">

                  <div class="frais_text"> 
                      frais de livraison : <span class="frais_livraison" class="value">2000</span> XAF
                  </div>

                  <button type="submit" class="submit" style="border:none">PAYER MAINTENAMT</button>

                  <div class="payement_info">
                    <div class="titre">Mode de paiement pris en charge</div>
                    <div class="payement_box">
                      <span class="payement_item">
                        <i class="fab fa-cc-mastercard"></i>
                      </span>
                      <span class="payement_item">
                        <i class="fab fa-cc-visa"></i>
                      </span>
                      <span class="payement_item">
                        <i class="fab fa-cc-paypal"></i>
                      </span>
                      <span class="payement_item">
                        <i class="fab fa-bitcoin"></i>
                      </span>
                      <span class="payement_item">
                        <img src="images/mtnmomo.png" alt="" />
                      </span>
                      <span class="payement_item">
                        <img src="images/orangemomo.png" alt="" />
                      </span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


            <?php
                if(isset($_GET['info'])){
                  echo '<div  class="pop_up">'.$_GET['info'].' </div>';
                }
            ?>

    <footer class="footer">
      <div class="inner_struct">
        <div class="flex">
          <img class="logo_footer home" src="images/logo_footer.svg" alt="" />

          <span class="text"
            >copyright TabletOrder 2022 | Tous droits reservés
          </span>
        </div>
      </div>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.18.2/core.js"
      integrity="sha512-kvRAEzU74MiFnY9BeeLz99N4jCgf6RpN3zNAkwzqysueZQtTbFSyBrfghW+2DLEOs6YiIq+6tKtNi6PyZvAhfA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>
