<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio Mirza — Creative Designer, Video Editor & Filmmaker profesional. Temukan karya-karya terbaik dalam bidang desain grafis, animasi, dan film.">
    <meta name="keywords" content="portofolio, desainer grafis, video editor, filmmaker, animasi, kreatif, Indonesia">
    <meta name="author" content="Mirza">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Mirza — Creative Portfolio')</title>

    <!-- Google Fonts: Playfair Display + Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

    <!-- AOS Animation CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">



    @stack('styles')
</head>
<body>

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- GLightbox JS -->
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/portfolio.js') }}"></script>

    <!-- Chatbot Widget -->
    @include('partials.chatbot')

    @stack('scripts')
</body>
</html>
