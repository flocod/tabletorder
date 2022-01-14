<?php
session_start();
require "../class/backend.php";
if(!isset($_SESSION["pseudo"]))
{
  ?>

  <script type="text/javascript">
     window.location.replace("../index.php?info=Veuillez vous reconnectez svp!");
  </script>
  
  
  <?php

}

$table_about=backend::get_about();
$table_cancer=backend::get_cancer();
$table_vih=backend::get_vih();

?>


<div data-aos="fade-down">
    <div class="Titre">
        <span class="text1">CMS</span>
        <span class="text2">Modifier les contenus du site</span>
    </div>

      <div class="ville_form">
        <div class="ville_form_item cms_form">
          <div class="box_name">Apropos</div>
          <div class="war_update_about"></div>
          <form id="update_about" action="" class="form_item flex_center">
            <div class="struct">
              <input
                type="tel"
                placeholder="Telephone"
                class="input_styling tel_update_about"
                value="<?= $table_about['tel'] ?>"
                name="tel"
                required
              />
              <input
                type="tel"
                placeholder="Frais de livraison"
                class="input_styling frais_update_about"
                value="<?= $table_about['frais_livraison'] ?>"
                name="frais"
                required
              />
              <input
                type="text"
                placeholder="Titre1"
                class="input_styling titre1_update_about"
                required
                name="titre1"
                value="<?= $table_about['titre1'] ?>"
              />
              <input
                type="text"
                placeholder="Titre2"
                class="input_styling cms_form titre2_update_about"
                required
                name="titre2"
                value="<?= $table_about['titre2'] ?>"
              />
             
              <textarea class="input_styling descr_update_about" style="height: 200px;" name="description" id=""><?= $table_about['description'] ?>
              </textarea>

              <div id="btn_update_about" class="btn_sub  flex_center">Sauvegarder</div>
            </div>
          </form>
        </div>

        <div class="ville_form_item cms_form">
          <div class="box_name">Cancer</div>
          <div class="war_update_cancer"></div>
          <form id="update_cancer" action="" class="form_item flex_center">
            <div class="struct">
              <input
                type="text"
                placeholder="titre1"
                name="titre1"
                class="input_styling titre1_update_cancer" 
                value="<?= $table_cancer['titre1'] ?>"
                required
              />
              <input
                type="text"
                placeholder="Grand titre"
                class="input_styling big_titre_update_cancer"
                required
                name="big_titre"
                value="<?= $table_cancer['big_titre'] ?>"
              />
             
             
              <textarea  class="input_styling description_update_cancer" style="height: 200px;" name="description" id=""><?= $table_cancer['description'] ?>
              </textarea>

              <div id="btn_update_cancer" class="btn_sub flex_center">Sauvegarder</div>
            </div>
          </form>
        </div>

        <div class="ville_form_item cms_form">
          <div class="box_name">VIH SIDA</div>
          <form id="update_vih" action="" class="form_item flex_center">
            <div class="struct">
              <input
                type="text"
                placeholder="titre1"
                class="input_styling"
                value="<?= $table_vih['titre1'] ?>"
                required
                name="titre1"
              />
              <input
                type="text"
                placeholder="Grand titre"
                class="input_styling"
                required
                value="<?= $table_vih['big_titre'] ?>"
                name="big_titre"
              />
             
             
              <textarea class="input_styling" style="height: 200px;" name="description" id=""><?= $table_vih['description'] ?>
              </textarea>

              <div id="btn_update_vih" class="btn_sub flex_center">Sauvegarder</div>
            </div>
          </form>
        </div>

      


      </div>

</div>
