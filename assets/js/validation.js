$(document).ready(function () {
  function verif() {
    var envoi = true;
    var x = $("[id^=req_]");
    var er_small= $("[id^=req_]+small")
    console.log(x)
    $(x).each(function(){
      if (x.val() == "") {
      envoi = false;
      $(x).addClass("alert alert-danger")
      $(er_small).html("Ce champ est obligatoire")
      $(er_small).addClass("text-danger mt-0 pt-0 mb-3");
     
     }
      else {envoi==true}
    });

    if ($("#traitement_info").is(":not(:checked)")) {
      envoi = false;
      $("#label_info").addClass("text-danger");
    };
    if ($("#req_nom").val().match(":not(/^[A-Za-z]+$/)")) {
      envoi = false;
      $("#req_nom").addClass("alert alert-danger")
      $(er_small).html("Le nom de doit comporter que des lettres")
      $(er_small).addClass("text-danger mt-0 pt-0 mb-3")
      ;
    };
        
    if (envoi == true) {
      $("#contact").submit()
   
    };
  };

 $("#envoyer").click(function (e) {
    e.preventDefault();
    verif();
    
  });

});


