<?php
// config/app.php

// Hata raporlamayı geliştirme aşamasında açalım
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Proje Ana Kök Dizini Yolu (bu dosyanın bir üst dizininin bir üst dizini)
// C:\wamp64\www\abant-kahvecisi
define('ROOT_PATH', dirname(__DIR__));

// Kaynak dosyalarının yolu (src klasörü)
// C:\wamp64\www\abant-kahvecisi\src
define('SRC_PATH', ROOT_PATH . '/src');

// Web sunucusunun işaret ettiği public klasörünün yolu
// C:\wamp64\www\abant-kahvecisi\public
define('PUBLIC_PATH', ROOT_PATH . '/public');

// Site URL'si (sonunda / olmadan)
// Wampserver'da projeniz "abant-kahvecisi" ise ve public klasörünü kullanıyorsak:
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost'; // Wamp'ta genellikle localhost

// Projenin public klasörüne kadar olan yolu belirleyelim (eğer localhost/proje_adi/public şeklindeyse)
// $_SERVER['DOCUMENT_ROOT'] Wamp'ta genellikle C:/wamp64/www olur.
// PUBLIC_PATH ise C:/wamp64/www/abant-kahvecisi/public
// Bu durumda $subfolder /abant-kahvecisi/public olmalı.
$doc_root_normalized = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT'] ?? '');
$public_path_normalized = str_replace('\\', '/', PUBLIC_PATH);
$subfolder = str_replace($doc_root_normalized, '', $public_path_normalized);

define('SITE_URL', $protocol . $host . $subfolder);

// Site Adı
define('SITE_NAME', 'Abant Kahvecisi');

// İletişim Formu Alıcı E-posta
define('CONTACT_FORM_EMAIL_TO', 'info@example.com'); // Kendi e-posta adresinizle değiştirin

// DEBUG Modu (geliştirme sırasında hata gösterimi için)
define('DEBUG_MODE', true); // Geliştirme için true, canlıda false yapın
// Hata raporlama zaten yukarıda açıldı, DEBUG_MODE ile koşullu yapılabilir.

// Örnek olarak zaman dilimini ayarlayalım
date_default_timezone_set('Europe/Istanbul');

?>