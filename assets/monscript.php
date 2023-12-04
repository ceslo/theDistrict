    <?php
      
    $_REQUEST["nom"]=$nom;
    $_REQUEST["prenom"]=$prenom;
    $_REQUEST["email"]=$email;
    $_REQUEST["sujet"]=$sujet;
    $_REQUEST["question"]=$question;
    $_REQUEST["traitement_info"]=$traitement_info;

    $user[0]=$nom;
    $user[1]=$prenom;
    $user[2]=$email;
    $user[3]=$sujet;
    $user[4]=$question;   

    var_dump($user)
    
    // $new_date= new DateTime();
    // $path= $new_date.".text";
    // $puts($path,$user[]);
    // var_dump($path);
    
   
   
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;

    // require_once 'vendor/autoload.php';
    
    // $mail= new PHPMailer(true);
    // $mail->isSMTP();
    // $mail->Host ='localhost';
    // $mail->SMTPAuth =false;
    // $mail->Port =1025;
    // $mail->setFrom('from@thedistrict.com','The District Compagny');
    // $mail->addAddress("client1@example.com","Mr Client1");
    // $mail->addAddress("client2@example.com");
    // $mail->addReplyTo("reply@thedistrict.com");
    // $mail->addCC("cc@example.com");
    // $mail->addBCC("bcc@example.com");
    // $mail->isHTML(true);
    // $mail->addAttachment('/path/to/file.pdf');
    // $mail-> Subject="Test PHPMailer";
    // $mail->Body = "on teste l'envoi de mails avec PHPMailer";
    // if($mail){
    //     try{
    //         $mail->send();
    //         echo'EMAIL envoyé avec succès';
    //     }
    //     catch(Exception $e) {
    //         echo "L'envoi de mail a échoué. L'erreur suivante s'est produite:", $mail->ErrorInfo;
    //     };
    // }
    ?>
