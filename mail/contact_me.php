<?php

if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Wymagane dane";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = 'wypyszek97@gmail.com';
$email_subject = "Kontakt temat komornika: $name";
$email_body = "Otrzymałeś nową wiadomość ze strony Wojtka.\n\n"."Tutaj są szczegóły:\n\nName: $name\n\nEmail: $email_address\n\nTelefon: $phone\n\nWiadomość:\n$message";
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'Od: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
