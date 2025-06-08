<?php
// src/Pages/franchising.php
$pageTitle = "Franchising Fırsatları";
$metaDescription = "Abant Kahvecisi ailesine katılarak kendi kahve işinizi kurun! Farklı konseptlerimiz ve avantajlı franchising modelimiz hakkında detaylı bilgi alın.";
// $activePage global değişkeni public/index.php'de 'franchising' veya 'bayilik' olarak set edilecek.

// Franchising Konsept Verileri
$franchiseKonseptleri = [
    [
        'gorsel' => SITE_URL . '/assets/images/franchise/konsept-kafe.jpg', // GÖRSEL: Geniş, ferah bir kafe içi
        'isim' => 'Abant Kahvecisi Kafe',
        'aciklama_baslik' => 'Tam Donanımlı Kafe Deneyimi',
        'ozellikler' => [
            'Geniş ve konforlu oturma alanları',
            'Zengin menü: Özel kahveler, tatlılar, atıştırmalıklar',
            'Barista eğitimi ve operasyonel destek',
            'Anahtar teslim kurulum seçeneği',
            'Yüksek müşteri potansiyeli olan lokasyonlar için ideal',
            'Minimum 100-150 m² alan gereksinimi'
        ],
        'cta_link' => '#basvuru', // Başvuru formuna veya detaylı bilgiye link
        'cta_text' => 'Bu Konsept İçin Başvur'
    ],
    [
        'gorsel' => SITE_URL . '/assets/images/franchise/konsept-kiosk.jpg', // GÖRSEL: Modern ve kompakt bir kiosk
        'isim' => 'Abant Kahvecisi Kiosk',
        'aciklama_baslik' => 'Hızlı ve Pratik Çözüm',
        'ozellikler' => [
            'AVM içleri, işlek caddeler, metro istasyonları için uygun',
            'Düşük başlangıç maliyeti',
            'Kompakt ve verimli operasyon',
            'Paket servis (take-away) odaklı menü',
            'Hızlı kurulum ve kolay yönetim',
            'Minimum 15-30 m² alan gereksinimi'
        ],
        'cta_link' => '#basvuru',
        'cta_text' => 'Bu Konsept İçin Başvur'
    ],
    [
        'gorsel' => SITE_URL . '/assets/images/franchise/konsept-corner.jpg', // GÖRSEL: Bir mağaza içinde şık bir kahve köşesi
        'isim' => 'Abant Kahvecisi Corner',
        'aciklama_baslik' => 'Mevcut İşletmenize Değer Katın',
        'ozellikler' => [
            'Kitapçılar, oteller, büyük mağazalar için ideal shop-in-shop modeli',
            'Mevcut müşteri kitlenize ek gelir kapısı',
            'Esnek tasarım ve kurulum seçenekleri',
            'Markamızın gücüyle sinerji yaratma imkanı',
            'Minimum 10-20 m² özel alan gereksinimi'
        ],
        'cta_link' => '#basvuru',
        'cta_text' => 'Bu Konsept İçin Başvur'
    ],
    [
        'gorsel' => SITE_URL . '/assets/images/franchise/konsept-mobil.jpg', // GÖRSEL: Şık bir kahve karavanı veya mobil stand
        'isim' => 'Abant Kahvecisi Mobil',
        'aciklama_baslik' => 'Lezzeti Her Yere Taşıyın',
        'ozellikler' => [
            'Festivaller, etkinlikler, özel organizasyonlar için mükemmel',
            'Düşük operasyonel giderler, yüksek esneklik',
            'Özel tasarlanmış mobil kahve aracı/standı',
            'Geniş bir kitleye ulaşma potansiyeli',
            'Marka bilinirliğini artırma fırsatı'
        ],
        'cta_link' => '#basvuru',
        'cta_text' => 'Bu Konsept İçin Başvur'
    ]
];
?>

