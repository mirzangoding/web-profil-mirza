<!-- ===================== PORTFOLIO SECTION ===================== -->
<section id="portfolio" class="portfolio-section">
    <!-- Section Header -->
    <div class="section-header" data-aos="fade-up">
        <span class="section-tag">Karya Terbaik</span>
        <h2 class="section-title">Portofolio <em>Saya</em></h2>
        <div class="section-divider"></div>
        <p class="section-desc">Eksplorasi berbagai karya kreatif saya dalam bidang desain, animasi, dan film.</p>
    </div>

    <div class="container">
        <!-- Filter Tabs -->
        <div class="portfolio-filters" data-aos="fade-up" data-aos-delay="100" id="portfolio-filters">
            <button class="filter-btn active" data-filter="all" id="filter-all">
                <i class="fas fa-th-large"></i> Semua
            </button>
            <button class="filter-btn" data-filter="design" id="filter-design">
                <i class="fas fa-paint-brush"></i> Desain
            </button>
            <button class="filter-btn" data-filter="video" id="filter-video">
                <i class="fas fa-magic"></i> Video Animasi
            </button>
            <button class="filter-btn" data-filter="film" id="filter-film">
                <i class="fas fa-film"></i> Film
            </button>
        </div>

        <!-- Portfolio Grid -->
        <div class="portfolio-grid" id="portfolio-grid" data-aos="fade-up" data-aos-delay="200">

            <!-- Item 1: Design -->
            <div class="portfolio-item" data-category="design" id="port-item1">
                <a href="{{ asset('images/portfolio/design1.png') }}" class="glightbox portfolio-link" data-gallery="portfolio" data-title="Brand Identity — Studio Kreatif" data-description="Perancangan identitas visual lengkap termasuk logo, tipografi, dan panduan warna.">
                    <div class="portfolio-img-wrapper">
                        <img src="{{ asset('images/portfolio/design1.png') }}" alt="Brand Identity Design" class="portfolio-img" loading="lazy">
                        <div class="portfolio-overlay">
                            <div class="portfolio-overlay-content">
                                <i class="fas fa-search-plus"></i>
                                <h4>Brand Identity</h4>
                                <span>Desain Grafis</span>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="portfolio-caption">
                    <span class="port-cat design-cat">Desain</span>
                    <h4>Brand Identity — Studio Kreatif</h4>
                    <p>Identitas visual lengkap untuk studio kreatif modern.</p>
                </div>
            </div>

            <!-- Item 2: Design -->
            <div class="portfolio-item" data-category="design" id="port-item2">
                <a href="{{ asset('images/portfolio/design2.png') }}" class="glightbox portfolio-link" data-gallery="portfolio" data-title="UI/UX Design — Mobile App" data-description="Desain antarmuka pengguna yang intuitif dan estetis untuk aplikasi mobile.">
                    <div class="portfolio-img-wrapper">
                        <img src="{{ asset('images/portfolio/design2.png') }}" alt="UI UX Design" class="portfolio-img" loading="lazy">
                        <div class="portfolio-overlay">
                            <div class="portfolio-overlay-content">
                                <i class="fas fa-search-plus"></i>
                                <h4>UI/UX Design</h4>
                                <span>Desain Grafis</span>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="portfolio-caption">
                    <span class="port-cat design-cat">Desain</span>
                    <h4>UI/UX Design — Mobile App</h4>
                    <p>Antarmuka modern dengan fokus pada pengalaman pengguna.</p>
                </div>
            </div>

            <!-- Item 3: Video (placeholder with gradient) -->
            <div class="portfolio-item" data-category="video" id="port-item3">
                <div class="portfolio-img-wrapper video-thumb">
                    <div class="portfolio-placeholder gradient-blue">
                        <div class="placeholder-content">
                            <i class="fas fa-play-circle"></i>
                            <h4>Motion Graphics Reel</h4>
                        </div>
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-overlay-content">
                            <i class="fab fa-youtube"></i>
                            <h4>Lihat Video</h4>
                            <span>Video Animasi</span>
                        </div>
                    </div>
                    <div class="video-badge">
                        <i class="fas fa-play"></i> Video
                    </div>
                </div>
                <div class="portfolio-caption">
                    <span class="port-cat video-cat">Video Animasi</span>
                    <h4>Motion Graphics Showreel 2024</h4>
                    <p>Kumpulan terbaik karya motion graphics dan animasi.</p>
                </div>
            </div>

            <!-- Item 4: Video -->
            <div class="portfolio-item" data-category="video" id="port-item4">
                <div class="portfolio-img-wrapper video-thumb">
                    <div class="portfolio-placeholder gradient-navy">
                        <div class="placeholder-content">
                            <i class="fas fa-play-circle"></i>
                            <h4>Explainer Animation</h4>
                        </div>
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-overlay-content">
                            <i class="fab fa-youtube"></i>
                            <h4>Lihat Video</h4>
                            <span>Video Animasi</span>
                        </div>
                    </div>
                    <div class="video-badge">
                        <i class="fas fa-play"></i> Video
                    </div>
                </div>
                <div class="portfolio-caption">
                    <span class="port-cat video-cat">Video Animasi</span>
                    <h4>Corporate Explainer Video</h4>
                    <p>Animasi penjelasan produk untuk perusahaan teknologi.</p>
                </div>
            </div>

            <!-- Item 5: Film -->
            <div class="portfolio-item" data-category="film" id="port-item5">
                <div class="portfolio-img-wrapper video-thumb">
                    <div class="portfolio-placeholder gradient-dark">
                        <div class="placeholder-content">
                            <i class="fas fa-film"></i>
                            <h4>Short Film</h4>
                        </div>
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-overlay-content">
                            <i class="fas fa-clapperboard"></i>
                            <h4>Tonton Film</h4>
                            <span>Film Pendek</span>
                        </div>
                    </div>
                    <div class="video-badge film-badge">
                        <i class="fas fa-film"></i> Film
                    </div>
                </div>
                <div class="portfolio-caption">
                    <span class="port-cat film-cat">Film</span>
                    <h4>Antara Dua Dunia — Short Film</h4>
                    <p>Film pendek drama tentang identitas dan tradisi, 15 menit.</p>
                </div>
            </div>

            <!-- Item 6: Film -->
            <div class="portfolio-item" data-category="film" id="port-item6">
                <div class="portfolio-img-wrapper video-thumb">
                    <div class="portfolio-placeholder gradient-cinematic">
                        <div class="placeholder-content">
                            <i class="fas fa-video"></i>
                            <h4>Documentary</h4>
                        </div>
                    </div>
                    <div class="portfolio-overlay">
                        <div class="portfolio-overlay-content">
                            <i class="fas fa-clapperboard"></i>
                            <h4>Tonton Film</h4>
                            <span>Dokumenter</span>
                        </div>
                    </div>
                    <div class="video-badge film-badge">
                        <i class="fas fa-film"></i> Film
                    </div>
                </div>
                <div class="portfolio-caption">
                    <span class="port-cat film-cat">Film</span>
                    <h4>Nusantara — Dokumenter</h4>
                    <p>Film dokumenter budaya, menelusuri kekayaan seni Indonesia.</p>
                </div>
            </div>

        </div>

        <!-- View More Button -->
        <div class="portfolio-more" data-aos="fade-up" data-aos-delay="300">
            <a href="#contact" class="btn-outline" id="portfolio-cta">
                <i class="fas fa-envelope"></i> Minta Full Portfolio
            </a>
        </div>
    </div>
