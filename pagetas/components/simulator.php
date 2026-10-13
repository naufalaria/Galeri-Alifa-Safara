<section id="simulator" class="py-16 lg:py-24 border-b border-base-border relative">
  <div class="max-w-[1240px] mx-auto px-5 lg:px-8">
    
    <div class="text-center max-w-2xl mx-auto mb-14">
      <span class="text-xs uppercase tracking-widest text-primary font-bold">Fitur Kustomisasi</span>
      <h2 class="font-serif text-3xl lg:text-4xl font-bold mt-2 mb-4 text-base-text">
        Kalkulator &amp; Simulator Custom Order
      </h2>
      <p class="text-base-muted text-sm sm:text-base leading-relaxed">
        Ingin tas atau sendal dengan siluet, bahan benang, handle kayu, atau kombinasi warna impian Anda? Pilih opsi di bawah untuk melihat estimasi biaya transparan dan kirim langsung ke WhatsApp pengrajin kami.
      </p>
    </div>

    <div class="bg-base-canvas rounded-3xl border border-base-border shadow-warm overflow-hidden">
      <div class="grid grid-cols-1 lg:grid-cols-12">
        
        <div class="lg:col-span-7 p-6 sm:p-9 lg:p-12 border-b lg:border-b-0 lg:border-r border-base-border">
          <h3 class="font-serif text-xl sm:text-2xl font-bold mb-6 text-base-text flex items-center gap-2">
            <span>Sesuaikan Pesanan Anda</span>
            <span class="text-xs font-sans font-normal text-secondary bg-secondary/10 px-3 py-1 rounded-full border border-secondary/20">Langkah Mudah</span>
          </h3>

          <div class="space-y-6">
            
            <div>
              <label for="simType" class="block text-sm font-bold text-base-text mb-2">
                1. Model / Produk Kriya
              </label>
              <div class="relative">
                <select
                  id="simType"
                  class="w-full bg-base-canvas border border-base-border rounded-2xl px-4 py-3.5 text-sm sm:text-base text-base-text appearance-none focus:outline-none focus:ring-2 focus:ring-primary/40 focus:border-primary transition-all font-medium cursor-pointer"
                >
                  <option value="250000" data-name="Tote Bag Harian" selected>Tote Bag Harian (Rp 250.000) — Muat Buku &amp; Dompet</option>
                  <option value="180000" data-name="Sling Bag Compact">Sling Bag Compact (Rp 180.000) — Praktis &amp; Pas untuk HP</option>
                  <option value="135000" data-name="Sendal Selop Rajut">Sendal Selop Rajut (Rp 135.000) — Empuk &amp; Pas di Kaki</option>
                  <option value="160000" data-name="Envelope Clutch">Envelope Clutch (Rp 160.000) — Elegan untuk Acara/Pesta</option>
                  <option value="280000" data-name="Hobo Shoulder Bag">Hobo Shoulder Bag (Rp 280.000) — Ruang Lapang &amp; Nyaman</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-base-text/60">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
              </div>
            </div>

            <div>
              <label for="simYarn" class="block text-sm font-bold text-base-text mb-2">
                2. Jenis Benang &amp; Serat
              </label>
              <div class="relative">
                <select
                  id="simYarn"
                  class="w-full bg-base-canvas border border-base-border rounded-2xl px-4 py-3.5 text-sm sm:text-base text-base-text appearance-none focus:outline-none focus:ring-2 focus:ring-primary/40 focus:border-primary transition-all font-medium cursor-pointer"
                >
                  <option value="0" data-name="Katun Organik Lembut" selected>Katun Organik Lembut (+Rp 0) — Standar Lembut &amp; Alami</option>
                  <option value="25000" data-name="Tali Kur Makrame Tebal">Tali Kur Makrame Tebal (+Rp 25.000) — Ekstra Kuat &amp; Kaku</option>
                  <option value="20000" data-name="T-Shirt Yarn Daur Ulang">T-Shirt Yarn Daur Ulang (+Rp 20.000) — Unik &amp; Ramah Lingkungan</option>
                  <option value="35000" data-name="Milk Cotton Super Halus">Milk Cotton Super Halus (+Rp 35.000) — Sangat Halus di Kulit</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-base-text/60">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
              </div>
            </div>

            <div>
              <label for="simHandle" class="block text-sm font-bold text-base-text mb-2">
                3. Pilihan Tali / Handle / Strap
              </label>
              <div class="relative">
                <select
                  id="simHandle"
                  class="w-full bg-base-canvas border border-base-border rounded-2xl px-4 py-3.5 text-sm sm:text-base text-base-text appearance-none focus:outline-none focus:ring-2 focus:ring-primary/40 focus:border-primary transition-all font-medium cursor-pointer"
                >
                  <option value="0" data-name="Anyaman Rajut Senada" selected>Anyaman Rajut Senada (+Rp 0) — Senada &amp; Nyaman di Tangan/Kaki</option>
                  <option value="35000" data-name="Handle Kayu Jati Alami">Handle Kayu Jati Alami (+Rp 35.000) — Sentuhan Klasik &amp; Mewah</option>
                  <option value="45000" data-name="Kulit Sintetis Nabati">Tali Kulit Sintetis Nabati (+Rp 45.000) — Tahan Gesek &amp; Modern</option>
                  <option value="25000" data-name="Rantai Logam Antik">Rantai Logam Antik (+Rp 25.000) — Nuansa Glamour Vintage</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-base-text/60">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </div>
              </div>
            </div>

            <div>
              <label for="simColor" class="block text-sm font-bold text-base-text mb-1.5">
                4. Palet Warna Favorit
              </label>
              <p class="text-xs text-base-muted mb-2.5">
                Klik preset warna cepat atau ketik kombinasi warna bebas (misal: &ldquo;terracotta &amp; sage&rdquo; atau &ldquo;krem &amp; cokelat susu&rdquo;).
              </p>
              
              <div class="flex flex-wrap gap-2 mb-3">
                <button
                  type="button"
                  class="color-chip text-xs px-3.5 py-1.5 rounded-full border border-base-border bg-base-canvas hover:border-primary flex items-center gap-1.5 transition-all ring-2 ring-primary font-semibold"
                  data-color-name="Terakota &amp; Sage Alami"
                >
                  <span class="w-3 h-3 rounded-full bg-[#C85A32] inline-block"></span>
                  <span class="w-3 h-3 rounded-full bg-[#7A8466] inline-block -ml-1"></span>
                  <span>Terakota &amp; Sage</span>
                </button>
                <button
                  type="button"
                  class="color-chip text-xs px-3.5 py-1.5 rounded-full border border-base-border bg-base-canvas hover:border-primary flex items-center gap-1.5 transition-all"
                  data-color-name="Krem Oat &amp; Cokelat Mocca"
                >
                  <span class="w-3 h-3 rounded-full bg-[#E5DACB] inline-block"></span>
                  <span class="w-3 h-3 rounded-full bg-[#6B5E55] inline-block -ml-1"></span>
                  <span>Krem &amp; Mocca</span>
                </button>
                <button
                  type="button"
                  class="color-chip text-xs px-3.5 py-1.5 rounded-full border border-base-border bg-base-canvas hover:border-primary flex items-center gap-1.5 transition-all"
                  data-color-name="Dusty Pink &amp; Putih Tulang"
                >
                  <span class="w-3 h-3 rounded-full bg-[#D89B9E] inline-block"></span>
                  <span class="w-3 h-3 rounded-full bg-[#F5F2EB] inline-block -ml-1"></span>
                  <span>Dusty Pink &amp; Broken White</span>
                </button>
                <button
                  type="button"
                  class="color-chip text-xs px-3.5 py-1.5 rounded-full border border-base-border bg-base-canvas hover:border-primary flex items-center gap-1.5 transition-all"
                  data-color-name="Hitam Espresso &amp; Gold Jute"
                >
                  <span class="w-3 h-3 rounded-full bg-[#2C2420] inline-block"></span>
                  <span class="w-3 h-3 rounded-full bg-[#DDA77A] inline-block -ml-1"></span>
                  <span>Espresso &amp; Jute</span>
                </button>
              </div>

              <input
                type="text"
                id="simColor"
                placeholder="Contoh: Terakota &amp; Sage Alami (atau sebutkan warna Anda)"
                value="Terakota &amp; Sage Alami"
                class="w-full bg-base-canvas border border-base-border rounded-2xl px-4 py-3 text-sm sm:text-base text-base-text focus:outline-none focus:ring-2 focus:ring-primary/40 focus:border-primary transition-all font-medium"
              />
            </div>

          </div>
        </div>

        <div class="lg:col-span-5 bg-base-card/70 p-6 sm:p-9 lg:p-12 flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between pb-4 border-b border-base-border">
              <div class="flex items-center gap-2">
                <span class="text-xl">🧾</span>
                <span class="font-serif font-bold text-lg text-base-text">Ringkasan Estimasi</span>
              </div>
              <span class="text-[11px] font-bold text-secondary uppercase bg-secondary/10 px-2 py-1 rounded-md border border-secondary/20">
                Karya Personal
              </span>
            </div>

            <div class="py-6 space-y-4 text-sm">
              <div class="flex justify-between items-center">
                <span class="text-base-muted">Model Produk:</span>
                <span class="font-bold text-base-text" id="lblType">Tote Bag Harian</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-base-muted">Jenis Benang:</span>
                <span class="font-bold text-base-text" id="lblYarn">Katun Organik Lembut</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-base-muted">Tali / Handle:</span>
                <span class="font-bold text-base-text" id="lblHandle">Anyaman Rajut Senada</span>
              </div>
              <div class="flex justify-between items-start">
                <span class="text-base-muted">Pilihan Warna:</span>
                <span class="font-bold text-base-text text-right max-w-[180px]" id="lblColor">Terakota &amp; Sage Alami</span>
              </div>
              
              <div class="pt-4 border-t border-dashed border-base-border space-y-2">
                <div class="flex items-center gap-2 text-xs text-base-muted">
                  <span>⏱️</span>
                  <span>Waktu pengerjaan: <strong>3–7 hari kerja</strong></span>
                </div>
                <div class="flex items-center gap-2 text-xs text-base-muted">
                  <span>🧵</span>
                  <span>Dikerjakan oleh: <strong>Perajin <?= htmlspecialchars($site['brandName'] ?? 'Alifa Safara') ?></strong></span>
                </div>
              </div>
            </div>
          </div>

          <div class="pt-6 border-t-2 border-primary/20">
            <div class="text-xs uppercase tracking-wider text-base-muted font-bold mb-1">
              Perkiraan Biaya Pembuatan:
            </div>
            <div class="font-serif text-3xl sm:text-4xl font-bold text-primary mb-2" id="lblTotal">
              Rp 250.000
            </div>
            <p class="text-[11px] text-base-muted mb-6 leading-relaxed">
              *Harga ini merupakan estimasi awal transparan. Ketersediaan variasi warna &amp; detail khusus akan dikonfirmasi langsung oleh pengrajin <?= htmlspecialchars($site['brandName'] ?? 'Alifa Safara') ?>.
            </p>

            <button
              id="submitCustomBtn"
              class="w-full bg-primary hover:bg-primary-hover text-white py-4 px-6 rounded-full font-bold text-sm sm:text-base transition-all shadow-warm hover:shadow-warm-lg flex items-center justify-center gap-2 group"
            >
              <span>Kirim Rincian ke WhatsApp Pengrajin</span>
              <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
              </svg>
            </button>
          </div>

        </div>

      </div>
    </div>

  </div>
</section>
