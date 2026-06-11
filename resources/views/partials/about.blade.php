<!-- ===================== ABOUT SECTION ===================== -->
<section id="about" class="about-section">
    <!-- Section Header -->
    <div class="section-header" data-aos="fade-up">
        <span class="section-tag">Tentang Saya</span>
        <h2 class="section-title">Kenali Lebih <em>Dalam</em></h2>
        <div class="section-divider"></div>
    </div>

    <div class="container">
        <!-- Main About Content -->
        <div class="about-main" data-aos="fade-up" data-aos-delay="100">
            <!-- Profile Image Column -->
            <div class="about-image-col">
                <div class="about-image-wrapper" id="about-image-wrapper">
                    <model-viewer 
                        src="{{ asset('models/mirza-3d-model.glb') }}" 
                        poster="{{ asset('images/profile/photo.png') }}"
                        alt="Model 3D Mochammad Mirza Ubadah" 
                        class="about-photo-3d" 
                        id="about-photo-3d" 
                        camera-controls 
                        auto-rotate 
                        shadow-intensity="1.5" 
                        environment-image="neutral"
                        interaction-prompt="none"
                        ar-status="not-presenting"
                        loading="lazy">
                    </model-viewer>
                    <div class="about-badge" id="about-badge">
                        <i class="fas fa-star"></i>
                        <div>
                            <strong>3+</strong>
                            <span>Tahun Pengalaman</span>
                        </div>
                    </div>
                    <div class="about-shape-1"></div>
                    <div class="about-shape-2"></div>
                </div>
            </div>

            <!-- Info Column -->
            <div class="about-info-col">
                <span class="about-tag" id="about-greeting">Halo, Saya</span>
                <h2 class="about-name" id="about-name">Mochammad Mirza <em>Ubadah</em></h2>
                <p class="about-bio" id="about-bio">
                    Seorang desainer grafis profesional yang bersemangat dalam dunia branding, identitas visual, dan desain media kreatif. Dengan pengalaman lebih dari 3 tahun, saya telah membantu berbagai klien dan brand untuk menyampaikan pesan mereka melalui visual yang kuat, fungsional, dan berkesan.
                </p>
                <p class="about-bio" id="about-bio2">
                    Saya percaya bahwa setiap karya kreatif memiliki kekuatan untuk mengubah cara orang melihat dunia — dan itulah yang mendorong saya untuk terus berkarya dengan penuh dedikasi.
                </p>

                <!-- Personal Info Grid -->
                <div class="about-details" id="about-details">
                    <div class="detail-item">
                        <span class="detail-label">Nama</span>
                        <span class="detail-value">Mochammad Mirza Ubadah</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Lokasi</span>
                        <span class="detail-value">Surabaya, Indonesia</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Email</span>
                        <span class="detail-value">mirzaubadah9i@gmail.com</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Tersedia</span>
                        <span class="detail-value available">Freelance / Full-time</span>
                    </div>
                </div>

                <a href="#contact" class="btn-primary" id="about-cta">
                    <i class="fas fa-paper-plane"></i> Hubungi Saya
                </a>
            </div>
        </div>

        <!-- Skills + Stats Grid -->
        <div class="about-skills-section" data-aos="fade-up" data-aos-delay="200">
            <!-- Skills Bars -->
            <div class="skills-col">
                <h3 class="col-title" id="skills-title">Keahlian Utama</h3>

                <div class="skill-item" id="skill-design">
                    <div class="skill-header">
                        <span>Desain Grafis</span>
                        <span>92%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-fill" data-width="92"></div>
                    </div>
                </div>

                <div class="skill-item" id="skill-video">
                    <div class="skill-header">
                        <span>Video Editing</span>
                        <span>88%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-fill" data-width="88"></div>
                    </div>
                </div>

                <div class="skill-item" id="skill-animation">
                    <div class="skill-header">
                        <span>Motion Graphics</span>
                        <span>80%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-fill" data-width="80"></div>
                    </div>
                </div>

                <div class="skill-item" id="skill-branding">
                    <div class="skill-header">
                        <span>Branding & Identity</span>
                        <span>85%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-fill" data-width="85"></div>
                    </div>
                </div>

                <div class="skill-item" id="skill-photography">
                    <div class="skill-header">
                        <span>Photography</span>
                        <span>70%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-fill" data-width="70"></div>
                    </div>
                </div>
            </div>

            <!-- Stats + Experience -->
            <div class="stats-col">
                <h3 class="col-title" id="stats-title">Statistik & Pengalaman</h3>

                <!-- Stats -->
                <div class="stats-grid">
                    <div class="stat-card" id="stat-projects">
                        <i class="fas fa-briefcase"></i>
                        <strong class="stat-number" data-count="13">0</strong>
                        <span>Proyek Selesai</span>
                    </div>
                    <div class="stat-card" id="stat-clients">
                        <i class="fas fa-users"></i>
                        <strong class="stat-number" data-count="9">0</strong>
                        <span>Klien Puas</span>
                    </div>
                    <div class="stat-card" id="stat-awards">
                        <i class="fas fa-trophy"></i>
                        <strong class="stat-number" data-count="2">0</strong>
                        <span>Penghargaan</span>
                    </div>
                    <div class="stat-card" id="stat-years">
                        <i class="fas fa-calendar-alt"></i>
                        <strong class="stat-number" data-count="3">0</strong>
                        <span>Tahun Pengalaman</span>
                    </div>
                </div>

                <!-- Tools -->
                <div class="tools-section" id="tools-section">
                    <h4 id="tools-title">Tools yang Digunakan</h4>
                    <div class="tools-grid">
                        <div class="tool-tag" id="tool-ps"><i class="fas fa-paint-brush"></i> Photoshop</div>
                        <div class="tool-tag" id="tool-ai"><i class="fas fa-vector-square"></i> Illustrator</div>
                        <div class="tool-tag" id="tool-pr"><i class="fas fa-film"></i> Premiere Pro</div>
                        <div class="tool-tag" id="tool-ae"><i class="fas fa-magic"></i> After Effects</div>
                        <div class="tool-tag" id="tool-resolve"><i class="fas fa-sliders-h"></i> DaVinci Resolve</div>
                        <div class="tool-tag" id="tool-figma"><i class="fas fa-object-group"></i> Figma</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Experience & Education Timeline -->
        <div class="timeline-section" data-aos="fade-up" data-aos-delay="100">
            <div class="timeline-col">
                <h3 class="col-title" id="exp-title"><i class="fas fa-briefcase"></i> Pengalaman</h3>
                <div class="timeline">
                    <div class="timeline-item" id="exp1">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="timeline-date">2023 — Sekarang</span>
                            <h4>Graphic Designer — Milestoone</h4>
                            <p>Membuat konten Instagram yang menarik, logo brand yang kuat, serta foto estetik dengan komposisi dan pencahayaan terbaik untuk boost brand awareness.</p>
                        </div>
                    </div>
                    <div class="timeline-item" id="exp2">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="timeline-date">2023 — Sekarang</span>
                            <h4>Graphic Designer — InFoto Surabaya</h4>
                            <p>Menyusun brand identity dan katalog promosi InFoto Surabaya, serta berkolaborasi dalam multimedia production workflow mencakup desain grafis, videografi, fotografi, dan produksi audio.</p>
                        </div>
                    </div>
                    <div class="timeline-item" id="exp3">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="timeline-date">2022 — 2023</span>
                            <h4>Internship — PRO COMTECH</h4>
                            <p>Merancang UI/UX website, memproduksi konten multimedia (grafis, video, audio), dan mendesain materi promosi seperti banner, event visual, dan konten media sosial.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="timeline-col">
                <h3 class="col-title" id="edu-title"><i class="fas fa-graduation-cap"></i> Pendidikan</h3>
                <div class="timeline">
                    <div class="timeline-item" id="edu1">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="timeline-date">2024 — Sekarang</span>
                            <h4>EEPIS — Teknologi Multimedia & Broadcasting</h4>
                            <p>Berkolaborasi dalam pengembangan identitas visual program televisi, termasuk logo, supergrafis, dan aset broadcasting. Memimpin produksi aset visual untuk berbagai event.</p>
                        </div>
                    </div>
                    <div class="timeline-item" id="edu2">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="timeline-date">2021 — 2024</span>
                            <h4>SMKN 13 Surabaya — Desain Komunikasi Visual</h4>
                            <p>Menguasai prinsip dasar Desain Komunikasi Visual: tipografi, teori warna, dan layout. Mengembangkan skill multimedia meliputi fotografi, videografi, dan analitik media sosial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
