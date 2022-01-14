function validateNumber(number) {
  var filter =
    /^([1-9])([0-9]){0,}$/;
  if (filter.test(number)) {
    return true;
  } else {
    return false;
  }
}



// medicaments

//ajouter un medicament

// fonction pour ajouter les produits
function addProduct() {

    var nom_produit = $(".nom_produit").val();
    var categorie_medoc = $(".categorie_medoc").val();
    var prix_produit = Number($(".prix_produit").val());
    var qte_produit = Number($(".qte_produit").val());
  
    if (
        nom_produit != "" ||
        categorie_medoc != "" ||
        prix_produit != "" ||
        qte_produit != ""
    ) {
      if (validateNumber(prix_produit) && validateNumber(qte_produit)){
 
        $(".war_add_produit").text("");
        console.log("les nombres sont valides");

        var form = $('#add_medoc').get(0);
        var formData = new FormData(form);

        $.ajax({	
          url : 'functions/add_medoc.php',
          type : 'POST',
          enctype: 'multipart/form-data',
          data: formData,
          processData: false,
          contentType: false,
          cache: false,
          timeout: 600000,
          dataType:"html",
          beforeSend:function(){
           
          },
          success : function(reponse,statut){
           
            $("<span class='php_exec'>"+reponse+"</span>").insertAfter("#loading_container");
            loading_princ("assets/medicament.php");

            
          },
          complete:function(){
           
          }
        });
  
      }else{
        $(".war_add_medoc").text("Element non valide !");
      }
    }else{
      $(".war_add_medoc").text("veuillez remplir les champs");
    }
}


$(document).ready(function () {
// ajouter les produits
  $('body').on('click', "#bnt_add_medoc", function(){
    addProduct();
  });

});


function updateProduct() {

    var nom_produit = $(".nom_produit").val();
    var categorie_medoc = $(".categorie_medoc").val();
    var prix_produit = Number($(".prix_produit").val());
    var qte_produit = Number($(".qte_produit").val());
    var id_produit = Number($(".id_produit").val());
  
    if (
        nom_produit != "" ||
        categorie_medoc != "" ||
        prix_produit != "" ||
        id_produit != "" ||
        qte_produit != ""
    ) {
      if (validateNumber(prix_produit) && validateNumber(qte_produit)){
 
        $(".war_update_produit").text("");
        console.log("les nombres sont valides");
      form="";
      form= $('#update_medoc').get(0);
      formData="";
      formData = new FormData(form);

        $.ajax({	
          url : 'functions/update_medoc.php',
          type : 'POST',
          enctype: 'multipart/form-data',
          data: formData,
          processData: false,
          contentType: false,
          cache: false,
          timeout: 600000,
          dataType:"html",
          beforeSend:function(){
           
          },
          success : function(reponse,statut){
           
            $("<span class='php_exec'>"+reponse+"</span>").insertAfter("#loading_container");
            loading_princ("assets/medicament.php");

          },
          complete:function(){
           
          }
        });
  
      }else{
        $(".war_update_produit").text("Element non valide !");
      }
    }else{
      $(".war_update_produit").text("veuillez remplir les champs");
    }
}


$(document).ready(function () {
// ajouter les produits
  $('body').on('click', "#bnt_update_medoc", function(){
    updateProduct();
  });

});



$(document).ready(function () {
  
  $('body').on('click', ".delete_product_btn", function(){
    temp_id=$(this).attr("item");
    $("<span class='php_exec'></span>").insertAfter("#loading_container");
    $(".php_exec").load("functions/delete_product.php",{
      temp_id:temp_id,
    },
    loading_princ("assets/medicament.php"));});
});


$(document).ready(function () {
  
  $('body').on('click', ".modify_product_btn", function(){
    temp_id=$(this).attr("item");
    $("#loading_container").load("assets/modified_product.php",{
      temp_id:temp_id,
    },
  );});

});



// villes

