<?php
$nom = $_POST['nom'];
$prenom= $_POST["prenom"];
$email= $_POST["email"];
$telephone= $_POST["telephone"];
$objet= $_POST["objet"];
$message= $_POST["message"];

/* echo "<p>" . $nom . "</p>";
echo "<p>" . $prenom . "</p>";
echo "<p>" . $email . "</p>";
echo "<p>" . $telephone . "</p>";
echo "<p>" . $objet . "</p>";
echo "<p>" . $message . "</p>"; */


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



//Load Composer's autoloader
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = $_ENV['MAIL_HOST'];                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $_ENV["MAIL_USERNAME"];                     //SMTP username
    $mail->Password   = 'a8dde613abf93d';                               //SMTP password
    /* $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        */     //Enable implicit TLS encryption
    $mail->Port       = $_ENV["MAIL_PORT"];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $nom);
    $mail->addAddress($_ENV["MAIL_ADMIN"]);     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    /* $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $objet;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}





?>


