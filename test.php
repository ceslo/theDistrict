$categories=sortCategoriesIdByPopularity($db);
        var_dump($categories);?>
      <section class="d-flex justify-content-center position-relative">
        <div id="aff_cat" class="d-flex justify-content-evenly col-xl-10 row flex-wrap mt-5 position-relative">
           <?php foreach ($categories as $categorie) { 
            $id=$categorie['id_categorie'];
            $cat_affichee= getCategoriesById($id,$db);
            var_dump($cat_affichee);
            foreach($cat_affichee as $cataff){?>
              <a href="details_categorie.php?id=<?=$cataff['id_categorie']?>" class="card rounded col-3 col-lg-2 m-3" >
                <img class="card-img img-fluid" src="assets/images_the_district/category/<?=$cataff['image']?>" alt="<?$cataff['libelle']?>" title="<?=$cataff['libelle']?>"/>
                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                  <h2 class="mark rounded text-center" style="color=#970747"> <?=$cataff['libelle']?> </h2>
                </div> 
              </a>

            <?php }; }; ?> 
        </div>