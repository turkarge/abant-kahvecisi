<?php
// src/Includes/header.php
global $activePage; // public/index.php'de tanımlanacak
$currentPageNoExtension = strtok($activePage, '.'); // Eğer $activePage 'about.php' ise 'about' döner
?>
</head>
<body class="layout-fluid">
    <div class="page">
        <header class="navbar navbar-expand-md navbar-light d-print-none sticky-top">
            <div class="container-xl">
                <!-- Mobil İçin: Toggler ve Logo -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu-main" aria-controls="navbar-menu-main" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="<?php echo SITE_URL; ?>/" class="navbar-brand navbar-brand-autodark d-md-none me-auto">
                    <img src="<?php echo SITE_URL; ?>/assets/images/logo_abant_kahvecisi_renkli.png" alt="<?php echo SITE_NAME; ?> Mobil Logo" style="max-height: 40px;">
                </a>

                <div class="collapse navbar-collapse" id="navbar-menu-main">
                    <!-- Sol Menü (Yeni Yapıyla) -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item <?php echo ($currentPageNoExtension === 'home' || $currentPageNoExtension === '') ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?php echo SITE_URL; ?>/">Ana Sayfa</a>
                        </li>
                        <li class="nav-item dropdown <?php echo in_array($currentPageNoExtension, ['hakkimizda', 'subeler', 'franchising', 'ik']) ? 'active' : ''; ?>">
                            <a class="nav-link dropdown-toggle" href="#navbar-kurumsal" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                Kurumsal
                            </a>
                            <div class="dropdown-menu" id="navbar-kurumsal">
                                <a class="dropdown-item <?php echo ($currentPageNoExtension === 'hakkimizda') ? 'active' : ''; ?>" href="<?php echo SITE_URL; ?>/hakkimizda">
                                    Hakkımızda
                                </a>
                                <a class="dropdown-item <?php echo ($currentPageNoExtension === 'subeler') ? 'active' : ''; ?>" href="<?php echo SITE_URL; ?>/subeler">
                                    Şubeler
                                </a>
                                <a class="dropdown-item <?php echo ($currentPageNoExtension === 'franchising') ? 'active' : ''; ?>" href="<?php echo SITE_URL; ?>/franchising">
                                    Franchising
                                </a>
                                <a class="dropdown-item <?php echo ($currentPageNoExtension === 'ik') ? 'active' : ''; ?>" href="<?php echo SITE_URL; ?>/ik">
                                    İnsan Kaynakları
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-menuler" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                Menüler
                            </a>
                            <div class="dropdown-menu" id="navbar-menuler">
                                <a class="dropdown-item" href="URL_LOUNGE_MENU" target="_blank"> <!-- Gerçek URL'leri girin -->
                                    Lounge Menü
                                </a>
                                <a class="dropdown-item" href="URL_COFFEE_MENU" target="_blank">
                                    Coffee Menü
                                </a>
                                <a class="dropdown-item" href="URL_CHOCOLATE_MENU" target="_blank">
                                    Chocolate Menü
                                </a>
                            </div>
                        </li>
                        <li class="nav-item <?php echo ($currentPageNoExtension === 'iletisim') ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?php echo SITE_URL; ?>/iletisim">İletişim</a>
                        </li>
                    </ul>

                    <!-- Ortadaki Logo -->
                    <a href="<?php echo SITE_URL; ?>/" class="navbar-brand navbar-brand-autodark d-none d-md-block mx-auto">
                        <img src="<?php echo SITE_URL; ?>/assets/images/logo_abant_kahvecisi_renkli.png" alt="<?php echo SITE_NAME; ?> Logo" style="max-height: 50px;">
                    </a>

                    <!-- Sağ Tarafta Sosyal Medya -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item d-none d-md-flex">
                            <a href="https://www.instagram.com/abantkahvecisi/" class="nav-link" title="Instagram" target="_blank" rel="noopener">
                                <i class="ti ti-brand-instagram icon-md"></i>
                            </a>
                        </li>
                        <li class="nav-item d-none d-md-flex">
                            <a href="https://www.facebook.com/AbantKahvecisi/" class="nav-link" title="Facebook" target="_blank" rel="noopener">
                                <i class="ti ti-brand-facebook icon-md"></i>
                            </a>
                        </li>
                        <li class="nav-item d-none d-md-flex">
                            <a href="https://twitter.com/abantkahvecisi" class="nav-link" title="Twitter" target="_blank" rel="noopener">
                                <i class="ti ti-brand-twitter icon-md"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- ... -->