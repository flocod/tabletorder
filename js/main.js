$(document).ready(function () {
  banner_height = window.innerHeight - $(".header").innerHeight();
  $(".banner").css("height", banner_height + "px");
});

function selected(element, cb) {
  $("body").on("click", element, function () {
    $(element).removeClass("active");
    $(this).addClass("active");
  });
}

$(document).ready(function () {
  selected(".menu_commande_item");
});

$(document).ready(function () {
  $("body").on("click", ".menu_cancer", function () {
    $(".form_cancer").addClass("active");
    $(".form_sida").removeClass("active");
  });
  $("body").on("click", ".menu_sida", function () {
    $(".form_cancer").removeClass("active");
    $(".form_sida").addClass("active");
  });
});

// type writer 

function home_writer() {
  var typewrite = document.getElementById("typewrite");

  var typewriter = new Typewriter(typewrite, {
    loop: true,
    deleteSpeed: 1,
  });

  typewriter
    .typeString("SIDA")
    .pauseFor(4000)
    .deleteAll()
    .typeString("CANCER")
    .pauseFor(4000)
    .deleteAll()
    .start();
}

$(document).ready(function () {
  home_writer();
});






function laoding_princ(elt, cb) {
    window.scrollTo(0,0);
    $("#loading_container").load(elt, cb);
    console.log(elt);
  }
  
// navigation

$(document).ready(function () {

    
    $('.home').on('click',function(){
        laoding_princ("assets/home.html", function () {
            home_writer();
            innerheight = window.innerHeight;
            $(".banner").css("height", innerheight + "px");
          });
    });
    $('body').on('click','.COMMANDER',function(){
        laoding_princ("assets/commande.html", function () {});
    });

});
