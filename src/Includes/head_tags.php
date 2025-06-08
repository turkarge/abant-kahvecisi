<?php
// src/Includes/head_tags.php

// $pageTitle değişkeninin her sayfanın başında tanımlandığını varsayıyoruz.
// Eğer tanımlanmamışsa varsayılan bir başlık kullanalım.
$site_title = isset($pageTitle) ? htmlspecialchars($pageTitle) . " - " . SITE_NAME : SITE_NAME;

// $metaDescription değişkeni de her sayfanın başında tanımlanabilir.
$site_description = isset($metaDescription) ? htmlspecialchars($metaDescription) : "Abant Kahvecisi, doğanın kalbinden gelen eşsiz lezzetler.";
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo $site_title; ?></title>
<meta name="description" content="<?php echo $site_description; ?>">

<!-- Favicon (Örnek yol, kendi favicon'unuzu ekleyin) -->
<link rel="icon" href="<?php echo SITE_URL; ?>/assets/images/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="<?php echo SITE_URL; ?>/assets/images/favicon.ico" type="image/x-icon"/>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Tabler Core v1.2.0 CSS (Yerel) -->
<link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/tabler/dist/css/tabler.min.css">
<link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/tabler/dist/css/tabler-flags.min.css">
<link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/tabler/dist/css/tabler-payments.min.css">
<link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/tabler/dist/css/tabler-vendors.min.css">

<!-- Tabler Icons (CDN üzerinden devam edebilir veya yerel olarak eklenebilir) -->
<!-- Eğer Tabler ikonlarını da yerel olarak eklediyseniz, yolunu ona göre güncelleyin -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

<!-- Özel CSS Dosyanız -->
<link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">

<!-- Slider için CSS (Eğer Swiper.js kullanacaksak, CDN veya yerel) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />