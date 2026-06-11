<!-- ===================== PORTFOLIO SECTION ===================== -->
<section id="portfolio" class="portfolio-section">
    <!-- Section Header -->
    <div class="section-header" data-aos="fade-up">
        <span class="section-tag">Karya Terbaik</span>
        <h2 class="section-title">Portofolio <em>Saya</em></h2>
        <div class="section-divider"></div>
        <p class="section-desc">Eksplorasi berbagai karya kreatif saya dalam bidang desain, animasi, dan branding.</p>
    </div>

    <div class="container">
        <!-- Filter Tabs -->
        <div class="portfolio-filters" data-aos="fade-up" data-aos-delay="100" id="portfolio-filters">
            <button class="filter-btn active" data-filter="all" id="filter-all">
                <i class="fas fa-th-large"></i> Semua
            </button>
            <button class="filter-btn" data-filter="content" id="filter-content">
                <i class="fas fa-file-alt"></i> Desain Konten
            </button>
            <button class="filter-btn" data-filter="event" id="filter-event">
                <i class="fas fa-calendar-alt"></i> Desain Event
            </button>
            <button class="filter-btn" data-filter="motion" id="filter-motion">
                <i class="fas fa-play-circle"></i> Motion Graphic
            </button>
            <button class="filter-btn" data-filter="branding" id="filter-branding">
                <i class="fas fa-id-card"></i> Brand Identity
            </button>
        </div>

        <div class="portfolio-grid" id="portfolio-grid" data-aos="fade-up" data-aos-delay="200">

            <!-- Item 1: Desain Konten -->
            <div class="portfolio-item" data-category="content" id="port-item1">
                <a href="{{ asset('images/portfolio/design1.png') }}" class="glightbox portfolio-link" data-gallery="portfolio" data-title="MilestoneID Yearbook — Desain Konten Instagram" data-description="Desain konten Instagram modern untuk foto yearbook dari akun @milestooneid. Menampilkan estetika visual yang bersih dan profesional.">
                    <div class="portfolio-img-wrapper">
                        <img src="{{ asset('images/portfolio/design1.png') }}" alt="MilestoneID Yearbook Design" class="portfolio-img" loading="lazy">
                        <div class="portfolio-overlay">
                            <div class="portfolio-overlay-content">
                                <i class="fas fa-search-plus"></i>
                                <h4>Lihat Detail</h4>
                                <span>Desain Konten</span>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="portfolio-caption">
                    <span class="port-cat content-cat">Desain Konten</span>
                    <h4>MilestoneID Yearbook — @milestooneid</h4>
                    <p>Desain konten Instagram modern bertema foto yearbook dengan estetika visual yang bersih dan profesional.</p>
                </div>
            </div>

            <!-- Item 2: Desain Event -->
            <div class="portfolio-item" data-category="event" id="port-item2">
                <a href="{{ asset('images/portfolio/design2.png') }}" class="glightbox portfolio-link" data-gallery="portfolio" data-title="MMB Fest — Grafis Event" data-description="Grafis kebutuhan event MMB Fest meliputi desain videotron dan bumper visual untuk kebutuhan event.">
                    <div class="portfolio-img-wrapper">
                        <img src="{{ asset('images/portfolio/design2.png') }}" alt="MMB Fest Event Design" class="portfolio-img" loading="lazy">
                        <div class="portfolio-overlay">
                            <div class="portfolio-overlay-content">
                                <i class="fas fa-search-plus"></i>
                                <h4>Lihat Desain</h4>
                                <span>Desain Event</span>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="portfolio-caption">
                    <span class="port-cat event-cat">Desain Event</span>
                    <h4>MMB Fest — Videotron & Bumper</h4>
                    <p>Grafis visual untuk kebutuhan event MMB Fest, mencakup desain videotron dan bumper promosi.</p>
                </div>
            </div>

            <!-- Item 3: Motion Graphic -->
            <div class="portfolio-item" data-category="motion" id="port-item3">
                <div class="portfolio-img-wrapper video-thumb" id="port-motion-wrapper">
                    <div class="motion-video-container">
                        <iframe
                            src="https://drive.google.com/file/d/1lm91zBWLR4dSN0vC6LHzxPl_yRW8Rakg/preview"
                            allow="autoplay"
                            allowfullscreen
                            loading="lazy"
                            title="Motion Graphic Preview"
                            class="motion-iframe"
                        ></iframe>
                        <div class="motion-overlay-btn" id="port-motion-play" onclick="window.open('https://drive.google.com/file/d/1lm91zBWLR4dSN0vC6LHzxPl_yRW8Rakg/view?usp=drive_link','_blank')">
                            <i class="fas fa-external-link-alt"></i>
                            <span>Buka di Drive</span>
                        </div>
                    </div>
                    <div class="video-badge motion-badge">
                        <i class="fas fa-magic"></i> Motion
                    </div>
                </div>
                <div class="portfolio-caption">
                    <span class="port-cat motion-cat">Motion Graphic</span>
                    <h4>Motion Graphic Showreel</h4>
                    <p>Animasi dan motion design kreatif untuk keperluan konten digital dan promosi.</p>
                </div>
            </div>

            <!-- Item 4: Brand Identity -->
            <div class="portfolio-item" data-category="branding" id="port-item4">
                <a href="{{ asset('images/portfolio/design3.png') }}" class="glightbox portfolio-link" data-gallery="portfolio" data-title="Yapping Time — Brand Identity" data-description="Logo dan identitas visual brand event televisi Yapping Time. Mencakup desain logo, tipografi, dan palet warna yang mencerminkan karakter brand.">
                    <div class="portfolio-img-wrapper">
                        <img src="{{ asset('images/portfolio/design3.png') }}" alt="Yapping Time Brand Identity" class="portfolio-img" loading="lazy">
                        <div class="portfolio-overlay">
                            <div class="portfolio-overlay-content">
                                <i class="fas fa-search-plus"></i>
                                <h4>Lihat Detail</h4>
                                <span>Brand Identity</span>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="portfolio-caption">
                    <span class="port-cat branding-cat">Brand Identity</span>
                    <h4>Yapping Time — Logo & Visual Identity</h4>
                    <p>Identitas visual brand event televisi Yapping Time: logo, font, warna, dan aset grafis.</p>
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
            <div class="service-card" id="svc-content">
                <div class="service-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3>Desain Konten</h3>
                <p>Pembuatan postingan visual media sosial, infografis, dan materi marketing digital yang menarik.</p>
                <ul>
                    <li>Carousel Feed Design</li>
                    <li>Social Media Posts</li>
                    <li>Digital Infographics</li>
                    <li>Story Layout Templates</li>
                </ul>
            </div>

            <div class="service-card featured" id="svc-motion">
                <div class="service-icon">
                    <i class="fas fa-play-circle"></i>
                </div>
                <div class="featured-badge">Populer</div>
                <h3>Motion Graphic</h3>
                <p>Video animasi, motion logo, intro/outro, dan motion assets berkualitas untuk branding digital.</p>
                <ul>
                    <li>Logo Animation</li>
                    <li>Social Media Video Ad</li>
                    <li>Explainer Animation</li>
                    <li>Animated Intro & Outro</li>
                </ul>
            </div>

            <div class="service-card" id="svc-event">
                <div class="service-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>Desain Event</h3>
                <p>Identitas visual lengkap dan materi cetak/digital promosi event atau pameran Anda.</p>
                <ul>
                    <li>Backdrop & Banner</li>
                    <li>Poster & Digital Flyer</li>
                    <li>ID Card & Ticket Design</li>
                    <li>Event Merchandise</li>
                </ul>
            </div>

            <div class="service-card" id="svc-branding">
                <div class="service-icon">
                    <i class="fas fa-id-card"></i>
                </div>
                <h3>Brand Identity</h3>
                <p>Penyusunan identitas visual menyeluruh, logo kustom, dan brand guidelines untuk perusahaan Anda.</p>
                <ul>
                    <li>Custom Logo Design</li>
                    <li>Corporate Identity</li>
                    <li>Brand Guidelines Book</li>
                    <li>Stationery & Business Cards</li>
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
                            <span>mirzaubadah9i@gmail.com</span>
                        </div>
                    </div>
                    <div class="contact-item" id="contact-phone">
                        <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
                        <div>
                            <strong>WhatsApp</strong>
                            <span>+62 882-2608-5310</span>
                        </div>
                    </div>
                    <div class="contact-item" id="contact-location">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <strong>Lokasi</strong>
                            <span>Surabaya, Indonesia</span>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="social-links" id="contact-social">
                    <a href="https://www.instagram.com/milestooneid?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener" class="social-btn" id="social-instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/mochammad-mirza-ubadah-98768a352?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" rel="noopener" class="social-btn" id="social-linkedin" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="mailto:mirzaubadah9i@gmail.com" class="social-btn" id="social-gmail" aria-label="Gmail"><i class="fas fa-envelope"></i></a>
                    <a href="https://wa.me/6288226085310?text=Hallo%2C+saya+tertarik+dengan+jasa+anda!" target="_blank" rel="noopener" class="social-btn social-btn-wa" id="social-whatsapp" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrapper" id="contact-form-wrapper">
                @if(session('success'))
                    <div class="form-alert success" role="status" aria-live="polite">
                        <i class="fas fa-check-circle" style="margin-right:.5rem;"></i>{{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="form-alert error" role="alert">
                        <i class="fas fa-exclamation-triangle" style="margin-right:.5rem;"></i>{{ session('error') }}
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
                            <option value="content"{{ old('service') == 'content' ? ' selected' : '' }}>Desain Konten</option>
                            <option value="event"{{ old('service') == 'event' ? ' selected' : '' }}>Desain Event</option>
                            <option value="motion"{{ old('service') == 'motion' ? ' selected' : '' }}>Motion Graphic</option>
                            <option value="branding"{{ old('service') == 'branding' ? ' selected' : '' }}>Brand Identity</option>
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
