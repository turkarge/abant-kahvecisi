<?php
// public/index.php

// Config dosyasını dahil et
require_once dirname(__DIR__) . '/config/app.php';

// URL'den istenen sayfa yolunu alalım
$request_uri = $_GET['url'] ?? '';
$request_uri = rtrim($request_uri, '/');

// İstenen sayfa adını belirleyelim
if ($request_uri === '') {
    $page_name = 'home';
} else {
    if (preg_match('/^[a-zA-Z0-9_-]+$/', $request_uri)) {
        $page_name = $request_uri;
    } else {
        $page_name = '404'; // Geçersiz karakter varsa
    }
}

// src/Pages altında ilgili sayfa dosyası var mı kontrol edelim
$page_file_path = SRC_PATH . '/Pages/' . $page_name . '.php';

global $activePage; // header.php'de kullanılacak

if (file_exists($page_file_path)) {
    $requested_page_file = $page_file_path;
    $activePage = $page_name;
    // Eğer özel bir durum kodu set etmek gerekiyorsa (örn: 404 dışında),
    // bunu sayfa dosyasının kendisi yapabilir, ama 404 genel bir durum.
} else {
    // Eğer sayfa dosyası bulunamazsa, kesinlikle 404'tür.
    // HTTP response kodunu burada, herhangi bir HTML çıktısından ÖNCE set et.
    http_response_code(404);
    $requested_page_file = SRC_PATH . '/Pages/404.php';
    $activePage = '404';
    // $pageTitle ve $metaDescription 404.php içinde set edilecek.
}

// Eğer $page_name '404' ise ve dosya var ama başka bir sebeple 404 gösteriliyorsa
// (örneğin, $request_uri geçersiz karakter içerdiği için)
// response kodunu burada da set edebiliriz.
if ($page_name === '404' && $requested_page_file === SRC_PATH . '/Pages/404.php') {
    // Bu koşul yukarıdaki else bloğuyla zaten kapsanmış olabilir ama garanti olsun.
    // Eğer $requested_page_file zaten 404.php ise ve http_response_code henüz set edilmediyse, set et.
    if (http_response_code() !== 404) { // Sadece daha önce set edilmediyse
         http_response_code(404);
    }
}


// $pageTitle ve $metaDescription gibi değişkenler $requested_page_file içinde tanımlanacak.
// Bu değişkenlere header.php ve head_tags.php'nin erişebilmesi için
// $requested_page_file'ı include etmeden önce bu değişkenlerin tanımlanması lazım.
// Bunun için bir "ön yükleme" veya bufferlama yapılabilir, ya da en basiti
// $requested_page_file içindeki ilk satırların bu değişkenleri tanımlamasıdır.
// Biz ikinci yöntemi kullanıyoruz.

// Head tag'larını (CSS, JS linkleri, meta, title) dahil et
// Bu dosya içinde $pageTitle ve $metaDescription kullanılacak.
// Bu değişkenler, aşağıdaki $requested_page_file içinde set edilmeli.
require_once SRC_PATH . '/Includes/head_tags.php';

// Ana header'ı (navigasyon vb.) dahil et
require_once SRC_PATH . '/Includes/header.php';

// İlgili sayfanın içeriğini dahil et
require_once $requested_page_file;

// Footer'ı dahil et
require_once SRC_PATH . '/Includes/footer.php';

?>