<!-- Archive Page -->
<?php 
get_header(); 
?>

<div class="container-page">
<?php 
    while(have_posts()){
        the_post(); ?>

    <div class="post-item">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="metabox">
            <p>Back to <a href="/blog">Latest News</a> | Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
        </div>


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

    <hr id="page">
 <?php }
    echo paginate_links();
?>
</div>
<?php
get_footer();
?>