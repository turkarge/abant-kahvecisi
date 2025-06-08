<?php
// src/Pages/about.php
$pageTitle = "Hakkımızda";
$metaDescription = "Abant Kahvecisi olarak 2012 yılından beri kahve sektöründeki deneyimlerimiz, kalite anlayışımız ve franchising modelimiz hakkında daha fazla bilgi edinin.";
// $activePage global değişkeni public/index.php'de 'hakkimizda' olarak set edilecek.
?>

<div class="page-wrapper">
    <main class="page-body">

        <!-- Sayfa Başlığı Alanı (Hero Benzeri Ama Daha Sade) -->
        <section class="page-header-section" style="background-image: url('<?php echo SITE_URL; ?>/assets/images/headers/about-header.jpg');">
            <div class="slide-overlay" style="background-color: rgba(0,0,0,0.4);"></div>
            <div class="container text-center">
                <h1 class="page-title-display animate__animated animate__fadeInDown"><?php echo $pageTitle; ?></h1>
                <p class="lead text-white animate__animated animate__fadeInUp animate__delay-05s" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Kahveye olan tutkumuz ve yılların deneyimi.</p>
            </div>
        </section>

        <!-- Ana İçerik Alanı -->
        <section class="section-padding">
            <div class="container-xl">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        
                        <div class="card card-lg">
                            <div class="card-body">
                                <h2 class="card-title h1 mb-4 text-center">Biz Kimiz!</h2>
                                
                                <p class="lead text-muted mb-4">
                                    Sektörde 2012 yılında toptan kahve kavurma ve paketleme alanında faaliyet göstermeye başlayan firmamız, kahve ve nitelikli kahve alanındaki deneyimlerini Abant Kahvecisi markasıyla bütünleştirmiş ve sektördeki yerini almıştır.
                                </p>
                                
                                <div class="row align-items-center g-4 mb-4 pb-2">
                                    <div class="col-md-6">
                                        <img src="<?php echo SITE_URL; ?>/assets/images/about/coffee-roasting.jpg" alt="Kahve Kavurma" class="img-fluid rounded shadow-sm">
                                        <!-- GÖRSEL: Kahve kavurma, paketleme veya nitelikli kahve çekirdekleri ile ilgili bir görsel -->
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="h4 text-primary">Markalaşma ve Büyüme</h3>
                                        <p>İlerleyen yıllarda Türkiye genelinde yine Abant Kahvecisi markası ve çatısı altında Konsept Kafeler açmaya başlamıştır. Franchising modeliyle desteklediği bu kafelerin tüm ihtiyaçlarını Türkiye genelinde kurduğu Merkez – Cep Depo sistemi ile karşılamaktadır.</p>
                                    </div>
                                </div>

                                <div class="row align-items-center flex-row-reverse g-4 mb-4 pb-2">
                                    <div class="col-md-6">
                                        <img src="<?php echo SITE_URL; ?>/assets/images/about/iso-9001.jpg" alt="ISO 9001 Kalite Belgesi" class="img-fluid rounded shadow-sm">
                                        <!-- GÖRSEL: ISO 9001 belgesi, modern bir kafe içi veya dağıtım ağı ile ilgili bir görsel -->
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="h4 text-primary">Kurumsallaşma ve Kalite Yönetimi</h3>
                                        <p>2018 yılında kurumsallaşma adına Kalite Yönetim Sistemi çalışmalarına başlamış, 1 yıl gibi kısa bir süre içerisinde üretim, dağıtım, pazarlama ve hizmet aşamalarını tamamlamış ve ISO 9001:2015 belgesini almıştır. Bu belge, kaliteye verdiğimiz önemin ve müşteri memnuniyetine odaklanmamızın bir göstergesidir.</p>
                                    </div>
                                </div>

                                <hr class="my-5">

                                <div class="text-center">
                                    <h3 class="h2 mb-3">Misyonumuz & Vizyonumuz</h3>
                                    <div class="row">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <div class="card bg-light h-100">
                                                <div class="card-body">
                                                    <h4 class="card-title text-secondary"><i class="ti ti-target me-2"></i>Misyonumuz</h4>
                                                    <p class="text-muted">En kaliteli kahve çekirdeklerini özenle işleyerek, her fincanda eşsiz bir lezzet ve deneyim sunmak; kahve tutkusunu yaymak ve müşterilerimize keyifli anlar yaşatmaktır.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card bg-light h-100">
                                                <div class="card-body">
                                                    <h4 class="card-title text-secondary"><i class="ti ti-eye me-2"></i>Vizyonumuz</h4>
                                                    <p class="text-muted">Türkiye'de ve uluslararası pazarda nitelikli kahve denince akla gelen ilk markalardan biri olmak, yenilikçi yaklaşımımız ve sürdürülebilir kalite anlayışımızla sektöre yön vermektir.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>
</div> <!-- .page-wrapper sonu -->