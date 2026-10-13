<header class="sticky top-0 z-50 bg-base-canvas/95 backdrop-blur-md border-b border-base-border transition-all">
  <div class="max-w-[1240px] mx-auto px-5 lg:px-8 h-20 flex items-center justify-between">
    
    <a href="#" class="flex flex-col group">
      <span class="font-serif text-2xl lg:text-3xl font-bold text-primary group-hover:text-primary-hover transition-colors tracking-tight">
        <?= htmlspecialchars($site['brandName'] ?? 'Alifa Safara') ?>
      </span>
      <span class="text-[10px] uppercase tracking-widest text-secondary font-semibold -mt-0.5">
        <?= htmlspecialchars($site['tagline'] ?? 'Tas Rajut & Tali Kur Handmade') ?>
      </span>
    </a>

    <nav class="hidden lg:flex items-center gap-8 text-sm font-medium">
      <a href="#koleksi" class="text-base-text hover:text-primary transition-colors py-1">Koleksi Tas</a>
      <a href="#kisah" class="text-base-text hover:text-primary transition-colors py-1">Kisah Pengrajin</a>
      <a href="#keunggulan" class="text-base-text hover:text-primary transition-colors py-1">Material &amp; Kualitas</a>
      <a href="#testimoni" class="text-base-text hover:text-primary transition-colors py-1">Ulasan Pembeli</a>
      <a href="#faq" class="text-base-text hover:text-primary transition-colors py-1">FAQ</a>
    </nav>

    <div class="hidden lg:flex items-center gap-3">
      <button
        onclick="openWA('Halo <?= addslashes($site['brandName'] ?? 'Alifa Safara') ?>, saya ingin konsultasi pemesanan tas rajut / tali kur.')"
        class="bg-primary hover:bg-primary-hover text-white px-6 py-2.5 rounded-full font-semibold text-sm transition-all shadow-warm hover:shadow-warm-lg"
      >
        Pesan via WhatsApp
      </button>
    </div>

    <button
      class="lg:hidden p-2 rounded-xl text-base-text hover:bg-base-card transition-colors"
      id="mobileMenuBtn"
      aria-label="Buka Menu Navigasi"
    >
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </div>

  <div
    id="mobileMenu"
    class="hidden lg:hidden bg-base-canvas border-b border-base-border px-6 py-5 flex flex-col gap-4 shadow-lg"
  >
    <a href="#koleksi" class="text-base-text hover:text-primary font-medium py-1 mobile-link">Koleksi Tas</a>
    <a href="#kisah" class="text-base-text hover:text-primary font-medium py-1 mobile-link">Kisah Pengrajin</a>
    <a href="#keunggulan" class="text-base-text hover:text-primary font-medium py-1 mobile-link">Material &amp; Kualitas</a>
    <a href="#testimoni" class="text-base-text hover:text-primary font-medium py-1 mobile-link">Ulasan Pembeli</a>
    <a href="#faq" class="text-base-text hover:text-primary font-medium py-1 mobile-link">FAQ</a>
    <div class="pt-2 border-t border-base-border flex flex-col gap-2">
      <button
        onclick="openWA('Halo <?= addslashes($site['brandName'] ?? 'Alifa Safara') ?>, saya ingin konsultasi pemesanan tas rajut / tali kur.')"
        class="bg-primary text-center hover:bg-primary-hover text-white px-6 py-3 rounded-full font-semibold text-sm transition-colors"
      >
        Pesan via WhatsApp
      </button>
    </div>
  </div>
</header>
