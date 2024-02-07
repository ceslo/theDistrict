<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once ("DAO.php");
require_once ("db_connect.php");
require_once("vendor/autoload.php");

                                         // RECUPERATION DES INFO DE LA COMMANDE

// Récupération des informations du plat selectionné
$id= $_POST['id'];
$plat_commande= getPlatById($id,$db);
$prix= $plat_commande['prix'];
$quantite=$_POST['quantite'];
$total=$prix*$quantite;
$libelle=$plat_commande['libelle'];

// Récupération des informations du client

$nom_prenom= $_POST['nom_prenom'];
$mail_client=$_POST['mail'];
$telephone=$_POST['telephone'];
$adresse_client=$_POST['adresse'];

// Ajout de la date
$date_commande= new DateTime('now');
$date= $date_commande->format("Y-m-d H:h:i");

$etat="en preparation";

                                    // INSERTION DE LA COMMANDE DANS LA BASE DE DONNEES
$query= "INSERT INTO commande (id_plat, quantite, total, date_commande, etat, nom_client, telephone_client, email_client, adresse_client) VALUES (:id, :quantite, :total,:date, :etat, :nom_client, :telephone, :mail, :adresse)";

$add= $db->prepare($query);
$add-> bindParam(":id",$id);
$add-> bindParam(":quantite",$quantite);
$add-> bindParam(":total",$total);
$add-> bindParam(":date",$date);
$add-> bindParam(":etat",$etat);
$add-> bindParam(":nom_client",$nom_prenom);
$add-> bindParam(":telephone",$telephone);
$add-> bindParam(":mail",$mail_client);
$add-> bindParam(":adresse",$adresse_client);
                                    
$add-> execute();
                                    

// Creation d'un tableau contenant les informations de la commande pour la base de données

// $commande["adresse"]= $adresse_client;
// $commande["mail_client"]= $mail_client;
// $commande["nom_prenom"]= $nom_prenom;
// $commande['telephone']=$telephone
// $commande["id"]=$id;
// $commande["quantite"]= $quantite;
// $commande["total"]= $total;
// $commande["date"]->$date;

// Fontion d'insertion

// function addCommande($db,$commande)
// {
// $adresse_client= $commande["adresse"] ;
// $mail_client= $commande["mail_client"];
// $nom_prenom= $commande["nom_prenom"];
// $telephone=$commande['telephone'];
// $id= $commande["id"];
// $quantite= $commande["quantite"];
// $total= $commande["total"];
// $date= $commande["date"];

// $query= "INSERT INTO commande (id_plat,quantite, total, date_commande, nom_client, email_client, adresse_client) VALUES (:id,:total,:date,:nom_client,:mail,:adresse)";

// $add= $db->prepare($query);
// $add-> bindParam(":id",$id);
// $add-> bindParam(":quantite",$quantite);
// $add-> bindParam(":total",$total);
// $add-> bindParam(":date",$date);
// $add-> bindParam(":nom_client",$nom_prenom);
// $add->bindParam(":telephone",$telephone);
// $add-> bindParam(":mail",$mail_client);
// $add-> bindParam(":adresse",$adresse_client);

// $add->execute();
// };

// if($commande)
// {
//     try{
//         addCommande($db,$commande);
//     }
//     catch(Exception $e){

//      echo "La commande n'a pas été enregistrée";
//     }
// };                   

                                    // CREATION DU MAIL

// Caractéristiques du mail

$mail= new PHPMailer(true);
$mail->isSMTP();
$mail->Host ='localhost';
$mail->SMTPAuth=false;
$mail->Port= 1025;
$mail->setFrom('from@thedistrict.com', 'The District Company');
$mail->addAddress($mail_client, $nom_prenom);
$mail->isHTML(true);
$mail->Subject= 'Confimation de votre commande';
$mail->Body= "<h1>Merci pour votre commande!</h1>
 <div> 
 <h3>Elle vous sera livrée à l'adresse suivante: ". $adresse_client."</h3>
</div> 
<div>
Récapitulatif de votre commande: ".$quantite." x". $libelle. "
</div>
<div> A très bientôt chez The District </div>";

// Envoi du mail
if($mail)
{
    try{
        $mail->send();
        header ('location: confirmation_commande.php');
    }
    catch(Exception $e){

     echo "L'envoi de mail a echoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
    }
};        
