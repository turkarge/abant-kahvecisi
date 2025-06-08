<?php // src/Includes/footer.php ?>

        <!-- .page-body ve .page-wrapper burada (veya public/index.php içinde) kapanır -->
        <footer class="footer">
            <div class="container-xl">
                <div class="row gy-4 justify-content-between">
                    <!-- Logo, Açıklama ve Sosyal Medya Sütunu (Kart İçinde) -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="card footer-card footer-card-logo h-100"> <!-- h-100 kart yüksekliğini eşitlemeye yardımcı olur -->
                        <div class="card-body text-center">
                                <div class="mb-3">
                                    <a href="<?php echo SITE_URL; ?>/">
                                        <img src="<?php echo SITE_URL; ?>/assets/images/logo_abant_kahvecisi_beyaz.png" alt="<?php echo SITE_NAME; ?> Beyaz Logo" style="max-height: 60px; width: auto;">
                                    </a>
                                </div>
                                <p class="small text-muted-footer">Doğanın kalbinden gelen eşsiz lezzetlerle, kahve tutkunlarına unutulmaz bir deneyim sunuyoruz.</p>
                                <div class="social-icons mt-4 d-flex justify-content-center">
                                    <a href="https://www.instagram.com/abantkahvecisi/" class="me-3" title="Instagram" target="_blank" rel="noopener"><i class="ti ti-brand-instagram"></i></a>
                                    <a href="https://www.facebook.com/AbantKahvecisi/" class="me-3" title="Facebook" target="_blank" rel="noopener"><i class="ti ti-brand-facebook"></i></a>
                                    <a href="https://twitter.com/abantkahvecisi" class="me-3" title="Twitter" target="_blank" rel="noopener"><i class="ti ti-brand-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Site Haritası Sütunu (Kart İçinde) -->
                    <div class="col-lg-2 col-md-3 col-sm-6 mb-4 mb-lg-0">
                        <div class="card footer-card h-100">
                            <div class="card-body">
                                <h5>Site Haritası</h5>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo SITE_URL; ?>/">Ana Sayfa</a></li>
                                    <li><a href="<?php echo SITE_URL; ?>/kahvelerimiz">Kahvelerimiz</a></li>
                                    <li><a href="<?php echo SITE_URL; ?>/blog">Blog</a></li>
                                    <li><a href="<?php echo SITE_URL; ?>/iletisim">İletişim</a></li>
                                    <li><a href="#">S.S.S.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Kurumsal Sütunu (Kart İçinde) -->
                    <div class="col-lg-2 col-md-3 col-sm-6 mb-4 mb-lg-0">
                        <div class="card footer-card h-100">
                            <div class="card-body">
                                <h5>Kurumsal</h5>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo SITE_URL; ?>/hakkimizda">Hakkımızda</a></li>
                                    <li><a href="<?php echo SITE_URL; ?>/subeler">Şubelerimiz</a></li>
                                    <li><a href="<?php echo SITE_URL; ?>/franchising">Franchising</a></li>
                                    <li><a href="<?php echo SITE_URL; ?>/ik">İnsan Kaynakları</a></li>
                                    <li><a href="#">KVKK Politikası</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Menüler Sütunu (Kart İçinde) -->
                    <div class="col-lg-2 col-md-3 col-sm-6 mb-4 mb-lg-0">
                        <div class="card footer-card h-100">
                            <div class="card-body">
                                <h5>Menülerimiz</h5>
                                <ul class="list-unstyled">
                                    <li><a href="URL_LOUNGE_MENU" target="_blank">Lounge Menü</a></li>
                                    <li><a href="URL_COFFEE_MENU" target="_blank">Coffee Menü</a></li>
                                    <li><a href="URL_CHOCOLATE_MENU" target="_blank">Chocolate Menü</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- İletişim ve E-Bülten Sütunu (Kart İçinde) -->
                     <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="card footer-card footer-card-contact h-100">
                            <div class="card-body">
                                <h5>Bize Ulaşın</h5>
                                <ul class="list-unstyled contact-info">
                                    <li class="mb-2">
                                        <i class="ti ti-map-pin me-2 align-top"></i>
                                        <span class="align-top">Örnek Mah. Kahve Cad. No:123<br>Abant/Bolu, Türkiye</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="ti ti-phone me-2 align-top"></i>
                                        <a href="tel:+905551234567" class="align-top">+90 555 123 4567</a>
                                    </li>
                                    <li class="mb-2">
                                        <i class="ti ti-mail me-2 align-top"></i>
                                        <a href="mailto:<?php echo CONTACT_FORM_EMAIL_TO; ?>" class="align-top"><?php echo CONTACT_FORM_EMAIL_TO; ?></a>
                                    </li>
                                </ul>
                                <h5 class="mt-4 mb-2">E-Bülten</h5>
                                <form id="newsletter-form-footer">
                                    <div class="input-group">
                                        <input type="email" class="form-control form-control-sm" placeholder="E-posta adresiniz" required>
                                        <button class="btn btn-sm" type="submit">Abone Ol</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-bar text-center">
                    © <?php echo date("Y"); ?> <?php echo SITE_NAME; ?>. Tüm hakları saklıdır.
                    <span class="mx-2 d-none d-sm-inline">|</span> <br class="d-sm-none">
                    <a href="#">Kullanım Koşulları</a>
                    <span class="mx-2 d-none d-sm-inline">|</span> <br class="d-sm-none">
                    <a href="#">Gizlilik Politikası</a>
                </div>
            </div>
        </footer>
    </div> <!-- .page sonu -->

<!-- Tabler Core v1.2.0 JS (Yerel) -->
<script src="<?php echo SITE_URL; ?>/assets/tabler/dist/js/tabler.min.js"></script>

<!-- Swiper JS (CDN veya yerel) -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Özel JS Dosyanız -->
<script src="<?php echo SITE_URL; ?>/assets/js/custom.js"></script>
<script>
    // E-bülten formu için (footer)
    document.getElementById('newsletter-form-footer')?.addEventListener('submit', function(e) {
        e.preventDefault();
        // Bu kısımda AJAX ile sunucuya gönderme veya basit bir alert gösterilebilir
        alert('E-bülten aboneliğiniz için teşekkür ederiz!');
        this.reset();
    });
</script>
</body>
</html>