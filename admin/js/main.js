$(document).ready(function () {
    selected(".nav_item");
  });

  function loading_princ(elt, cb) {
    window.scrollTo(0, 0);
    $("#loading_container").load(elt, cb);
    console.log(elt);
  }


  // navigation

$(document).ready(function () {
  $("#Dashboard").on("click", function () {
    loading_princ("assets/home.php", function () {

    });
  });
  $("#Medicament").on("click", function () {
    loading_princ("assets/medicament.php", function () {

    });
  });
  $("#Commande").on("click", function () {
    loading_princ("assets/commande.php", function () {

    });
  });
  $("#Vente").on("click", function () {
    loading_princ("assets/vente.php", function () {

    });
  });
  $("#Ville").on("click", function () {
    loading_princ("assets/ville.php", function () {

    });
  });
  $("#CMS").on("click", function () {
    loading_princ("assets/cms.php", function () {

    });
  });
  $("#Admin").on("click", function () {
    loading_princ("assets/administrateur.php", function () {

    });
  });
  $("#Statistique").on("click", function () {
    loading_princ("assets/statistique.php", function () {

    });
  });
  $("#logout").on("click", function () {
    window.location.replace('functions/deconnexion.php');
  });

});




$(document).ready(function () {
  

  $('.btn_menu').on('click',function(){
    $('.menu_nav').toggleClass('active');
  })

});



$(document).ready(function () {
  
  $('.nav_item').on('click',function(){
    $('.menu_nav').removeClass('active');
  });

});