<div class="page-wrapper">
    <main class="page-body">

        <!-- Sayfa Başlığı Alanı -->
        <section class="page-header-section" style="background-image: url('<?php echo SITE_URL; ?>/assets/images/headers/franchise-header.jpg');">
            <!-- GÖRSEL: headers/franchise-header.jpg - Başarılı girişimciler, iş planı veya modern bir iş ortamı -->
            <div class="slide-overlay" style="background-color: rgba(40,40,60,0.6);"></div>
            <div class="container text-center">
                <h1 class="page-title-display animate__animated animate__fadeInDown"><?php echo htmlspecialchars($pageTitle); ?></h1>
                <p class="lead text-white animate__animated animate__fadeInUp animate__delay-05s" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Kendi Abant Kahvecisi'nizi açın, başarılı bir geleceğe adım atın.</p>
            </div>
        </section>

        <!-- Giriş Metni ve Avantajlar Bölümü -->
        <section class="section-padding">
            <div class="container-xl">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h2 class="page-title mb-4">Neden Abant Kahvecisi Franchising?</h2>
                        <p class="lead text-muted mb-5">
                            Abant Kahvecisi olarak, yılların getirdiği deneyim, güçlü marka bilinirliğimiz ve kanıtlanmış iş modelimizle girişimcilere eşsiz fırsatlar sunuyoruz. Siz de kahve tutkunuzu kârlı bir işe dönüştürmek ve büyüyen ailemizin bir parçası olmak istiyorsanız doğru yerdesiniz.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-sm text-center h-100">
                            <div class="card-body">
                                <span class="avatar avatar-xl bg-primary-lt rounded-circle mb-3"><i class="ti ti-medal icon-lg"></i></span>
                                <h3 class="card-title">Güçlü Marka Bilinirliği</h3>
                                <p class="text-muted">Tanınan ve sevilen bir markayla işe başlayın.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-sm text-center h-100">
                            <div class="card-body">
                                <span class="avatar avatar-xl bg-green-lt rounded-circle mb-3"><i class="ti ti-settings icon-lg"></i></span>
                                <h3 class="card-title">Kapsamlı Destek</h3>
                                <p class="text-muted">Eğitim, pazarlama, operasyon ve tedarik konularında yanınızdayız.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-sm text-center h-100">
                            <div class="card-body">
                                <span class="avatar avatar-xl bg-orange-lt rounded-circle mb-3"><i class="ti ti-coffee icon-lg"></i></span>
                                <h3 class="card-title">Kaliteli Ürünler</h3>
                                <p class="text-muted">Her zaman taze, özel harman kahveler ve lezzetli ürünler.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Franchising Konseptleri Bölümü -->
        <section class="section-padding bg-light"> <!-- Farklı bir arka plan rengi -->
            <div class="container-xl">
                <div class="section-title text-center mb-5">
                    <h2 class="page-title">Size Uygun Franchising Konseptlerimiz</h2>
                    <p class="lead text-muted">Farklı ihtiyaç ve yatırım seviyelerine yönelik esnek modeller.</p>
                </div>

                <?php if (!empty($franchiseKonseptleri)): ?>
                    <?php foreach ($franchiseKonseptleri as $index => $konsept): ?>
                        <div class="card card-lg overflow-hidden mb-4 shadow-sm franchise-konsept-card">
                            <div class="row g-0">
                                <div class="col-md-5 col-lg-4 d-flex align-items-stretch">
                                    <!-- Sol Taraf: Konsept Görseli -->
                                    <img src="<?php echo htmlspecialchars($konsept['gorsel'] ?? ''); ?>" 
                                         class="card-img-left object-cover franchise-konsept-gorsel" 
                                         alt="<?php echo htmlspecialchars($konsept['isim'] ?? ''); ?>">
                                </div>
                                <div class="col-md-7 col-lg-8 d-flex flex-column">
                                    <!-- Sağ Taraf: Konsept Adı ve Açıklama -->
                                    <div class="card-body p-4 p-lg-5">
                                        <h3 class="card-title h2 mb-3">
                                            <?php echo htmlspecialchars($konsept['isim'] ?? 'Konsept Adı'); ?>
                                        </h3>
                                        <?php if (!empty($konsept['aciklama_baslik'])): ?>
                                            <p class="lead text-muted mb-3"><?php echo htmlspecialchars($konsept['aciklama_baslik']); ?></p>
                                        <?php endif; ?>

                                        <?php if (!empty($konsept['ozellikler']) && is_array($konsept['ozellikler'])): ?>
                                            <ul class="list-unstyled space-y-2 mb-4">
                                                <?php foreach ($konsept['ozellikler'] as $ozellik): ?>
                                                    <li class="d-flex">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-green flex-shrink-0" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                                                        <span><?php echo htmlspecialchars($ozellik); ?></span>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                        
                                        <?php if (!empty($konsept['cta_link']) && !empty($konsept['cta_text'])): ?>
                                        <div class="mt-auto pt-3"> <!-- Butonu alta yaslamak için -->
                                            <a href="<?php echo htmlspecialchars($konsept['cta_link']); ?>" class="btn btn-primary btn-lg">
                                                <i class="ti ti-arrow-right me-1"></i> <?php echo htmlspecialchars($konsept['cta_text']); ?>
                                            </a>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="alert alert-info text-center" role="alert">
                        Şu anda aktif franchising konseptimiz bulunmamaktadır. Lütfen daha sonra tekrar kontrol edin.
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Başvuru Süreci ve Form Bölümü -->
        <section class="section-padding" id="basvuru">
            <div class="container-xl">
                <div class="section-title text-center mb-5">
                    <h2 class="page-title">Başvuru Süreci ve İletişim</h2>
                    <p class="lead text-muted">Abant Kahvecisi ailesine katılmak için ilk adımı atın.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body p-lg-5">
                                <h3 class="card-title mb-4 text-center">Franchising Başvuru Formu</h3>
                                <p class="text-muted text-center mb-4">Aşağıdaki formu doldurarak veya doğrudan <a href="mailto:bayilik@abantkahvecisi.com">bayilik@abantkahvecisi.com</a> adresinden bizimle iletişime geçerek bayilik ön başvurunuzu yapabilirsiniz. Ekibimiz en kısa sürede sizinle irtibata geçecektir.</p>
                                
                                <!-- İletişim sayfasındaki formun benzeri bir form buraya eklenebilir -->
                                <!-- Veya daha basit bir ön başvuru formu -->
                                <form id="franchise-application-form" action="<?php echo SITE_URL; ?>/php/franchise-form-handler.php" method="POST">
                                    <div class="alert alert-success d-none" role="alert" id="franchise-form-success-message"></div>
                                    <div class="alert alert-danger d-none" role="alert" id="franchise-form-error-message"></div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="franchise_name" class="form-label">Adınız Soyadınız <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="franchise_name" name="franchise_name" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="franchise_email" class="form-label">E-posta Adresiniz <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="franchise_email" name="franchise_email" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="franchise_phone" class="form-label">Telefon Numaranız <span class="text-danger">*</span></label>
                                            <input type="tel" class="form-control" id="franchise_phone" name="franchise_phone" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="franchise_city" class="form-label">Düşündüğünüz Şehir/İlçe <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="franchise_city" name="franchise_city" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="franchise_konsept" class="form-label">İlgilendiğiniz Konsept</label>
                                        <select class="form-select" id="franchise_konsept" name="franchise_konsept">
                                            <option value="">Seçiniz (İsteğe Bağlı)</option>
                                            <?php foreach ($franchiseKonseptleri as $konsept): ?>
                                                <option value="<?php echo htmlspecialchars($konsept['isim']); ?>"><?php echo htmlspecialchars($konsept['isim']); ?></option>
                                            <?php endforeach; ?>
                                            <option value="Diğer">Diğer / Emin Değilim</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="franchise_message" class="form-label">Ek Notlarınız</label>
                                        <textarea class="form-control" id="franchise_message" name="franchise_message" rows="4" placeholder="Varsa yatırım bütçeniz, mevcut iş deneyimleriniz veya sorularınız..."></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input" name="franchise_gdpr" id="franchise_gdpr" required>
                                            <span class="form-check-label">
                                                <a href="<?php echo SITE_URL; ?>/gizlilik-politikasi" target="_blank">Kişisel Verilerin İşlenmesi Hakkında Aydınlatma Metni</a>'ni okudum, anladım.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-footer text-center">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="ti ti-send me-1"></i> Ön Başvuruyu Gönder
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div> <!-- .page-wrapper sonu -->

