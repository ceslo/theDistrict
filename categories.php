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
    <title>The District: Les catégories de plats</title>
  </head>

  <body>
    <div class="par container-fluid">
  <?php
  require_once("db_connect.php");
  require_once ("views/header.php");
  require_once("DAO.php");
  require_once ("views/search_bar.php");
  ?>

     

      <!-- Affichage des categories -->
   <section class="d-flex justify-content-center">
    <div
          id="aff_cat"
          class="cadre rounded d-flex justify-content-evenly flex-wrap col-xl-10 mt-5 px-5">
      <h1 class="text-center row mt-5">LES CATEGORIES</h1>
      <div class="row">
        <?php
        $categories=getCategoriesActives($db);
        // var_dump($categories);
        foreach($categories as $categorie)
        { 
        ?>
        <a href="details_categorie.php?id=<?=$categorie['id']?>" class="cat card rounded col-4 col-lg-2 m-5" >
          <img class="card-img img-fluid" src="assets/images_the_district/category/<?=$categorie['image']?>" alt="<?$categorie['libelle']?>" title="<?=$categorie['libelle']?>"/> 
          <div class="card-img-overlay d-flex align-items-center justify-content-center"> 
            <h2 class="mark rounded text-center" style="color: #970747"> <?=$categorie['libelle']?> </h2>
          </div> 
        </a> 
        <?php } ?>
      </div>
    </div>
      </section>

      <div class="m-md-5 p-md-5 m-2 p-2">
        <a class="btn btn-outline-dark" href="index.php">Précédent</a>
      </div>

      <?php
       require_once ("views/footer.php")
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