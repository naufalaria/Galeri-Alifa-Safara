<section class="bg-primary text-white py-20 lg:py-24 text-center relative overflow-hidden">
  <div class="absolute -right-20 -top-20 w-80 h-80 rounded-full border border-white/15 pointer-events-none"></div>
  <div class="absolute -left-20 -bottom-20 w-96 h-96 rounded-full border border-white/10 pointer-events-none"></div>

  <div class="max-w-4xl mx-auto px-5 lg:px-8 relative z-10">
    <span class="inline-block px-3.5 py-1 bg-white/15 text-white text-xs font-bold uppercase tracking-widest rounded-full mb-6 border border-white/20">
      🧵 Konsultasi Gratis Langsung ke Pengrajin
    </span>
    <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
      Siap Tampil Unik dengan Tas Rajut yang Punya Cerita?
    </h2>
    <p class="text-white/90 text-base sm:text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
      Kreasikan tas impian Anda bersama Ibu Winarsih dan tim perajin <?= htmlspecialchars($site['brandName'] ?? 'Alifa Safara') ?>. Kami siap mewujudkan tas dengan ukuran, siluet, dan perpaduan warna yang paling pas untuk Anda.
    </p>

    <div class="flex items-center justify-center">
      <button
        onclick="openWA('Halo <?= addslashes($site['brandName'] ?? 'Alifa Safara') ?>, saya ingin konsultasi dan pesan tas rajut handmade. Bisa dibantu ya Bu?')"
        class="w-full sm:w-auto bg-white text-primary hover:bg-base-canvas px-10 py-4 rounded-full font-bold text-base transition-all shadow-warm-lg hover:scale-105 flex items-center justify-center gap-2.5"
      >
        <span>Chat WhatsApp Sekarang</span>
        <span class="text-secondary font-bold text-lg">💬</span>
      </button>
    </div>
  </div>
</section>
