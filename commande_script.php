<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once ("DAO.php");
require_once ("db_connect.php");
require_once("vendor/autoload.php");


// Récupération des informations du plat selectionné
$id= $_POST['id'];
$plat_commande= getPlatById($id,$db);

// Récupératoin des informations du client
$mail_client=$_POST['mail'];
$nom_prenom= $_POST['nom_prenom'];
$adresse_client=$_POST['adresse']." ". $_POST['CP']." ". $_POST['ville'];

// $mail_client= 'client1@exemple.com';
// $nom_prenom='Mr dudu';
// $adresse_client= 'machin à trucville';

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
$mail->Body= "Merci pour votre commande! Elle vous sera livrée à l'adresse suivante: ". $adresse_client.
" Récapitulatif de votre commande: "
   . $plat_commande['libelle'] ;

if($mail){
    try{
        $mail->send();
        header ('location: confirmation_commande.php');
    } 
    catch(Exception $e){

     echo "L'envoi de mail a echoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
    }
}
