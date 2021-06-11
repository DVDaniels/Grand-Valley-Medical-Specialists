<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Valley Medical Specialists</title>
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <?php wp_head(); ?>
</head>
<body>
<header class="head">
    <div class="logo">
        <a href="/index.php"><img src="<?php echo get_theme_file_uri('/images/logo.png
') ?>" alt="Grand Valley Medical Logo"></a>
    </div>

    <div class="contact-info">
        <p class="phone"><i class="fas fa-phone-square"></i> Phone: +1 616-459-3158</p>
        <a href="https://www.facebook.com/yourgvms/" target="_blank"><p><i class="fab fa-facebook-square"></i> Visit us on Facebook</p></a>
    </div>
</header>

<nav>
    <ul class="navbar">
        <li>
            <a href="https://gvmsonline.followmyhealth.com/Login/Home/Index?authproviders=0&returnArea=PatientAccess#!/default" target="_blank"class="link"><i class="fas fa-sign-in-alt"></i> Patient Portal</a>
        </li>
        <li>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation'
                ));
            ?>
        </li>
    </ul>
</nav>
