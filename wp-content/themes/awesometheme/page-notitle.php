<?php
/*
 Template Name: Page No Title
*/

?>

<?php get_header(); ?>

<?php

      if(have_posts()):
        while(have_posts()):  the_post(); ?>
        <h3><?php the_content(); ?></h3>


  <?php endwhile;
endif; ?>

<?php get_footer(); ?>
