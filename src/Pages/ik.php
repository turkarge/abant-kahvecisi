<?php
// src/Pages/ik.php
$pageTitle = "İnsan Kaynakları - Kariyer Fırsatları";
$metaDescription = "Abant Kahvecisi ailesine katılın! Dinamik ve tutkulu ekibimizde yerinizi alın. Açık pozisyonlarımızı inceleyin ve kariyerinize bizimle yön verin.";
// $activePage global değişkeni public/index.php'de 'ik' olarak set edilecek.

// Örnek Açık Pozisyon Verileri
$acikPozisyonlar = [
    [
        'pozisyon' => 'Barista (Tam Zamanlı)',
        'lokasyon' => 'İstanbul - Kadıköy Şubesi',
        'departman' => 'Operasyon',
        'ozet' => 'Müşterilerimize eşsiz kahve deneyimleri sunacak, enerjik ve kahve tutkunu baristalar arıyoruz. Kahve hazırlama ve sunumunda deneyimli olmak tercih sebebidir.',
        'link' => '#basvuru-formu', // veya kariyer@abantkahvecisi.com
        'detay_linki' => '#' // Pozisyon detay sayfasına link (isteğe bağlı)
    ],
    [
        'pozisyon' => 'Mağaza Müdürü',
        'lokasyon' => 'Ankara - Kızılay Şubesi',
        'departman' => 'Yönetim',
        'ozet' => 'Şube operasyonlarını yönetecek, ekip liderliği yapacak ve müşteri memnuniyetini en üst düzeyde tutacak deneyimli mağaza müdürleri arıyoruz.',
        'link' => '#basvuru-formu',
        'detay_linki' => '#'
    ],
    [
        'pozisyon' => 'Pazarlama Uzmanı (Merkez Ofis)',
        'lokasyon' => 'Bolu - Merkez Ofis',
        'departman' => 'Pazarlama',
        'ozet' => 'Marka bilinirliğimizi artıracak, dijital pazarlama kampanyalarını yönetecek ve yaratıcı pazarlama stratejileri geliştirecek uzmanlar arıyoruz.',
        'link' => '#basvuru-formu',
        'detay_linki' => '#'
    ]
];

// Eğer açık pozisyon yoksa gösterilecek mesaj için kontrol
$pozisyonVarMi = !empty($acikPozisyonlar);

?>

