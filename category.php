<?php
get_header(); ?>
<main class="category-page">
    <h1 class="category-title"><?php single_cat_title(); ?></h1>
<div class="container">
<?php if(have_posts()) :
    while(have_posts()) : the_post();?>
    <div class="post elementor-post__card">
        <?php the_post_thumbnail('medium') ?> 
        <a href="<?php the_permalink(); ?>"><h2 class="blog-title"><?php the_title(); ?></h2></a>
        <p><?php the_excerpt() ?></p>
        </div>
   <?php endwhile;
endif;
?>
</div>
</main>
<?php get_footer(); ?>