<!-- Floating WhatsApp Action Button (Mobile & Desktop) -->
<aside
  aria-label="Kontak Cepat WhatsApp"
  class="fixed bottom-6 right-6 z-50 flex items-center group"
>
  <button
    onclick="openWA('Halo <?= addslashes($site['brandName'] ?? 'Alifa Safara') ?>, saya ingin tanya seputar koleksi tas rajut dan tali kur.')"
    aria-label="Hubungi Bu Winarsih via WhatsApp"
    class="bg-[#25D366] hover:bg-[#1EBE5D] text-white p-3.5 sm:p-4 rounded-full shadow-warm-lg transition-transform transform hover:scale-110 flex items-center justify-center animate-pulse-glow"
  >
    <svg class="w-6 h-6 sm:w-7 sm:h-7 fill-current" viewBox="0 0 24 24">
      <path d="M12.012 0C5.385 0 .009 5.377.009 12.003c0 2.12.553 4.19 1.6 6.015L.033 24l6.136-1.611a11.972 11.972 0 005.843 1.516h.004c6.627 0 12.003-5.377 12.003-12.003S18.64 0 12.012 0zm0 21.905a9.96 9.96 0 01-5.084-1.39l-.364-.216-3.778.991.999-3.682-.237-.377A9.957 9.957 0 011.91 12.003C1.91 6.442 6.446 1.91 12.016 1.91s10.096 4.532 10.096 10.093c0 5.562-4.526 10.093-10.096 10.093l-.004-.001zm5.539-7.558c-.304-.152-1.797-.887-2.075-.989-.278-.102-.481-.152-.684.152-.203.304-.784.989-.961 1.192-.177.203-.354.228-.658.076-1.554-.775-2.658-1.428-3.673-3.136-.203-.338.005-.487.166-.653.117-.12.304-.354.456-.532.152-.177.203-.304.304-.506.102-.203.051-.38-.025-.532-.076-.152-.684-1.647-.938-2.254-.247-.594-.497-.514-.684-.523-.177-.009-.38-.01-.583-.01-.203 0-.532.076-.811.38-.278.304-1.064 1.039-1.064 2.534 0 1.495 1.089 2.939 1.241 3.142.152.203 2.14 3.267 5.185 4.58.723.312 1.288.498 1.727.638.725.23 1.385.197 1.905.12.584-.087 1.797-.735 2.05-1.444.253-.709.253-1.317.177-1.444-.076-.127-.278-.203-.583-.355z"/>
    </svg>
  </button>
  <span class="hidden sm:group-hover:inline-block bg-base-text text-white text-xs font-semibold px-3 py-1.5 rounded-xl shadow-lg mr-3 whitespace-nowrap order-first">
    Tanya Bu Winarsih di WA
  </span>
</aside>
