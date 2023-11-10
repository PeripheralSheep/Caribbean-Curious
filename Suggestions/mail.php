<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'caribbeancurious@gmail.com'; // YOUR gmail email
    $mail->Password = 'axjrifzhrwkrxbnc'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('caribbeancurious@gmail.com', $_POST['your_name']);
    $mail->addAddress($_POST['email'], 'Caribbean Curious');
    $mail->addReplyTo('noahlaville14@gmail.com', 'Test'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "A Suggestion to Caribbean Curious";
    $mail->Body = 'Dear Caribbean Curious, I have a suggestion for your website.'$_POST[suggestion_box]'Best Regards, '$_POST[your_name];
    $mail->AltBody = 'Dear Caribbean Curious, I have a suggestion for your website.'$_POST[suggestion_box]'Best Regards, '$_POST[your_name];

    $mail->send();
    echo "Suggestion sent.";
} catch (Exception $e) {
    echo "Error in sending suggestion. Mailer Error: {$mail->ErrorInfo}";
}

?>
