<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>The District</title>
  </head>

  <body>
    <div class="container-fluid">
  <?php
  include ("header.php");
  ?>

      <section class="d-flex justify-content-center mt-5" id="search">
        <div class="card col-xl-10 col">
          <img
            class="card-img object-fit-cover"
            src="assets/images_the_district/Capture d’écran du 2023-10-26 14-45-21.png"
            height="300px"
          />
          <div class="card-img-overlay">
            <div class="p-4 mt-5 bg-opacity-75 rounded" id="bandeau">
              <div class="form-group row d-flex justify-content-center">
                <div class="search-container col text-end">
                  <label
                    for="recherche"
                    class="form-label text-white text-end fs-4"
                  >
                    Que recherchez vous?</label
                  >
                </div>
                <div class="col">
                  <input
                    class="form-control"
                    type="search-input"
                    name="recherche"
                    id="recherche"
                  />
                  <ul
                    class="list-group position-absolute"
                    id="suggestion_liste"
                  ></ul>
                </div>
                <div class="col">
                  <button class="btn btn-outline-light" type="submit">
                    Rechercher
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex"></div>
          </div>
        </div>
      </section>

      <section class="d-flex justify-content-center position-relative">
        <div
          id="aff_cat"
          class="d-flex justify-content-evenly col-xl-10 row flex-wrap mt-5 position-relative"
        ></div>
      </section>

      <div class="m-md-5 p-md-5 m-2 p-2">
        <a class="btn btn-outline-dark" href="index.html">Précédent</a>
      </div>

      <?php
       include ("footer.php")
      ?>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/pages.js"></script>
  </body>
</html>