</section>

<!-- ===================== SERVICES SECTION ===================== -->
<section id="services" class="services-section">
    <div class="section-header light" data-aos="fade-up">
        <span class="section-tag white">Layanan</span>
        <h2 class="section-title white">Apa yang Saya <em>Tawarkan</em></h2>
        <div class="section-divider white"></div>
    </div>

    <div class="container">
        <div class="services-grid" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card" id="svc-design">
                <div class="service-icon">
                    <i class="fas fa-palette"></i>
                </div>
                <h3>Desain Grafis</h3>
                <p>Branding, logo, poster, media sosial, dan semua kebutuhan visual kreatif Anda.</p>
                <ul>
                    <li>Brand Identity</li>
                    <li>Logo Design</li>
                    <li>Social Media Kit</li>
                    <li>Print Design</li>
                </ul>
            </div>

            <div class="service-card featured" id="svc-video">
                <div class="service-icon">
                    <i class="fas fa-video"></i>
                </div>
                <div class="featured-badge">Populer</div>
                <h3>Video & Animasi</h3>
                <p>Produksi video profesional, motion graphics, dan animasi yang memukau audiens.</p>
                <ul>
                    <li>Video Editing</li>
                    <li>Motion Graphics</li>
                    <li>2D/3D Animation</li>
                    <li>Color Grading</li>
                </ul>
            </div>

            <div class="service-card" id="svc-film">
                <div class="service-icon">
                    <i class="fas fa-clapperboard"></i>
                </div>
                <h3>Produksi Film</h3>
                <p>Dari konsep hingga distribusi — film pendek, dokumenter, dan iklan sinematik.</p>
                <ul>
                    <li>Film Pendek</li>
                    <li>Dokumenter</li>
                    <li>Commercial Video</li>
                    <li>Sinematografi</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CONTACT SECTION ===================== -->
