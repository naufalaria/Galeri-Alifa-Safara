<!-- 6.7 Testimoni Pembeli Asli -->
<section id="testimoni" class="bg-base-card/60 py-16 lg:py-24 border-b border-base-border relative">
  <div class="max-w-[1240px] mx-auto px-5 lg:px-8">
    
    <div class="text-center max-w-2xl mx-auto mb-14">
      <span class="text-xs uppercase tracking-widest text-primary font-bold">Ulasan Sahabat <?= htmlspecialchars($site['brandName'] ?? 'Alifa Safara') ?></span>
      <h2 class="font-serif text-3xl lg:text-4xl font-bold mt-2 mb-4 text-base-text">
        Apa Kata Mereka yang Telah Memakai?
      </h2>
      <p class="text-base-muted text-sm sm:text-base leading-relaxed">
        Kepercayaan dan senyum kepuasan pembeli adalah bahan bakar semangat ibu-ibu perajin kami untuk terus berkarya.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <?php if (!empty($testimonials)): ?>
        <?php foreach ($testimonials as $t): ?>
          <div class="bg-base-canvas p-8 rounded-3xl border border-base-border shadow-warm-sm hover:shadow-warm transition-all flex flex-col justify-between">
            <div>
              <div class="flex items-center gap-1 text-[#E5A855] mb-5">
                <?php for ($i = 0; $i < ($t['rating'] ?? 5); $i++): ?>
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                <?php endfor; ?>
              </div>
              <p class="text-base-text mb-6 leading-relaxed italic text-sm sm:text-base">
                &ldquo;<?= htmlspecialchars($t['quote'] ?? '') ?>&rdquo;
              </p>
            </div>
            
            <div class="flex items-center gap-3.5 pt-4 border-t border-base-border/50">
              <div class="w-11 h-11 rounded-full <?= htmlspecialchars($t['badgeClass'] ?? 'bg-primary/15 text-primary') ?> flex items-center justify-center font-bold text-base">
                <?= htmlspecialchars($t['initial'] ?? '') ?>
              </div>
              <div>
                <div class="font-bold text-sm text-base-text"><?= htmlspecialchars($t['name'] ?? '') ?></div>
                <div class="text-xs text-secondary flex items-center gap-1 font-medium mt-0.5">
                  <span>✓</span>
                  <span>Pembeli Terverifikasi, <?= htmlspecialchars($t['location'] ?? '') ?></span>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

  </div>
</section>
