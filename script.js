/**
 * ==========================================================================
 * SCRIPT.JS - Zentrales Skript für Daniel Melichar Portfolio
 * Enthält: Isotope Galerie, Filter, SPA-Navigation, Modals, Skills, GLightbox
 * ==========================================================================
 */

window.addEventListener('DOMContentLoaded', () => {
    let iso = null;
    let lightboxInstance = null;

    // 1. Galerie & Isotope Initialisierung
    function initGalerie() {
        const galerieGrid = document.querySelector('.galerie-grid');
        if (galerieGrid && typeof Isotope !== 'undefined') {
            iso = new Isotope('.galerie-grid', {
                itemSelector: '.galerie-item',
                layoutMode: 'fitRows',
                transitionDuration: '0.4s'
            });

            const filterLinks = document.querySelectorAll('#filter-menu li');
            filterLinks.forEach(link => {
                const newLink = link.cloneNode(true);
                link.parentNode.replaceChild(newLink, link);
                
                newLink.addEventListener('click', () => {
                    document.querySelectorAll('#filter-menu li').forEach(l => l.classList.remove('active'));
                    newLink.classList.add('active');

                    const filterValue = newLink.getAttribute('data-filter');
                    if (filterValue === 'all') {
                        iso.arrange({ filter: '*' });
                    } else {
                        iso.arrange({ 
                            filter: function(itemElem) {
                                return itemElem.getAttribute('data-category') === filterValue;
                            }
                        });
                    }
                    setTimeout(() => { iso.layout(); }, 450);
                });
            });

            const galerieItems = document.querySelectorAll('.galerie-item');
            galerieItems.forEach(item => {
                const url = item.getAttribute('data-url');
                if (url && url !== '#') {
                    item.style.cursor = 'pointer';
                    item.onclick = (e) => {
                        e.preventDefault();
                        if (!url.startsWith('http')) {
                            window.history.pushState({ path: url }, '', url);
                            loadPage(url);
                        } else {
                            window.location.href = url;
                        }
                    };
                } else {
                    item.style.cursor = 'default';
                    item.onclick = null;
                }
            });
        }
    }

    // 2. S/W / Farb-Button (Globaler Event-Listener per Delegation)
    if (!window.colorListenerAdded) {
        window.colorListenerAdded = true;
        document.body.addEventListener('click', (e) => {
            const colorBtn = e.target.closest('.color-mode, #toggle-sw');
            if (colorBtn) {
                document.body.classList.toggle('color-on');
                const isColor = document.body.classList.contains('color-on');
                document.querySelectorAll('.color-mode').forEach(btn => {
                    btn.textContent = isColor ? "S/W MODUS" : "MACHS BUNT";
                });
            }
        });
    }

    // 3. Buy me a coffee Modal (Globaler Event-Listener)
    function initBmcModal() {
        const bmcModalOverlay = document.getElementById('bmc-modal-overlay');

        if (bmcModalOverlay && !window.bmcGlobalListenerAdded) {
            window.bmcGlobalListenerAdded = true;

            document.addEventListener('click', (e) => {
                const bmcTrigger = e.target.closest('#open-bmc-modal, .coffee-icon-btn, .header-bmc-btn');
                if (bmcTrigger) {
                    e.preventDefault();
                    bmcModalOverlay.classList.add('active');
                    bmcModalOverlay.setAttribute('aria-hidden', 'false');
                }

                const closeTrigger = e.target.closest('#close-bmc-modal');
                if (closeTrigger) {
                    bmcModalOverlay.classList.remove('active');
                    bmcModalOverlay.setAttribute('aria-hidden', 'true');
                }
            });

            bmcModalOverlay.addEventListener('click', (e) => {
                if (e.target === bmcModalOverlay) {
                    bmcModalOverlay.classList.remove('active');
                    bmcModalOverlay.setAttribute('aria-hidden', 'true');
                }
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && bmcModalOverlay.classList.contains('active')) {
                    bmcModalOverlay.classList.remove('active');
                    bmcModalOverlay.setAttribute('aria-hidden', 'true');
                }
            });
        }
    }

    // 4. Interaktives Skill-Widget rendern
    function renderSkillWidget() {
        const container = document.getElementById('skillBars');
        if (!container) return;

        const skills = [
            { name: 'HTML5 / CSS3 / Brutalism', level: 95 },
            { name: 'JavaScript (Vanilla / SPA)', level: 85 },
            { name: 'Fotografie & Bildkomposition', level: 80 },
            { name: 'Zeichnen & Visuelle Konzepte', level: 75 },
            { name: 'Musik & Sound-Design', level: 70 }
        ];

        container.innerHTML = skills.map(skill => `
            <div class="skill-row">
                <div class="skill-meta">
                    <span>${skill.name}</span>
                    <span>${skill.level}%</span>
                </div>
                <div class="skill-track">
                    <div class="skill-fill" data-level="${skill.level}"></div>
                </div>
            </div>
        `).join('');

        setTimeout(() => {
            document.querySelectorAll('.skill-fill').forEach(bar => {
                bar.style.width = bar.getAttribute('data-level') + '%';
            });
        }, 100);
    }

    // 5. GLightbox Bibliothek-Initialisierung
    function initLightbox() {
        if (typeof GLightbox !== 'undefined') {
            if (lightboxInstance) {
                try {
                    lightboxInstance.destroy();
                } catch (e) {
                    console.warn('Lightbox destroy error:', e);
                }
            }
            lightboxInstance = GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                loop: true,
                zoomable: true,
                descPosition: 'bottom'
            });
        }
    }

    // 6. Alle Module gesammelt ausführen
    function initAllModules() {
        initGalerie();
        initBmcModal();
        renderSkillWidget();
        initLightbox();
    }

    initAllModules();


    // Cache-Fix beim Zurückgehen (bfcache)
    window.addEventListener('pageshow', (event) => {
        if (event.persisted) {
            initAllModules();
        }
    });
});