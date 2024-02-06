<?php
require_once ("db_connect.php")
?>
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
                  if (isset($_GET["recherche"]) AND $_GET["recherche"])
                  {
                    $keyword=$_GET["recherche"];                    
                    $result=search_bar($keyword,$db);
                    
                      if (isset($keyword) AND !empty($keyword))
                      {
                        header('location: recherche.php');
                        
                      };
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