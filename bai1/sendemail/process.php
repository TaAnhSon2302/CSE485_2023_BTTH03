<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';
class MyEmailServer implements EmailServerInterface {
    public function sendEmail($to,$subject,$message)
    {
        $mail = new PHPMailer(true);

try {
    // Thiết lập các thông tin SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = '@gmail.com';
    $mail->Password   = '';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->CharSet = "UTF-8";

    // Thiết lập các thông tin về người gửi và người nhận
    $mail->setFrom('@gmail.com', '');
    $mail->addAddress($to, '');

    // Thiết lập tiêu đề và nội dung email
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $message;

    // Gửi email
    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }
}
?>