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
  require_once("db_connect.php");
  require_once ("views/header.php");
  require_once("DAO.php");
  require_once ("views/search_bar.php");
  ?>
      <!-- Affichage des categories -->
   <section class="d-flex justify-content-center position-relative">
    <div
          id="aff_cat"
          class="d-flex justify-content-evenly col-xl-10 row flex-wrap mt-5 position-relative"
        >
        <?php
        $id= $_GET['id'];
        $plats= getPlatsbyCategorie($id,$db);
        // var_dump($plats);
        foreach($plats as $plat)
        
        {?>
        <div class="card rounded col-11 col-lg-5">
            <div class="row">
                <div class="d-flex col-4 align-items-center">
                    <img src="assets/images_the_district/food/<?=$plat['image']?>" class="img-fluid rounded" alt="<?=$plat['libelle']?>"/>
                </div>
                <div class="col-7 col-sm-8">
                    <div class="card-body">
                        <p class="card-title fs-4"><?= $plat['libelle']?></p>
                        <p class="card-text small"><?=$plat['description']?></p>
                        <p class="card-text small">Prix:<?=$plat['prix']?>€</p>
                            <div class="d-flex justify-content-end my-3">
                                <a class="btn btn-outline-dark" href="plat_selectionne.php?id=<?= $plat['id']?>">Commander</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        </div>
      </section>

      <div class="m-md-5 p-md-5 m-2 p-2">
        <a class="btn btn-outline-dark" href="categories.php">Précédent</a>
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