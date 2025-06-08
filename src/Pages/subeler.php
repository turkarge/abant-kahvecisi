<?php
// src/Pages/subeler.php
$pageTitle = "Şubelerimiz";
$metaDescription = "Abant Kahvecisi şubelerini ve bayilerini keşfedin. Size en yakın Abant Kahvecisi'ni harita üzerinde bulun ve listemizden iletişim bilgilerine ulaşın.";

// Örnek Şube/Bayi Verileri
$subeler = [
    [
        'isim' => 'Abant Kahvecisi - Merkez Şube (Abant)',
        'konsept' => 'Kafe & Mağaza', // Konsepti değiştirdim
        'adres' => 'Göl Kenarı Mevkii, No:1, Abant, Bolu',
        'lat' => 40.603067,
        'lng' => 31.479805,
        'tip' => 'Merkez Şube',
        'ulke' => 'Türkiye',
        'sehir'=> 'Bolu',
        'telefon' => '0374 222 00 00',
        'email' => 'abant@abantkahvecisi.com',
        'gorsel' => SITE_URL . '/assets/images/subeler/abant-merkez.jpg',
        'galeri_linki' => '#'
    ],
    [
        'isim' => 'Abant Kahvecisi - İstanbul Kadıköy',
        'konsept' => 'Kafe Konsepti', // Konsepti değiştirdim
        'adres' => 'Bahariye Cad. No:25, Kadıköy, İstanbul',
        'lat' => 40.989913,
        'lng' => 29.028068,
        'tip' => 'Kafe Konsepti',
        'ulke' => 'Türkiye',
        'sehir'=> 'İstanbul', // Şehri düzelttim
        'telefon' => '0216 333 00 00',
        'email' => 'kadikoy@abantkahvecisi.com',
        'gorsel' => SITE_URL . '/assets/images/subeler/kadikoy.jpg',
        'galeri_linki' => '#'
    ],
    [
        'isim' => 'Abant Kahvecisi - Ankara Kızılay (Kiosk)',
        'konsept' => 'Kiosk',
        'adres' => 'Kızılay Meydanı, Metro Çıkışı Yanı, Ankara',
        'lat' => 39.92077,
        'lng' => 32.85411,
        'tip' => 'Kiosk',
        'ulke' => 'Türkiye',
        'sehir'=> 'Ankara', // Şehri düzelttim
        'telefon' => '0312 444 00 00',
        'email' => 'kizilay@abantkahvecisi.com',
        'gorsel' => SITE_URL . '/assets/images/subeler/ankara-kiosk.jpg',
        'galeri_linki' => '#'
    ],
    [
        'isim' => 'Abant Kahvecisi - Berlin Mitte (Yurtdışı)',
        'konsept' => 'Uluslararası Kafe', // Konsepti değiştirdim
        'adres' => 'Auguststraße 11-13, 10117 Berlin, Almanya',
        'lat' => 52.5251,
        'lng' => 13.3960,
        'tip' => 'Uluslararası Kafe',
        'ulke' => 'Almanya', // Ülkeyi düzelttim
        'sehir'=> 'Berlin',  // Şehri düzelttim
        'telefon' => '+49 30 1234567',
        'email' => 'berlin@abantkahvecisi.com',
        'gorsel' => SITE_URL . '/assets/images/subeler/berlin.jpg',
        'galeri_linki' => '#'
    ]
    // ... diğer şubeler
];

// Filtreleme için benzersiz değerleri alalım
$ulkeler = array_unique(array_column($subeler, 'ulke'));
sort($ulkeler); // Alfabetik sırala

$sehirler = array_unique(array_column($subeler, 'sehir'));
sort($sehirler);

$konseptler = array_unique(array_column($subeler, 'konsept'));
sort($konseptler);

// İsteğe bağlı: Şubeleri önce ülkeye, sonra şehre göre sıralayalım (Bu zaten tablonun varsayılan sıralaması olabilir)
usort($subeler, function($a, $b) {
    $ulkeKarsilastir = strcmp($a['ulke'] ?? '', $b['ulke'] ?? '');
    if ($ulkeKarsilastir == 0) {
        return strcmp($a['sehir'] ?? '', $b['sehir'] ?? '');
    }
    return $ulkeKarsilastir;
});

?>

