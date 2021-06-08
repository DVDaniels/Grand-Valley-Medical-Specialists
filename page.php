<?php
    get_header();

    while(have_posts()) {
        the_post(); ?>
    
    <div class="container-page">

        <h1><?php the_title(); ?></h1>

        <div class="page-links">
      <h2 class="page-links__title"><a href="#">About Us</a></h2>
      <ul class="min-list">
        <li class="current_page_item"><a href="#">Our History</a></li>
        <li><a href="#">Our Goals</a></li>
      </ul>
    </div>


        <?php the_content(); ?>

        
    </div>

    
   
    <?php }


    get_footer();
?>