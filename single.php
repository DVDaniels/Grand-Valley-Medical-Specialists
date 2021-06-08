<?php
    
    get_header();

    while(have_posts()) {
        the_post(); ?>
    <div class="container-page">

        <h2><?php the_title(); ?></h2>

        <div class="metabox">
            <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
        </div>

        <!-- <div class="page-links">
            <h2 class="page-links__title"><a href="#">About Us</a></h2>
            <ul class="min-list">
                <li class="current_page_item"><a href="#">Our History</a></li>
                <li><a href="#">Our Goals</a></li>
            </ul>
        </div> -->

        <div class="container-blog">
            <div class="one-third">
            <?php the_post_thumbnail('thumbLandscape'); ?>
            </div>

            <div class="two-thirds">
                <?php the_content(); ?>
            </div>
        </div>

    </div>
    
    <?php }
    get_footer();
?>