<!-- ===================== HERO SLIDER SECTION ===================== -->
<section id="hero" class="hero-section">
    <div class="swiper hero-swiper" id="hero-swiper">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide hero-slide" style="background-image: url('{{ asset('images/hero/slide1.png') }}')">
                <div class="hero-overlay"></div>
                <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                    <p class="hero-eyebrow" id="slide1-eyebrow">Creative Professional</p>
                    <h1 class="hero-title" id="slide1-title">Designing Stories<br><em>That Inspire</em></h1>
                    <p class="hero-desc" id="slide1-desc">Grafis, branding, dan visual kreatif yang berbicara lebih dari seribu kata.</p>
                    <div class="hero-buttons">
                        <a href="#portfolio" class="btn-hero-primary" id="slide1-cta-primary">Lihat Karya</a>
                        <a href="#about" class="btn-hero-secondary" id="slide1-cta-secondary">Tentang Saya</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide hero-slide" style="background-image: url('{{ asset('images/hero/slide2.png') }}')">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <p class="hero-eyebrow" id="slide2-eyebrow">Video Production</p>
                    <h1 class="hero-title" id="slide2-title">Bringing Motion<br><em>To Life</em></h1>
                    <p class="hero-desc" id="slide2-desc">Video animasi dan produksi yang memukau, dari konsep hingga layar.</p>
                    <div class="hero-buttons">
                        <a href="#portfolio" class="btn-hero-primary" id="slide2-cta-primary">Lihat Video</a>
                        <a href="#contact" class="btn-hero-secondary" id="slide2-cta-secondary">Hubungi Saya</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide hero-slide" style="background-image: url('{{ asset('images/hero/slide3.png') }}')">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <p class="hero-eyebrow" id="slide3-eyebrow">Filmmaker</p>
                    <h1 class="hero-title" id="slide3-title">Crafting Cinematic<br><em>Moments</em></h1>
                    <p class="hero-desc" id="slide3-desc">Film pendek, dokumenter, dan narasi visual yang menggerakkan hati.</p>
                    <div class="hero-buttons">
                        <a href="#portfolio" class="btn-hero-primary" id="slide3-cta-primary">Eksplorasi Film</a>
                        <a href="#contact" class="btn-hero-secondary" id="slide3-cta-secondary">Kolaborasi</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Swiper Navigation -->
        <div class="swiper-button-prev hero-prev" id="hero-prev"></div>
        <div class="swiper-button-next hero-next" id="hero-next"></div>

        <!-- Swiper Pagination -->
        <div class="swiper-pagination hero-pagination" id="hero-pagination"></div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator" id="scroll-indicator">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>
    </div>
</section>
