<?php
// ======================================
// backend/mail-config.php
// ======================================
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php'; // Composer autoload

function sendMail($subject, $body, $to = ['therytclick@gmail.com', 'finance.vidyavriddhi@gmail.com']) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'main.vidyavriddhi@gmail.com';
        $mail->Password = 'gsjs tfka fios pghb'; // App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender
        $mail->setFrom('main.vidyavriddhi@gmail.com', 'Website Enquiry');
        $mail->addReplyTo('main.vidyavriddhi@gmail.com', 'Website Team');

        foreach ($to as $recipient) {
            $mail->addAddress($recipient);
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Mailer Error: {$mail->ErrorInfo}");
        return false;
    }
}
?>
