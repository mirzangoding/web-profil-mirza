<nav id="navbar" class="navbar">
    <div class="container nav-container">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="nav-logo" id="nav-logo">
            <span class="logo-initial">M</span>
            <div class="logo-text">
                <span class="logo-name">Mirza</span>
                <span class="logo-tagline">Creative Portfolio</span>
            </div>
        </a>

        <!-- Desktop Menu -->
        <ul class="nav-links" id="nav-links">
            <li><a href="#hero" class="nav-link active" id="nav-home">Home</a></li>
            <li><a href="#about" class="nav-link" id="nav-about">About</a></li>
            <li><a href="#portfolio" class="nav-link" id="nav-portfolio">Portfolio</a></li>
            <li><a href="#contact" class="nav-link" id="nav-contact">Contact</a></li>
            <li>
                <a href="#contact" class="btn-nav-cta" id="nav-hire">Hire Me</a>
            </li>
        </ul>

        <!-- Hamburger -->
        <button class="hamburger" id="hamburger" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobile-menu">
        <ul>
            <li><a href="#hero" class="mobile-link" id="mob-home">Home</a></li>
            <li><a href="#about" class="mobile-link" id="mob-about">About</a></li>
            <li><a href="#portfolio" class="mobile-link" id="mob-portfolio">Portfolio</a></li>
            <li><a href="#contact" class="mobile-link" id="mob-contact">Contact</a></li>
            <li><a href="#contact" class="btn-nav-cta mobile-cta" id="mob-hire">Hire Me</a></li>
        </ul>
    </div>
</nav>
