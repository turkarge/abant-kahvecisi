// assets/js/custom.js

document.addEventListener('DOMContentLoaded', function () {
    // Ana Sayfa Slider
    if (document.querySelector('.main-slider')) {
        const mainSlider = new Swiper('.main-slider', {
            // Optional parameters
            loop: true, // Sonsuz döngü
            autoplay: {
                delay: 5000, // 5 saniyede bir otomatik geçiş
                disableOnInteraction: false, // Kullanıcı etkileşiminden sonra da devam et
            },
            effect: 'fade', // Geçiş efekti (fade, slide, cube, coverflow, flip)
            fadeEffect: {
                crossFade: true
            },
            speed: 1000, // Geçiş hızı (ms)

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // Klavye kontrolü
            keyboard: {
                enabled: true,
                onlyInViewport: false,
            },
        });
    }

    // Footer e-bülten formu (footer.php'den buraya taşıdık, daha merkezi)
    const newsletterFormFooter = document.getElementById('newsletter-form-footer');
    if (newsletterFormFooter) {
        newsletterFormFooter.addEventListener('submit', function(e) {
            e.preventDefault();
            // Bu kısımda AJAX ile sunucuya gönderme veya basit bir alert gösterilebilir
            // Şimdilik sadece bir alert gösterelim.
            alert('E-bülten aboneliğiniz için teşekkür ederiz!');
            this.reset(); // Formu sıfırla
        });
    }

    // Diğer özel JavaScript kodlarınız buraya gelebilir
});