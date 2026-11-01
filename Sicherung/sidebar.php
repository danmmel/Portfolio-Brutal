<!-- Linke Spalte: Sidebar mit Navigation -->
					<aside class="navigation-sidebar">
			    <div class="profile-box">
			        <img src="./img/me/me.jpg" alt="Dan Me" class="profile-pic">
			    </div>

			    <!-- Zitat-Box -->
			    <div class="sidebar-quote-box">
			        <p class="brutalist-quote">
			            REVOLUTION IST GROSSARTIG, ALLES ANDERE IST QUARK! 
			            <small>- ROSA LUXEMBURG</small>
			        </p>
			    </div>

			    <!-- Navigation -->
			   <nav class="portfolio-nav">
        <ul>
            <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
                <a href="index.php"><img src="./img/icons/web-icon.png" alt="Über mich" class="nav-icon-img">Über mich</a>
            </li>
            <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'projekte.php') ? 'active' : ''; ?>">
                <a href="projekte.php"><img src="./img/icons/web-icon.png" alt="Über mich" class="nav-icon-img">Projekte</a>
            </li>
            <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'blog.php') ? 'active' : ''; ?>">
                <a href="blog.php"><img src="./img/icons/web-icon.png" alt="Über mich" class="nav-icon-img">Blog</a>
            </li>
            <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'templates.php') ? 'active' : ''; ?>">
                <a href="templates.php"><img src="./img/icons/web-icon.png" alt="Über mich" class="nav-icon-img">Templates</a>
            </li>
            <li class="<?php echo (basename($_SERVER['PHP_SELF']) == 'kontakt.php') ? 'active' : ''; ?>">
                <a href="kontakt.php"><img src="./img/icons/web-icon.png" alt="Über mich" class="nav-icon-img">Kontakt</a>
            </li>
        </ul>
    </nav>
    <div class="social-icons-wrapper">
    <a href="https://facebook.com" target="_blank" class="social-icon-btn" title="Facebook">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://twitter.com" target="_blank" class="social-icon-btn" title="Twitter">
        <i class="fab fa-twitter"></i>
    </a>
    <a href="https://instagram.com" target="_blank" class="social-icon-btn" title="Instagram">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="https://github.com" target="_blank" class="social-icon-btn" title="GitHub">
        <i class="fab fa-github"></i>
    </a>
</div>
			</aside>