<section id="contact" class="contact-section">
    <div class="section-header" data-aos="fade-up">
        <span class="section-tag">Kontak</span>
        <h2 class="section-title">Mari <em>Berkolaborasi</em></h2>
        <div class="section-divider"></div>
        <p class="section-desc">Punya proyek menarik? Saya siap mewujudkan visi Anda menjadi karya nyata.</p>
    </div>

    <div class="container">
        <div class="contact-wrapper" data-aos="fade-up" data-aos-delay="100">
            <!-- Contact Info -->
            <div class="contact-info">
                <h3 id="contact-info-title">Informasi Kontak</h3>
                <p id="contact-info-desc">Jangan ragu untuk menghubungi saya. Saya akan merespons dalam 24 jam.</p>

                <div class="contact-items">
                    <div class="contact-item" id="contact-email">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <strong>Email</strong>
                            <span>mirza@email.com</span>
                        </div>
                    </div>
                    <div class="contact-item" id="contact-phone">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <div>
                            <strong>WhatsApp</strong>
                            <span>+62 812-xxxx-xxxx</span>
                        </div>
                    </div>
                    <div class="contact-item" id="contact-location">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <strong>Lokasi</strong>
                            <span>Indonesia</span>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="social-links" id="contact-social">
                    <a href="#" class="social-btn" id="social-instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-btn" id="social-behance" aria-label="Behance"><i class="fab fa-behance"></i></a>
                    <a href="#" class="social-btn" id="social-youtube" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-btn" id="social-linkedin" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn" id="social-vimeo" aria-label="Vimeo"><i class="fab fa-vimeo-v"></i></a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrapper" id="contact-form-wrapper">
                @if(session('success'))
                    <div class="form-alert success" role="status" aria-live="polite">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="form-alert error" role="alert">
                        <strong>Mohon perbaiki kesalahan berikut:</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="contact-form" id="contact-form">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact-name">Nama Lengkap</label>
                            <input type="text" id="contact-name" name="name" placeholder="Nama Anda" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-email-input">Email</label>
                            <input type="email" id="contact-email-input" name="email" placeholder="email@domain.com" value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact-subject">Subjek</label>
                        <input type="text" id="contact-subject" name="subject" placeholder="Perihal pesan Anda" value="{{ old('subject') }}">
                    </div>
                    <div class="form-group">
                        <label for="contact-service">Layanan yang Dibutuhkan</label>
                        <select id="contact-service" name="service">
                            <option value=""{{ old('service') == '' ? ' selected' : '' }}>Pilih layanan...</option>
                            <option value="design"{{ old('service') == 'design' ? ' selected' : '' }}>Desain Grafis</option>
                            <option value="video"{{ old('service') == 'video' ? ' selected' : '' }}>Video & Animasi</option>
                            <option value="film"{{ old('service') == 'film' ? ' selected' : '' }}>Produksi Film</option>
                            <option value="other"{{ old('service') == 'other' ? ' selected' : '' }}>Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contact-message">Pesan</label>
                        <textarea id="contact-message" name="message" rows="5" placeholder="Ceritakan proyek Anda..." required>{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="btn-primary btn-full" id="contact-submit">
                        <i class="fas fa-paper-plane"></i> Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
