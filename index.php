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
    <link rel="stylesheet" href="assets/css/styles.css"/>

    <title>The District</title>
  </head>
  <body >
    <div class="par container-fluid">
  <?php
require_once ("views/header.php");
require_once ("DAO.php");
require_once ("db_connect.php")
  ?>

  <!-- Affichage de la barre de recherche -->
      <section
        class="d-flex justify-content-center mt-5"
        style="height: 500px"
        id="search">
       <form method="GET" action="recherche.php" class="card col-xl-10 col">
          <video
            class="card-img object-fit-cover"
            src="assets/video/production_id 5102309 (2160p).mp4"
            height="500px"
            autoplay="true"
            loop="true"></video>
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
                    type="search"
                    name="recherche"
                    id="recherche"
                  />
                  <ul
                    class="list-group position-absolute"
                    id="suggestion_liste"
                  >
                  <?php
                  if (isset($_GET["recherche"]) && !empty( $_GET["recherche"]))
                  {
                    $keyword=$_GET["recherche"];                    
                    $result=search_bar($keyword,$db);
                    header('location: recherche.php');                   
                     
                    }?> 
                </ul>
                </div>
                <div class="col">
                  <button class="btn btn-outline-light" type="submit" value="Valider">
                    Rechercher
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex"></div>
          </div>
                  </form>
      </section>

    <!-- Affichage categories populaires -->
      <section class="d-flex wrap justify-content-center">       
        <div class="d-flex justify-content-evenly col-xl-10 row mt-5">
        <h1 class="text-center row mt-5">Catégories populaires</h1>
     <?php 
     $categories= sortCategoriesByPopularity($db); 
    // var_dump($categories);
     foreach($categories as $categorie){ ?>
          <a href="categories.php?id=<?=$categorie['id']?>" class="cat card rounded col-3 col-lg-2 m-3" >
            <img class="card-img " src="assets/images_the_district/category/<?=$categorie['image']?>" alt="<?$categorie['libelle']?>" title="<?=$categorie['libelle']?>"/>
            <div class="card-img-overlay d-flex align-items-center justify-content-center">
              <h5 class="mark rounded text-center" style="color=#970747"> <?=$categorie['libelle']?> </h5>
            </div> 
          </a>
      <?php } ?>
        </div>
      </section>


      <!-- Affichage plats populaires -->
      <section class="d-flex justify-content-center">
        
      <div class="d-flex justify-content-evenly col-xl-10 row mt-5">
      <h1 class="text-center row mt-5">Plats populaires</h1>
      <?php 
      $plats= sortMealsByPopularity($db);
      // var_dump($plats);
      foreach($plats as $plat){?>
          <a href="plat_selectionne.php?id=<?=$plat['id_plat']?>" class="cat card rounded col-3 col-lg-2 m-3" >
            <img class="card-img" src="assets/images_the_district/food/<?=$plat['image']?>" alt="<?$plat['libelle']?>" title="<?=$plat['libelle']?>"/>
            <div class="card-img-overlay d-flex align-items-center justify-content-center">
              <h5 class="mark rounded text-center" style="color=#970747"> <?=$plat['libelle']?> </h5>
            </div> 
          </a>

      <?php } ?>
      </div>
      </section>
<?php
require_once ("views/footer.php");
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