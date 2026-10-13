<footer class="bg-base-canvas pt-16 pb-12">
  <div class="max-w-[1240px] mx-auto px-5 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 mb-14">
    
    <div class="lg:col-span-5">
      <a href="#" class="flex flex-col mb-4 group">
        <span class="font-serif text-2xl sm:text-3xl font-bold text-primary tracking-tight">
          <?= htmlspecialchars($site['brandName'] ?? 'Alifa Safara') ?>
        </span>
        <span class="text-[11px] uppercase tracking-widest text-secondary font-bold">
          <?= htmlspecialchars($site['fullTagline'] ?? 'Kriya Tas Rajut & Tali Kur Bojonegoro') ?>
        </span>
      </a>
      
      <p class="text-base-muted text-sm leading-relaxed max-w-sm mb-6">
        Mendedikasikan diri untuk melestarikan kerajinan tangan lokal dan memberdayakan ibu rumah tangga mandiri melalui karya tas rajut dan tali kur yang bernilai estetika tinggi, awet, dan bermakna.
      </p>

      <div class="flex items-center gap-3">
        <a
          href="<?= htmlspecialchars($site['instagramUrl'] ?? 'https://instagram.com') ?>"
          target="_blank"
          rel="noopener"
          aria-label="Instagram <?= htmlspecialchars($site['brandName'] ?? 'Alifa Safara') ?>"
          class="w-10 h-10 rounded-full border border-base-border flex items-center justify-center text-base-text hover:text-white hover:bg-primary hover:border-primary transition-all shadow-sm"
        >
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
        </a>
        <a
          href="<?= htmlspecialchars($site['facebookUrl'] ?? 'https://facebook.com') ?>"
          target="_blank"
          rel="noopener"
          aria-label="Facebook <?= htmlspecialchars($site['brandName'] ?? 'Alifa Safara') ?>"
          class="w-10 h-10 rounded-full border border-base-border flex items-center justify-center text-base-text hover:text-white hover:bg-[#1877F2] hover:border-[#1877F2] transition-all shadow-sm"
        >
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        </a>
        <button
          onclick="openWA('Halo <?= addslashes($site['brandName'] ?? 'Alifa Safara') ?>, saya ingin tanya info pemesanan tas dan sendal rajut.')"
          aria-label="WhatsApp <?= htmlspecialchars($site['brandName'] ?? 'Alifa Safara') ?>"
          class="w-10 h-10 rounded-full border border-base-border flex items-center justify-center text-base-text hover:text-white hover:bg-secondary hover:border-secondary transition-all shadow-sm"
        >
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.012 0C5.385 0 .009 5.377.009 12.003c0 2.12.553 4.19 1.6 6.015L.033 24l6.136-1.611a11.972 11.972 0 005.843 1.516h.004c6.627 0 12.003-5.377 12.003-12.003S18.64 0 12.012 0zm0 21.905a9.96 9.96 0 01-5.084-1.39l-.364-.216-3.778.991.999-3.682-.237-.377A9.957 9.957 0 011.91 12.003C1.91 6.442 6.446 1.91 12.016 1.91s10.096 4.532 10.096 10.093c0 5.562-4.526 10.093-10.096 10.093l-.004-.001zm5.539-7.558c-.304-.152-1.797-.887-2.075-.989-.278-.102-.481-.152-.684.152-.203.304-.784.989-.961 1.192-.177.203-.354.228-.658.076-1.554-.775-2.658-1.428-3.673-3.136-.203-.338.005-.487.166-.653.117-.12.304-.354.456-.532.152-.177.203-.304.304-.506.102-.203.051-.38-.025-.532-.076-.152-.684-1.647-.938-2.254-.247-.594-.497-.514-.684-.523-.177-.009-.38-.01-.583-.01-.203 0-.532.076-.811.38-.278.304-1.064 1.039-1.064 2.534 0 1.495 1.089 2.939 1.241 3.142.152.203 2.14 3.267 5.185 4.58.723.312 1.288.498 1.727.638.725.23 1.385.197 1.905.12.584-.087 1.797-.735 2.05-1.444.253-.709.253-1.317.177-1.444-.076-.127-.278-.203-.583-.355z"/></svg>
        </button>
      </div>
    </div>

    <div class="lg:col-span-3">
      <h4 class="font-serif font-bold text-base-text mb-4 text-base">Koleksi Kriya</h4>
      <ul class="space-y-2.5 text-sm text-base-muted">
        <li><a href="#koleksi" class="hover:text-primary transition-colors">Tote Bag Rajut Katun</a></li>
        <li><a href="#koleksi" class="hover:text-primary transition-colors">Tas Anyaman Tali Kur Bunga</a></li>
        <li><a href="#koleksi" class="hover:text-primary transition-colors">Sendal Selop Rajut</a></li>
        <li><a href="#koleksi" class="hover:text-primary transition-colors">Sling Bag Bobble Vintage</a></li>
        <li><button onclick="openWA('Halo <?= addslashes($site['brandName'] ?? 'Alifa Safara') ?>, saya ingin konsultasi custom order tas/sendal.')" class="hover:text-primary transition-colors text-left font-semibold text-primary">Pesan Custom via WhatsApp</button></li>
      </ul>
    </div>

    <div class="lg:col-span-4">
      <h4 class="font-serif font-bold text-base-text mb-4 text-base">Studio Kriya Kami</h4>
      <ul class="space-y-3.5 text-sm text-base-muted">
        <li class="flex items-start gap-3">
          <span class="text-primary text-base">📍</span>
          <span><strong>Studio <?= htmlspecialchars($site['brandName'] ?? 'Alifa Safara') ?></strong><br /><?= htmlspecialchars($site['address'] ?? '') ?></span>
        </li>
        <li class="flex items-start gap-3">
          <span class="text-secondary text-base">⏰</span>
          <span><strong>Jam Layanan Konsultasi:</strong><br /><?= htmlspecialchars($site['workingHours'] ?? '') ?></span>
        </li>
        <li class="flex items-start gap-3">
          <span class="text-primary text-base">📱</span>
          <span><strong>WhatsApp Resmi:</strong><br /><?= htmlspecialchars($site['phoneDisplay'] ?? '') ?></span>
        </li>
      </ul>
    </div>

  </div>

  <div class="max-w-[1240px] mx-auto px-5 lg:px-8 border-t border-base-border pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-base-muted">
    <p>&copy; <?= htmlspecialchars($site['year'] ?? date('Y')) ?> <?= htmlspecialchars($site['brandName'] ?? 'Alifa Safara') ?>. Seluruh hak cipta dilindungi undang-undang.</p>
    <div class="flex gap-6">
      <a href="#" class="hover:text-primary transition-colors">Kebijakan Privasi</a>
      <a href="#" class="hover:text-primary transition-colors">Syarat Pemesanan</a>
      <a href="#faq" class="hover:text-primary transition-colors">Bantuan FAQ</a>
    </div>
  </div>
</footer>
