# Alifa Safara — Landing Page Arsitektur Modular

Landing page profesional untuk brand tas rajut dan tali kur **Alifa Safara** (Sumberrejo, Bojonegoro). Menggunakan arsitektur berbasis komponen (*component-based*) dan berbasis data (*data-driven*) dengan **HTML5 + Tailwind CSS + Vanilla PHP / JavaScript**.

---

## 📁 Struktur Direktori Proyek

```text
pagetas/
├── assets/
│   ├── css/
│   │   └── style.css            # Custom CSS (stitch effect, custom font, warm scrollbar)
│   ├── js/
│   │   ├── main.js              # Interaktivitas (filter, simulator harga, FAQ, WA)
│   │   └── tailwind.config.js   # Design tokens & color palette Tailwind
│   └── data/                    # Sumber data terpisah (Data-Driven Architecture)
│       ├── site.json            # Profil brand, kontak WA, alamat studio
│       ├── products.json        # Katalog 8 produk, kategori, harga, foto
│       ├── faq.json             # Daftar tanya jawab (FAQ)
│       └── testimonials.json    # Ulasan pembeli terverifikasi
├── components/                  # Potongan komponen modular (Partials)
│   ├── head.php                 # Meta tags, title, Google Fonts, Tailwind
│   ├── announcement.php         # Banner pengumuman atas
│   ├── navbar.php               # Navigasi header & drawer mobile
│   ├── hero.php                 # Hero section & arch photo frame
│   ├── features.php             # 4 pilar keunggulan kriya handmade
│   ├── catalog.php              # Katalog produk dinamis & filter
│   ├── story.php                # Kisah pengrajin Bu Winarsih & 3 tahapan kriya
│   ├── simulator.php            # Kalkulator harga custom order & tiket estimasi
│   ├── testimonials.php         # Kartu ulasan pembeli
│   ├── faq.php                  # Accordion FAQ interaktif
│   ├── cta.php                  # Banner penutup terracotta
│   ├── newsletter.php           # Formulir langganan email
│   ├── footer.php               # Footer studio & tautan
│   ├── floating-wa.php          # Tombol WhatsApp melayang (pulsing badge)
│   └── scripts.php              # Pemuatan skrip JS
├── img/                         # Asset foto produk asli & visual
├── index.php                    # Master template modular (untuk server Laragon)
├── index.html                   # Berkas statis terkompilasi (siap deploy/akses langsung)
├── build.php                    # Skrip compiler PHP: components/ -> index.html
└── build.js                     # Skrip compiler Node.js runner
```

---

## 🛠️ Cara Kerja & Alur Pemeliharaan (Maintenance)

### 1. Menambah / Mengubah Data Produk & Konten
Anda tidak perlu lagi mengedit ratusan baris HTML yang rumit:
- **Ubah Produk / Harga:** Edit [assets/data/products.json](file:///D:/laragon/www/pagetas/assets/data/products.json).
- **Ubah Nomor WhatsApp / Alamat:** Edit [assets/data/site.json](file:///D:/laragon/www/pagetas/assets/data/site.json).
- **Ubah FAQ / Pertanyaan:** Edit [assets/data/faq.json](file:///D:/laragon/www/pagetas/assets/data/faq.json).
- **Ubah Testimoni:** Edit [assets/data/testimonials.json](file:///D:/laragon/www/pagetas/assets/data/testimonials.json).

### 2. Mengubah Tata Letak / Tampilan Komponen
Setiap bagian halaman terisolasi rapi di dalam folder [components/](file:///D:/laragon/www/pagetas/components/):
- Mau ubah navigasi? Buka [components/navbar.php](file:///D:/laragon/www/pagetas/components/navbar.php).
- Mau ubah bagian Hero? Buka [components/hero.php](file:///D:/laragon/www/pagetas/components/hero.php).
- Mau ubah simulator custom? Buka [components/simulator.php](file:///D:/laragon/www/pagetas/components/simulator.php).

### 3. Mengompilasi ke `index.html` (Static Output)
Setiap kali Anda selesai memperbarui komponen atau data, jalankan perintah berikut di terminal:

```bash
php build.php
```
*(atau jika menggunakan Node.js: `node build.js`)*

Skrip ini secara instan akan menyatukan seluruh komponen dan data menjadi berkas statis `index.html` yang bersih dan siap diunggah ke hosting mana pun (Vercel, Netlify, GitHub Pages, cPanel) atau dibuka langsung secara lokal.

---

## 🚀 Menjalankan di Laragon
1. Pastikan Laragon aktif (Apache/Nginx).
2. Akses melalui browser: `http://localhost/pagetas` atau `http://pagetas.test`.
3. Laragon akan otomatis membaca `index.php` dan menampilkan perubahan komponen secara langsung tanpa perlu build manual saat tahap pengembangan!
