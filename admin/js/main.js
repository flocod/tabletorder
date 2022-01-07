$(document).ready(function () {
    selected(".nav_item");
  });




  // navigation

$(document).ready(function () {
  $("#Dashboard").on("click", function () {
    laoding_princ("assets/home.html", function () {

    });
  });
  $("#Medicament").on("click", function () {
    laoding_princ("assets/medicament.html", function () {

    });
  });
  $("#Commande").on("click", function () {
    laoding_princ("assets/commande.html", function () {

    });
  });
  $("#Vente").on("click", function () {
    laoding_princ("assets/vente.html", function () {

    });
  });
  $("#Ville").on("click", function () {
    laoding_princ("assets/ville.html", function () {

    });
  });
  $("#CMS").on("click", function () {
    laoding_princ("assets/cms.html", function () {

    });
  });
  $("#Admin").on("click", function () {
    laoding_princ("assets/administrateur.html", function () {

    });
  });
  $("#Statistique").on("click", function () {
    laoding_princ("assets/statistique.html", function () {

    });
  });
  $("#logout").on("click", function () {
    window.location.replace('index.html');
  });

});