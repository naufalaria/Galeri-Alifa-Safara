<!-- 6.10 Newsletter Section -->
<section class="py-14 bg-base-canvas border-b border-base-border">
  <div class="max-w-xl mx-auto px-5 text-center">
    <span class="text-xs uppercase tracking-widest text-secondary font-bold">Kabar Pengrajin</span>
    <h3 class="font-serif text-2xl font-bold text-base-text mt-1 mb-2">
      Dapatkan Inspirasi Model Baru &amp; Penawaran Spesial
    </h3>
    <p class="text-xs sm:text-sm text-base-muted mb-6 leading-relaxed">
      Jadilah yang pertama mengetahui saat rilis benang baru atau kuota pesanan custom dibuka. Tanpa spam.
    </p>

    <form id="newsletterForm" class="flex flex-col sm:flex-row gap-2.5 max-w-md mx-auto">
      <input
        type="email"
        id="newsletterEmail"
        required
        placeholder="Masukkan alamat email Anda..."
        class="flex-1 bg-base-card border border-base-border rounded-full px-5 py-3 text-sm text-base-text focus:outline-none focus:ring-2 focus:ring-primary/40 focus:border-primary transition-all font-medium"
      />
      <button
        type="submit"
        class="bg-base-text hover:bg-primary text-white px-7 py-3 rounded-full font-semibold text-sm transition-colors shadow-sm"
      >
        Langganan
      </button>
    </form>
    <div id="newsletterMsg" class="hidden"></div>
  </div>
</section>
