<?php
require('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;
$mail->Username = "caribbeancurious@gmail.com";
$mail->Password = "axjrifzhrwkrxbnc";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom("caribbeancurious@gmail.com", $_POST['your_name']);

//$mail->addBCC("bccaddress@ccdomain.com", "Some BCC Name");

$mail->AddReplyTo($_POST['email'], 'Caribbean Curious');
$mail->AddAddress("noahlaville@pm.me");
$mail->AddAddress($_POST['email']);
$mail->Subject = "A Suggestion for Caribbean Curious";
$mail->WordWrap   = 80;
$content = "Dear Caribbean Curious,<br>User suggestion:<br>" .$_POST[suggestion_box] ."Best Regards, " . $_POST[your_name];
$mail->MsgHTML($content);
$mail->IsHTML(true);
if(!$mail->Send())
echo "Problem sending email.";
else
echo "email sent.";


$mail->AddReplyTo($_POST['email'], $_POST['your_name']);
$mail->AddAddress("noahlaville@pm.me");
$mail->AddAddress($_POST['email']);
$mail->Subject = "A Suggestion for Caribbean Curious";
$mail->WordWrap   = 80;
$content = "Dear " . $_POST['your_name'] ."Thank you for your suggestion". $_POST[suggestion_box] ."<br>Best Regards,<br>" . "Caribbean Curious";
$mail->MsgHTML($content);
$mail->IsHTML(true);
if(!$mail->Send())
echo "Problem sending email.";
else
echo "email sent.";


?>
