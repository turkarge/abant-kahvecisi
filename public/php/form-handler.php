<?php
// public/php/form-handler.php

// Composer autoload dosyasını dahil et (Eğer Composer ile kurduysanız)
// Proje kök dizininize göre yolu ayarlayın.
// Eğer public/php/ içindeysek ve vendor kök dizindeyse:
require_once dirname(__DIR__, 2) . '/vendor/autoload.php'; // İki seviye yukarı çıkıp vendor'a girer

// Eğer PHPMailer'ı manuel eklediyseniz, ilgili dosyaları require edin:
// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// JSON yanıtı için header ayarı
header('Content-Type: application/json');

// Yanıt array'i
$response = ['success' => false, 'message' => 'Bir hata oluştu, lütfen tekrar deneyin.'];

// Sadece POST isteklerini kabul et
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Form verilerini al ve temizle
    $name = isset($_POST['contact_name']) ? trim(htmlspecialchars($_POST['contact_name'])) : '';
    $email = isset($_POST['contact_email']) ? trim(htmlspecialchars($_POST['contact_email'])) : '';
    $phone = isset($_POST['contact_phone']) ? trim(htmlspecialchars($_POST['contact_phone'])) : ''; // İsteğe bağlı
    $subject_user = isset($_POST['contact_subject']) ? trim(htmlspecialchars($_POST['contact_subject'])) : '';
    $message_user = isset($_POST['contact_message']) ? trim(htmlspecialchars($_POST['contact_message'])) : '';
    $gdpr_consent = isset($_POST['gdpr_consent']);

    // Basit doğrulama
    if (empty($name) || empty($email) || empty($subject_user) || empty($message_user)) {
        $response['message'] = 'Lütfen tüm zorunlu alanları (*) doldurun.';
        echo json_encode($response);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Lütfen geçerli bir e-posta adresi girin.';
        echo json_encode($response);
        exit;
    }

    if (!$gdpr_consent) {
        $response['message'] = 'Lütfen gizlilik politikasını ve kullanım koşullarını kabul edin.';
        echo json_encode($response);
        exit;
    }

    // E-posta ayarları
    $toEmail = 'info@abantkahvecisi.com'; // Mesajların gideceği e-posta adresi
    $emailSubject = 'Yeni İletişim Formu Mesajı: ' . $subject_user;

    $emailBody = "<html><body>";
    $emailBody .= "<h2>Yeni Bir İletişim Formu Mesajı Aldınız</h2>";
    $emailBody .= "<p><strong>Gönderen Adı Soyadı:</strong> {$name}</p>";
    $emailBody .= "<p><strong>Gönderen E-posta:</strong> {$email}</p>";
    if (!empty($phone)) {
        $emailBody .= "<p><strong>Gönderen Telefon:</strong> {$phone}</p>";
    }
    $emailBody .= "<p><strong>Konu:</strong> {$subject_user}</p>";
    $emailBody .= "<hr>";
    $emailBody .= "<h3>Mesaj İçeriği:</h3>";
    $emailBody .= "<p>" . nl2br($message_user) . "</p>"; // nl2br ile satır başlarını <br>'ye çevir
    $emailBody .= "<hr>";
    $emailBody .= "<p><small>Bu mesaj Abant Kahvecisi web sitesi iletişim formu üzerinden gönderilmiştir.</small></p>";
    $emailBody .= "</body></html>";

    $mail = new PHPMailer(true); // true enables exceptions

    try {
        // Sunucu ayarları (Kendi SMTP ayarlarınızla değiştirin)
        // Genellikle hosting firmanız SMTP bilgilerinizi sağlar
        // Gmail SMTP kullanacaksanız, Google hesabınızda "Daha az güvenli uygulama erişimi"ni açmanız veya "Uygulama Şifresi" oluşturmanız gerekebilir.
        $mail->isSMTP();                                      // SMTP kullanarak gönder
        $mail->Host       = 'smtp.example.com';               // SMTP sunucunuz (örn: smtp.gmail.com)
        $mail->SMTPAuth   = true;                             // SMTP kimlik doğrulaması etkin
        $mail->Username   = 'kullanici_adi@example.com';      // SMTP kullanıcı adınız
        $mail->Password   = 'sifreniz';                       // SMTP şifreniz
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    // TLS şifrelemesini etkinleştir (ssl de olabilir)
        $mail->Port       = 587;                              // Bağlanılacak TCP portu (TLS için 587, SSL için 465)
        $mail->CharSet    = 'UTF-8';                          // Türkçe karakterler için

        // Gönderen ve Alıcılar
        $mail->setFrom('no-reply@abantkahvecisi.com', 'Abant Kahvecisi İletişim Formu'); // Gönderen olarak görünecek
        $mail->addAddress($toEmail, 'Abant Kahvecisi Yetkilisi'); // Alıcı
        // $mail->addReplyTo($email, $name); // Kullanıcının e-postasına yanıtla seçeneği için
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // İçerik
        $mail->isHTML(true); // E-postayı HTML olarak ayarla
        $mail->Subject = $emailSubject;
        $mail->Body    = $emailBody;
        $mail->AltBody = strip_tags($emailBody); // HTML olmayan e-posta istemcileri için düz metin versiyonu

        if ($mail->send()) {
            $response['success'] = true;
            $response['message'] = 'Mesajınız başarıyla gönderildi. Teşekkür ederiz!';
        } else {
            // $mail->ErrorInfo PHPMailer'dan gelen detaylı hata mesajını içerir.
            // Güvenlik nedeniyle kullanıcıya bu detaylı mesajı göstermek yerine genel bir mesaj verebilirsiniz.
            // Loglama için $mail->ErrorInfo kullanılabilir.
            // error_log("PHPMailer Error: " . $mail->ErrorInfo);
            $response['message'] = 'Mesajınız gönderilemedi. Lütfen daha sonra tekrar deneyin. (Hata Kodu: M01)';
        }

    } catch (Exception $e) {
        // error_log("PHPMailer Exception: " . $mail->ErrorInfo); // veya $e->getMessage()
        $response['message'] = "Mesajınız gönderilemedi. Lütfen daha sonra tekrar deneyin. (Hata Kodu: M02)";
    }

} else {
    // POST isteği değilse
    $response['message'] = 'Geçersiz istek yöntemi.';
}

echo json_encode($response);
exit;
?>