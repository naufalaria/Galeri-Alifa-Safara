const WA_NUMBER = "6281333156895";

function openWA(message) {
    const encodedMsg = encodeURIComponent(message);
    window.open(`https://wa.me/${WA_NUMBER}?text=${encodedMsg}`, '_blank');
}

function orderProduct(productName, price) {
    const priceText = price ? ` (${price})` : '';
    openWA(`Halo Alifa Safara, saya tertarik untuk memesan "${productName}"${priceText}. Apakah produk ini masih tersedia atau bisa dibuatkan? Terima kasih.`);
}

document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    }

    const filterBtns = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');

    function applyFilter(filterName) {
        filterBtns.forEach(btn => {
            const isMatch = btn.dataset.filter === filterName;
            btn.classList.toggle('active', isMatch);
            btn.classList.toggle('bg-primary', isMatch);
            btn.classList.toggle('text-white', isMatch);
            btn.classList.toggle('shadow-sm', isMatch);
            btn.classList.toggle('bg-base-canvas', !isMatch);
            btn.classList.toggle('text-base-text', !isMatch);
            btn.classList.toggle('border-base-border', !isMatch);
        });

        productCards.forEach(card => {
            const matches = filterName === 'all' || card.dataset.category === filterName;
            card.classList.toggle('hidden', !matches);
            card.style.display = matches ? '' : 'none';
        });
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            applyFilter(btn.dataset.filter);
        });
    });

    // Links with data-nav-filter switch catalog category automatically
    document.querySelectorAll('[data-nav-filter]').forEach(navLink => {
        navLink.addEventListener('click', () => {
            const targetFilter = navLink.dataset.navFilter;
            applyFilter(targetFilter);
        });
    });

    const simType = document.getElementById('simType');
    if (simType) {
        const simYarn = document.getElementById('simYarn');
        const simHandle = document.getElementById('simHandle');
        const simColor = document.getElementById('simColor');

        const lblType = document.getElementById('lblType');
        const lblYarn = document.getElementById('lblYarn');
        const lblHandle = document.getElementById('lblHandle');
        const lblColor = document.getElementById('lblColor');
        const lblTotal = document.getElementById('lblTotal');

        function updateSimulator() {
            if (!simType || !simYarn || !simHandle || !lblTotal) return;

            const typeVal = parseInt(simType.value, 10) || 0;
            const yarnVal = parseInt(simYarn.value, 10) || 0;
            const handleVal = parseInt(simHandle.value, 10) || 0;

            const typeName = simType.options[simType.selectedIndex]?.dataset.name || '-';
            const yarnName = simYarn.options[simYarn.selectedIndex]?.dataset.name || '-';
            const handleName = simHandle.options[simHandle.selectedIndex]?.dataset.name || '-';
            const colorName = simColor?.value.trim() || 'Sesuai Kesepakatan';

            const total = typeVal + yarnVal + handleVal;

            if (lblType) lblType.textContent = typeName;
            if (lblYarn) lblYarn.textContent = yarnName;
            if (lblHandle) lblHandle.textContent = handleName;
            if (lblColor) lblColor.textContent = colorName;
            lblTotal.textContent = 'Rp ' + total.toLocaleString('id-ID');
        }

        simType.addEventListener('change', updateSimulator);
        if (simYarn) simYarn.addEventListener('change', updateSimulator);
        if (simHandle) simHandle.addEventListener('change', updateSimulator);
        if (simColor) simColor.addEventListener('input', updateSimulator);

        const colorChips = document.querySelectorAll('.color-chip');
        colorChips.forEach(chip => {
            chip.addEventListener('click', () => {
                if (simColor) {
                    simColor.value = chip.dataset.colorName;
                    colorChips.forEach(c => c.classList.remove('ring-2', 'ring-primary', 'font-semibold'));
                    chip.classList.add('ring-2', 'ring-primary', 'font-semibold');
                    updateSimulator();
                }
            });
        });

        const customSubmitBtn = document.getElementById('submitCustomBtn');
        if (customSubmitBtn) {
            customSubmitBtn.addEventListener('click', () => {
                const typeName = simType?.options[simType.selectedIndex]?.dataset.name || 'Tote Bag Harian';
                const yarnName = simYarn?.options[simYarn.selectedIndex]?.dataset.name || 'Katun Organik Lembut';
                const handleName = simHandle?.options[simHandle.selectedIndex]?.dataset.name || 'Anyaman Rajut Senada';
                const colorName = simColor?.value.trim() || 'Terakota & Sage (atau custom)';
                const total = lblTotal?.textContent || 'Rp 250.000';

                const message = `Halo Alifa Safara, saya ingin konsultasi dan pesan custom kriya handmade dengan rincian berikut:
• Model Produk: ${typeName}
• Jenis Benang: ${yarnName}
• Tali / Handle: ${handleName}
• Pilihan Warna: ${colorName}
• Estimasi Biaya: ${total}

Apakah bisa dibuatkan? Mohon info estimasi antrean dan lama pengerjaannya ya. Terima kasih Bu!`;

                openWA(message);
            });
        }

        updateSimulator();
    }

    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const btn = item.querySelector('.faq-btn');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('.faq-icon');

        if (!btn || !content || !icon) return;

        btn.addEventListener('click', () => {
            const isExpanded = btn.getAttribute('aria-expanded') === 'true';

            faqItems.forEach(otherItem => {
                const otherBtn = otherItem.querySelector('.faq-btn');
                const otherContent = otherItem.querySelector('.faq-content');
                const otherIcon = otherItem.querySelector('.faq-icon');
                if (otherBtn && otherContent && otherIcon) {
                    otherBtn.setAttribute('aria-expanded', 'false');
                    otherContent.classList.add('hidden');
                    otherIcon.classList.remove('rotate-180');
                }
            });

            if (!isExpanded) {
                btn.setAttribute('aria-expanded', 'true');
                content.classList.remove('hidden');
                icon.classList.add('rotate-180');
            }
        });
    });

    const newsletterForm = document.getElementById('newsletterForm');
    const newsletterMsg = document.getElementById('newsletterMsg');

    if (newsletterForm) {
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const emailInput = document.getElementById('newsletterEmail');
            if (emailInput && emailInput.value) {
                if (newsletterMsg) {
                    newsletterMsg.innerHTML = "Terima kasih! Email Anda telah terdaftar. Kami akan mengabari saat koleksi baru siap rilis.";
                    newsletterMsg.className = "text-sm mt-3 font-medium text-secondary block bg-secondary/10 p-3 rounded-xl border border-secondary/20";
                }
                newsletterForm.reset();
            }
        });
    }

    const toggleHearts = document.querySelectorAll('.toggle-heart');
    toggleHearts.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            btn.classList.toggle('text-primary');
            btn.classList.toggle('text-base-text/40');
            btn.classList.toggle('scale-110');
        });
    });
});
