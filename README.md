# 🎨 Website Portofolio — Mochammad Mirza Ubadah

Website portofolio personal **Mochammad Mirza Ubadah** yang dibangun menggunakan **Laravel 13** dan berbagai teknologi frontend modern. Website ini menampilkan identitas profesional, karya-karya terbaik, layanan yang ditawarkan, serta formulir kontak yang fungsional.

---

## 👤 Identitas Mahasiswa

| Field | Detail |
|---|---|
| **Nama** | Mochammad Mirza Ubadah |
| **NRP** | 5124500019 |
| **Kelas** | MMB A 2024 |
| **Program Studi** | D3 Teknologi Multimedia Broadcasting |
| **Kampus** | Politeknik Elektronika Negeri Surabaya (PENS) |

---

## 📋 Deskripsi Proyek

Website portofolio ini merupakan representasi digital dari profil kreatif Mochammad Mirza Ubadah sebagai seorang **Creative Designer**, **Video Editor**. Website dibangun dengan pendekatan *single-page* yang menampilkan semua informasi penting dalam satu halaman dengan navigasi yang mulus dan desain premium.

### Fitur Utama

- **Hero Slider** — Slideshow 3 slide dengan gambar latar penuh layar, animasi teks, dan tombol CTA.
- **Tentang Saya** — Profil lengkap dengan foto profil profesional, skill bars, statistik karier, tools yang digunakan, serta timeline pengalaman & pendidikan.
- **Portofolio** — Grid karya yang dapat difilter berdasarkan kategori: Desain, Video Animasi, dan Film, dengan lightbox preview.
- **Layanan** — Tiga paket layanan: Desain Grafis, Video & Animasi (Featured), dan Produksi Film.
- **Kontak** — Formulir kontak yang terhubung dengan Laravel backend (POST route + validasi server-side), beserta informasi kontak dan tautan media sosial.

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Keterangan |
|---|---|
| **Laravel 13** | Framework PHP backend (routing, controller, Blade templating) |
| **PHP 8.3** | Server-side scripting |
| **Blade Templating** | Template engine bawaan Laravel |
| **Vanilla CSS** | Kustomisasi styling penuh dengan CSS variables & responsive layout |
| **Swiper.js** | Hero image slider interaktif |
| **GLightbox** | Lightbox untuk preview gambar portofolio |
| **AOS (Animate On Scroll)** | Animasi scroll reveal di seluruh bagian halaman |
| **Font Awesome 6** | Ikon vektor |
| **Google Fonts** | Tipografi: Playfair Display + Poppins |
| **Google Model Viewer** | Web component untuk menampilkan avatar/foto profil 3D GLB |

---

## 📁 Struktur Direktori Utama

```
web-profil-mirza/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PortfolioController.php   ← Controller utama
├── public/
│   ├── css/
│   │   └── portfolio.css                ← Styling kustom
│   ├── js/
│   │   └── portfolio.js                 ← Script interaktif
│   └── images/
│       ├── hero/                        ← Gambar slider (slide1-3.png)
│       ├── portfolio/                   ← Gambar karya portofolio
│       └── profile/                    ← Foto profil
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php            ← Template utama (head, nav, footer)
│       └── pages/
│           └── home.blade.php           ← Halaman utama
│       └── partials/
│           ├── navbar.blade.php         ← Navigasi
│           ├── hero-slider.blade.php    ← Bagian hero
│           ├── about.blade.php          ← Bagian tentang saya
│           ├── portfolio.blade.php      ← Bagian portofolio & layanan & kontak
│           └── footer.blade.php         ← Footer
└── routes/
    └── web.php                          ← Routing: GET / dan POST /contact
```

---

## ✅ Checklist Progres

- [x] **Controller** — `PortfolioController` (method `home` & `contact`)
- [x] **Routing** — `GET /` dan `POST /contact` terdaftar di `routes/web.php`
- [x] **Views & Partials** — Layout, halaman home, navbar, hero, about, portfolio, footer
- [x] **Static Assets** — CSS, JavaScript, dan gambar (hero, portfolio, profil) dipindahkan ke `public/`
- [x] **Foto Profil** — Tampilan foto profil profesional yang dinamis dan responsif pada bagian profil
- [x] **Formulir Kontak** — Validasi server-side Laravel dengan flash session success/error
- [x] **Responsif** — Layout menyesuaikan layar desktop, tablet, dan mobile

---