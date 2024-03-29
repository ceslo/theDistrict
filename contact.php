<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"a
    />
    <link rel="stylesheet" href="assets/css/styles.css"/>

    <title>The District:Nous contacter</title>
  </head>
  <body>
    <div class="container-fluid">
    <?php
     include ("views/header.php");
    ?>

      <section class="mx-3 my-3">
        <form id="contact" action="assets/monscript.php" method="post">
            
            <p>*Ces zones sont obligatoires</p>
        <fieldset>
          <legend class="display-6">Vos coordonnées</legend>
          <p>
          <label for="nom">Votre nom*:</label
          ><input class="form-control mb-0" placeholder="Veuillez saisir votre nom" type="text" name="nom" id="req_nom" required />
          <small></small>
        </p>
          <p>
            <label for="prenom">Votre prénom*:</label
            ><input class="form-control mb-0" placeholder="Veuillez saisir votre prénom" type="text" name="prenom" id="req_prenom" required />
            <small></small>
            </p>
          <p>
            <label for="email">Email*:</label
            ><input
            class="form-control mb-0"
              type="text"
              name="email"
              id="req_email"
              placeholder="Veuillez saisir votre e-mail"
              required
            />
            <small></small>
          </p>
        </fieldset>
        <fieldset>
          <legend class="display-6">Votre demande</legend>

          <label for="sujet">Sujet*:</label>
          <select class="form-control mb-0" name="sujet" size="1" id="req_sujet">
            <option class="readonly" disabled selected>Veuillez sélectionner un sujet</option>
            <option>Ma commande</option>
            <option>Question sur un produit</option>
            <option>Reclamation</option>
            <option>Réservation</option>
            <option>Autres</option>
          </select>
          <small></small>
          <p>
            <label for="question">Votre question*:</label
            ><textarea class="form-control mb-0" name="question" id="req_question"></textarea>
            <small></small>
          </p>
        </fieldset>
        <input
          type="checkbox"
          name="traitement_info"
          id="traitement_info"
          value="accepte"
          required
        />
        <small></small>
        <label for="traitement_info" id="label_info"
          >*J'accepte le traitement informatique de ce formulaire</label
        >
        <small></small>
        <p>
          <input class="btn btn-dark" type="submit" value="Envoyer" id="envoyer"/>
          <button class="btn btn-dark" type="reset">Annuler</button>
        </p>
      </form>
        </form>
      </section>
      <?php
       include ("views/footer.php")
      ?>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
      ></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="assets/js/validation.js"></script>
    </div>
  
  </body>
</html>
