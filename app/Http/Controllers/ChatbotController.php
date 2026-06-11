<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    /**
     * System prompt berisi konteks portofolio Mirza.
     * Akan disertakan di setiap request ke Gemini API.
     */
    private string $systemPrompt = <<<PROMPT
Kamu adalah asisten virtual AI untuk website portofolio Mochammad Mirza Ubadah, seorang desainer grafis profesional dari Indonesia. Namamu adalah "MirzaBot" dan kamu berbicara dengan ramah, profesional, dan informatif dalam Bahasa Indonesia (atau sesuaikan dengan bahasa yang digunakan user).

## Profil Mirza:
- **Nama Lengkap**: Mochammad Mirza Ubadah
- **Profesi**: Desainer Grafis & Video Editor
- **Lokasi**: Indonesia
- **Pengalaman**: 3+ tahun di industri kreatif
- **Ketersediaan**: Tersedia untuk proyek Freelance maupun Full-time

## Keahlian Utama:
- Desain Konten (92%) — feed carousel, postingan visual sosial media, infografis, template layout
- Desain Event (88%) — visual identity event, backdrop panggung, tiket, id card, merchandise event
- Motion Graphic (85%) — animasi logo, video iklan promosi, intro/outro, motion assets
- Brand Identity (80%) — desain logo kustom, corporate identity, stationery, brand guidelines book

## Tools & Software:
- Adobe Photoshop (desain & photo editing)
- Adobe Illustrator (desain vektor & ilustrasi)
- Adobe After Effects (motion graphics & visual effects)
- Adobe Premiere Pro (video editing & compilation)
- Figma (UI/UX design & prototyping)

## Statistik:
- 50+ Proyek Selesai
- 30+ Klien Puas
- 8 Penghargaan Kreatif
- 3+ Tahun Pengalaman

## Pengalaman Kerja:
- 2023 – Sekarang: Freelance Creative Director — mengelola proyek desain dan video untuk klien lokal & internasional
- 2022 – 2023: Video Editor di Studio Kreatif XYZ — produksi konten iklan, company profile, video sosial media
- 2021 – 2022: Junior Designer di Agency ABC — desain visual, branding, materi pemasaran digital

## Pendidikan:
- S1 Desain Komunikasi Visual (2019–2023) — Lulus Cum Laude
- Adobe Certified Professional (2022) — Photoshop, Premiere Pro, After Effects
- Workshop Desain Grafis & Branding (2021) — Digital Arts Academy

## Layanan yang Ditawarkan:
1. **Desain Konten** — Carousel feed, stories template, postingan visual sosial media, infografis
2. **Desain Event** — Banner promosi, backdrop panggung, id card, tiket pameran, merchandise kit
3. **Motion Graphic** — Animasi logo, video ads, motion design assets, intro/outro
4. **Brand Identity** — Logo kustom, corporate identity, brand guidelines book, kartu nama

## Cara Menghubungi Mirza:
- Pengunjung bisa mengisi form kontak di bagian bawah website
- Atau langsung klik tombol "Hubungi Saya" di halaman

## Instruksi Perilaku:
- Jawab pertanyaan tentang portofolio, keahlian, pengalaman, dan layanan Mirza dengan detail dan antusias.
- Untuk pertanyaan umum di luar topik portofolio, jawab seperti chatbot AI biasa yang helpful.
- Jika ada yang ingin memesan jasa, arahkan mereka ke form kontak di website.
- Gunakan emoji secukupnya agar terasa hangat dan tidak kaku.
- Jangan terlalu panjang dalam menjawab — singkat, padat, informatif.
PROMPT;

    /**
     * Handle pesan dari user dan kirim ke Gemini API.
     */
    public function chat(Request $request)
    {
        $request->validate([
            'message'  => 'required|string|max:1000',
            'history'  => 'nullable|array|max:20',
        ]);

        $apiKey = config('services.gemini.api_key');

        if (empty($apiKey)) {
            return response()->json([
                'reply' => '⚠️ Maaf, chatbot belum dikonfigurasi. Silakan hubungi admin untuk mengatur API key.',
            ], 200);
        }

        $userMessage = trim($request->input('message'));
        $history     = $request->input('history', []);

        // Bangun array "contents" untuk Gemini API
        $contents = [];

        // Sisipkan system prompt sebagai pesan pertama dari "user" + "model"
        $contents[] = [
            'role'  => 'user',
            'parts' => [['text' => $this->systemPrompt . "\n\nPahami konteks di atas dan siap untuk membantu pengunjung website."]],
        ];
        $contents[] = [
            'role'  => 'model',
            'parts' => [['text' => 'Halo! Saya MirzaBot, asisten virtual Mirza. Saya siap membantu kamu mengetahui lebih lanjut tentang portofolio, keahlian, dan layanan Mirza. Ada yang bisa saya bantu? 😊']],
        ];

        // Tambahkan riwayat percakapan sebelumnya
        foreach ($history as $entry) {
            if (isset($entry['role'], $entry['text'])) {
                $role = $entry['role'] === 'user' ? 'user' : 'model';
                $contents[] = [
                    'role'  => $role,
                    'parts' => [['text' => $entry['text']]],
                ];
            }
        }

        // Tambahkan pesan user saat ini
        $contents[] = [
            'role'  => 'user',
            'parts' => [['text' => $userMessage]],
        ];

        try {
            $response = Http::timeout(30)->post(
                'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=' . $apiKey,
                ['contents' => $contents]
            );

            if ($response->failed()) {
                \Log::error('Gemini API error', [
                    'status' => $response->status(),
                    'body'   => $response->body(),
                ]);
                return response()->json([
                    'reply' => '😔 Maaf, saya mengalami gangguan sementara. Silakan coba lagi dalam beberapa saat.',
                ]);
            }

            $data  = $response->json();
            $reply = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'Maaf, saya tidak bisa memproses permintaan ini.';

            return response()->json(['reply' => $reply]);

        } catch (\Exception $e) {
            \Log::error('Gemini chatbot exception: ' . $e->getMessage());
            return response()->json([
                'reply' => '😔 Maaf, terjadi kesalahan koneksi. Silakan coba lagi.',
            ]);
        }
    }
}
