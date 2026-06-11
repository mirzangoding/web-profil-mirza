<footer id="footer" class="footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="footer-grid">

                <!-- Col 1: Brand -->
                <div class="footer-col footer-brand" id="footer-brand">
                    <div class="footer-logo">
                        <img src="{{ asset('images/profile/photo.png') }}" alt="Foto Profil Mirza" class="footer-logo-img">
                        <div>
                            <span class="logo-name">Mochammad Mirza Ubadah</span>
                            <span class="logo-tagline">Graphic Designer</span>
                        </div>
                    </div>
                    <p class="footer-desc" id="footer-desc">
                        Desainer grafis yang bersemangat dalam branding, identitas visual, dan desain media kreatif. Aktif di Surabaya, Indonesia.
                    </p>
                    <div class="footer-social" id="footer-social">
                        <a href="https://www.instagram.com/milestooneid?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener" class="footer-social-link" id="footer-instagram" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/mochammad-mirza-ubadah-98768a352?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" rel="noopener" class="footer-social-link" id="footer-linkedin" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="mailto:mirzaubadah9i@gmail.com" class="footer-social-link" id="footer-gmail" aria-label="Gmail">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <a href="https://wa.me/6288226085310?text=Hallo%2C+saya+tertarik+dengan+jasa+anda!" target="_blank" rel="noopener" class="footer-social-link footer-social-wa" id="footer-whatsapp" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div class="footer-col" id="footer-nav-col">
                    <h4 class="footer-title" id="footer-nav-title">Navigasi</h4>
                    <ul class="footer-links" id="footer-nav-links">
                        <li><a href="#hero" id="footer-link-home"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="#about" id="footer-link-about"><i class="fas fa-chevron-right"></i> About</a></li>
                        <li><a href="#portfolio" id="footer-link-portfolio"><i class="fas fa-chevron-right"></i> Portfolio</a></li>
                        <li><a href="#services" id="footer-link-services"><i class="fas fa-chevron-right"></i> Layanan</a></li>
                        <li><a href="#contact" id="footer-link-contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>

                <!-- Col 3: Services -->
                <div class="footer-col" id="footer-svc-col">
                    <h4 class="footer-title" id="footer-svc-title">Layanan</h4>
                    <ul class="footer-links" id="footer-svc-links">
                        <li><a href="#portfolio" id="footer-svc-content"><i class="fas fa-chevron-right"></i> Desain Konten</a></li>
                        <li><a href="#portfolio" id="footer-svc-motion"><i class="fas fa-chevron-right"></i> Motion Graphic</a></li>
                        <li><a href="#portfolio" id="footer-svc-event"><i class="fas fa-chevron-right"></i> Desain Event</a></li>
                        <li><a href="#portfolio" id="footer-svc-branding"><i class="fas fa-chevron-right"></i> Brand Identity</a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact Info -->
                <div class="footer-col" id="footer-contact-col">
                    <h4 class="footer-title" id="footer-contact-title">Hubungi Saya</h4>
                    <ul class="footer-contact-list" id="footer-contact-list">
                        <li id="footer-contact-email">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:mirzaubadah9i@gmail.com">mirzaubadah9i@gmail.com</a>
                        </li>
                        <li id="footer-contact-phone">
                            <i class="fab fa-whatsapp"></i>
                            <a href="https://wa.me/6288226085310?text=Hallo%2C+saya+tertarik+dengan+jasa+anda!" target="_blank">+62 882-2608-5310</a>
                        </li>
                        <li id="footer-contact-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Surabaya, Indonesia</span>
                        </li>
                        <li id="footer-contact-available">
                            <i class="fas fa-circle available-dot"></i>
                            <span>Tersedia untuk proyek baru</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom" id="footer-bottom">
        <div class="container footer-bottom-inner">
            <p id="footer-copyright">
                &copy; {{ date('Y') }} <strong>Mochammad Mirza Ubadah</strong>. All rights reserved. Crafted with <i class="fas fa-heart"></i> in Indonesia.
            </p>
            <p id="footer-credit">
                Built with <strong>Laravel</strong> & <i class="fas fa-coffee"></i> lots of coffee.
            </p>
        </div>
    </div>

    <!-- Back to Top Button -->
    <a href="#hero" class="back-to-top" id="back-to-top" aria-label="Back to top">
        <i class="fas fa-chevron-up"></i>
    </a>
</footer>
