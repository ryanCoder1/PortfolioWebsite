<?php get_header(); ?>

<?php

      if(have_posts()):
        while(have_posts()):  the_post(); ?>

          <h3><?php the_title(); ?></h3>
          <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a') ?>, in <?php the_category(); ?></small>

          <h3><?php the_content(); ?></h3>

  <?php endwhile;
endif; ?>

<?php get_footer(); ?>
