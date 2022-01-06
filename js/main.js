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
    $(".form_VIH_SIDA").removeClass("active");
  });
  $("body").on("click", ".menu_VIH_SIDA", function () {
    $(".form_cancer").removeClass("active");
    $(".form_VIH_SIDA").addClass("active");
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
    .typeString("VIH SIDA")
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


$(document).ready(function () {
  



  $("body").on( 'change', '#medoc_input',function () {
    var str = "";
    $('.val_qte').val(1);
    $( "#medoc_input option:selected" ).each(function() {
      str= $( this ).attr('prix');
    });
    $( "#TTprix" ).val( str );
  })
  .change();





});

$(document).ready(function () {
  
  $('body').on('click','.btn_plus',function(){
    temp="";
    Total_val="";
    Total_val=Number($( "#TTprix" ).val());

    if( Total_val!=0){
      temp=Number($('.val_qte').val())+1;
      $('.val_qte').val(temp);
  
  
      Total_val= Number($( "#medoc_input option:selected" ).attr('prix')) + Number($( "#TTprix" ).val());
      $( "#TTprix" ).val(Total_val);
    }



    


  });

  $('body').on('click','.btn_minus',function(){
    temp="";
    temp=Number($('.val_qte').val());

    if(temp>1){
    $('.val_qte').val(temp-1);


    Total_val=Number($( "#TTprix" ).val()) - Number($( "#medoc_input option:selected" ).attr('prix'));
    $( "#TTprix" ).val(Total_val);

    }

    
  });


});