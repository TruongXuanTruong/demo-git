<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer-master/src/Exception.php';
require 'PHPMailer/PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer/PHPMailer-master/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
function send_mail($sent_to_email,$send_to_fullName,$subject,$content,$option = array()){
    global $config_email;
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $config_email['host'];                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $config_email['username '];                     //SMTP username
        $mail->Password   = $config_email['password '];                               //SMTP password
        $mail->SMTPSecure = $config_email['smtp_secure'];            //Enable implicit TLS encryption
        $mail->Port       = $config_email['port'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('xuantruong28x@gmail.com', 'Trường');
        $mail->addAddress($sent_to_email,$send_to_fullName);     //Add a recipient
//    $mail->addAddress('txt.franky28@gmail.com');               //Name is optional
        $mail->addReplyTo('txt.franky28@gmail.com', 'TinX');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

        //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $content;
        $mail->AltBody = $option;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return 'Mail không gửi được do lỗi '.$mail->ErrorInfor;
    }
}

