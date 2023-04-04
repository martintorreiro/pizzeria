<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();





function enviarEmail( $mensaje, $from, $recipent = "martin_vga4@hotmail.com", $attachment=null){

    //Load dotenv.
    $mailHost = $_ENV['MAIL_HOST'];
    $user = $_ENV['USER'];
    $password = $_ENV['PASSWORD'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $mailHost;                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $user;                     //SMTP username
        $mail->Password   = $password;                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($from);
        $mail->addAddress($recipent);     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo($from, 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com'); 

        //Attachments

        if($attachment!=null){
            $mail->addStringAttachment($attachment,'factura.pdf');
        }
        
    /*  $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */    //Optional name */

        //Content
        $mail->isHTML(true);                                //Set email format to HTML
        $mail->Subject = "Informacion Pizzeria";
        $mail->Body    = $mensaje;
        $mail->AltBody = $mensaje;

        $mail->send();
        
        /* return 'Message has been sent'; */
        return "ok";
        
    } catch (Exception $e) {
        return "error";
        /* return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; */
    }

}

if(isset($_POST["correo"])&&isset($_POST["mensaje"])){
    
    $res = enviarEmail($_POST["mensaje"],$_POST["correo"]);
    echo $res;
}




?>