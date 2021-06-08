<footer>
    <div class="footer">
        <img src="<?php echo get_theme_file_uri('/images/logo.png
') ?>" alt="logo" id="footer-logo">
        <p>&copy2021 Grand Valley Medical Specialists, PLC. All Rights Reserved</p>
        <ul id="footer-menu">
            <li><?php
                wp_nav_menu(array(
                    'theme_location' => 'footerMenuLocation'
                ));
            ?></li>
        </ul>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>