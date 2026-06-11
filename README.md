# 🎨 Website Portofolio — Mochammad Mirza Ubadah

Website portofolio personal **Mochammad Mirza Ubadah** yang dibangun menggunakan **Laravel 13** dan berbagai teknologi frontend modern. Website ini menampilkan identitas profesional, karya-karya terbaik, layanan yang ditawarkan, formulir kontak dengan penyimpanan database, chatbot AI, serta tampilan model 3D interaktif.

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

Website portofolio ini merupakan representasi digital dari profil kreatif Mochammad Mirza Ubadah sebagai seorang **Graphic Designer**. Website dibangun dengan pendekatan *single-page* yang menampilkan semua informasi penting dalam satu halaman dengan navigasi yang mulus dan desain premium.

### Fitur Utama

- **Hero Slider** — Slideshow 3 slide dengan gambar latar penuh layar, animasi teks, dan tombol CTA.
- **Tentang Saya** — Profil lengkap dengan model 3D interaktif (GLB), skill bars, statistik karier (13 proyek, 9 klien puas, 2 penghargaan, 3 tahun pengalaman), tools yang digunakan, serta timeline pengalaman & pendidikan sesuai CV.
- **Portofolio** — Grid 2 kolom dengan filter kategori: Desain Konten, Desain Event, Motion Graphic, dan Brand Identity. Dilengkapi lightbox preview untuk gambar dan embed Google Drive untuk video.
- **Layanan** — Empat layanan: Desain Konten, Motion Graphic (Featured), Desain Event, dan Brand Identity.
- **Kontak** — Formulir kontak tersimpan ke database SQLite dengan notifikasi sukses. Dilengkapi informasi kontak lengkap dan tautan media sosial aktif.
- **Admin Inbox** — Panel sederhana untuk melihat, menandai sudah dibaca, dan menghapus pesan masuk dari pengunjung.
- **Chatbot AI** — Widget chatbot berbasis Gemini AI yang mengetahui profil dan layanan Mirza.

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Keterangan |
|---|---|
| **Laravel 13** | Framework PHP backend (routing, controller, Blade templating, Eloquent ORM) |
| **PHP 8.3** | Server-side scripting |
| **SQLite** | Database ringan untuk menyimpan pesan kontak |
| **Blade Templating** | Template engine bawaan Laravel |
| **Vanilla CSS** | Kustomisasi styling penuh dengan CSS variables & responsive layout |
| **Swiper.js** | Hero image slider interaktif |
| **GLightbox** | Lightbox untuk preview gambar portofolio |
| **AOS (Animate On Scroll)** | Animasi scroll reveal di seluruh bagian halaman |
| **Font Awesome 6** | Ikon vektor |
| **Google Fonts** | Tipografi: Playfair Display + Poppins |
| **Google Model Viewer** | Web component untuk menampilkan model 3D GLB interaktif |
| **Google Gemini API** | Powering chatbot AI pada website |

---

## 📁 Struktur Direktori Utama

```
web-profil-mirza/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── PortfolioController.php   ← Controller utama (home, contact, inbox)
│   │       └── ChatbotController.php     ← Controller chatbot Gemini AI
│   ├── Mail/
│   │   └── ContactFormMail.php           ← Mailable class (disiapkan, tidak aktif)
│   └── Models/
│       └── Message.php                   ← Model pesan kontak
├── database/
│   └── migrations/
│       └── ..._create_messages_table.php ← Migrasi tabel pesan
├── public/
│   ├── css/
│   │   └── portfolio.css                 ← Styling kustom (minified)
│   ├── js/
│   │   └── portfolio.js                  ← Script interaktif
│   ├── images/
│   │   ├── hero/                         ← Gambar slider (slide1-3.png)
│   │   ├── portfolio/                    ← Gambar karya (design1-3.png)
│   │   └── profile/                     ← Foto profil (photo.png)
│   └── models/
│       └── mirza-3d-model.glb            ← Model 3D avatar
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php             ← Template utama (head, nav, footer)
│       ├── pages/
│       │   └── home.blade.php            ← Halaman utama
│       ├── partials/
│       │   ├── navbar.blade.php          ← Navigasi (dengan foto profil 2D)
│       │   ├── hero-slider.blade.php     ← Bagian hero
│       │   ├── about.blade.php           ← Tentang saya + model 3D + timeline CV
│       │   ├── portfolio.blade.php       ← Portofolio, layanan & kontak
│       │   ├── footer.blade.php          ← Footer (foto profil, social links aktif)
│       │   └── chatbot.blade.php         ← Widget chatbot AI
│       ├── admin/
│       │   └── inbox.blade.php           ← Panel inbox pesan (dark theme)
│       └── emails/
│           └── contact.blade.php         ← Template HTML email (disiapkan)
└── routes/
    └── web.php                           ← Routing: GET /, POST /contact, admin inbox
```

