<?php
/**
 * Build Script: Alifa Safara Landing Page
 * 
 * Mengompilasi seluruh komponen modular (components/*.php) dan berkas data (assets/data/*.json)
 * menjadi satu berkas statis `index.html` yang bersih dan siap di-deploy ke server statis
 * (GitHub Pages, Vercel, Netlify) atau dibuka langsung di peramban.
 * 
 * Penggunaan:
 *   php build.php
 */

echo "🔨 Memulai proses build Alifa Safara...\n";

// Tangkap output rendering dari index.php
ob_start();
include __DIR__ . '/index.php';
$html = ob_get_clean();

if (empty($html)) {
    fwrite(STDERR, "❌ Terjadi kesalahan: Output HTML kosong.\n");
    exit(1);
}

// Tulis ke index.html
$target = __DIR__ . '/index.html';
file_put_contents($target, $html);

$bytes = strlen($html);
$lines = substr_count($html, "\n") + 1;

echo "✅ Berhasil! File `index.html` berhasil dibuat/diperbarui.\n";
echo "📊 Ukuran file: " . number_format($bytes / 1024, 2) . " KB ($lines baris)\n";
echo "🚀 Berkas statis siap digunakan!\n";
