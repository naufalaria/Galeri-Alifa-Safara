<!-- 6.8 FAQ (Accordion yang Interaktif & Aksesibel) -->
<section id="faq" class="py-16 lg:py-24 border-b border-base-border">
  <div class="max-w-3xl mx-auto px-5 lg:px-8">
    
    <div class="text-center mb-12">
      <span class="text-xs uppercase tracking-widest text-primary font-bold">Informasi &amp; Tanya Jawab</span>
      <h2 class="font-serif text-3xl lg:text-4xl font-bold mt-2 mb-3 text-base-text">
        Pertanyaan yang Sering Diajukan
      </h2>
      <p class="text-base-muted text-sm sm:text-base">
        Semua yang perlu Anda ketahui tentang perawatan, pemesanan custom, dan garansi tas <?= htmlspecialchars($site['brandName'] ?? 'Alifa Safara') ?>.
      </p>
    </div>

    <div class="space-y-4" id="faqAccordion">
      <?php if (!empty($faqs)): ?>
        <?php foreach ($faqs as $f): ?>
          <div class="border border-base-border rounded-2xl bg-base-canvas overflow-hidden faq-item transition-all shadow-warm-sm">
            <button
              class="w-full text-left px-6 py-5 flex items-center justify-between focus:outline-none focus:bg-base-card transition-colors faq-btn group"
              aria-expanded="false"
            >
              <span class="font-semibold text-base sm:text-lg text-base-text group-hover:text-primary transition-colors">
                <?= htmlspecialchars($f['question'] ?? '') ?>
              </span>
              <svg class="w-5 h-5 transform transition-transform duration-200 faq-icon text-primary flex-shrink-0 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="px-6 pb-6 hidden faq-content text-base-muted text-sm sm:text-base leading-relaxed border-t border-base-border/50 pt-4">
              <?= htmlspecialchars($f['answer'] ?? '') ?>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

  </div>
</section>
