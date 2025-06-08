<?php
// src/Pages/home.php
$pageTitle = "Anasayfa";
$metaDescription = "Abant Kahvecisi Anasayfa - Doğanın kalbinden gelen eşsiz kahve lezzetlerini keşfedin. Taptaze çekirdekler, özel harmanlar ve bayilik fırsatları.";
// $activePage global değişkeni public/index.php'de tanımlanıyor.
?>

<div class="page-wrapper"> <!-- Sayfa içeriğini sarmalayan ana div -->

    <!-- FULL WIDTH SLIDER (SWIPER.JS) -->
    <section class="main-slider-section"> <!-- Slider'a özel bir section -->
        <div class="swiper main-slider"> <!-- Swiper için ana container -->
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide" style="background-image: url('<?php echo SITE_URL; ?>/assets/images/slider/slide1.jpg');">
                    <!-- GÖRSEL: Geniş, etkileyici bir Abant manzarası ve kahve -->
                    <div class="slide-overlay"></div> <!-- Opsiyonel: Görsel üzerine hafif bir karartma -->
                    <div class="container slide-content text-center">
                        <h2 class="display-4 animate__animated animate__fadeInDown">Abant'ın Kalbinden Gelen Eşsiz Lezzet</h2>
                        <p class="lead animate__animated animate__fadeInUp animate__delay-1s">Özenle seçilmiş %100 Arabica çekirdekleri, usta ellerde kavrulmuş taptaze kahveler.</p>
                        <div class="mt-4 animate__animated animate__fadeInUp animate__delay-2s">
                            <a href="<?php echo SITE_URL; ?>/kahvelerimiz" class="btn btn-primary btn-lg me-2">Kahvelerimizi Keşfedin</a>
                            <a href="<?php echo SITE_URL; ?>/bayilik" class="btn btn-outline-light btn-lg">Bayimiz Olun</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide" style="background-image: url('<?php echo SITE_URL; ?>/assets/images/slider/slide2.jpg');">
                    <!-- GÖRSEL: Kahve çekirdekleri yakın çekim veya kavurma işlemi detayı -->
                    <div class="slide-overlay"></div>
                    <div class="container slide-content text-center">
                        <h2 class="display-4 animate__animated animate__fadeInDown">Ustalıkla Kavrulmuş, Her Fincanda Tazelik</h2>
                        <p class="lead animate__animated animate__fadeInUp animate__delay-1s">Yılların deneyimi ve kahveye olan tutkumuzla en iyi aromaları sunuyoruz.</p>
                        <div class="mt-4 animate__animated animate__fadeInUp animate__delay-2s">
                            <a href="<?php echo SITE_URL; ?>/hakkimizda" class="btn btn-primary btn-lg">Hikayemizi Okuyun</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide" style="background-image: url('<?php echo SITE_URL; ?>/assets/images/slider/slide3.jpg');">
                    <!-- GÖRSEL: Sıcak bir kahve dükkanı atmosferi veya Abant Kahvecisi ürünüyle mutlu bir an -->
                    <div class="slide-overlay"></div>
                    <div class="container slide-content text-center">
                        <h2 class="display-4 animate__animated animate__fadeInDown">Genişleyen Ağımızla Bayilik Fırsatları</h2>
                        <p class="lead animate__animated animate__fadeInUp animate__delay-1s">Başarılı bir markanın parçası olun, kahve tutkunuzu işe dönüştürün.</p>
                        <div class="mt-4 animate__animated animate__fadeInUp animate__delay-2s">
                            <a href="<?php echo SITE_URL; ?>/bayilik" class="btn btn-primary btn-lg">Detaylı Bilgi Alın</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <main class="page-body">
        <!-- 1. NEDEN ABANT KAHVECİSİ? -->
        <section class="section-padding">
            <div class="container-xl">
                <div class="section-title">
                    <h2 class="page-title">Neden Abant Kahvecisi?</h2>
                    <p class="lead">Kalite, tutku ve doğallıkla harmanlanmış bir kahve deneyimi.</p>
                </div>
                <div class="row row-cards justify-content-center">
                    <div class="col-md-6 col-lg-4 feature-card">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="icon-feature"><i class="ti ti-plant icon-lg"></i></div>
                                <h3 class="card-title mt-3">Doğallık ve Tazelik</h3>
                                <p class="text-muted">Abant'ın eşsiz doğasından ilhamla, her zaman en taze çekirdekleri sunarız.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 feature-card">
                        <div class="card text-center">
                             <div class="card-body">
                                <div class="icon-feature"><i class="ti ti-manual-gearbox icon-lg"></i></div>
                                <h3 class="card-title mt-3">Ustalıkla İşlenmiş</h3>
                                <p class="text-muted">Yılların deneyimiyle, her çekirdeği mükemmel aroma ve lezzete ulaştırırız.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 feature-card">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="icon-feature"><i class="ti ti-world-latitude icon-lg"></i></div>
                                <h3 class="card-title mt-3">Zengin Çeşitlilik</h3>
                                <p class="text-muted">Dünyanın farklı yörelerinden, her damak zevkine uygun kahve seçkileri.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 2. ÖNE ÇIKAN KAHVELER -->
        <section class="section-padding" style="background-color: var(--abant-card-bg);"> <!-- Hafif farklı arka plan -->
            <div class="container-xl">
                <div class="section-title">
                    <h2 class="page-title">Öne Çıkan Kahvelerimiz</h2>
                    <p class="lead">En sevilen ve özel harmanlarımızı keşfedin.</p>
                </div>
                <div class="row row-cards product-card">
                    <!-- Örnek Kahve Kartı 1 -->
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="card">
                            <a href="<?php echo SITE_URL; ?>/kahvelerimiz#kahve-id-1"> <!-- #kahve-id-1 gibi bir anchor linki eklenebilir -->
                                <img src="<?php echo SITE_URL; ?>/assets/images/products/kahve1.jpg" class="card-img-top-custom" alt="Abant Dağ Esintisi">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title"><a href="<?php echo SITE_URL; ?>/kahvelerimiz#kahve-id-1" class="text-decoration-none"><?php echo SITE_NAME; ?> Dağ Esintisi</a></h4>
                                <p class="text-muted small">Orta kavrum, dengeli tat, fındıksı ve çikolata notaları.</p>
                                <a href="<?php echo SITE_URL; ?>/kahvelerimiz#kahve-id-1" class="btn btn-sm btn-secondary-abant w-100">Detayları Gör</a>
                            </div>
                        </div>
                    </div>
                    <!-- Örnek Kahve Kartı 2 -->
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="card">
                             <a href="<?php echo SITE_URL; ?>/kahvelerimiz#kahve-id-2">
                                <img src="<?php echo SITE_URL; ?>/assets/images/products/kahve2.jpg" class="card-img-top-custom" alt="Yöresel Etiyopya Yirgacheffe">
                             </a>
                            <div class="card-body">
                                <h4 class="card-title"><a href="<?php echo SITE_URL; ?>/kahvelerimiz#kahve-id-2" class="text-decoration-none">Etiyopya Yirgacheffe</a></h4>
                                <p class="text-muted small">Çiçeksi aromalar, parlak asidite, bergamot ve limon.</p>
                                <a href="<?php echo SITE_URL; ?>/kahvelerimiz#kahve-id-2" class="btn btn-sm btn-secondary-abant w-100">Detayları Gör</a>
                            </div>
                        </div>
                    </div>
                    <!-- Örnek Kahve Kartı 3 -->
                     <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="card">
                            <a href="<?php echo SITE_URL; ?>/kahvelerimiz#kahve-id-3">
                                <img src="<?php echo SITE_URL; ?>/assets/images/products/turk-kahvesi.jpg" class="card-img-top-custom" alt="Geleneksel Türk Kahvesi">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title"><a href="<?php echo SITE_URL; ?>/kahvelerimiz#kahve-id-3" class="text-decoration-none">Geleneksel Türk Kahvesi</a></h4>
                                <p class="text-muted small">İnce çekilmiş, bol köpüklü, yoğun ve zengin aroma.</p>
                                <a href="<?php echo SITE_URL; ?>/kahvelerimiz#kahve-id-3" class="btn btn-sm btn-secondary-abant w-100">Detayları Gör</a>
                            </div>
                        </div>
                    </div>
                    <!-- Örnek Kahve Kartı 4 -->
                     <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="card">
                             <a href="<?php echo SITE_URL; ?>/kahvelerimiz#kahve-id-4">
                                <img src="<?php echo SITE_URL; ?>/assets/images/products/filtre-kahve.jpg" class="card-img-top-custom" alt="Sabah Keyfi Filtre Blend">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title"><a href="<?php echo SITE_URL; ?>/kahvelerimiz#kahve-id-4" class="text-decoration-none">Sabah Keyfi Filtre Blend</a></h4>
                                <p class="text-muted small">Yumuşak içim, vanilya ve karamel notaları, dengeli bitiş.</p>
                                <a href="<?php echo SITE_URL; ?>/kahvelerimiz#kahve-id-4" class="btn btn-sm btn-secondary-abant w-100">Detayları Gör</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 pt-2">
                    <a href="<?php echo SITE_URL; ?>/kahvelerimiz" class="btn btn-primary">Tüm Kahvelerimiz</a>
                </div>
            </div>
        </section> <!-- ÖNE ÇIKAN KAHVELER SONU -->

        <!-- 3. HİKAYEMİZ -->
        <section class="section-padding story-section">
            <div class="container-xl">
                <div class="row align-items-center g-5"> <!-- g-5 ile sütunlar arasına daha fazla boşluk -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="<?php echo SITE_URL; ?>/assets/images/story/abant-hikaye.jpg" class="img-fluid shadow-sm" alt="Abant Kahvecisi Hikayesi">
                        <!-- GÖRSEL: Abant Kahvecisi'nin hikayesini anlatan bir görsel (kurucu, mağaza içi, Abant detayı vb.) -->
                    </div>
                    <div class="col-lg-6 ps-lg-5"> <!-- Sol padding (lg ve üzeri ekranlarda) -->
                        <h2 class="page-title mb-3">Bir Tutkunun Hikayesi</h2>
                        <p class="lead text-muted" style="font-size: 1.2rem; line-height: 1.8;">Abant Kahvecisi, 20 yılı aşkın bir süredir kahveye olan derin sevgimizi ve Abant'ın eşsiz doğasından aldığımız ilhamı her fincana yansıtma misyonuyla kurulmuştur.</p>
                        <p>En kaliteli Arabica çekirdeklerini dünyanın dört bir yanından titizlikle seçiyor, geleneksel yöntemlere bağlı kalarak modern tekniklerle harmanlıyoruz. Amacımız, her yudumda tazeliği ve zengin aromaları hissedeceğiniz, unutulmaz bir kahve deneyimi sunmaktır. Sürdürülebilir tarımı destekliyor, çiftçilerle adil ilişkiler kuruyoruz.</p>
                        <a href="<?php echo SITE_URL; ?>/hakkimizda" class="btn btn-outline-primary mt-3" style="border-color: var(--abant-primary-color); color: var(--abant-primary-color); font-weight: 500;">Markamız Hakkında Daha Fazla Bilgi</a>
                    </div>
                </div>
            </div>
        </section> <!-- HİKAYEMİZ SONU -->

        <!-- 4. BAYİLİK FIRSATI (CTA) -->
        <section class="section-padding bayilik-cta-section">
            <div class="container-xl">
                <div class="bayilik-cta-content"> <!-- CSS'te bu sınıfı tanımlamıştık -->
                    <h2 class="page-title mb-3">Abant Kahvecisi Ailesine Siz de Katılın!</h2>
                    <p class="lead mb-4 mx-auto" style="max-width: 750px;">Kendi kahve işletmenizi kurmak, başarılı ve tanınan bir markanın gücünden faydalanmak ve kahve tutkunuzu kârlı bir işe dönüştürmek için eşsiz bir fırsat. Türkiye ve yurtdışında büyüyen ağımızda yerinizi alın.</p>
                    <a href="<?php echo SITE_URL; ?>/bayilik" class="btn btn-primary btn-lg">Bayilik Başvurusu ve Detaylar</a>
                </div>
            </div>
        </section> <!-- BAYİLİK CTA SONU -->

        <!-- 5. SON BLOG YAZILARI -->
        <section class="section-padding" style="background-color: var(--abant-card-bg);">
            <div class="container-xl">
                <div class="section-title">
                    <h2 class="page-title">Kahve Dünyasından Son Gelişmeler</h2>
                    <p class="lead">Uzmanlarımızdan ipuçları, yeni trendler ve kahve kültürü üzerine yazılar.</p>
                </div>
                <div class="row row-cards blog-card">
                    <!-- Örnek Blog Kartı 1 -->
                     <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <a href="<?php echo SITE_URL; ?>/blog/evde-cold-brew-nasil-yapilir">
                                <img class="card-img-top-custom" src="<?php echo SITE_URL; ?>/assets/images/blog/cold-brew.jpg" alt="Evde Cold Brew Kahve">
                            </a>
                            <div class="card-body">
                                <div class="text-muted small mb-2">15 AĞUSTOS 2023 <span class="mx-1">·</span> <a href="#" class="text-muted">DEMLEME TEKNİKLERİ</a></div>
                                <h4 class="card-title"><a href="<?php echo SITE_URL; ?>/blog/evde-cold-brew-nasil-yapilir" class="text-decoration-none">Evde Cold Brew Kahve Nasıl Yapılır?</a></h4>
                                <p class="text-muted small">Sıcak yaz günlerinin vazgeçilmezi soğuk demleme kahvenin püf noktaları ve basit tarifi...</p>
                                <a href="<?php echo SITE_URL; ?>/blog/evde-cold-brew-nasil-yapilir" class="btn btn-sm btn-link ps-0" style="color: var(--abant-accent-color); font-weight:500;">Devamını Oku <i class="ti ti-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Örnek Blog Kartı 2 -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <a href="<?php echo SITE_URL; ?>/blog/arabica-ve-robusta-farklari">
                                <img class="card-img-top-custom" src="<?php echo SITE_URL; ?>/assets/images/blog/arabica-robusta.jpg" alt="Arabica ve Robusta Farkları">
                            </a>
                            <div class="card-body">
                                <div class="text-muted small mb-2">10 AĞUSTOS 2023 <span class="mx-1">·</span> <a href="#" class="text-muted">ÇEKİRDEK BİLGİSİ</a></div>
                                <h4 class="card-title"><a href="<?php echo SITE_URL; ?>/blog/arabica-ve-robusta-farklari" class="text-decoration-none">Arabica ve Robusta Arasındaki Farklar Nelerdir?</a></h4>
                                <p class="text-muted small">Tat, kafein oranı ve yetiştirme koşulları açısından iki popüler kahve türünün temel ayrımları.</p>
                                <a href="<?php echo SITE_URL; ?>/blog/arabica-ve-robusta-farklari" class="btn btn-sm btn-link ps-0" style="color: var(--abant-accent-color); font-weight:500;">Devamını Oku <i class="ti ti-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Örnek Blog Kartı 3 -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <a href="<?php echo SITE_URL; ?>/blog/surdurulebilir-kahve">
                                <img class="card-img-top-custom" src="<?php echo SITE_URL; ?>/assets/images/blog/surdurulebilir-kahve.jpg" alt="Sürdürülebilir Kahve">
                            </a>
                            <div class="card-body">
                                <div class="text-muted small mb-2">05 AĞUSTOS 2023 <span class="mx-1">·</span> <a href="#" class="text-muted">SÜRDÜRÜLEBİLİRLİK</a></div>
                                <h4 class="card-title"><a href="<?php echo SITE_URL; ?>/blog/surdurulebilir-kahve" class="text-decoration-none">Kahve Endüstrisinde Sürdürülebilir Uygulamalar</a></h4>
                                <p class="text-muted small">Adil ticaret, çevre dostu tarım yöntemleri ve kahve üretiminin geleceği üzerine önemli notlar.</p>
                                <a href="<?php echo SITE_URL; ?>/blog/surdurulebilir-kahve" class="btn btn-sm btn-link ps-0" style="color: var(--abant-accent-color); font-weight:500;">Devamını Oku <i class="ti ti-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="text-center mt-4 pt-2">
                    <a href="<?php echo SITE_URL; ?>/blog" class="btn btn-primary">Tüm Yazılar</a>
                </div>
            </div>
        </section> <!-- BLOG SONU -->
        <!-- Diğer ana sayfa bölümleri (Öne Çıkan Kahveler, Hikayemiz vb.) buraya eklenecek -->
        <!-- Şimdilik bu kadarını test edelim -->

    </main>
</div> <!-- .page-wrapper sonu -->