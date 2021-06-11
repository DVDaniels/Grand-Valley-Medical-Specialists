<?php get_header(); ?>

<body>
    <div class="main-hero">
        <img src="<?php echo get_theme_file_uri('/images/Group_2-removebg.png') ?>" alt="Staff Picture">
        <div class="welcome">Welcome to Grand Valley Medical Specialists!</div>
    </div>

    <div class="container">
        <a name="about"></a>
        <div class="news">

        <div class="newstext b1">
                <h1 class="headline"><i class="fas fa-clinic-medical"></i> About Us</h1>
                <div id="newsImg">
                    <img src="<?php echo get_theme_file_uri('/images/bearSick.jpg') ?>" alt="latest news">
                </div>
                <p class="mainText">At Grand Valley Medical Specialists our goal is to provide our patients with the best experience possible when
                    interacting with our practice. That’s why we’re pleased to offer secure, interactive patient self-service
                    features
                    that
                    let you communicate with us from the convenience of your home or office.
                    <br>
                    <br>
                    <a href="/about">&rarr; Read More...</a>
                </p>
            </div>
            <br>
            <hr id="location-break">

            <div class="newstext">
                <h1 class="headline"><i class="far fa-newspaper"></i> Latest News</h1>

                <?php
                    $homepageNews = new WP_Query(array(
                        'posts_per_page' => 2,
                        'post_type' => 'post'
                    ));
                    while($homepageNews->have_posts()) {
                        $homepageNews->the_post(); ?>
                        <div class="post-item">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <div class="blog-index-grid">
                <div class="thumb">
                    <?php the_post_thumbnail('thumbLandscape'); ?>
                </div>

                <div class="excerpt">
                    <?php the_excerpt(); ?>

                    <div class="readMore">
                        <p><a href="<?php the_permalink(); ?>">Read more...</a></p>
                    </div>
                </div>            
            </div>
    </div>
    <?php } ?>
                
            </div>            
        </div>

            <div class="header-wrapper">
                <a name="locations"></a>
                <h2 id="center"><i class="fas fa-compass"></i> Locations</h2>
                <hr id="location-break">
            </div>

        <div class="squares-wrapper">
            
            <div class="squares">
                <div class="square">
                    <div class="img-wrapper">
                        <img src="<?php echo get_theme_file_uri('/images/national.jpg') ?>" alt="Mayo Clinic">
                    </div>
        
                    <div class="square-text-wrapper">
                        <h1>East Paris — SE Grand Rapids</h1>
                        <p>The East Paris office is at 1000 East Paris Ave., SE, Suite 100, Grand Rapids, MI 49546.</p>
                        <br>
                        <p><strong>East Paris is open 7:30am-5:30pm. Saturday labs are closed.</strong></p>
                    </div>
                </div>
        
        
                <div class="square">
                    <div class="square-text-wrapper">
                        <h1>Health Park — Wyoming.</h1>
                        <p>The Health Park office is located in the Health Park Building at 2093 Health Drive SW, Suite 200, in Wyoming. This
                        office is east of Byron Center Avenue off Gezon Parkway, in the Metro Health Village.</p>
                        <br>
                        <p><strong>Health Park office is open 8am-5pm.</strong></p>
                    </div>
        
                    <div class="img-wrapper l2">
                        <img src="<?php echo get_theme_file_uri('/images/solen.jpg') ?>" alt="Hospital">
                    </div>
                </div>
            </div>
        </div>
    
</body>


<?php get_footer(); ?>