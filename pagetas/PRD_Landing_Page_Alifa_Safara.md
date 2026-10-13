# PRD: Landing Page Tas Rajut dan Tas Tali Kur Alifa Safara

| | |
|---|---|
| **Versi** | 1.0 (Draft) |
| **Tanggal** | 4 Oktober 2026 |
| **Jenis produk** | Landing page statis satu halaman (single page) |
| **Sumber desain** | Stitch export: `screen.png`, `code.html`, `DESIGN.md` ("Artisanal Crochet Atelier") |
| **Bahasa konten** | Indonesia |

---

## 1. Ringkasan

RajutAura adalah UMKM tas rajut handmade dari komunitas perajin perempuan di Yogyakarta dan Malang. Landing page ini adalah etalase digital yang punya satu tugas utama: **membawa pengunjung ke percakapan WhatsApp** untuk memesan tas siap jual maupun tas custom.

Tidak ada keranjang belanja atau pembayaran online di versi ini. Semua transaksi diselesaikan lewat WhatsApp.

## 2. Latar Belakang dan Masalah

- Penjualan UMKM kriya umumnya lewat media sosial dan chat. Informasi produk, harga, dan proses custom tersebar dan tidak meyakinkan pembeli baru.
- Pembeli sering bingung soal estimasi harga custom, lama pengerjaan, dan perawatan tas rajut.
- Nilai jual terbesar (buatan tangan, memberdayakan perajin, bahan katun organik) sulit tersampaikan lewat foto di marketplace.

## 3. Tujuan dan Metrik Keberhasilan

| Tujuan | Metrik | Target awal (bisa disesuaikan) |
|---|---|---|
| Menghasilkan lead WhatsApp | Klik semua tombol WhatsApp / total sesi | ≥ 8% |
| Mendorong pesanan custom | Submit simulator custom / total sesi | ≥ 3% |
| Membangun kepercayaan | Scroll depth hingga bagian Testimoni | ≥ 50% pengunjung |
| Performa | Lighthouse Performance (mobile) | ≥ 85 |
| Aksesibilitas | Lighthouse Accessibility | ≥ 90 |
| Kecepatan muat | LCP (mobile 4G) | < 2,5 detik |

## 4. Target Pengguna

1. **Pembeli personal (utama):** perempuan usia 20–40, urban, peduli slow fashion dan produk lokal, aktif di Instagram dan WhatsApp. Mayoritas membuka dari ponsel.
2. **Pemesan hadiah/seserahan:** mencari tas custom untuk hadiah, butuh kepastian waktu dan kemasan.
3. **Reseller / pembeli batch (sekunder):** tertarik diskon pesanan batch.

## 5. Ruang Lingkup

### Termasuk (In Scope)
- Satu halaman responsif dengan 11 bagian (lihat bagian 6).
- Katalog 4 produk unggulan dengan filter kategori.
- Simulator estimasi harga tas custom yang menghasilkan pesan WhatsApp otomatis.
- FAQ accordion, testimoni, formulir berlangganan newsletter.
- Integrasi WhatsApp lewat tautan `wa.me` dengan pesan terisi otomatis.
- SEO dasar, analitik, dan optimasi performa.

### Tidak Termasuk (Out of Scope, versi 1.0)
- Keranjang belanja, checkout, dan pembayaran online.
- Akun pengguna / login (ikon profil di navbar hanya placeholder).
- Fitur wishlist yang tersimpan (ikon hati hanya interaksi visual).
- CMS atau dashboard admin.
- Multi-bahasa.

## 6. Struktur Halaman dan Kebutuhan Fungsional

### 6.1 Navigasi (Sticky Header)
- Logo "RajutAura" + tagline "Kriya Rajut Nusantara".
- Menu anchor: Koleksi Tas, Kisah Pengrajin, Material & Kualitas, Ulasan Pembeli, FAQ.
- CTA pill: **"Pesan Custom / WhatsApp"**.
- Ikon profil: placeholder, disembunyikan atau dinonaktifkan di v1.0.
- Mobile: menu berubah menjadi hamburger/drawer.
- Scroll halus ke bagian tujuan dengan offset tinggi header.