<div class="page-wrapper">
<main class="page-body">

    <!-- Sayfa Başlığı Alanı -->
    <section class="page-header-section" style="background-image: url('<?php echo SITE_URL; ?>/assets/images/headers/subeler-header.jpg');">
        <div class="slide-overlay" style="background-color: rgba(0,0,0,0.3);"></div>
        <div class="container text-center">
            <h1 class="page-title-display animate__animated animate__fadeInDown"><?php echo htmlspecialchars($pageTitle ?? 'Şubelerimiz'); ?></h1>
            <p class="lead text-white animate__animated animate__fadeInUp animate__delay-05s" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">Size en yakın lezzet noktamızı bulun.</p>
        </div>
    </section>

    <!-- Harita Bölümü -->
    <section class="section-padding pb-0">
        <div class="container-xl">
            <div class="section-title text-center mb-4">
                <h2 class="page-title">Haritada Şubelerimiz</h2>
            </div>
            <div class="card">
                <div class="card-body p-2">
                    <div id="subeler-map" style="width: 100%; height: 500px; border-radius: 4px;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Şube/Bayi Listesi Bölümü -->
    <section class="section-padding">
        <div class="container-xl">
            <div class="section-title text-center mb-4">
                <h2 class="page-title">Tüm Şube ve Bayilerimiz</h2>
            </div>

            <!-- FİLTRELEME FORMU -->
            <div class="card mb-4">
                <div class="card-body">
                    <form id="sube-filter-form" class="row g-3 align-items-end">
                        <div class="col-md-3">
                            <label for="filter-ulke" class="form-label">Ülke</label>
                            <select id="filter-ulke" class="form-select">
                                <option value="">Tüm Ülkeler</option>
                                <?php foreach ($ulkeler as $ulke): ?>
                                    <option value="<?php echo htmlspecialchars($ulke); ?>"><?php echo htmlspecialchars($ulke); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filter-sehir" class="form-label">Şehir</label>
                            <select id="filter-sehir" class="form-select">
                                <option value="">Tüm Şehirler</option>
                                <?php foreach ($sehirler as $sehir): ?>
                                    <option value="<?php echo htmlspecialchars($sehir); ?>"><?php echo htmlspecialchars($sehir); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filter-konsept" class="form-label">Konsept</label>
                            <select id="filter-konsept" class="form-select">
                                <option value="">Tüm Konseptler</option>
                                <?php foreach ($konseptler as $konsept): ?>
                                    <option value="<?php echo htmlspecialchars($konsept); ?>"><?php echo htmlspecialchars($konsept); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="button" id="reset-filters-btn" class="btn btn-outline-secondary w-100">Filtreleri Temizle</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- FİLTRELEME FORMU SONU -->


            <?php if (!empty($subeler)): ?>
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table table-striped table-hover" id="subeler-table">
                            <thead>
                                <tr>
                                    <th>Şube Adı</th>
                                    <th data-filter-column="ulke">Ülke</th>
                                    <th data-filter-column="sehir">Şehir</th>
                                    <th>Adres</th>
                                    <th data-filter-column="konsept">Konsept</th>
                                    <th class="text-center">Haritada Göster</th>
                                    <th class="text-center">Görseller</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($subeler as $index => $sube): ?>
                                    <tr data-ulke="<?php echo htmlspecialchars($sube['ulke'] ?? ''); ?>"
                                        data-sehir="<?php echo htmlspecialchars($sube['sehir'] ?? ''); ?>"
                                        data-konsept="<?php echo htmlspecialchars($sube['konsept'] ?? ''); ?>">
                                        <td>
                                            <div class="d-flex py-1 align-items-center">
                                                <?php $gorsel_url = $sube['gorsel'] ?? ''; ?>
                                                <?php if (!empty($gorsel_url)): ?>
                                                    <span class="avatar me-2" style="background-image: url('<?php echo htmlspecialchars($gorsel_url); ?>');"></span>
                                                <?php else: ?>
                                                    <span class="avatar bg-blue-lt me-2"><i class="ti ti-building-store icon-lg"></i></span>
                                                <?php endif; ?>
                                                <div class="flex-fill">
                                                    <div class="font-weight-medium"><?php echo htmlspecialchars($sube['isim'] ?? 'İsim Belirtilmemiş'); ?></div>
                                                    <?php $telefon = $sube['telefon'] ?? ''; ?>
                                                    <?php if(!empty($telefon)): ?>
                                                        <div class="text-muted"><a href="tel:<?php echo htmlspecialchars(str_replace(' ', '', $telefon)); ?>" class="text-reset fs-sm"><?php echo htmlspecialchars($telefon); ?></a></div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?php echo htmlspecialchars($sube['ulke'] ?? 'Belirtilmemiş'); ?></td>
                                        <td><?php echo htmlspecialchars($sube['sehir'] ?? 'Belirtilmemiş'); ?></td>
                                        <td class="text-muted">
                                            <?php echo htmlspecialchars($sube['adres'] ?? 'Adres Yok'); ?>
                                            <?php $email = $sube['email'] ?? ''; ?>
                                            <?php if(!empty($email)): ?>
                                                <br><a href="mailto:<?php echo htmlspecialchars($email); ?>" class="text-reset fs-sm"><i class="ti ti-mail me-1"></i>E-posta</a>
                                            <?php endif; ?>
                                        </td>
                                        <td><span class="badge bg-teal-lt"><?php echo htmlspecialchars($sube['konsept'] ?? 'Belirtilmemiş'); ?></span></td>
                                        <td class="text-center">
                                            <button class="btn btn-icon btn-sm btn-outline-primary focus-on-map-btn"
                                                    title="<?php echo htmlspecialchars($sube['isim'] ?? ''); ?> konumunu haritada göster"
                                                    data-lat="<?php echo htmlspecialchars($sube['lat'] ?? ''); ?>"
                                                    data-lng="<?php echo htmlspecialchars($sube['lng'] ?? ''); ?>"
                                                    data-name="<?php echo htmlspecialchars($sube['isim'] ?? ''); ?>">
                                                <i class="ti ti-map-search"></i>
                                            </button>
                                        </td>
                                        <td class="text-center">
                                            <?php $galeriLinki = $sube['galeri_linki'] ?? '#'; ?>
                                            <?php if($galeriLinki !== '#'): ?>
                                                <a href="<?php echo htmlspecialchars($galeriLinki); ?>" class="btn btn-icon btn-sm btn-outline-secondary" title="<?php echo htmlspecialchars($sube['isim'] ?? ''); ?> galerisi" target="_blank">
                                                    <i class="ti ti-photo"></i>
                                                </a>
                                            <?php else: ?>
                                                <span class="text-muted fs-sm">-</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center d-none" id="no-results-message">
                        <p class="text-muted m-0">Seçilen filtrelere uygun şube bulunamadı.</p>
                    </div>
                </div>
            <?php else: ?>
                <div class="alert alert-info text-center" role="alert">
                    Henüz kayıtlı şube veya bayimiz bulunmamaktadır.
                </div>
            <?php endif; ?>
        </div>
    </section>

