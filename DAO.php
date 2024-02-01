<?php
require_once("db_connect.php");

function getCategories($db){
    $query= $db-> prepare('SELECT * FROM categorie');
    $query-> execute();
    $categories= $query-> fetchAll();
    return $categories;
}

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

function sortMealsByPopularity($db)
{
$query= $db-> prepare("SELECT * FROM plat JOIN commande ON plat.id = commande.id_plat ORDER BY commande.quantite DESC");
$query-> execute();
$result=$query->fetchAll();
return $result;
};