<div class="page-wrapper">
    <main class="page-body">

        <!-- Sayfa Başlığı Alanı -->
        <section class="page-header-section" style="background-image: url('<?php echo SITE_URL; ?>/assets/images/headers/ik-header.jpg');">
            <!-- GÖRSEL: headers/ik-header.jpg - Gülümseyen bir ekip, modern bir ofis ortamı veya işbirliği temalı bir görsel -->
            <div class="slide-overlay" style="background-color: rgba(30,80,120,0.6);"></div> <!-- Farklı bir overlay rengi -->
            <div class="container text-center">
                <h1 class="page-title-display animate__animated animate__fadeInDown">Kariyer Fırsatları</h1>
                <p class="lead text-white animate__animated animate__fadeInUp animate__delay-05s" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Abant Kahvecisi ailesinin bir parçası olun, tutkunuzu kariyerinize dönüştürün.</p>
            </div>
        </section>

        <!-- Neden Biz / Çalışma Kültürümüz Bölümü -->
        <section class="section-padding">
            <div class="container-xl">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h2 class="page-title mb-4">Neden Abant Kahvecisi'nde Çalışmalısınız?</h2>
                        <p class="lead text-muted mb-5">
                            Biz, kahveye olan tutkumuzu işimizin her alanına yansıtan, dinamik, yenilikçi ve insana değer veren bir aileyiz. Ekip çalışmasına inanır, çalışanlarımızın gelişimini destekler ve keyifli bir çalışma ortamı sunarız.
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center h-100 shadow-sm">
                            <div class="card-body">
                                <span class="avatar avatar-xl bg-teal-lt rounded-circle mb-3"><i class="ti ti-users icon-lg"></i></span>
                                <h3 class="card-title">Dinamik Ekip Ortamı</h3>
                                <p class="text-muted">İşbirlikçi, destekleyici ve enerjik bir ekipte yer alın.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center h-100 shadow-sm">
                            <div class="card-body">
                                <span class="avatar avatar-xl bg-purple-lt rounded-circle mb-3"><i class="ti ti-school icon-lg"></i></span>
                                <h3 class="card-title">Sürekli Gelişim</h3>
                                <p class="text-muted">Kariyer hedeflerinize ulaşmanız için eğitim ve gelişim fırsatları sunarız.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center h-100 shadow-sm">
                            <div class="card-body">
                                <span class="avatar avatar-xl bg-pink-lt rounded-circle mb-3"><i class="ti ti-mood-happy icon-lg"></i></span>
                                <h3 class="card-title">Keyifli Çalışma Ortamı</h3>
                                <p class="text-muted">Çalışan memnuniyetini önemseyen, pozitif bir atmosferde çalışın.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Açık Pozisyonlar Bölümü -->
        <section class="section-padding bg-light" id="acik-pozisyonlar">
            <div class="container-xl">
                <div class="section-title text-center mb-5">
                    <h2 class="page-title">Açık Pozisyonlarımız</h2>
                    <?php if (!$pozisyonVarMi): ?>
                        <p class="lead text-muted">Şu anda aktif bir açık pozisyonumuz bulunmamaktadır. Ancak, genel başvurularınızı her zaman değerlendiriyoruz.</p>
                    <?php else: ?>
                        <p class="lead text-muted">Aşağıdaki pozisyonlar için başvurularınızı bekliyoruz.</p>
                    <?php endif; ?>
                </div>

                <?php if ($pozisyonVarMi): ?>
                    <div class="row g-4">
                        <?php foreach ($acikPozisyonlar as $pozisyon): ?>
                            <div class="col-md-6 col-lg-4 d-flex"> <!-- d-flex ve h-100 kartları eşit yükseklikte tutar -->
                                <div class="card h-100">
                                    <div class="card-body d-flex flex-column"> <!-- flex-column butonu alta iter -->
                                        <h3 class="card-title"><?php echo htmlspecialchars($pozisyon['pozisyon'] ?? 'Pozisyon Adı'); ?></h3>
                                        <div class="text-muted mb-2">
                                            <span class="me-3"><i class="ti ti-map-pin me-1"></i><?php echo htmlspecialchars($pozisyon['lokasyon'] ?? 'Belirtilmemiş'); ?></span>
                                            <span><i class="ti ti-briefcase me-1"></i><?php echo htmlspecialchars($pozisyon['departman'] ?? 'Belirtilmemiş'); ?></span>
                                        </div>
                                        <p class="text-muted small">
                                            <?php echo htmlspecialchars($pozisyon['ozet'] ?? 'Açıklama yok.'); ?>
                                        </p>
                                        <div class="mt-auto pt-2"> <!-- Butonu alta yasla -->
                                            <?php if (!empty($pozisyon['detay_linki']) && $pozisyon['detay_linki'] !== '#'): ?>
                                                <a href="<?php echo htmlspecialchars($pozisyon['detay_linki']); ?>" class="btn btn-outline-primary btn-sm me-2">Detayları Gör</a>
                                            <?php endif; ?>
                                            <a href="<?php echo htmlspecialchars($pozisyon['link'] ?? '#'); ?>" class="btn btn-primary btn-sm">
                                                <i class="ti ti-send me-1"></i> Başvur
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <!-- Genel Başvuru / Başvuru Süreci Bölümü -->
        <section class="section-padding" id="basvuru-formu">
            <div class="container-xl">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body p-lg-5">
                                <h2 class="card-title h3 mb-4 text-center">Genel Başvuru ve Süreç</h2>
                                <?php if (!$pozisyonVarMi): ?>
                                <p class="text-muted text-center mb-4">
                                    Size uygun bir pozisyon bulamadıysanız üzülmeyin! Genel başvurunuzu aşağıdaki form aracılığıyla veya <a href="mailto:ik@abantkahvecisi.com">ik@abantkahvecisi.com</a> adresine CV'nizi göndererek yapabilirsiniz. Niteliklerinize uygun bir pozisyon açıldığında sizinle iletişime geçeceğiz.
                                </p>
                                <?php else: ?>
                                <p class="text-muted text-center mb-4">
                                    Yukarıdaki pozisyonlara başvurmak veya genel başvuru yapmak için aşağıdaki formu kullanabilir ya da CV'nizi <a href="mailto:ik@abantkahvecisi.com">ik@abantkahvecisi.com</a> adresine gönderebilirsiniz.
                                </p>
                                <?php endif; ?>

                                <h4 class="mb-3">Başvuru Sürecimiz</h4>
                                <ul class="list-unstyled space-y-2 mb-4">
                                    <li class="d-flex"><span class="badge bg-blue-lt me-2">1</span> Ön Değerlendirme: Başvurunuz İK departmanımız tarafından incelenir.</li>
                                    <li class="d-flex"><span class="badge bg-blue-lt me-2">2</span> Telefon/Online Mülakat: Uygun adaylarla kısa bir ön görüşme yapılır.</li>
                                    <li class="d-flex"><span class="badge bg-blue-lt me-2">3</span> Yüz Yüze Mülakat: İlgili departman yöneticileri ile detaylı bir görüşme organize edilir.</li>
                                    <li class="d-flex"><span class="badge bg-blue-lt me-2">4</span> Teklif ve İşe Alım: Başarılı adaylara iş teklifi sunulur.</li>
                                </ul>
                                <hr class="my-4">
                                
                                <h3 class="text-center mb-3">İş Başvuru Formu</h3>
                                <form id="ik-application-form" action="<?php echo SITE_URL; ?>/php/ik-form-handler.php" method="POST" enctype="multipart/form-data">
                                    <!-- ik-form-handler.php oluşturulmalı -->
                                    <div class="alert alert-success d-none" role="alert" id="ik-form-success-message"></div>
                                    <div class="alert alert-danger d-none" role="alert" id="ik-form-error-message"></div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="ik_name" class="form-label">Adınız Soyadınız <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="ik_name" name="ik_name" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ik_email" class="form-label">E-posta Adresiniz <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="ik_email" name="ik_email" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="ik_phone" class="form-label">Telefon Numaranız <span class="text-danger">*</span></label>
                                            <input type="tel" class="form-control" id="ik_phone" name="ik_phone" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ik_pozisyon" class="form-label">Başvurulan Pozisyon</label>
                                            <select class="form-select" id="ik_pozisyon" name="ik_pozisyon">
                                                <option value="Genel Başvuru" selected>Genel Başvuru</option>
                                                <?php if ($pozisyonVarMi): ?>
                                                    <?php foreach ($acikPozisyonlar as $pozisyon): ?>
                                                        <option value="<?php echo htmlspecialchars($pozisyon['pozisyon']); ?>"><?php echo htmlspecialchars($pozisyon['pozisyon']); ?> (<?php echo htmlspecialchars($pozisyon['lokasyon']); ?>)</option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ik_cv" class="form-label">CV'nizi Yükleyin (PDF, DOC, DOCX - Max 5MB) <span class="text-danger">*</span></label>
                                        <input class="form-control" type="file" id="ik_cv" name="ik_cv" accept=".pdf,.doc,.docx" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ik_coverletter" class="form-label">Ön Yazı / Ek Notlar</label>
                                        <textarea class="form-control" id="ik_coverletter" name="ik_coverletter" rows="4" placeholder="Kendinizi tanıtın, neden bizimle çalışmak istediğinizi anlatın..."></textarea>
                                    </div>
                                     <div class="mb-3">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input" name="ik_gdpr" id="ik_gdpr" required>
                                            <span class="form-check-label">
                                                <a href="<?php echo SITE_URL; ?>/kvkk-aydinlatma-metni" target="_blank">KVKK Aydınlatma Metni</a>'ni okudum, anladım ve başvurumun bu kapsamda işlenmesini kabul ediyorum.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-footer text-center">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="ti ti-send me-1"></i> Başvuruyu Gönder
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
    /* İK Sayfasına Özel Stiller */
    .list-unstyled.space-y-2 li:not(:last-child) {
        margin-bottom: 0.75rem;
    }
    .list-unstyled.space-y-2 .badge { /* Başvuru süreci adımları için */
        min-width: 28px; /* Numaraların düzgün görünmesi için */
        text-align: center;
        line-height: 1.5; /* Hizalama */
    }