<style>
    /* Franchising Sayfasına Özel Stiller */
    .franchise-konsept-card .franchise-konsept-gorsel {
        height: 100%; /* Sol taraftaki görselin kart yüksekliğini doldurması */
        min-height: 300px; /* Mobil ve dar ekranlarda minimum yükseklik */
        object-fit: cover; /* Görselin orantılı kaplaması */
    }
    /* Medium (md) ve üzeri ekranlarda görselin yüksekliği otomatik ayarlanır,
       ama mobil için bir minimum yükseklik iyi olabilir.
       Veya kart içeriği kadar uzamasını istiyorsanız height: auto; ve align-items-stretch kullanılabilir.
       Mevcut kodda d-flex align-items-stretch ile bunu zaten sağlamaya çalışıyoruz.
    */

    .franchise-konsept-card ul li span {
        line-height: 1.5; /* Madde işaretleri ile metin hizalaması */
    }
    .list-unstyled.space-y-2 li:not(:last-child) { /* Tabler'da olmayan bir class, kendimiz ekleyelim */
        margin-bottom: 0.75rem; /* Maddeler arası boşluk */
    }
</style>

<script>
// Franchising Formu AJAX Gönderimi (İletişim formuna benzer)
document.addEventListener('DOMContentLoaded', function() {
    const franchiseForm = document.getElementById('franchise-application-form');
    const successMessage = document.getElementById('franchise-form-success-message');
    const errorMessage = document.getElementById('franchise-form-error-message');

    if (franchiseForm) {
        franchiseForm.addEventListener('submit', function(e) {
            e.preventDefault();
            successMessage.textContent = ''; // Önceki mesajları temizle
            errorMessage.textContent = '';
            successMessage.classList.add('d-none');
            errorMessage.classList.add('d-none');

            const formData = new FormData(franchiseForm);
            const submitButton = franchiseForm.querySelector('button[type="submit"]');
            const originalButtonHTML = submitButton.innerHTML;
            
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Gönderiliyor...';

            fetch(franchiseForm.action, {
                method: 'POST',
                body: formData,
                headers: { 'Accept': 'application/json' }
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(errData => { throw { serverError: true, data: errData, status: response.status }; });
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    successMessage.textContent = data.message || 'Başvurunuz başarıyla alındı. Teşekkür ederiz!';
                    successMessage.classList.remove('d-none');
                    franchiseForm.reset();
                } else {
                    errorMessage.textContent = data.message || 'Bir hata oluştu. Lütfen bilgilerinizi kontrol edin.';
                    errorMessage.classList.remove('d-none');
                }
            })
            .catch(error => {
                console.error('Franchise form gönderim hatası:', error);
                if (error.serverError && error.data && error.data.message) {
                    errorMessage.textContent = error.data.message;
                } else if (error.status) {
                     errorMessage.textContent = `Sunucu hatası (${error.status}). Lütfen daha sonra tekrar deneyin.`;
                }
                else {
                    errorMessage.textContent = 'Başvurunuz gönderilirken bir sorun oluştu. Lütfen internet bağlantınızı kontrol edin.';
                }
                errorMessage.classList.remove('d-none');
            })
            .finally(() => {
                submitButton.disabled = false;
                submitButton.innerHTML = originalButtonHTML;
            });
        });
    }
});
</script>