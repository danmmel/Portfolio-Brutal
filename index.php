<?php 
/**
 * ==========================================================================
 * INDEX.PHP - Hauptseite des Portfolios
 * Daniel Melichar — Brutalist Portfolio
 * ==========================================================================
 */
include 'header.php'; ?>

<!-- Hauptlayout-Raster (Sidebar links, Inhalt rechts) -->

<div class="main-layout">

    <?php include 'sidebar.php'; ?>

    <main class="content-area">

        <!-- ==========================================================================
           SEKTION 1: ÜBER MICH & SKILLS
           ========================================================================== -->

        <section id="ueber-mich" class="content-section">
            <h2 class="section-title">
                <span>Über mich</span>
                <span class="text-accent">01 //</span>
            </h2>

            <div class="about-content-box">
                <h3 class="sub-title">Daniel Melichar — Minimalist & Web-Entwickler</h3>
                <p class="box-text">
                    Willkommen auf meinem Portfolio. Ich entwickle leichtgewichtige, performante Webanwendungen mit Fokus auf klare Strukturen, barrierefreie Schnittstellen und funktionalen Brutalismus. Keine überflüssigen Frameworks – nur sauberer, durchdachter Code.
                </p>

                <!-- Skill-Leisten Widget -->
                <div class="skill-widget">
                    <div class="skill-row">
                        <div class="skill-meta">
                            <span>HTML5 / CSS3 / Brutalism</span>
                            <span>95%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="width: 95%;"></div>
                        </div>
                    </div>

                    <div class="skill-row">
                        <div class="skill-meta">
                            <span>JavaScript (Vanilla / PHP Native)</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="width: 85%;"></div>
                        </div>
                    </div>

                    <div class="skill-row">
                        <div class="skill-meta">
                            <span>Fotografie & Komposition</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-fill" style="width: 80%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================================================
           SEKTION 2: REFERENZEN / PROJEKTE
           ========================================================================== -->

        <section id="referenzen" class="content-section">
            <h2 class="section-title">
                <span>Referenzen</span>
                <span class="text-accent">02 //</span>
            </h2>

            <div class="references-grid">
                <!-- Projekt-Kachel 1 -->
                <div class="reference-card">
                    <div class="card-img-wrapper">
                        <img src="img/ref1.jpg" alt="Projekt 1" loading="lazy">
                    </div>
                    <div class="card-title">
                        <span>Minimal-Web</span>
                        <i class="fa-solid fa-bookmark text-accent"></i>
                    </div>
                    <p class="card-desc">Entwicklung eines schlanken System-Katalogs ohne schwere Frameworks.</p>
                    <div class="card-meta">
                        <span>2026</span>
                        <span>Webdesign</span>
                    </div>
                </div>

                <!-- Projekt-Kachel 2 -->
                <div class="reference-card">
                    <div class="card-img-wrapper">
                        <img src="https://placehold.co/600x450/222222/ffffff?text=Fotografie" alt="Projekt 2" loading="lazy">
                    </div>
                    <div class="card-title">
                        <span>Monochrome Serie</span>
                        <i class="fa-solid fa-bookmark text-accent"></i>
                    </div>
                    <p class="card-desc">S/W-Architekturfotografie aus städtischen Räumen Mitteldeutschlands.</p>
                    <div class="card-meta">
                        <span>2026</span>
                        <span>Fotografie</span>
                    </div>
                </div>

                <!-- Projekt-Kachel 3 -->
                <div class="reference-card">
                    <div class="card-img-wrapper">
                        <img src="https://placehold.co/600x450/333333/ffffff?text=Sound+Design" alt="Projekt 3" loading="lazy">
                    </div>
                    <div class="card-title">
                        <span>Modular Synth</span>
                        <i class="fa-solid fa-bookmark text-accent"></i>
                    </div>
                    <p class="card-desc">Generative Audio-Konzepte und manuelle Synthesizer-Patchings.</p>
                    <div class="card-meta">
                        <span>2025</span>
                        <span>Audio</span>
                    </div>
                </div>
            </div>
        </section>