</style>

<script>
// İK Başvuru Formu AJAX Gönderimi
document.addEventListener('DOMContentLoaded', function() {
    const ikForm = document.getElementById('ik-application-form');
    const successMessage = document.getElementById('ik-form-success-message');
    const errorMessage = document.getElementById('ik-form-error-message');

    if (ikForm) {
        ikForm.addEventListener('submit', function(e) {
            e.preventDefault();
            successMessage.textContent = '';
            errorMessage.textContent = '';
            successMessage.classList.add('d-none');
            errorMessage.classList.add('d-none');

            const formData = new FormData(ikForm); // Dosya yükleme için FormData şart!
            const submitButton = ikForm.querySelector('button[type="submit"]');
            const originalButtonHTML = submitButton.innerHTML;
            
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Gönderiliyor...';

            fetch(ikForm.action, {
                method: 'POST',
                body: formData, // FormData otomatik olarak multipart/form-data ayarlar
                // headers: { 'Accept': 'application/json' } // Dosya yüklemede bu başlık sorun çıkarabilir, sunucu tarafı JSON dönüyorsa gerekli.
            })
            .then(response => {
                // Dosya yükleme yanıtları genellikle JSON olur, değilse text olarak alıp parse edebilirsiniz.
                // Sunucu yanıtını (response.text() veya response.json()) dikkatlice loglayarak kontrol edin.
                if (!response.ok) {
                    return response.json().then(errData => { throw { serverError: true, data: errData, status: response.status }; }).catch(() => { throw { status: response.statusText || response.status };});
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    successMessage.textContent = data.message || 'Başvurunuz başarıyla alındı. Teşekkür ederiz!';
                    successMessage.classList.remove('d-none');
                    ikForm.reset();
                } else {
                    errorMessage.textContent = data.message || 'Bir hata oluştu. Lütfen bilgilerinizi kontrol edin.';
                    errorMessage.classList.remove('d-none');
                }
            })
            .catch(error => {
                console.error('İK form gönderim hatası:', error);
                if (error.serverError && error.data && error.data.message) {
                    errorMessage.textContent = error.data.message;
                } else if (error.status) {
                     errorMessage.textContent = `Sunucu hatası (${error.status}). Lütfen daha sonra tekrar deneyin.`;
                } else {
                    errorMessage.textContent = 'Başvurunuz gönderilirken bir sorun oluştu. Lütfen internet bağlantınızı ve dosya boyutunu kontrol edin.';
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