# Abant Kahvecisi - Kurumsal Web Sitesi Yenileme Projesi (Optimize Edilmiş Minimal PHP)

Bu proje, Abant Kahvecisi için modern, profesyonel ve PHP tabanlı, statik görünümlü bir kurumsal tanıtım web sitesi geliştirme sürecini belgelemektedir. PHP, header/footer gibi tekrar eden HTML bloklarını dahil etmek, basit bir sayfa yönlendirme mekanizması kurmak ve temel yapılandırma ayarları için kullanılacaktır.

## 1. Proje Amacı

Abant Kahvecisi markasının dijitaldeki yüzünü yenileyerek;
*   Marka bilinirliğini artırmak.
*   Potansiyel ve mevcut müşterilere güncel ve doğru bilgi sunmak.
*   Bayilik sistemini etkin bir şekilde tanıtmak ve potansiyel bayilere ulaşmak.
*   Kahve kültürü ve marka uzmanlığını yansıtan içerikler sunmak.
*   Mobil uyumlu, hızlı ve kullanıcı dostu bir deneyim sağlamak.

## 2. Teknoloji ve Araçlar

*   **Sunucu Taraflı:** PHP (>= 7.4 önerilir)
*   **İstemci Taraflı:** HTML5, CSS3, JavaScript (ES6+)
*   **CSS Framework:** Tabler Core v1.2.0 (CDN veya yerel)
*   **JavaScript Kütüphaneleri:**
    *   Slider: Swiper.js (CDN veya yerel)
    *   Diğer (gerektikçe belirlenecek)
*   **Fontlar:** Google Fonts (Inter - genel metinler, Lora - başlıklar)
*   **İkonlar:** Tabler Icons (CDN veya yerel)
*   **Geliştirme Ortamı:** Yerel sunucu (XAMPP, MAMP, Docker vb.)
*   **Versiyon Kontrolü:** Git
*   **Yapılandırma:** `config/app.php` (temel site ayarları için)

## 3. Klasör Yapısı
abant-kahvecisi/
├── public/ # Web sunucusunun kök dizini (document root)
│ ├── index.php # Ana yönlendirici (hangi sayfanın yükleneceğine karar verir)
│ │
│ ├── assets/ # CSS, JS, Görseller, Fontlar (yerel)
│ │ ├── css/
│ │ │ └── style.css
│ │ ├── js/
│ │ │ └── custom.js
│ │ └── images/
│ │ ├── logo.png
│ │ ├── favicon.ico
│ │ └── slider/
│ │ ├── slide1.jpg
│ │ └── ...
│ │
│ └── .htaccess # SEO dostu URL'ler ve güvenlik için
│
├── config/
│ └── app.php # Site yapılandırma ayarları (URL, site adı vb.)
│
├── src/ # Uygulama kaynak kodları (public dışı)
│ ├── Includes/ # Tekrar eden HTML parçaları (partials)
│ │ ├── head_tags.php
│ │ ├── header.php # Ana header (navigasyon dahil)
│ │ └── footer.php
│ │
│ ├── Pages/ # Her bir sayfanın ana içerik dosyaları
│ │ ├── home.php # Ana sayfa içeriği
│ │ ├── about.php # Hakkımızda
│ │ ├── products.php # Kahvelerimiz
│ │ ├── franchise.php # Bayilik
│ │ ├── hr.php # İnsan Kaynakları
│ │ ├── blog.php # Blog listeleme
│ │ └── contact.php # İletişim
│ │ └── 404.php # Bulunamayan sayfa içeriği
│ │
│ └── Core/ # Basit temel fonksiyonlar (opsiyonel, gerekirse)
│ └── helpers.php # Yardımcı fonksiyonlar (URL, aktif menü vb.)
│
└── README.md

## 4. Yol Haritası ve Adımlar

Her adım tamamlandıktan sonra test edilecek ve bir sonraki adıma geçilecektir.

**Faz 1: Temel Kurulum ve Ana Sayfa**

1.  **[ ] Adım 1.0: Proje Kurulumu ve Yapılandırma**
    *   [*] Gerekli klasör yapısını oluştur.
    *   [*] `config/app.php` dosyasını oluştur ve temel site ayarlarını (SITE_URL, SITE_NAME, `SRC_PATH`, `PUBLIC_PATH` gibi yol sabitleri) ekle.
    *   [*] Git reposu oluştur.
2.  **[ ]*Adım 1.1: `partials/` Dosyalarının Temelleri**
    *   [*] `src/Includes/head_tags.php`: Temel meta tagları, Fontlar, Tabler CSS/JS (CDN), `assets/css/style.css`, `assets/js/custom.js` linkleri. Dinamik `<title>` için `$pageTitle` değişkeni.
    *   [*] `src/Includes/header.php`: Logo ve ana navigasyon HTML'i.
    *   [*] `src/Includes/footer.php`: Temel footer HTML'i.
