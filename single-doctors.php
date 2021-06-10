<!-- Single Doctor Template -->

<?php
    
    get_header();

    while(have_posts()) {
        the_post(); ?>
    <div class="container-page">
        <h2><?php the_title(); ?></h2>

        <div class="metabox">
            <p>Back to <a href="/doctors">Doctors</a> | Speciality: <?php echo get_the_category_list(', '); ?></p>
        </div>

        <?php the_content(); ?>

    </div>
    
    <?php }
    get_footer();
?>