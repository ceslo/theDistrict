$(document).ready(function () {
  var x;
  $.getJSON("assets/js/the_district.json", function (data) {
    var liste_plat= data.plat

    $("#recherche").on("input",function(){ 
      var input_text= $(this).val().toLowerCase();
      var suggestionsList= $("#suggestion_liste");
      suggestionsList.empty();

      var filteredSuggestions = liste_plat.filter(function (suggestion){
        return suggestion.toLowerCase().includes(input_text);      
      });
      
    
    });

     
    





    function affichage(x) {
      $.each(data.plat, function (index, plats) {
        if (x == plats.id_categorie) {
          $("#aff_cat").append(
            '<div class="card rounded col-12 col-lg-5"><div class="row"><div class="d-flex col-4 align-items-center"><img src="assets/images_the_district/food/' +
              plats.image +
              '"class="img-fluid rounded" alt="' +
              plats.libelle +
              '"/></div><div class="col-7 col-sm-8"><div class="card-body"><p class="card-title fs-4">' +
              plats.libelle +
              '</p><p class="card-text small">' +
              plats.description +
              '</p> <div class="d-flex justify-content-end my-3"><a class="btn btn-outline-dark" href="">Commander</a></div></div></div></div></div>'
          );
        }
      });
    }
    
    
      
     
    

   
    $.each(data.categorie, function (index, cat) {
      $("#aff_cat").append(
        '<button id="btn_' +
          cat.libelle +
          '" class="card rounded col-2 m-3" ><img class="card-img img-fluid" src="assets/images_the_district/category/' +
          cat.image +
          '" alt="Catégorie' +
          (index + 1) +
          '" title="' +
          cat.libelle +
          '"/> <div class="card-img-overlay d-flex align-items-center justify-content-center"> <h2 class="mark rounded text-center" style="color: #970747">' +
          cat.libelle +
          " </h2> </div> </button>"
      );
      $("#btn_" + cat.libelle).on("click", function () {
        $("#aff_cat").empty();
        var x = cat.id_categorie;
        affichage(x);
      });
    });
  });
});