</main>
</div> <!-- .page-wrapper sonu -->

<script>
    let map;
    let allMarkers = []; // Tüm markerları tutacak array (isim değişikliği)
    const subelerData = <?php echo json_encode($subeler); ?>;

    function initMap() {
        // ... (initMap fonksiyonunun içeriği aynı kalabilir, sadece markerları allMarkers'a ekleyin)
        const ankara = { lat: 39.92077, lng: 32.85411 };
        
        if (typeof google === 'undefined' || typeof google.maps === 'undefined') {
            // ... (hata mesajı) ...
            return;
        }

        map = new google.maps.Map(document.getElementById("subeler-map"), {
            zoom: 6, center: ankara, mapTypeControl: false, streetViewControl: false
        });
        const infowindow = new google.maps.InfoWindow();

        subelerData.forEach(sube => {
            if (sube.lat && sube.lng) {
                const marker = new google.maps.Marker({
                    position: { lat: parseFloat(sube.lat), lng: parseFloat(sube.lng) },
                    map: map, // Başlangıçta tüm markerlar haritada
                    title: sube.isim,
                    // Kendi data-* özelliklerini ekleyelim
                    ulke: sube.ulke || '',
                    sehir: sube.sehir || '',
                    konsept: sube.konsept || ''
                });
                marker.addListener("click", () => { /* ... (infowindow içeriği) ... */ });
                allMarkers.push(marker); // Marker'ı listeye ekle
            }
        });
        // ... ("Haritada Göster" butonları için event listener aynı kalabilir, allMarkers'ı kullanacak şekilde güncellenebilir)
         document.querySelectorAll('.focus-on-map-btn').forEach(button => {
            button.addEventListener('click', function() {
                const lat = parseFloat(this.dataset.lat);
                const lng = parseFloat(this.dataset.lng);
                const name = this.dataset.name;

                if (lat && lng) {
                    const position = { lat: lat, lng: lng };
                    map.panTo(position);
                    map.setZoom(15);

                    const targetMarker = allMarkers.find(m => m.getTitle() === name);
                    if (targetMarker) {
                        // ... (infowindow içeriği)
                        let content = `<strong>${name}</strong>`;
                        const subeInfo = subelerData.find(s => s.isim === name);
                        if (subeInfo) {
                            content += `<br>${subeInfo.adres}`;
                            if(subeInfo.telefon) content += `<br>Tel: ${subeInfo.telefon}`;
                        }
                        infowindow.setContent(content);
                        infowindow.open(map, targetMarker);
                    }
                    const mapElement = document.getElementById('subeler-map');
                    if (mapElement) { mapElement.scrollIntoView({ behavior: 'smooth' }); }
                }
            });
        });
    }

    // FİLTRELEME İŞLEVSELLİĞİ
    document.addEventListener('DOMContentLoaded', function() {
        const filterUlke = document.getElementById('filter-ulke');
        const filterSehir = document.getElementById('filter-sehir');
        const filterKonsept = document.getElementById('filter-konsept');
        const subelerTableBody = document.querySelector('#subeler-table tbody');
        const tableRows = subelerTableBody ? Array.from(subelerTableBody.querySelectorAll('tr')) : [];
        const noResultsMessage = document.getElementById('no-results-message');
        const resetFiltersBtn = document.getElementById('reset-filters-btn');

        function applyFilters() {
            const selectedUlke = filterUlke.value;
            const selectedSehir = filterSehir.value;
            const selectedKonsept = filterKonsept.value;
            let visibleRowCount = 0;

            tableRows.forEach(row => {
                const rowUlke = row.dataset.ulke;
                const rowSehir = row.dataset.sehir;
                const rowKonsept = row.dataset.konsept;

                const ulkeMatch = selectedUlke === "" || rowUlke === selectedUlke;
                const sehirMatch = selectedSehir === "" || rowSehir === selectedSehir;
                const konseptMatch = selectedKonsept === "" || rowKonsept === selectedKonsept;

                if (ulkeMatch && sehirMatch && konseptMatch) {
                    row.style.display = ""; // Satırı göster
                    visibleRowCount++;
                } else {
                    row.style.display = "none"; // Satırı gizle
                }
            });

            // Haritadaki markerları da filtrele (isteğe bağlı gelişmiş özellik)
            filterMapMarkers(selectedUlke, selectedSehir, selectedKonsept);

            // "Sonuç bulunamadı" mesajını yönet
            if (noResultsMessage) {
                if (visibleRowCount === 0) {
                    noResultsMessage.classList.remove('d-none');
                } else {
                    noResultsMessage.classList.add('d-none');
                }
            }
        }

        function filterMapMarkers(selectedUlke, selectedSehir, selectedKonsept) {
            if (!map || allMarkers.length === 0) return; // Harita veya marker yoksa çık

            allMarkers.forEach(marker => {
                const markerUlke = marker.ulke; // Marker'a eklediğimiz özel data
                const markerSehir = marker.sehir;
                const markerKonsept = marker.konsept;

                const ulkeMatch = selectedUlke === "" || markerUlke === selectedUlke;
                const sehirMatch = selectedSehir === "" || markerSehir === selectedSehir;
                const konseptMatch = selectedKonsept === "" || markerKonsept === selectedKonsept;

                if (ulkeMatch && sehirMatch && konseptMatch) {
                    marker.setMap(map); // Marker'ı haritada göster
                } else {
                    marker.setMap(null); // Marker'ı haritadan kaldır
                }
            });
        }


        if (filterUlke) filterUlke.addEventListener('change', applyFilters);
        if (filterSehir) filterSehir.addEventListener('change', applyFilters);
        if (filterKonsept) filterKonsept.addEventListener('change', applyFilters);

        if (resetFiltersBtn) {
            resetFiltersBtn.addEventListener('click', function() {
                filterUlke.value = "";
                filterSehir.value = "";
                filterKonsept.value = "";
                applyFilters(); // Filtreleri uygula (tümünü göster)
            });
        }

        // Dinamik Şehir Filtresi (Ülke seçimine göre şehirleri güncelle - İsteğe Bağlı Gelişmiş Özellik)
        // Bu kısım biraz daha karmaşık olabilir, şimdilik tüm şehirleri gösteriyoruz.
        // İsterseniz bunu da ekleyebiliriz.
    });

</script>
<!-- Google Maps API script'i -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMAq-yumTHhv-BVzTglVOrTzfg99LjjwM&callback=initMap&libraries=marker"></script> <!-- libraries=marker ekledim, yeni marker özellikleri için gerekebilir -->
<style>
    /* ... (önceki stiller) ... */
    .avatar { /* Tablo içindeki avatar için boyut ayarı */
        width: 3rem;
        height: 3rem;
    }
    .avatar i.icon-lg { /* Eğer avatar içinde ikon varsa */
        font-size: 1.5rem;
    }
    .table th, .table td {
        vertical-align: middle !important;
    }
</style>