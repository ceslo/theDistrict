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
  <body
    class="parallax" style="position: relative";
   >
    <div class="container-fluid">
    <?php
   require_once("db_connect.php");
   require_once ("views/header.php");
   require_once("DAO.php");
   $id=$_GET['id'];
   $plat=getPlatById($id,$db);
  ?>

  <!-- Rappel plat selectionné -->
      <section class="mx-3 mt-3">
        <div class="d-flex justify-content-center">
          <div class="card rounded col-12 col-lg-8" >
            <div class="row">
              <div class="d-flex col-4 align-items-center">
                <img
                  src="assets/images_the_district/food/<?=$plat['image'] ?>"
                  class="img-fluid rounded"
                  alt="<?=$plat['libelle']?>"
                />
              </div>
              <div class="col-7 col-sm-8">
                <div class="card-body">
                  <p class="card-title fs-4"><?=$plat['libelle']?></p>
                  <p class="card-text small"><?=$plat['description']?></p>
                  <p class="card-text small">Prix:<?=$plat['prix']?>€</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      <!-- Formulaire de commande -->
        <div class="d-flex justify-content-center mt-5">
          <form class="form col-10" action="commande_script.php" method="POST">
            <input type="text" hidden name="id" value="<?=$plat['id']?>" />
            <p>
              <label for="nom_prenom" class="form-label" >Nom et Prénom *</label>
              <input
                class="form-control"
                type="text"
                name="nom_prenom"
                id="nom_prenom"
                required
              />
            </p>
            <p>
              <label for="mail" class="form-label">Votre e-mail *</label>
              <input class="form-control" type="text" name="mail" id="mail" required />
            </p>

            <p>
              <label for="adresse" class="form-label" >Adresse * </label
              ><input
                class="form-control"
                type="text"
                name="adresse"
                id="adresse"
                required
              />
            </p>

            <div class="row">
              <p class="col">
                <label for="CP" class="form-label">Code postal *</label
                ><input
                  class="form-control"
                  type="text"
                  name="CP"
                  id="CP"
                  required
                />
              </p>
              <p class="col">
                <label for="ville" class="form-label" >Ville *</label>
                <input
                  class="form-control"
                  type="text"
                  name="ville"
                  id="ville"
                  required
                />
              </p>
            </div>
            <div class="d-flex justify-content-end my-3">
              <button class="btn btn-outline-dark" type="submit">Passer la commande</button>
            </div>
          </form>
            
        </div>
        <div class="m-5 p-5">
          <a class="btn btn-outline-dark" href="plats.php">Précédent</a>
     
        </div>
      </section>
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
  </body>
</html>