---

## 🔗 URL Penting

| URL | Keterangan |
|---|---|
| `http://127.0.0.1:8000/` | Halaman utama website |
| `http://127.0.0.1:8000/admin/inbox` | Panel admin pesan masuk |

---

## 📬 Kontak & Sosial Media

| Platform | Info |
|---|---|
| **Email** | mirzaubadah9i@gmail.com |
| **WhatsApp** | +62 882-2608-5310 |
| **Instagram** | [@milestooneid](https://www.instagram.com/milestooneid) |
| **LinkedIn** | [Mochammad Mirza Ubadah](https://www.linkedin.com/in/mochammad-mirza-ubadah-98768a352) |
| **Lokasi** | Surabaya, Indonesia |

---

## ✅ Checklist Progres

### Core & Backend
- [x] **Controller** — `PortfolioController` (home, contact, inbox, markRead, deleteMessage)
- [x] **Routing** — `GET /`, `POST /contact`, admin inbox routes di `routes/web.php`
- [x] **Database** — Migrasi & model `Message` untuk menyimpan pesan kontak ke SQLite
- [x] **Admin Inbox** — `/admin/inbox` untuk kelola pesan masuk (baca, hapus)
- [x] **Chatbot AI** — Gemini API terintegrasi dengan konteks profil Mirza

### UI & Konten
- [x] **Navbar** — Foto profil 2D bulat menggantikan huruf "M"
- [x] **Hero Slider** — 3 slide dengan gambar, teks animasi, dan CTA
- [x] **About** — Model 3D GLB interaktif (auto-rotate, kontrol kursor), skill bars, statistik CV
- [x] **Timeline** — Pengalaman (Milestoone, InFoto Surabaya, PRO COMTECH) & Pendidikan (EEPIS, SMKN 13) sesuai CV
- [x] **Statistik** — 13 Proyek | 9 Klien Puas | 2 Penghargaan | 3 Tahun Pengalaman
- [x] **Portfolio Grid** — 2 kolom, 4 proyek nyata (design1, design2, design3 + Motion Graphic embed)
- [x] **Social Links** — Instagram, LinkedIn, Gmail, WhatsApp (aktif & berlabel); Behance/YouTube/Vimeo dihapus
- [x] **Kontak** — Email, WhatsApp, Lokasi sesuai CV; form menyimpan ke database
- [x] **Footer** — Foto profil, social links aktif, kontak real, lokasi Surabaya
- [x] **Responsif** — Layout menyesuaikan desktop, tablet, dan mobile

---

## 🚀 Cara Menjalankan Lokal

```bash
# Clone & masuk folder
cd web-profil-mirza

# Install dependencies
composer install

# Salin environment
cp .env.example .env
php artisan key:generate

# Jalankan migrasi database
php artisan migrate

# Jalankan server lokal
php artisan serve
```

Buka browser di `http://127.0.0.1:8000`

---

## 📝 Changelog

### v2.0 — Juni 2026
- ✨ Tambah model 3D interaktif (GLB) pada bagian About
- ✨ Tambah chatbot AI berbasis Google Gemini
- ✨ Portfolio diupdate ke 4 proyek nyata (Desain Konten, Event, Motion Graphic, Brand Identity)
- ✨ Form kontak tersimpan ke database SQLite + Admin Inbox panel
- 🔧 Navbar: foto profil 2D menggantikan huruf "M"
- 🔧 Social links diperbarui: Instagram & LinkedIn aktif, Gmail & WhatsApp ditambahkan
- 🔧 Konten About disesuaikan penuh dengan CV (timeline, statistik, lokasi, email)
- 🔧 Footer: foto profil bulat, kontak real, social links aktif
- 🗑️ Hapus link placeholder Behance, YouTube, Vimeo

### v1.0 — Awal 2026
- 🚀 Inisialisasi project Laravel 13
- 🚀 Struktur dasar: Hero, About, Portfolio, Layanan, Kontak, Footer
- 🚀 Integrasi Swiper.js, GLightbox, AOS, Font Awesome