function addVille() {

  var nom_ville = $(".nom_ville").val();
  var frais_livraison = Number($(".frais_livraison").val());
 

  if (
    nom_ville != "" ||
    frais_livraison != ""
  ) {
    if (validateNumber(frais_livraison)){

      $(".war_add_ville").text("");
      console.log("les nombres sont valides");
    form="";
    form= $('#add_ville').get(0);
    formData="";
    formData = new FormData(form);

      $.ajax({	
        url : 'functions/add_ville.php',
        type : 'POST',
        enctype: 'multipart/form-data',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        dataType:"html",
        beforeSend:function(){
         
        },
        success : function(reponse,statut){
         
          $("<span class='php_exec'>"+reponse+"</span>").insertAfter("#loading_container");
          loading_princ("assets/ville.php");

        },
        complete:function(){
         
        }
      });

    }else{
      $(".war_add_ville").text("Element non valide !");
    }
  }else{
    $(".war_add_ville").text("veuillez remplir les champs");
  }
}


$(document).ready(function () {
// ajouter les produits
$('body').on('click', "#btn_add_ville", function(){
  addVille();
});

});




function updateVille() {

  var nom_ville = $(".md_nom_ville").val();
  var md_frais = Number($(".md_frais").val());
 

  if (
    md_frais != "" ||
    md_frais != ""
  ) {
    if (validateNumber(md_frais)){

      $(".war_update_ville").text("");
      console.log("les nombres sont valides");
    form="";
    form= $('#update_ville').get(0);
    formData="";
    formData = new FormData(form);

      $.ajax({	
        url : 'functions/update_ville.php',
        type : 'POST',
        enctype: 'multipart/form-data',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        dataType:"html",
        beforeSend:function(){
         
        },
        success : function(reponse,statut){
         
          $("<span class='php_exec'>"+reponse+"</span>").insertAfter("#loading_container");
          loading_princ("assets/ville.php");

        },
        complete:function(){
         
        }
      });

    }else{
      $(".war_update_ville").text("Element non valide !");
    }
  }else{
    $(".war_update_ville").text("veuillez remplir les champs");
  }
}


$(document).ready(function () {
// ajouter les produits
$('body').on('click', "#btn_update_ville", function(){
  updateVille();
});

});



$(document).ready(function () {
  
  $('body').on('click', ".delete_ville_btn", function(){
    temp_id=$(this).attr("item");
    $("<span class='php_exec'></span>").insertAfter("#loading_container");
    $(".php_exec").load("functions/delete_ville.php",{
      temp_id:temp_id,
    },
    loading_princ("assets/ville.php"));});
});







$(document).ready(function () {
  

  $("body")
.on("change", "#list_ville", function () {
  var str = "";
  $(".md_frais").val("");
  $("#list_ville option:selected").each(function () {
    str = $(this).attr("frais");
    $('.md_ville_id').val($(this).attr("item"));
  });
  $(".md_frais").val(str);

 

})
.change();



});





// ADMINISTRATEURS

//ajouter un ADMIN

// fonction pour ajouter les ADMIN
function addAdmin() {

  var nom_admin = $(".nom_admin").val();
  var tel_admin = $(".tel_admin").val();
  var pass_admin = $(".pass_admin").val();
  
  if (
    nom_admin != "" ||
    tel_admin != "" ||
    pass_admin != ""
  ) {
    if (validateNumber(tel_admin)){

      $(".war_add_produit").text("");
      console.log("les nombres sont valides");

      var form = $('#add_admin').get(0);
      var formData = new FormData(form);

      $.ajax({	
        url : 'functions/add_admin.php',
        type : 'POST',
        enctype: 'multipart/form-data',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        dataType:"html",
        beforeSend:function(){
         
        },
        success : function(reponse,statut){
         
          $("<span class='php_exec'>"+reponse+"</span>").insertAfter("#loading_container");
          loading_princ("assets/administrateur.php");

          
        },
        complete:function(){
         
        }
      });

    }else{
      $(".war_add_admin").text("Element non valide !");
    }
  }else{
    $(".war_add_admin").text("veuillez remplir les champs");
  }
}


$(document).ready(function () {
// ajouter les admins
$('body').on('click',"#bnt_add_admin", function(){
  addAdmin();
});

});



$(document).ready(function () {
  

  $("body")
.on("change", "#list_admin", function () {
  var str = "";
  $(".tel_update_admin").val("");
  $("#list_admin option:selected").each(function () {
    str = $(this).attr("tel");
    $('.md_admin_id').val($(this).attr("item"));
  });
  $(".tel_update_admin").val(str);

 

})
.change();



});