<!-- ==========================================================================
           SEKTION 4: TEMPLATES (DEMO & DOWNLOAD)
           ========================================================================== -->
        <section id="templates" class="content-section">
            <h2 class="section-title">
                <span>Templates</span>
                <span class="text-accent">04 //</span>
            </h2>

            <div class="blog-list">
                
                <!-- Template-Eintrag 1 -->
                <div class="blog-item">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/111111/ffffff?text=Brutal" alt="Template Preview 1" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">V 1.0 | HTML / CSS</span>
                        <h3 class="blog-title">Brutalist Starter Kit</h3>
                        <p class="blog-snippet">Ein minimalistisches Einsteiger-Template mit fixierter Sidebar, Scrollspy und sauberem Grid-Layout.</p>
                        <!-- Ohne 'filter-btn'-Klasse, damit das Skript nicht ausgelöst wird -->
                        <div class="blog-footer-row" style="gap: 8px; justify-content: flex-start;">
                            <a href="#" style="text-decoration: none; padding: 4px 10px; font-size: 0.68rem; font-weight: 700; text-transform: uppercase; border: 1px solid #c5c5c5; background: #ffffff; color: #000000; border-radius: 4px;" onclick="event.preventDefault();">Demo</a>
                            <a href="#" style="text-decoration: none; padding: 4px 10px; font-size: 0.68rem; font-weight: 700; text-transform: uppercase; border: 1px solid #000000; background: #000000; color: #ffffff; border-radius: 4px;" onclick="event.preventDefault();">Download</a>
                        </div>
                    </div>
                </div>

                <!-- Template-Eintrag 2 -->
                <div class="blog-item">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/222222/ffffff?text=SPA" alt="Template Preview 2" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">V 1.2 | Vanilla JS</span>
                        <h3 class="blog-title">Single-Page Portfolio</h3>
                        <p class="blog-snippet">Erweiterte Version inklusive integriertem Kategorie-Filter und dynamischer Sortierfunktion für Beiträge.</p>
                        <!-- Ohne 'filter-btn'-Klasse -->
                        <div class="blog-footer-row" style="gap: 8px; justify-content: flex-start;">
                            <a href="#" style="text-decoration: none; padding: 4px 10px; font-size: 0.68rem; font-weight: 700; text-transform: uppercase; border: 1px solid #c5c5c5; background: #ffffff; color: #000000; border-radius: 4px;" onclick="event.preventDefault();">Demo</a>
                            <a href="#" style="text-decoration: none; padding: 4px 10px; font-size: 0.68rem; font-weight: 700; text-transform: uppercase; border: 1px solid #000000; background: #000000; color: #ffffff; border-radius: 4px;" onclick="event.preventDefault();">Download</a>
                        </div>
                    </div>
                </div>

                  <!-- Template-Eintrag 1 -->
                <div class="blog-item">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/111111/ffffff?text=Brutal" alt="Template Preview 1" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">V 1.0 | HTML / CSS</span>
                        <h3 class="blog-title">Brutalist Starter Kit</h3>
                        <p class="blog-snippet">Ein minimalistisches Einsteiger-Template mit fixierter Sidebar, Scrollspy und sauberem Grid-Layout.</p>
                        <!-- Ohne 'filter-btn'-Klasse, damit das Skript nicht ausgelöst wird -->
                        <div class="blog-footer-row" style="gap: 8px; justify-content: flex-start;">
                            <a href="#" style="text-decoration: none; padding: 4px 10px; font-size: 0.68rem; font-weight: 700; text-transform: uppercase; border: 1px solid #c5c5c5; background: #ffffff; color: #000000; border-radius: 4px;" onclick="event.preventDefault();">Demo</a>
                            <a href="#" style="text-decoration: none; padding: 4px 10px; font-size: 0.68rem; font-weight: 700; text-transform: uppercase; border: 1px solid #000000; background: #000000; color: #ffffff; border-radius: 4px;" onclick="event.preventDefault();">Download</a>
                        </div>
                    </div>
                </div>

                <!-- Template-Eintrag 2 -->
                <div class="blog-item">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/222222/ffffff?text=SPA" alt="Template Preview 2" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">V 1.2 | Vanilla JS</span>
                        <h3 class="blog-title">Single-Page Portfolio</h3>
                        <p class="blog-snippet">Erweiterte Version inklusive integriertem Kategorie-Filter und dynamischer Sortierfunktion für Beiträge.</p>
                        <!-- Ohne 'filter-btn'-Klasse -->
                        <div class="blog-footer-row" style="gap: 8px; justify-content: flex-start;">
                            <a href="#" style="text-decoration: none; padding: 4px 10px; font-size: 0.68rem; font-weight: 700; text-transform: uppercase; border: 1px solid #c5c5c5; background: #ffffff; color: #000000; border-radius: 4px;" onclick="event.preventDefault();">Demo</a>
                            <a href="#" style="text-decoration: none; padding: 4px 10px; font-size: 0.68rem; font-weight: 700; text-transform: uppercase; border: 1px solid #000000; background: #000000; color: #ffffff; border-radius: 4px;" onclick="event.preventDefault();">Download</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        

                <!-- ==========================================================================
           SEKTION 3: BLOG (FILTERBAR & SORTIERBAR)
           ========================================================================== -->

        <section id="blog" class="content-section">
            <h2 class="section-title">
                <span>Blog</span>
                <span class="text-accent">03 //</span>
            </h2>

            <!-- Steuerungsleiste für Filter und Sortierung -->
            <div class="blog-controls">
                <ul class="filter-menu">
                    <li class="filter-btn active" data-filter="all">Alle</li>
                    <li class="filter-btn" data-filter="web">Webdesign</li>
                    <li class="filter-btn" data-filter="fotografie">Fotografie</li>
                    <li class="filter-btn" data-filter="musik">Musik</li>
                </ul>

                <select id="sort-select" class="sort-select">
                    <option value="date-desc">Neueste zuerst</option>
                    <option value="date-asc">Älteste zuerst</option>
                    <option value="title-asc">Titel (A–Z)</option>
                    <option value="title-desc">Titel (Z–A)</option>
                </select>
            </div>

            <!-- Blog-Beiträge Grid -->
            <div class="blog-list" id="blog-list">
                
                <!-- Blog-Eintrag 1 -->
                <a href="#" class="blog-item" data-category="web" data-date="2026-10-15" data-title="Warum der Verzicht auf schwere JS-Frameworks befreit" onclick="event.preventDefault();">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/111111/ffffff?text=Code" alt="Blog Preview 1" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">15. OKTOBER 2026</span>
                        <h3 class="blog-title">Warum der Verzicht auf schwere JS-Frameworks befreit</h3>
                        <p class="blog-snippet">Ein Plädoyer für einfaches HTML, natives CSS und serverseitige PHP-Includes zur Vermeidung von SPA-Overhead.</p>
                        <div class="blog-footer-row">
                            <span style="font-size: 0.6rem; font-weight:700; color:#888;">WEBDESIGN</span>
                            <i class="fa-solid fa-arrow-right blog-arrow"></i>
                        </div>
                    </div>
                </a>

                <!-- Blog-Eintrag 2 -->
                <a href="#" class="blog-item" data-category="fotografie" data-date="2026-10-02" data-title="S/W-Fotografie: Emotionen durch Kontrast" onclick="event.preventDefault();">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/222222/ffffff?text=Foto" alt="Blog Preview 2" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">02. OKTOBER 2026</span>
                        <h3 class="blog-title">S/W-Fotografie: Emotionen durch Kontrast</h3>
                        <p class="blog-snippet">Wie Licht, Schatten und Geometrie in der visuellen Gestaltung zusammenwirken.</p>
                        <div class="blog-footer-row">
                            <span style="font-size: 0.6rem; font-weight:700; color:#888;">FOTOGRAFIE</span>
                            <i class="fa-solid fa-arrow-right blog-arrow"></i>
                        </div>
                    </div>
                </a>

                <!-- Blog-Eintrag 3 -->
                <a href="#" class="blog-item" data-category="web" data-date="2026-09-28" data-title="Kreative Prozesse & Brutalismus im Web" onclick="event.preventDefault();">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/333333/ffffff?text=Kreativ" alt="Blog Preview 3" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">28. SEPTEMBER 2026</span>
                        <h3 class="blog-title">Kreative Prozesse & Brutalismus im Web</h3>
                        <p class="blog-snippet">Klare Kanten, ehrlicher Content und responsive Schriftgrößen im modernen Webdesign.</p>
                        <div class="blog-footer-row">
                            <span style="font-size: 0.6rem; font-weight:700; color:#888;">WEBDESIGN</span>
                            <i class="fa-solid fa-arrow-right blog-arrow"></i>
                        </div>
                    </div>
                </a>

                <!-- Blog-Eintrag 4 -->
                <a href="#" class="blog-item" data-category="musik" data-date="2026-09-12" data-title="Modulare Synthesizer & Sound Design" onclick="event.preventDefault();">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/444444/ffffff?text=Audio" alt="Blog Preview 4" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">12. SEPTEMBER 2026</span>
                        <h3 class="blog-title">Modulare Synthesizer & Sound Design</h3>
                        <p class="blog-snippet">Von der ersten Idee im Kopf bis zum fertigen Track. Ein Einstieg in die analoge Klangerzeugung.</p>
                        <div class="blog-footer-row">
                            <span style="font-size: 0.6rem; font-weight:700; color:#888;">MUSIK</span>
                            <i class="fa-solid fa-arrow-right blog-arrow"></i>
                        </div>
                    </div>
                </a>

                   <!-- Blog-Eintrag 4 -->
                <a href="#" class="blog-item" data-category="musik" data-date="2026-09-12" data-title="Modulare Synthesizer & Sound Design" onclick="event.preventDefault();">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/444444/ffffff?text=Audio" alt="Blog Preview 4" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">12. SEPTEMBER 2026</span>
                        <h3 class="blog-title">Modulare Synthesizer & Sound Design</h3>
                        <p class="blog-snippet">Von der ersten Idee im Kopf bis zum fertigen Track. Ein Einstieg in die analoge Klangerzeugung.</p>
                        <div class="blog-footer-row">
                            <span style="font-size: 0.6rem; font-weight:700; color:#888;">MUSIK</span>
                            <i class="fa-solid fa-arrow-right blog-arrow"></i>
                        </div>
                    </div>
                </a>
                   <!-- Blog-Eintrag 4 -->
                <a href="#" class="blog-item" data-category="musik" data-date="2026-09-12" data-title="Modulare Synthesizer & Sound Design" onclick="event.preventDefault();">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/444444/ffffff?text=Audio" alt="Blog Preview 4" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">12. SEPTEMBER 2026</span>
                        <h3 class="blog-title">Modulare Synthesizer & Sound Design</h3>
                        <p class="blog-snippet">Von der ersten Idee im Kopf bis zum fertigen Track. Ein Einstieg in die analoge Klangerzeugung.</p>
                        <div class="blog-footer-row">
                            <span style="font-size: 0.6rem; font-weight:700; color:#888;">MUSIK</span>
                            <i class="fa-solid fa-arrow-right blog-arrow"></i>
                        </div>
                    </div>
                </a>
                   <!-- Blog-Eintrag 4 -->
                <a href="#" class="blog-item" data-category="musik" data-date="2026-09-12" data-title="Modulare Synthesizer & Sound Design" onclick="event.preventDefault();">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/444444/ffffff?text=Audio" alt="Blog Preview 4" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">12. SEPTEMBER 2026</span>
                        <h3 class="blog-title">Modulare Synthesizer & Sound Design</h3>
                        <p class="blog-snippet">Von der ersten Idee im Kopf bis zum fertigen Track. Ein Einstieg in die analoge Klangerzeugung.</p>
                        <div class="blog-footer-row">
                            <span style="font-size: 0.6rem; font-weight:700; color:#888;">MUSIK</span>
                            <i class="fa-solid fa-arrow-right blog-arrow"></i>
                        </div>
                    </div>
                </a>
                   <!-- Blog-Eintrag 4 -->
                <a href="#" class="blog-item" data-category="musik" data-date="2026-09-12" data-title="Modulare Synthesizer & Sound Design" onclick="event.preventDefault();">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/444444/ffffff?text=Audio" alt="Blog Preview 4" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">12. SEPTEMBER 2026</span>
                        <h3 class="blog-title">Modulare Synthesizer & Sound Design</h3>
                        <p class="blog-snippet">Von der ersten Idee im Kopf bis zum fertigen Track. Ein Einstieg in die analoge Klangerzeugung.</p>
                        <div class="blog-footer-row">
                            <span style="font-size: 0.6rem; font-weight:700; color:#888;">MUSIK</span>
                            <i class="fa-solid fa-arrow-right blog-arrow"></i>
                        </div>
                    </div>
                </a>
                   <!-- Blog-Eintrag 4 -->
                <a href="#" class="blog-item" data-category="musik" data-date="2026-09-12" data-title="Modulare Synthesizer & Sound Design" onclick="event.preventDefault();">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/444444/ffffff?text=Audio" alt="Blog Preview 4" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">12. SEPTEMBER 2026</span>
                        <h3 class="blog-title">Modulare Synthesizer & Sound Design</h3>
                        <p class="blog-snippet">Von der ersten Idee im Kopf bis zum fertigen Track. Ein Einstieg in die analoge Klangerzeugung.</p>
                        <div class="blog-footer-row">
                            <span style="font-size: 0.6rem; font-weight:700; color:#888;">MUSIK</span>
                            <i class="fa-solid fa-arrow-right blog-arrow"></i>
                        </div>
                    </div>
                </a>
                   <!-- Blog-Eintrag 4 -->
                <a href="#" class="blog-item" data-category="musik" data-date="2026-09-12" data-title="Modulare Synthesizer & Sound Design" onclick="event.preventDefault();">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/444444/ffffff?text=Audio" alt="Blog Preview 4" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">12. SEPTEMBER 2026</span>
                        <h3 class="blog-title">Modulare Synthesizer & Sound Design</h3>
                        <p class="blog-snippet">Von der ersten Idee im Kopf bis zum fertigen Track. Ein Einstieg in die analoge Klangerzeugung.</p>
                        <div class="blog-footer-row">
                            <span style="font-size: 0.6rem; font-weight:700; color:#888;">MUSIK</span>
                            <i class="fa-solid fa-arrow-right blog-arrow"></i>
                        </div>
                    </div>
                </a>
                   <!-- Blog-Eintrag 4 -->
                <a href="#" class="blog-item" data-category="musik" data-date="2026-09-12" data-title="Modulare Synthesizer & Sound Design" onclick="event.preventDefault();">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/444444/ffffff?text=Audio" alt="Blog Preview 4" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">12. SEPTEMBER 2026</span>
                        <h3 class="blog-title">Modulare Synthesizer & Sound Design</h3>
                        <p class="blog-snippet">Von der ersten Idee im Kopf bis zum fertigen Track. Ein Einstieg in die analoge Klangerzeugung.</p>
                        <div class="blog-footer-row">
                            <span style="font-size: 0.6rem; font-weight:700; color:#888;">MUSIK</span>
                            <i class="fa-solid fa-arrow-right blog-arrow"></i>
                        </div>
                    </div>
                </a>
                   <!-- Blog-Eintrag 4 -->
                <a href="#" class="blog-item" data-category="musik" data-date="2026-09-12" data-title="Modulare Synthesizer & Sound Design" onclick="event.preventDefault();">
                    <div class="blog-thumbnail-wrapper">
                        <img src="https://placehold.co/200x200/444444/ffffff?text=Audio" alt="Blog Preview 4" loading="lazy">
                    </div>
                    <div class="blog-item-content">
                        <span class="blog-date">12. SEPTEMBER 2026</span>
                        <h3 class="blog-title">Modulare Synthesizer & Sound Design</h3>
                        <p class="blog-snippet">Von der ersten Idee im Kopf bis zum fertigen Track. Ein Einstieg in die analoge Klangerzeugung.</p>
                        <div class="blog-footer-row">
                            <span style="font-size: 0.6rem; font-weight:700; color:#888;">MUSIK</span>
                            <i class="fa-solid fa-arrow-right blog-arrow"></i>
                        </div>
                    </div>
                </a>

            </div>
        </section>

        
    </main>
</div>
<!-- BUY ME A COFFEE MODAL -->
<div id="bmc-modal-overlay" class="bmc-modal-overlay" aria-hidden="true">
    <div class="bmc-modal-card">
        <button id="close-bmc-modal" class="bmc-modal-close" aria-label="Schließen">&times;</button>
        <div class="bmc-modal-header">
            <i class="fa-solid fa-mug-hot bmc-modal-icon"></i>
            <h3>Kaffee spendieren</h3>
        </div>
        <p class="bmc-modal-text">
            Wenn dir meine Arbeit, Templates oder Open-Source-Projekte gefallen, kannst du mir hier unkompliziert einen Kaffee ausgeben. Danke für deinen Support!
        </p>
        <div class="bmc-modal-actions">
            <a href="https://buymeacoffee.com" target="_blank" rel="noopener" class="bmc-confirm-btn">
                <i class="fa-solid fa-heart"></i> Auf BuyMeACoffee unterstützen
            </a>
        </div>
    </div>
</div>
<?php 
/**
 * Einbindung des Footer-Moduls 
 * (Schließt den HTML-Body, Container und bettet Scripts ein)
 */
include 'footer.php'; 
?>