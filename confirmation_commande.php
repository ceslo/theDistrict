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

    <title>The District: confirmation de votre commande</title>
  </head>
  <body>
    <div class="">
  <?php
require_once ("views/header.php");
require_once ("DAO.php");
require_once ("db_connect.php")
  ?>
<section>
    <h1 class="text-center my-5 d-flex justify-content-center"> Votre commande est confirmée!</h1>
    <h3 class="text-center"> Vous recevrez bientôt un e-mail de confirmation </h3>
    <h3></h3>
        <div class="col-6 mx-auto d-flex justify-content-center card rounded">
        <img class="card-img" src="assets/images_the_district/order.jpg" alt="Commande confirmée">
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