function updateAdmin() {

  var tel_update_admin = Number($(".tel_update_admin").val());
  var md_admin_id = Number($(".md_admin_id").val());
  var password_update_admin = $(".password_update_admin").val();
 
 

  if (
    password_update_admin != "" ||
    md_admin_id != "" ||
    tel_update_admin != ""
  ) {
    if (validateNumber(tel_update_admin) && validateNumber(md_admin_id)){

      $(".war_update_admin").text("");
      console.log("les nombres sont valides");
    form="";
    form= $('#update_admin').get(0);
    formData="";
    formData = new FormData(form);

      $.ajax({	
        url : 'functions/update_admin.php',
        type : 'POST',
        enctype: 'multipart/form-data',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        dataType:"html",
        beforeSend:function(){
         
        },
        success : function(reponse,statut){
         
          $("<span class='php_exec'>"+reponse+"</span>").insertAfter("#loading_container");
          loading_princ("assets/administrateur.php");

        },
        complete:function(){
         
        }
      });

    }else{
      $(".war_update_admin").text("Element non valide !");
    }
  }else{
    $(".war_update_admin").text("veuillez remplir les champs");
  }
}


$(document).ready(function () {
// ajouter les produits
$('body').on('click', "#btn_update_admin", function(){
  updateAdmin();
});

});



$(document).ready(function () {
  
  $('body').on('click', ".delete_admin_btn", function(){
    temp_id=$(this).attr("item");
    $("<span class='php_exec'></span>").insertAfter("#loading_container");
    $(".php_exec").load("functions/delete_admin.php",{
      temp_id:temp_id,
    },
    loading_princ("assets/administrateur.php"));});
});





// about cms
function updateAbout() {

  var tel_update_about = Number($(".tel_update_about").val());
  var frais_update_about = Number($(".frais_update_about").val());
  var titre1_update_about = $(".titre1_update_about").val();
  var titre2_update_about = $(".titre2_update_about").val();
  var descr_update_about = $(".descr_update_about").val();
 
 

  if (
    titre1_update_about != "" ||
    titre2_update_about != "" ||
    descr_update_about != "" ||
    frais_update_about != "" ||
    tel_update_about != ""
  ) {
    if (validateNumber(tel_update_about) && validateNumber(frais_update_about)){

      $(".war_update_about").text("");
      console.log("les nombres sont valides");
    form="";
    form= $('#update_about').get(0);
    formData="";
    formData = new FormData(form);

      $.ajax({	
        url : 'functions/update_about.php',
        type : 'POST',
        enctype: 'multipart/form-data',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        dataType:"html",
        beforeSend:function(){
         
        },
        success : function(reponse,statut){
         
          $("<span class='php_exec'>"+reponse+"</span>").insertAfter("#loading_container");
          loading_princ("assets/cms.php");

        },
        complete:function(){
         
        }
      });

    }else{
      $(".war_update_about").text("Element non valide !");
    }
  }else{
    $(".war_update_about").text("veuillez remplir les champs");
  }
}


$(document).ready(function () {
// ajouter les produits
$('body').on('click', "#btn_update_about", function(){
  updateAbout();
});

});





// cancer cms
function updateCancer() {

 
  var titre1_update_cancer = $(".titre1_update_cancer").val();
  var big_titre_update_cancer = $(".big_titre_update_cancer").val();
  var description_update_cancer = $(".description_update_cancer").val();
 
 

  if (
    titre1_update_cancer != "" ||
    big_titre_update_cancer != "" ||
    description_update_cancer != ""
  ) {
    if (true){

      $(".war_update_cancer").text("");
      console.log("les nombres sont valides");
    form="";
    form= $('#update_cancer').get(0);
    formData="";
    formData = new FormData(form);

      $.ajax({	
        url : 'functions/update_cancer.php',
        type : 'POST',
        enctype: 'multipart/form-data',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        dataType:"html",
        beforeSend:function(){
         
        },
        success : function(reponse,statut){
         
          $("<span class='php_exec'>"+reponse+"</span>").insertAfter("#loading_container");
          loading_princ("assets/cms.php");

        },
        complete:function(){
         
        }
      });

    }else{
      $(".war_update_cancer").text("Element non valide !");
    }
  }else{
    $(".war_update_cancer").text("veuillez remplir les champs");
  }
}


