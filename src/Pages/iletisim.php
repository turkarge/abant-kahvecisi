<?php
// src/Pages/iletisim.php
$pageTitle = "İletişim";
$metaDescription = "Abant Kahvecisi ile doğrudan iletişime geçin. Adres, telefon, e-posta bilgilerimiz ve iletişim formumuz aracılığıyla bize ulaşabilirsiniz.";
// $activePage global değişkeni public/index.php'de 'iletisim' olarak set edilecek.
?>

<div class="page-wrapper">
    <main class="page-body">

        <!-- Sayfa Başlığı Alanı -->
        <section class="page-header-section" style="background-image: url('<?php echo SITE_URL; ?>/assets/images/headers/contact-header.jpg');">
            <!-- GÖRSEL: headers/contact-header.jpg - İletişimle ilgili sakin, profesyonel bir banner görseli -->
            <div class="slide-overlay" style="background-color: rgba(50,50,50,0.5);"></div> <!-- Biraz daha açık bir overlay -->
            <div class="container text-center">
                <h1 class="page-title-display animate__animated animate__fadeInDown"><?php echo htmlspecialchars($pageTitle); ?></h1>
                <p class="lead text-white animate__animated animate__fadeInUp animate__delay-05s" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Sorularınız, önerileriniz veya işbirliği teklifleriniz için buradayız.</p>
            </div>
        </section>

        <!-- Ana İçerik Alanı -->
        <section class="section-padding">
            <div class="container-xl">
                <div class="row g-4 justify-content-center">
                    <!-- SOL TARAF: İLETİŞİM BİLGİLERİ -->
                    <div class="col-lg-5 col-md-6 order-lg-last"> <!-- Formun solunda olması için order-lg-last -->
                        <div class="card h-100">
                            <div class="card-body p-lg-4">
                                <h2 class="card-title h3 mb-4">Bize Ulaşın</h2>
                                
                                <div class="mb-3 pb-2 border-bottom">
                                    <div class="d-flex align-items-start">
                                        <span class="avatar avatar-md bg-primary-lt me-3 mt-1 flex-shrink-0"><i class="ti ti-map-pin icon-lg"></i></span>
                                        <div>
                                            <strong class="d-block mb-1">Adresimiz</strong>
                                            <address class="text-muted mb-0" style="font-style: normal; line-height: 1.6;">
                                                Örnek Mah. Kahve Cad. No:123,<br>
                                                Abant İş Merkezi, Kat:2 Daire:5,<br>
                                                34000 Abant / Bolu, Türkiye
                                            </address>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 pb-2 border-bottom">
                                    <div class="d-flex align-items-start">
                                        <span class="avatar avatar-md bg-primary-lt me-3 mt-1 flex-shrink-0"><i class="ti ti-phone icon-lg"></i></span>
                                        <div>
                                            <strong class="d-block mb-1">Telefon</strong>
                                            <a href="tel:+905551234567" class="d-block text-muted text-decoration-none mb-1">+90 555 123 45 67 <small>(Genel Merkez)</small></a>
                                            <a href="tel:+902129876543" class="d-block text-muted text-decoration-none">+90 212 987 65 43 <small>(Bayilik Hattı)</small></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 pb-2 border-bottom">
                                    <div class="d-flex align-items-start">
                                        <span class="avatar avatar-md bg-primary-lt me-3 mt-1 flex-shrink-0"><i class="ti ti-mail icon-lg"></i></span>
                                        <div>
                                            <strong class="d-block mb-1">E-posta</strong>
                                            <a href="mailto:info@abantkahvecisi.com" class="d-block text-muted text-decoration-none mb-1">info@abantkahvecisi.com <small>(Genel Sorular)</small></a>
                                            <a href="mailto:bayilik@abantkahvecisi.com" class="d-block text-muted text-decoration-none">bayilik@abantkahvecisi.com <small>(Bayilik)</small></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                     <div class="d-flex align-items-start">
                                        <span class="avatar avatar-md bg-primary-lt me-3 mt-1 flex-shrink-0"><i class="ti ti-clock icon-lg"></i></span>
                                        <div>
                                            <strong class="d-block mb-1">Çalışma Saatleri</strong>
                                            <span class="d-block text-muted">Hafta İçi: 09:00 - 18:00</span>
                                            <span class="d-block text-muted">Cumartesi: 10:00 - 15:00</span>
                                            <span class="d-block text-muted">Pazar: Kapalı</span>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="card-subtitle mb-3 mt-4 pt-2 border-top">Sosyal Medyada Bizi Takip Edin</h4>
                                <div class="social-icons-contact">
                                    <a href="#" class="btn btn-icon btn-outline-secondary me-2" title="Facebook" target="_blank" rel="noopener noreferrer"><i class="ti ti-brand-facebook"></i></a>
                                    <a href="#" class="btn btn-icon btn-outline-secondary me-2" title="Instagram" target="_blank" rel="noopener noreferrer"><i class="ti ti-brand-instagram"></i></a>
                                    <a href="#" class="btn btn-icon btn-outline-secondary me-2" title="Twitter" target="_blank" rel="noopener noreferrer"><i class="ti ti-brand-twitter"></i></a>
                                    <a href="#" class="btn btn-icon btn-outline-secondary" title="LinkedIn" target="_blank" rel="noopener noreferrer"><i class="ti ti-brand-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SAĞ TARAF: İLETİŞİM FORMU -->
                    <div class="col-lg-7 col-md-6">
                        <div class="card card-lg">
                            <div class="card-header">
                                <h2 class="card-title h3">Bize Mesaj Yazın</h2>
                            </div>
                            <div class="card-body">
                                <form id="contact-form" action="<?php echo SITE_URL; ?>/php/form-handler.php" method="POST">
                                    <!-- form-handler.php, public klasörü altında php/ dizininde olmalı -->
                                    <div class="alert alert-success d-none" role="alert" id="form-success-message">
                                        Mesajınız başarıyla gönderildi. En kısa sürede size dönüş yapacağız.
                                    </div>
                                    <div class="alert alert-danger d-none" role="alert" id="form-error-message">
                                        Bir hata oluştu. Lütfen form alanlarını kontrol edin veya daha sonra tekrar deneyin.
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="contact_name" class="form-label">Adınız Soyadınız <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="contact_name" name="contact_name" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="contact_email" class="form-label">E-posta Adresiniz <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="contact_email" name="contact_email" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact_phone" class="form-label">Telefon Numaranız</label>
                                        <input type="tel" class="form-control" id="contact_phone" name="contact_phone" placeholder="İsteğe bağlı">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact_subject" class="form-label">Konu <span class="text-danger">*</span></label>
                                        <select class="form-select" id="contact_subject" name="contact_subject" required>
                                            <option value="" selected disabled>Lütfen bir konu seçiniz...</option>
                                            <option value="Genel Bilgi">Genel Bilgi</option>
                                            <option value="Bayilik Başvurusu">Bayilik Başvurusu</option>
                                            <option value="Ürünler Hakkında Soru">Ürünler Hakkında Soru</option>
                                            <option value="İş Birliği Teklifi">İş Birliği Teklifi</option>
                                            <option value="Geri Bildirim / Öneri">Geri Bildirim / Öneri</option>
                                            <option value="Diğer">Diğer</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact_message" class="form-label">Mesajınız <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="contact_message" name="contact_message" rows="5" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input" name="gdpr_consent" id="gdpr_consent" required>
                                            <span class="form-check-label">
                                                <a href="<?php echo SITE_URL; ?>/gizlilik-politikasi" target="_blank">Gizlilik Politikası</a>'nı ve
                                                <a href="<?php echo SITE_URL; ?>/kullanim-kosullari" target="_blank">Kullanım Koşulları</a>'nı okudum, anladım ve kabul ediyorum.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-footer text-end">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="ti ti-send me-1"></i> Mesajı Gönder
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- .row sonu -->

                <!-- Harita Bölümü (İsteğe Bağlı Alt Kısımda) -->
                <div class="mt-5 pt-4 border-top">
                    <h3 class="text-center mb-4">Konumumuz</h3>
                    <div class="map-responsive rounded shadow-sm">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192805.3023375636!2d31.47980557084709!3d40.60306714955953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409d8e13a0e0d7b3%3A0x7f065a9e3417b575!2sAbant%20G%C3%B6l%C3%BC%20Tabiat%20Park%C4%B1!5e0!3m2!1str!2str!4v1678886543210!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div> <!-- .container-xl sonu -->
        </section>

        <!-- SSS Bölümü (Opsiyonel, daha önce eklediğimiz gibi) -->
        <?php
        $showFAQ = true; // false yaparsanız gizlenir
        if ($showFAQ):
        ?>
        <section class="section-padding bg-light">
            <div class="container-xl">
                <div class="section-title text-center mb-5">
                    <h2 class="page-title">Sıkça Sorulan Sorular</h2>
                </div>
                <div class="accordion" id="faqAccordionContact">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqH1Contact">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC1Contact">
                                İletişim formuna ne kadar sürede cevap veriyorsunuz?
                            </button>
                        </h2>
                        <div id="faqC1Contact" class="accordion-collapse collapse" data-bs-parent="#faqAccordionContact">
                            <div class="accordion-body">
                                Gönderdiğiniz mesajlara genellikle 24-48 iş saati içerisinde yanıt vermeye çalışıyoruz. Yoğunluğa bağlı olarak bu süre zaman zaman değişiklik gösterebilir. Acil durumlar için lütfen telefonla bizimle iletişime geçin.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqH2Contact">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC2Contact">
                                Bayilik başvurusu için hangi bilgileri göndermeliyim?
                            </button>
                        </h2>
                        <div id="faqC2Contact" class="accordion-collapse collapse" data-bs-parent="#faqAccordionContact">
                            <div class="accordion-body">
                                Bayilik başvurularınız için iletişim formunu kullanabilir veya doğrudan <a href="mailto:bayilik@abantkahvecisi.com">bayilik@abantkahvecisi.com</a> adresine e-posta gönderebilirsiniz. Lütfen başvurunuzda düşündüğünüz lokasyon, işletme deneyiminiz ve iletişim bilgilerinizi eklemeyi unutmayın. Detaylı bilgi için <a href="<?php echo SITE_URL; ?>/bayilik">Bayilik sayfamızı</a> inceleyebilirsiniz.
                            </div>
                        </div>
                    </div>
                    <!-- Diğer SSS öğeleri -->
                </div>
            </div>
        </section>
        <?php endif; ?>

    </main>
