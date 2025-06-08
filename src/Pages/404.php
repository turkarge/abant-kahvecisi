<?php
// src/Pages/404.php
// http_response_code(404); // BU SATIRI SİL VEYA YORUM SATIRI YAP

$pageTitle = "Sayfa Bulunamadı";
$metaDescription = "Aradığınız sayfa bulunamadı. Anasayfaya dönebilir veya menüyü kullanabilirsiniz.";
global $activePage; // Zaten public/index.php'de set ediliyor ama burada da belirtmek iyi olabilir
?>

<div class="page-wrapper">
    <main class="page-body">
        <div class="container-xl text-center" style="padding-top: 4rem; padding-bottom: 4rem;">
            <div class="empty">
                <div class="empty-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><line x1="12" y1="8" x2="12.01" y2="8" /><polyline points="11 12 12 12 12 16 13 16" /></svg>
                </div>
                <p class="empty-title h1"><?php echo htmlspecialchars($pageTitle ?? 'Hata'); ?></p>
                <p class="empty-subtitle text-muted">
                    Maalesef aradığınız sayfayı bulamadık.
                </p>
                <div class="empty-action">
                    <a href="<?php echo SITE_URL; ?>/" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="5" y1="12" x2="19" y2="12" /><line x1="5" y1="12" x2="11" y2="18" /><line x1="5" y1="12" x2="11" y2="6" /></svg>
                        Anasayfaya Dön
                    </a>
                </div>
            </div>
        </main>
    </div>