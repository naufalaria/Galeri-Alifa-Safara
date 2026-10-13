<!-- 6.2 Hero Section -->
<section class="relative overflow-hidden pt-8 pb-16 lg:py-20 border-b border-base-border">
  <!-- Decorative Warm Background Circles -->
  <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-primary/5 blur-3xl pointer-events-none"></div>
  <div class="absolute bottom-0 right-0 w-80 h-80 rounded-full bg-secondary/10 blur-3xl pointer-events-none"></div>

  <div class="max-w-[1240px] mx-auto px-5 lg:px-8">
    <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
      
      <!-- Text Content -->
      <div class="lg:w-1/2 flex flex-col items-start text-left">
        
        <!-- Artisan Badge -->
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-secondary/15 text-secondary text-xs font-bold uppercase tracking-wider rounded-full mb-6 border border-secondary/25">
          <span>🪡</span>
          <span>100% Kriya Tangan Asli Bojonegoro</span>
        </div>

        <h1 class="font-serif text-4xl sm:text-5xl lg:text-[54px] leading-[1.18] font-bold text-base-text mb-6">
          Sentuhan Hangat dari Setiap
          <span class="text-primary italic font-serif">Helai Benang</span> &amp; Anyaman Tali Kur
        </h1>

        <p class="text-base sm:text-lg text-base-muted mb-8 leading-relaxed max-w-xl">
          Karya seni kriya autentik buatan tangan ibu-ibu perajin Sumberrejo, Bojonegoro. Bukan sekadar tas, melainkan untaian dedikasi, bahan katun &amp; tali kur pilihan yang kokoh, serta kehangatan slow-fashion yang awet bertahun-tahun.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-3.5 w-full sm:w-auto mb-10">
          <a
            href="#koleksi"
            class="bg-primary hover:bg-primary-hover text-white px-8 py-4 rounded-full font-semibold text-center transition-all shadow-warm hover:shadow-warm-lg flex items-center justify-center gap-2 text-base group"
          >
            <span>Lihat Katalog Koleksi</span>
            <svg class="w-4 h-4 group-hover:translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <button
            onclick="openWA('Halo <?= addslashes($site['brandName'] ?? 'Alifa Safara') ?>, saya ingin konsultasi untuk custom order tas rajut / tali kur.')"
            class="bg-base-card hover:bg-base-border/70 border border-base-border text-base-text px-7 py-4 rounded-full font-semibold text-center transition-all flex items-center justify-center gap-2 text-base"
          >
            <span>Konsultasi Custom Order</span>
            <span class="text-secondary font-bold">💬</span>
          </button>
        </div>

        <!-- Social Proof -->
        <div class="pt-6 border-t border-base-border/70 w-full flex items-center gap-4 flex-wrap">
          <div class="flex -space-x-2.5 overflow-hidden">
            <img
              class="w-10 h-10 rounded-full border-2 border-base-canvas object-cover shadow-sm"
              src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=120&q=80"
              alt="Pelanggan Alifa Safara"
            />
            <img
              class="w-10 h-10 rounded-full border-2 border-base-canvas object-cover shadow-sm"
              src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80"
              alt="Pelanggan Alifa Safara"
            />
            <img
              class="w-10 h-10 rounded-full border-2 border-base-canvas object-cover shadow-sm"
              src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=120&q=80"
              alt="Pelanggan Alifa Safara"
            />
            <img
              class="w-10 h-10 rounded-full border-2 border-base-canvas object-cover shadow-sm"
              src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=120&q=80"
              alt="Pelanggan Alifa Safara"
            />
          </div>

          <div>
            <div class="flex items-center gap-1 text-tertiary">
              <span class="text-xs font-bold text-base-text mr-1">4.9 / 5.0</span>
              <svg class="w-4 h-4 fill-current text-[#E5A855]" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
              <svg class="w-4 h-4 fill-current text-[#E5A855]" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
              <svg class="w-4 h-4 fill-current text-[#E5A855]" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
              <svg class="w-4 h-4 fill-current text-[#E5A855]" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
              <svg class="w-4 h-4 fill-current text-[#E5A855]" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            </div>
            <p class="text-xs sm:text-sm text-base-muted font-medium mt-0.5">
              500+ tas handmade terkirim ke seluruh nusantara
            </p>
          </div>
        </div>

      </div>

      <!-- Hero Image & Handmade Framed Badge -->
      <div class="lg:w-1/2 relative w-full flex justify-center">
        
        <!-- Outer Arch Frame with Warm Stitch Border -->
        <div class="relative w-full max-w-md lg:max-w-lg aspect-[4/5] sm:aspect-[3/4]">
          
          <!-- Decorative Backing -->
          <div class="absolute inset-0 rounded-t-[200px] sm:rounded-t-[240px] rounded-b-[40px] bg-primary/10 -rotate-2 transform transition-transform"></div>
          
          <!-- Main Image Container -->
          <div class="relative w-full h-full rounded-t-[200px] sm:rounded-t-[240px] rounded-b-[40px] overflow-hidden border-4 border-base-canvas shadow-warm-lg bg-base-card">
            <img
              src="./img/tasrajut.jpg"
              alt="Tas Rajut Karakter Kelinci Bunga Ceria buatan tangan Alifa Safara Bojonegoro"
              class="w-full h-full object-cover object-center transform hover:scale-105 transition-transform duration-700"
            />

            <!-- Top Ribbon -->
            <div class="absolute top-6 left-1/2 -translate-x-1/2 bg-base-canvas/90 backdrop-blur-md px-4 py-1.5 rounded-full shadow-sm text-xs font-semibold text-primary border border-primary/20">
              Koleksi Pilihan: Kelinci Bunga Ceria
            </div>
          </div>

          <!-- Floating Artisan Badge 1 (Left Bottom) -->
          <div class="absolute -left-2 sm:-left-6 bottom-10 bg-base-elevated p-3 sm:p-4 rounded-2xl shadow-warm border border-base-border flex items-center gap-3 animate-soft-float">
            <div class="w-10 h-10 rounded-xl bg-secondary/15 text-secondary flex items-center justify-center font-bold text-lg">
              🧶
            </div>
            <div>
              <div class="font-bold text-xs sm:text-sm text-base-text">Anyaman Padat</div>
              <div class="text-[11px] text-base-muted">Tali Kur &amp; Katun Pilihan</div>
            </div>
          </div>

          <!-- Floating Artisan Badge 2 (Right Top/Middle) -->
          <div class="absolute -right-2 sm:-right-6 top-1/3 bg-base-elevated p-3 sm:p-4 rounded-2xl shadow-warm border border-base-border flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-primary/15 text-primary flex items-center justify-center font-bold text-lg">
              🛡️
            </div>
            <div>
              <div class="font-bold text-xs sm:text-sm text-base-text">Kuat &amp; Awet</div>
              <div class="text-[11px] text-base-muted">Tahan Beban s.d 5 kg</div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>