</div> <!-- .page-wrapper sonu -->

<!-- İletişim Sayfasına Özel JS (Form gönderimi için) -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    const successMessage = document.getElementById('form-success-message');
    const errorMessage = document.getElementById('form-error-message');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            successMessage.classList.add('d-none'); // Önceki mesajları gizle
            errorMessage.classList.add('d-none');

            const formData = new FormData(contactForm);
            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalButtonHTML = submitButton.innerHTML; // Butonun orijinal içeriğini sakla
            
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Gönderiliyor...';

            fetch(contactForm.action, {
                method: 'POST',
                body: formData,
                headers: { // Eğer PHP tarafı JSON dönecekse bu başlık önemli
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                // HTTP yanıt kodunu kontrol et
                if (!response.ok) {
                    // Eğer sunucudan bir hata mesajı geliyorsa (örneğin JSON formatında)
                    return response.json().then(errData => {
                        throw { serverError: true, data: errData };
                    });
                }
                return response.json(); // Başarılı yanıtı JSON olarak işle
            })
            .then(data => {
                if (data.success) { // PHP'den { "success": true, "message": "..." } gibi bir yanıt bekliyoruz
                    successMessage.textContent = data.message || 'Mesajınız başarıyla gönderildi.';
                    successMessage.classList.remove('d-none');
                    contactForm.reset();
                } else {
                    // PHP'den { "success": false, "message": "Hata mesajı" } gibi bir yanıt
                    errorMessage.textContent = data.message || 'Bir hata oluştu, lütfen tekrar deneyin.';
                    errorMessage.classList.remove('d-none');
                }
            })
            .catch(error => {
                console.error('Form gönderim hatası:', error);
                if (error.serverError && error.data && error.data.message) {
                    errorMessage.textContent = error.data.message;
                } else {
                    errorMessage.textContent = 'Mesajınız gönderilirken bir sorun oluştu. Lütfen internet bağlantınızı kontrol edin veya daha sonra tekrar deneyin.';
                }
                errorMessage.classList.remove('d-none');
            })
            .finally(() => {
                submitButton.disabled = false;
                submitButton.innerHTML = originalButtonHTML; // Buton içeriğini eski haline getir
            });
        });
    }
});
</script>