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
    url: "functions/get_admin.php", // La ressource ciblée
    type: "GET", // Le type de la requête HTTP
    /**
     * data n'est plus renseigné, on ne fait plus passer de variable
     */
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
      $(code_html).insertAfter("#inset_admin");
     

    },
  });
  

    $.ajax({
    url: "functions/list_admin.php", // La ressource ciblée
    type: "GET", // Le type de la requête HTTP
    /**
     * data n'est plus renseigné, on ne fait plus passer de variable
     */
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
     
      $("#list_admin").html($("#list_admin").html()+code_html);

     

    },
  });

</script>


  <div data-aos="fade-down">
    <div class="Titre">
        <span class="text1">Administrateurs</span>
        <span class="text2"
          >Ajouter, modifier, ou supprimer un administrateur</span
        >
      </div>
    
      <div class="ville_form">
        <div class="ville_form_item">
          <div class="box_name">Ajouter un admin</div>
          <div class="war_add_admin"></div>
          <form id="add_admin" action="" class="form_item flex_center">
            <div class="struct">
              <input
                type="text"
                placeholder="Nom de l'admin"
                class="input_styling nom_admin"
                required
                name="nom"
              />
              <input
                type="tel"
                placeholder="Tel"
                class="input_styling tel_admin"
                required
                name="tel"
              />
              <input
                type="text"
                placeholder="Mot de pass"
                class="input_styling pass_admin"
                name="password"
              />
              <div id="bnt_add_admin" class="btn_sub flex_center">Ajouter</div>
            </div>
          </form>
        </div>
    
        <div class="ville_form_item">
          <div class="box_name">Modifier un admin</div>
          <div class="war_update_admin"></div>
          <form id="update_admin" action="" class="form_item flex_center">
            <div class="struct">
    
              <select class="input_styling" name="" id="list_admin" required>
               
              </select>

              <input type="hidden" class="md_admin_id" name="id" value="">
    
              <input
              type="tel"
              placeholder="Tel"
              class="input_styling tel_update_admin"
              required
              name="tel"
              />
            <input
              type="text"
              placeholder="Mot de pass"
              class="input_styling password_update_admin"
              name="password"
            />
              <div id="btn_update_admin" class="btn_sub flex_center">Modifier</div>
            </div>
          </form>
        </div>
    
    
    
      </div>
    
    
      <div class="box_name">Liste des admins</div>
      <div class="medicament_container">
        <div class="medicament_container_struct">
          <table class="table_container">
            <tr id="inset_admin">
              <th>Id</th>
              <th>Nom de l'admin</th>
              <th>Tel</th>
              <th>Action</th>
            </tr>
            
           
          </table>
        </div>
      </div>
    
      <div class="load_more">
        <div class="btn_load_more">Charger plus</div>
      </div>
  </div>