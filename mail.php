<?php 
require_once 'config.php';
require_once 'functions.php';
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$recipients = get_emails();   //получаем массив email из файла функций
$content = file_get_contents('mail_body.html');
$mail->isSMTP();                 // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  	// Specify main and backup SMTP servers
$mail->SMTPAuth = true;       // Enable SMTP authentication
$mail->Username = 'student.test@inbox.ru';// Ваш логин от почты с которой будут отправляться письма
$mail->Password = '226000432938f'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';       // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров
foreach($recipients as $email )  //проходимся по всему массиву, делаем рассылку
{
   $mail->AddBCC($email);
}
$mail->setFrom('student.test@inbox.ru'); // от кого будет уходить письмо?
$mail->isHTML(true);       // Set email format to HTML
$mail->Subject = 'Информация о предстоящих событиях.';
$mail->Body    = $content;
$mail->AltBody = 'Для просмотра письма воспользуйтесь средством с поддержкой отопбражения html- писем.';
if(!$mail->send()) {
    echo 'Error';
} else {
    echo 'mail has been sent';
}
?>