<section id="koleksi" class="py-16 lg:py-24 border-b border-base-border">
  <div class="max-w-[1240px] mx-auto px-5 lg:px-8">
    
    <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-12 gap-6">
      <div>
        <span class="text-xs uppercase tracking-widest text-primary font-bold">Katalog Kriya Pilihan</span>
        <h2 class="font-serif text-3xl lg:text-4xl font-bold mt-2 mb-3 text-base-text">
          Koleksi Tas &amp; Sendal Rajut
        </h2>
        <p class="text-base-muted text-sm sm:text-base max-w-xl">
          Model terfavorit yang siap menemani hari-hari Anda. Bisa langsung dipesan atau di-custom dengan variasi warna kesukaan Anda.
        </p>
      </div>

      <div class="flex flex-wrap gap-2" id="katalogFilter">
        <button
          class="filter-btn active bg-primary text-white shadow-sm px-5 py-2.5 rounded-full text-xs sm:text-sm font-semibold transition-all"
          data-filter="all"
        >
          Semua Koleksi (<?= count($products ?? []) ?>)
        </button>
        <button
          class="filter-btn bg-base-canvas hover:bg-base-card text-base-text border border-base-border px-5 py-2.5 rounded-full text-xs sm:text-sm font-medium transition-all"
          data-filter="rajut"
        >
          Tas Rajut
        </button>
        <button
          class="filter-btn bg-base-canvas hover:bg-base-card text-base-text border border-base-border px-5 py-2.5 rounded-full text-xs sm:text-sm font-medium transition-all"
          data-filter="talikur"
        >
          Tas Tali Kur
        </button>
        <button
          class="filter-btn bg-base-canvas hover:bg-base-card text-base-text border border-base-border px-5 py-2.5 rounded-full text-xs sm:text-sm font-medium transition-all"
          data-filter="sling"
        >
          Sling Bag
        </button>
        <button
          class="filter-btn bg-base-canvas hover:bg-base-card text-base-text border border-base-border px-5 py-2.5 rounded-full text-xs sm:text-sm font-medium transition-all"
          data-filter="sendal"
        >
          Sendal Rajut
        </button>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" id="productGrid">
      <?php if (!empty($products)): ?>
        <?php foreach ($products as $item): ?>
          <div
            class="product-card bg-base-canvas border border-base-border rounded-3xl overflow-hidden shadow-warm-sm hover:shadow-warm transition-all group flex flex-col justify-between"
            data-category="<?= htmlspecialchars($item['category'] ?? '') ?>"
          >
            <div>
              <div class="relative aspect-square bg-base-card overflow-hidden">
                <img
                  src="<?= htmlspecialchars($item['image'] ?? '') ?>"
                  alt="<?= htmlspecialchars($item['name'] ?? 'Kriya Alifa Safara') ?>"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                  loading="lazy"
                />
                <?php if (!empty($item['badge'])): ?>
                  <div class="absolute top-3.5 left-3.5 <?= htmlspecialchars($item['badgeClass'] ?? 'bg-primary text-white') ?> text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full shadow-sm">
                    <?= htmlspecialchars($item['badge']) ?>
                  </div>
                <?php endif; ?>
                <button
                  class="absolute top-3.5 right-3.5 bg-base-canvas/90 backdrop-blur-sm p-2 rounded-full text-base-text/40 hover:text-primary transition-all toggle-heart"
                  aria-label="Simpan ke favorit"
                >
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                  </svg>
                </button>
              </div>

              <div class="p-5">
                <div class="text-[11px] text-secondary font-bold uppercase tracking-wider mb-1.5">
                  <?= htmlspecialchars($item['material'] ?? '') ?>
                </div>
                <h3 class="font-serif text-lg font-bold text-base-text mb-2 group-hover:text-primary transition-colors">
                  <?= htmlspecialchars($item['name'] ?? '') ?>
                </h3>
                <p class="text-xs text-base-muted leading-relaxed mb-4">
                  <?= htmlspecialchars($item['description'] ?? '') ?>
                </p>
              </div>
            </div>

            <div class="p-5 pt-0">
              <div class="pt-3 border-t border-base-border/60">
                <button
                  onclick="orderProduct('<?= addslashes($item['name'] ?? '') ?>')"
                  class="w-full bg-base-card hover:bg-primary hover:text-white border border-base-border text-base-text py-3 rounded-full font-semibold text-xs sm:text-sm transition-all flex items-center justify-center gap-2 group/btn"
                >
                  <span>Pesan via WhatsApp</span>
                  <span class="text-secondary group-hover/btn:text-white transition-colors">💬</span>
                </button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

  </div>
</section>
