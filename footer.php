<footer class="site-footer">
            <span>&copy; 2026 Daniel Melichar</span>
            <span>Brutalist Single-Page Template</span>
        </footer>

    </div>

    <!-- JAVASCRIPT: STABILE FILTER-, ANIMATIONS- & HOEHEN-FIXIERUNGS-LOGIK -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const sortSelect = document.getElementById('sort-select');
            const blogList = document.getElementById('blog-list');

            function updateBlogDisplay() {
                const activeFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');
                const sortValue = sortSelect.value;
                const items = Array.from(blogList.querySelectorAll('.blog-item'));

            

                // 1. Alle aktuell sichtbaren Elemente ausblenden
                items.forEach(item => {
                    item.classList.add('is-hidden');
                });

                // 2. Nach der Ausblend-Animation (300ms) filtern & sortieren
                setTimeout(() => {
                    // Sortierung
                    items.sort((a, b) => {
                        const dateA = new Date(a.getAttribute('data-date'));
                        const dateB = new Date(b.getAttribute('data-date'));
                        const titleA = a.getAttribute('data-title').toLowerCase();
                        const titleB = b.getAttribute('data-title').toLowerCase();

                        if (sortValue === 'date-desc') return dateB - dateA;
                        if (sortValue === 'date-asc') return dateA - dateB;
                        if (sortValue === 'title-asc') return titleA.localeCompare(titleB);
                        if (sortValue === 'title-desc') return titleB.localeCompare(titleA);
                        return 0;
                    });

                    // DOM-Reihenfolge anpassen & Sichtbarkeit festlegen
                    items.forEach(item => {
                        blogList.appendChild(item);

                        const category = item.getAttribute('data-category');
                        if (activeFilter === 'all' || category === activeFilter) {
                            item.classList.remove('hide');
                        } else {
                            item.classList.add('hide');
                        }
                    });

                    // 3. Sichtbare Elemente wieder einfliegen lassen
                    requestAnimationFrame(() => {
                        items.forEach(item => {
                            if (!item.classList.contains('hide')) {
                                item.classList.remove('is-hidden');
                            }
                        });
                    });

                    // 4. Feste Mindesthöhe nach Abschluss der Animation wieder aufheben
                    setTimeout(() => {
                        if (blogList) {
                            blogList.style.minHeight = '';
                        }
                    }, 300);

                }, 300);
            }

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    updateBlogDisplay();
                });
            });

            if (sortSelect) {
                sortSelect.addEventListener('change', updateBlogDisplay);
            }

            // SCROLLSPY
            const sections = document.querySelectorAll('.content-section');
            const navLi = document.querySelectorAll('.portfolio-nav ul li');

            const observerOptions = {
                root: null,
                rootMargin: '-20% 0px -60% 0px',
                threshold: 0
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const currentId = entry.target.getAttribute('id');
                        
                        navLi.forEach(li => {
                            li.classList.remove('active');
                            const link = li.querySelector('a');
                            if (link && link.getAttribute('href') === `#${currentId}`) {
                                li.classList.add('active');
                            }
                        });
                    }
                });
            }, observerOptions);

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
	<script src="script.js"></script>

</body>
</html>