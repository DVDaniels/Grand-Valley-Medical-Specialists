<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>
<header class="head">
    <div class="logo">
        <a href="/index.php"><img src="<?php echo get_theme_file_uri('/images/logo.png
') ?>" alt="Grand Valley Medical Logo"></a>
    </div>

    <div class="contact-info">
        <p><i class="fas fa-phone-square"></i> Phone: +1 616-459-3158</p>
        <a href="https://www.facebook.com/yourgvms/" target="_blank"><p><i class="fab fa-facebook-square"></i> Visit us on Facebook</p></a>
        
    </div>
</header>

<nav>
    <ul class="navbar">
        <li>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation'
                ));
            ?>
        </li>
    </ul>
</nav>
