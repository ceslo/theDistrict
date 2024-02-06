<?php
require_once("db_connect.php");

function getCategoriesActives($db){
    $query= $db-> prepare('SELECT * FROM categorie WHERE ACTIVE="Yes" LIMIT 6');
    $query-> execute();
    $categories= $query-> fetchAll();
    return $categories;
}
function getPlats($db){
    $query= $db-> prepare('SELECT * FROM plat LIMIT 6');
    $query-> execute();
    $plats= $query-> fetchAll();
    return $plats;
};
function getPlatsbyCategorie($cat,$db){
    $query= $db-> prepare("SELECT * FROM plat WHERE id_categorie=:cat_id");
    $query-> bindParam(':cat_id',$cat,PDO::PARAM_INT);
    $query-> execute();
    $platsByCat=$query-> fetchAll();
    return $platsByCat;

};
function getPlatById($id,$db){
    $query= $db-> prepare("SELECT * FROM plat WHERE id=:id");
    $query-> bindParam(':id',$id, PDO::PARAM_INT);
    $query-> execute();
    $plat= $query->fetch();
    return $plat;
};
function getCategoriesById($id,$db){
    $query= $db-> prepare("SELECT * FROM categorie WHERE id=:id");
    $query-> bindParam(':id', $id);
    $query-> execute();
    $categories= $query->fetch();
    return $categories;
};

function sortMealsByPopularity($db)
{
$query= $db-> prepare("SELECT plat.id as id_plat, plat.libelle as libelle, sum(commande.quantite) AS quantite, plat.image as image FROM plat JOIN commande ON plat.id = commande.id_plat GROUP BY plat.id ORDER BY SUM(commande.quantite) DESC LIMIT 3");
$query-> execute();
$result=$query->fetchAll();
return $result;
};
function sortCategoriesByPopularity($db)
{
$query= $db-> prepare("SELECT categorie.id AS 'id', categorie.libelle AS 'libelle' ,categorie.image as 'image' FROM categorie JOIN plat on categorie.id = plat.id_categorie JOIN commande ON plat.id = commande.id_plat GROUP BY categorie.id ORDER BY SUM(commande.quantite) DESC; ");
$query-> execute();
$result=$query->fetchAll();
return $result;
};

function search_bar($keyword, $db)
{ 
    $query= $db-> prepare("SELECT * FROM plat where libelle LIKE '%$keyword%' OR description LIKE '%$keyword%'");
    $query-> execute();
    $result= $query->fetchAll();
    return $result;
}