### 6.2 Hero
- Badge: "100% Kriya Rajut Tangan Nusantara".
- Headline: *"Sentuhan Hangat dari Setiap Helai Benang"* (kata "Helai Benang" dicetak miring berwarna primary).
- Subjudul: penjelasan tas rajut katun organik buatan perajin lokal.
- Dua CTA: **Lihat Katalog Koleksi** (primary, scroll ke #koleksi) dan **Konsultasi Custom Order** (secondary, buka WhatsApp).
- Social proof: avatar bertumpuk, bintang 5, "500+ Tas Telah Terjual ke Seluruh Nusantara".
- Visual: foto hero dengan bingkai lengkung (arch), label "Koleksi Organik Bestari Hati" dan dua kartu mengambang ("100% Buatan Tangan", "Katun Organik Bersertifikat").

### 6.3 Keunggulan ("Dedikasi Pada Keotentikan Kriya")
Empat kartu ikon: Rajutan Manual, Bahan Alami & Katun, Bisa Custom Bebas, Kuat & Garansi Jahitan (tahan beban hingga 5 kg).

### 6.4 Katalog Koleksi Unggulan
- Filter chip: Semua Koleksi, Tote Bag, Sling Bag, Clutch & Pouch. Filter bekerja di sisi klien tanpa reload.
- Kartu produk: foto, badge (Best Seller / Favorit Harian / Koleksi Pesta), jenis benang, nama, deskripsi singkat, "Harga Kriya", tombol keranjang.
- Tombol keranjang pada kartu **membuka WhatsApp** dengan pesan *"Halo RajutAura, saya tertarik pesan {nama produk}"* (bukan menambah ke keranjang).
- Ikon hati: toggle visual. Penyimpanan opsional (lihat bagian 12).

| Produk | Material | Harga |
|---|---|---|
| Kala Bohemian Tote | Katun bobble, handle kayu | Rp 285.000 |
| Svara Sling Crochet | Katun rami, tali selempang | Rp 195.000 |
| Rana Envelope Clutch | Benang poliester doff | Rp 220.000 |
| Aruna Hobo Shoulder | Katun halus, ruang lapang | Rp 310.000 |

### 6.5 Kisah Pengrajin
- Kartu cerita: perkumpulan ibu-ibu perajin di Yogyakarta dan Malang, model upah layak, lebih dari 25 perajin perempuan mandiri, kutipan Ibu Budiarti & Komunitas Benang Cantik.
- Kolom kanan: **"3 Tahap Kelahiran Sebuah Tas"**: (1) kurasi benang, (2) 3–5 hari penenunan manual, (3) pemasangan handle dan uji beban.

### 6.6 Simulator & Pesan Custom (fitur inti)
Formulir dengan field berikut:

| Field | Tipe | Opsi (harga) |
|---|---|---|
| Siluet / Tipe Tas | Select | Tote Bag Harian (Rp 250.000), Sling Bag Compact (Rp 180.000), Envelope Clutch (Rp 160.000), Hobo Shoulder Bag (Rp 280.000) |
| Pilihan Benang | Select | Katun Organik Lembut (standar), Tali Makrame Tebal (+25.000), T-Shirt Yarn Daur Ulang (+20.000), Milk Cotton Super Halus (+35.000) |
| Handle / Tali | Select | Kayu Jati Alami (+35.000), Kulit Asli Nabati (+45.000), Anyaman Rajut Senada (gratis), Rantai Logam Antik (+25.000) |
| Palet Warna | Teks bebas | Contoh: "terracotta & sage" |

**Aturan:**
- Estimasi = harga dasar tipe tas + tambahan benang + tambahan handle. Diperbarui real-time tiap perubahan pilihan.
- Panel hasil menampilkan "Perkiraan Biaya Pembuatan" dan "Waktu pengerjaan 3–7 hari kerja".
- Tombol **"Kirim Rincian ke WhatsApp Pengrajin"** membuka `wa.me/{nomor}?text=...` berisi ringkasan pilihan, palet warna, dan estimasi harga.
- Label wajib jelas bahwa angka adalah **estimasi**, harga final dikonfirmasi pengrajin.

> **Catatan:** harga dasar di simulator (misalnya Tote Rp 250.000) berbeda dari harga katalog (Kala Bohemian Tote Rp 285.000). Ini wajar karena yang satu estimasi custom dan yang lain produk jadi, tetapi perlu diberi keterangan agar pengunjung tidak bingung.

### 6.7 Testimoni
Tiga kartu: bintang 5, kutipan, inisial avatar, nama, badge "Pembeli Terverifikasi" dan kota (Jakarta, Surabaya, Bandung). Di versi final, gunakan testimoni asli dengan izin pemberi.

### 6.8 FAQ
Accordion, hanya satu item terbuka pada satu waktu, bisa dioperasikan keyboard.
1. Cara mencuci dan merawat tas rajut.
2. Lama pembuatan pesanan custom (ready stock 1x24 jam, custom 3–7 hari kerja).
3. Kekuatan menampung beban (hingga 5 kg).
4. Garansi pengiriman (ganti/perbaikan gratis dengan video unboxing).

### 6.9 CTA Penutup
Blok terracotta penuh: "Siap Tampil Beda dengan Tas Rajut yang Punya Cerita?" + penawaran diskon 10% untuk batch pertama. Tombol "Chat WhatsApp Sekarang & Dapatkan Diskon 10%" membuka pesan *"saya ingin klaim diskon 10% untuk pesanan tas rajut"*.

### 6.10 Newsletter
Input email + tombol **Berlangganan**. Validasi format email, status sukses/gagal, dan teks persetujuan privasi singkat. Perlu layanan penampung email (lihat bagian 9).

### 6.11 Footer
Deskripsi brand, kolom tautan (Koleksi Kriya, Atelier Kami), kontak (Studio RajutAura, Kotagede, Yogyakarta; Senin–Sabtu 09.00–17.00 WIB), ikon Instagram, YouTube, WhatsApp, dan tautan Kebijakan Privasi, Syarat Layanan, Peta Situs.

## 7. Kebutuhan Desain (dari DESIGN.md)

**Warna**
| Peran | Hex |
|---|---|
| Primary (Terracotta Rust) | `#C85A32` (hover `#B34E29`) |
| Secondary (Sage Olive) | `#7A8466` |
| Tertiary (Spun Jute) | `#DDA77A` |
| Teks utama (Espresso Roast) | `#2C2420` |
| Canvas | `#FAF6F0` |
| Card | `#F3EBE1` |
| Elevated | `#FFFFFF` |
| Border | `#E5DACB` |

> **Perlu diputuskan:** `DESIGN.md` memuat dua set warna yang berbeda (token YAML memakai primary `#9F3C16`, sedangkan narasi dan tampilan screenshot memakai `#C85A32`). Rekomendasi: gunakan `#C85A32` sesuai tampilan desain, dan cek kontras teks putih di atasnya (lihat bagian 8).

**Tipografi:** Playfair Display (judul, 600) dan Plus Jakarta Sans (isi, label). Skala: display 48/56 (mobile 34/42), headline 36/44 (mobile 28/36), body 15–17px, label uppercase dengan letter-spacing.

**Layout:** desktop ≥1024px 12 kolom, gutter 2rem, margin 4rem, lebar maks 1240px; tablet 8 kolom; mobile 4 kolom dengan margin 1.25rem.

**Bentuk dan elevasi:** tombol dan chip pill penuh (9999px), kartu radius 1rem, gambar radius 0.75–1rem. Bayangan hangat berwarna espresso (subtle, raised, floating) dan border hairline 1px.

**Komponen:** tombol primary/secondary/teks, badge "100% Buatan Tangan" (sage) dan "Bahan Benang Katun Berkualitas" (jute), kartu produk, kartu cerita, input dengan fokus ring terracotta, chip pemilih warna benang (Krem Alami, Terakota Hangat, Hijau Lumut).

## 8. Kebutuhan Non-Fungsional

- **Responsif:** mobile-first, diuji di lebar 360, 390, 768, 1024, 1440px.
- **Performa:** gambar WebP/AVIF dengan `srcset` dan lazy-loading (kecuali hero), font `display: swap` dan hanya bobot yang dipakai, total transfer awal < 1 MB. Prototype memakai Tailwind CDN, **untuk produksi harus di-build** (purge CSS) agar tidak memuat runtime besar.
- **Aksesibilitas (WCAG 2.1 AA):** kontras teks minimal 4,5:1 (periksa teks kecil di atas warna terracotta dan sage), navigasi keyboard penuh, focus state terlihat, `alt` teks untuk semua gambar, atribut ARIA pada accordion dan filter, hormati `prefers-reduced-motion`.
- **SEO:** satu `<h1>`, meta title/description Bahasa Indonesia, Open Graph dan Twitter card, data terstruktur `Product` dan `FAQPage`, `sitemap.xml`, `robots.txt`.
- **Privasi:** halaman Kebijakan Privasi, persetujuan untuk email newsletter, banner cookie jika memakai analitik yang memerlukannya.
- **Keamanan:** HTTPS, sanitasi input (palet warna dan email), tautan eksternal `rel="noopener"`, proteksi spam pada formulir newsletter.
- **Kompatibilitas:** dua versi terbaru Chrome, Safari, Firefox, Edge; Android Chrome dan iOS Safari.

## 9. Rekomendasi Teknis

| Area | Rekomendasi |
|---|---|
| Stack | HTML + Tailwind CSS (build) + JavaScript vanilla, atau Astro / Next.js (static export) jika ingin skala lebih mudah |
| Hosting | Vercel, Netlify, atau Cloudflare Pages (gratis dan cepat) |
| Ikon | Material Symbols (subset) atau SVG inline |
| Newsletter | Mailchimp / Brevo / Google Form atau Apps Script sebagai opsi paling sederhana |
| Analitik | GA4 atau Plausible, dengan event kustom (bagian 10) |
| Data produk | Berkas JSON atau array JS agar mudah diubah tanpa mengedit HTML |

**Konfigurasi WhatsApp:** simpan nomor di satu konstanta (`WA_NUMBER`, format internasional tanpa `+`, misalnya `628xxxxxxxxxx`). Di prototype, tautan `wa.me/?text=` **belum berisi nomor**, sehingga harus diperbaiki agar pesan terkirim ke pengrajin.

## 10. Pelacakan Analitik (Event)

| Event | Pemicu |
|---|---|
| `cta_whatsapp_click` | Semua tombol WhatsApp (parameter: lokasi tombol) |
| `product_inquiry` | Tombol keranjang pada kartu produk (parameter: nama produk) |
| `catalog_filter` | Klik chip kategori |
| `custom_quote_change` | Perubahan pilihan simulator |
| `custom_quote_submit` | Klik "Kirim Rincian ke WhatsApp" (parameter: tipe, benang, handle, estimasi) |
| `faq_open` | Pembukaan item FAQ |
| `newsletter_submit` | Pendaftaran berhasil |
| `scroll_depth` | 25 / 50 / 75 / 100% |

## 11. Kriteria Penerimaan (Acceptance Criteria)

1. Semua 11 bagian tampil sesuai desain di mobile, tablet, dan desktop tanpa scroll horizontal.
2. Klik tombol WhatsApp mana pun membuka percakapan dengan nomor yang benar dan pesan terisi sesuai konteks.
3. Mengubah salah satu opsi simulator memperbarui estimasi harga seketika dan perhitungannya benar untuk semua kombinasi (4 × 4 × 4 = 64).
4. Filter katalog hanya menampilkan produk dengan kategori terpilih; "Semua Koleksi" menampilkan seluruhnya.
5. Accordion FAQ membuka dan menutup dengan mouse, sentuh, dan keyboard (Enter/Space).
6. Newsletter menolak email tidak valid dan menampilkan pesan sukses saat berhasil.
7. Lighthouse mobile: Performance ≥ 85, Accessibility ≥ 90, SEO ≥ 90, Best Practices ≥ 90.
8. Seluruh gambar memiliki teks alternatif dan ukuran yang sudah dioptimalkan.

## 12. Pertanyaan Terbuka dan Asumsi

**Perlu keputusan dari pemilik bisnis**
- Nomor WhatsApp resmi dan jam balas.
- Apakah diskon 10% berlaku untuk semua pesanan batch pertama atau ada syarat minimum? Perlu syarat tertulis agar tidak menyesatkan.
- Apakah klaim "Katun Organik Bersertifikat", "Garansi Jahit Seumur Hidup", dan "500+ tas terjual" bisa dibuktikan? Klaim di halaman harus sesuai kenyataan.
- Testimoni dan foto produk: apakah sudah asli dan berizin?
- Domain dan akun media sosial (Instagram, YouTube) untuk footer.
- Ikon hati dan profil: dibuat fungsional atau dihilangkan dulu?

**Asumsi**
- Semua transaksi lewat WhatsApp, tanpa pembayaran online.
- Katalog tetap 4 produk di v1.0.
- Konten statis, diubah manual oleh developer.

## 13. Rencana Rilis

| Fase | Isi | Estimasi |
|---|---|---|
| 1. Persiapan | Finalisasi konten, foto, nomor WA, keputusan warna | 2–3 hari |
| 2. Pengembangan | Implementasi layout, komponen, simulator, filter, FAQ | 4–6 hari |
| 3. Integrasi | Newsletter, analitik, SEO, optimasi gambar | 2 hari |
| 4. QA | Uji perangkat/browser, aksesibilitas, performa | 2 hari |
| 5. Peluncuran | Deploy, domain, pengecekan analitik | 1 hari |

**Pengembangan lanjutan (v1.1+):** halaman detail produk, galeri foto tambahan, katalog lengkap dengan stok, pembayaran online/marketplace link, CMS ringan, blog perawatan dan cerita perajin.

---

## Lampiran: Berkas Desain
- `screen.png`: tampilan halaman penuh
- `code.html`: prototype HTML + Tailwind (referensi struktur dan perilaku)
- `DESIGN.md`: design system "Artisanal Crochet Atelier"
