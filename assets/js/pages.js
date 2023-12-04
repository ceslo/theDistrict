$(document).ready(function () {
  var x;
});

$.getJSON("assets/js/the_district.json", function (data) {
  $("#recherche").on("input",function () {
    $("#suggestion_liste").empty();  
    var input = $("#recherche").val();
    var listePlat = data.plat;
    var result = listePlat.filter((item) =>
      item.libelle.toLowerCase().includes(input.toLowerCase())
    );
    $.each(result, function (index, plat) {
      $("#suggestion_liste").append(
        "<li class='list-group-item overflow-visible'><img class='img_min' src='assets/images_the_district/food/"+plat.image+"'>"+plat.libelle+"</li>"
      );
    });
  });
  $.each(data.plat, function (index, plats) {
  $("#aff_plats").append('<div class="card rounded col-12 col-lg-5"><div class="row"><div class="d-flex col-4 align-items-center"><img src="assets/images_the_district/food/' +
  plats.image +
  '"class="img-fluid rounded" alt="' +
  plats.libelle +
  '"/></div><div class="col-7 col-sm-8"><div class="card-body"><p class="card-title fs-4">' +
  plats.libelle +
  '</p><p class="card-text small">' +
  plats.description +
  '</p> <div class="d-flex justify-content-end my-3"><a class="btn btn-outline-dark" href="">Commander</a></div></div></div></div></div>')});

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
      };    
    });
  };

  $.each(data.categorie, function (index, cat) {
    $("#aff_cat").append(
      '<button id="btn_' +
        cat.libelle +
        '" class="card rounded col-2 m-3" ><img class="card-img img-fluid" src="assets/images_the_district/category/' +
        cat.image+
        '" alt="Catégorie' +
        (index + 1) +
        '"title="' +
        cat.libelle +
        '"/> <div class="card-img-overlay d-flex align-items-center justify-content-center"> <h2 class="mark rounded text-center" style="color: #970747">' +
        cat.libelle +
        "</h2> </div> </button>"
    );
    $("#btn_" + cat.libelle).on("click", function () {
      $("#aff_cat").empty();
      var x = cat.id_categorie;
      affichage(x);
    });
  });
});