$(document).ready(function () {
// ajouter les produits
$('body').on('click', "#btn_update_cancer", function(){
  updateCancer();
});

});




// cancer vih
function updateVih() {

 
  var titre1_update_vih = $(".titre1_update_vih").val();
  var big_titre_update_vih = $(".big_titre_update_vih").val();
  var description_update_vih = $(".description_update_vih").val();
 
 

  if (
    titre1_update_vih != "" ||
    big_titre_update_vih != "" ||
    description_update_vih != ""
  ) {
    if (true){

      $(".war_update_vih").text("");
      console.log("les nombres sont valides");
    form="";
    form= $('#update_vih').get(0);
    formData="";
    formData = new FormData(form);

      $.ajax({	
        url : 'functions/update_vih.php',
        type : 'POST',
        enctype: 'multipart/form-data',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        dataType:"html",
        beforeSend:function(){
         
        },
        success : function(reponse,statut){
         
          $("<span class='php_exec'>"+reponse+"</span>").insertAfter("#loading_container");
          loading_princ("assets/cms.php");

        },
        complete:function(){
         
        }
      });

    }else{
      $(".war_update_vih").text("Element non valide !");
    }
  }else{
    $(".war_update_vih").text("veuillez remplir les champs");
  }
}


$(document).ready(function () {
// ajouter les produits
$('body').on('click', "#btn_update_vih", function(){
  updateVih();
});

});



function separateur_millier(a, b) {
  a = '' + a;
  b = b || ' ';
  var c = '',
      d = 0;
  while (a.match(/^0[0-9]/)) {
    a = a.substr(1);
  }
  for (var i = a.length-1; i >= 0; i--) {
    c = (d != 0 && d % 3 == 0) ? a[i] + b + c : a[i] + c;
    d++;
  }
  return c;
}



$(document).ready(function () {
  
  $('body').on('click', ".delete_commande_btn", function(){
    temp_id=$(this).attr("item");
    $("<span class='php_exec'></span>").insertAfter("#loading_container");
    $(".php_exec").load("functions/delete_commande.php",{
      temp_id:temp_id,
    },
    loading_princ("assets/commande.php"));});
});


$(document).ready(function () {
  
  $('body').on('click', ".confirm_commande_btn", function(){
    temp_id=$(this).attr("item");
    $("<span class='php_exec'></span>").insertAfter("#loading_container");
    $(".php_exec").load("functions/confirm_commande.php",{
      temp_id:temp_id,
    },
    loading_princ("assets/commande.php"));});
});





$(document).ready(function () {
  

  $("body").on("change", "#liste_day", function () {
  var str = "";
  $("#liste_day option:selected").each(function () {
    str = $(this).text();

  });

  $.ajax({
    url: "functions/load_vente_day.php", // La ressource ciblée
    type: "POST", // Le type de la requête HTTP
    data: { date: str},
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
  
      header_tab='<tr><th>Id</th><th>Nom</th><th>Tel</th><th>Categorie</th><th>Type</th>      <th>Medicament</th>      <th>Qté</th>      <th>Prix</th>      <th>Ordonance</th>      <th>Ville</th>      <th>Quartier</th>      <th>Statut</th>      <th>Date</th>          </tr>';
      $("#Table_vente_day").html(header_tab + code_html);
     
    },
  });

  $.ajax({
    url: "functions/Nbr_commande.php", // La ressource ciblée
    type: "POST", // Le type de la requête HTTP
    data: { date: str},
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
  
    
      $("#NBRE_COMMANDE").text(code_html);
     
    },
  });

  $.ajax({
    url: "functions/Nbr_vente.php", // La ressource ciblée
    type: "POST", // Le type de la requête HTTP
    data: { date: str},
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
  
    
      $("#NBRE_VENTE").text(code_html);
     
    },
  });


  $.ajax({
    url: "functions/recette_vente.php", // La ressource ciblée
    type: "POST", // Le type de la requête HTTP
    data: { date: str},
    dataType: "html", // Le type de données à recevoir, ici, du HTML
    success: function (code_html, statut) {
  
      total=separateur_millier(Number(code_html), ',')
      $("#RECETTE").text(total);
     
    },
  });
 

})
.change();



});
