<?php
$name = stripslashes(trim($_POST['name']));
$email = stripslashes(trim($_POST['email']));
$phone = stripslashes(trim($_POST['phone']));
$message = stripslashes(trim($_POST['message']));

$full_message = $message . "\n\nPhone: " . $phone;


require "phpmailer.php";
require "smtp.php";
require "exception.php";

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();

$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->IsHTML(true);
$mail->Username = 'XXXX@gmail.com';
$mail->Password = '5r5uptA65UWrD7zwK';
$mail->SetFrom("$email ", "$name");
$mail->Subject = "Website Contact";
$mail->Body = $message;
$mail->AddAddress("XXXX@gmail.com");

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message has been sent";
}
?>
