<?php
require_once("db_connect.php");

function getCategories($db){
    $query= $db-> prepare('SELECT * FROM categorie');
    $query-> execute();
    $categories= $query-> fetchAll();
    return $categories;
}
function getPlats($db){
    $query= $db-> prepare('SELECT * FROM plat');
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
$query= $db-> prepare("SELECT * FROM plat JOIN commande ON plat.id = commande.id_plat GROUP BY plat.id ORDER BY SUM(commande.quantite) DESC LIMIT 3");
$query-> execute();
$result=$query->fetchAll();
return $result;
};
function sortCategoriesIdByPopularity($db)
{
$query= $db-> prepare("SELECT plat.id_categorie FROM plat JOIN commande ON plat.id = commande.id_plat ORDER BY commande.quantite DESC");
$query-> execute();
$result=$query->fetchAll();
return $result;
};