3.  **[*] Adım 1.2: Basit Yönlendirici (`public/index.php`) ve Sayfa İçeriklerinin Yüklenmesi**
    *   [*] `public/index.php` dosyasını oluştur (ön kontrolcü).
    *   [*] `src/Pages/home.php` ve `src/Pages/404.php` dosyalarını temel içerikle oluştur.
    *   [*] `public/.htaccess` dosyasını oluştur (SEO dostu URL'ler için).
    *   [*] Test: `site.com/` (ana sayfa) ve `site.com/olmayan-sayfa` (404) adreslerinin doğru çalışması.
4.  **[*] Adım 1.3: Ana Sayfa İçeriği (`src/Pages/home.php`) ve Slider**
    *   [*] `src/Pages/home.php` içine full-width slider (Swiper.js) HTML'ini ekle.
    *   [*] `assets/js/custom.js` içine Swiper.js başlatma kodunu ekle.
    *   [*] Slider görsellerini `assets/images/slider/` altına ekle.
    *   [*] Ana sayfanın ilk bölümünü ("Neden Abant Kahvecisi?") tasarla ve `home.php`'ye ekle.
    *   [*] `assets/css/style.css` içine özel stilleri ekle.
    *   [*] Test: Slider'ın ve ilk bölümün doğru görünmesi.

**Faz 2: İç Sayfalar ve Temel İşlevler**

5.  **[*] Adım 2.1: Diğer Ana Sayfa Bölümleri**
    *   [*] "Öne Çıkan Kahveler", "Kısa Hikayemiz", "Bayilik CTA", "Son Blog Yazıları" bölümlerini `src/Pages/home.php`'ye ekle ve stillendir.
    *   [*] Test: Tüm ana sayfa bölümlerinin görünümü ve mobil uyumluluğu.
6.  **[*] Adım 2.2: Diğer Sayfaların Oluşturulması (`src/Pages/`)**
    *   [*] `about.php`, `products.php`, `franchise.php`, `hr.php`, `blog.php`, `contact.php` dosyalarını `src/Pages/` altına oluştur.
    *   [ ] Her dosyanın başına `$pageTitle` tanımını yap. İçeriklerini HTML olarak doldur.
    *   [ ] `src/Includes/header.php` içindeki navigasyon linklerini güncelle.
    *   [ ] Test: Oluşturulan her sayfaya SEO dostu URL'ler ile erişilebilmesi ve doğru görüntülenmesi.
7.  **[ ] Adım 2.3: İletişim Formu (`src/Pages/contact.php`)**
    *   [ ] Form HTML'ini ekle.
    *   [ ] Form gönderildiğinde çalışacak PHP kodunu ekle (basit `mail()` fonksiyonu).
    *   [ ] Test: Formun e-posta göndermesi.

**Faz 3: SEO, İyileştirmeler ve Yayına Alma**

8.  **[ ] Adım 3.1: Meta Etiketler ve Diğer SEO Unsurları**
    *   [ ] Her sayfa için özgün `meta description` etiketleri.
    *   [ ] Görseller için `alt` etiketleri.
    *   [ ] `public/robots.txt` dosyası.
    *   [ ] `public/sitemap.xml` dosyası.
9.  **[ ] Adım 3.2: Son Testler ve Optimizasyon**
    *   [ ] Tüm linklerin ve işlevlerin kontrolü.
    *   [ ] Çapraz tarayıcı ve cihaz testleri.
    *   [ ] Sayfa yükleme hızı optimizasyonu.
10. **[ ] Adım 3.3: Yayına Alma**
    *   [ ] Tüm dosyaların sunucuya yüklenmesi.
    *   [ ] `config/app.php`'deki ayarların canlı ortama göre güncellenmesi.
    *   [ ] Sunucuda `.htaccess` dosyasının doğru çalıştığından emin olunması.
    *   [ ] Canlıda son kontroller.

## 5. Kodlama Prensipleri

*   **DRY (Don't Repeat Yourself):** Kod tekrarından kaçınmak için `include`'lar, fonksiyonlar ve şablonlar kullanılacak.
*   **KISS (Keep It Simple, Stupid):** Gereksiz karmaşıklıktan kaçınılacak, çözüm basit ve anlaşılır tutulacak.
*   **Okunabilirlik:** Yorum satırları kullanılacak, kod düzenli ve anlaşılır olacak.
*   **Adım Adım İlerleme:** Her özellik küçük adımlar halinde geliştirilip test edilecek.
*   **Güvenlik:** Temel web güvenliği prensiplerine dikkat edilecek.

## 6. Yapılandırma Dosyası (`config/app.php`)

```php
<?php
// config/app.php

// Proje Ana Dizini Yolu (Bu dosyanın bir üst dizini)
define('ROOT_PATH', dirname(__DIR__)); // Projenin ana kök dizini
define('SRC_PATH', ROOT_PATH . '/src');
define('PUBLIC_PATH', ROOT_PATH . '/public'); // Web sunucusunun işaret ettiği dizin

// Site URL'si (sonunda / olmadan)
// Geliştirme sırasında: http://localhost/PROJE_KLASOR_ADI/public
// Canlıda: https://www.alanadiniz.com
// Aşağıdaki kod, URL'yi otomatik bulmaya çalışır. Manuel olarak da set edebilirsiniz.
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost'; // $_SERVER['HTTP_HOST'] yoksa localhost kullan
$script_name = $_SERVER['SCRIPT_NAME'] ?? ''; // index.php'nin yolu
// public klasörüne kadar olan yolu bulmak için:
$public_path_on_server = str_replace($_SERVER['DOCUMENT_ROOT'] ?? '', '', str_replace('\\', '/', PUBLIC_PATH));
define('SITE_URL', $protocol . $host . $public_path_on_server);


// Site Adı
define('SITE_NAME', 'Abant Kahvecisi');

// İletişim Formu Alıcı E-posta
define('CONTACT_FORM_EMAIL_TO', 'info@abantkahvecisi.com'); // Gerçek e-posta adresinizle değiştirin

// DEBUG Modu (geliştirme sırasında hata gösterimi için)
define('DEBUG_MODE', true); // Geliştirme için true, canlıda false yapın
if (defined('DEBUG_MODE') && DEBUG_MODE) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
}
?>