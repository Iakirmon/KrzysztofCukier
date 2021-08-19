<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


$alert='';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $phone=$_POST['tel'];
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail=new PHPMailer(true);
    
    try{
    //ustawienia
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->SMTPAuth=true;
    $mail->Username="wypyszek97@gmail.com";
    $mail->Password='wypyszek97';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    //email settings
    $mail->CharSet = "UTF-8";
    $mail->setFrom("wypyszek97@gmail.com");
    $mail->addAddress('wypyszek97@gmail.com');
    $mail->isHTML(true);
    $mail->Subject="Wiadomość otrzymana od strony komorniczej: ";
    $mail->Body="Imię: $name <br> Email: $email <br> Wiadomość: $subject <br> Telefon: $phone";
    $mail->send();
    $alert = '<div class="alert-success col-lg-12" style="text-align:center; padding:2% 0%;"><span>Wiadomość wysłana!</span></div>';
    }catch(Expection $e){
        $alert = '<div class="alert-error col-lg-12" style="text-align:center; padding:2% 0%;"><span>'.$e->getMessage().'</span></div>';
    }
}

?>
