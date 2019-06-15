<?php get_header(); ?>


<section id="archivePostSection" class="px-3 py-5 bg-light">
    <div class="col-xs-11 col-sm-8 col-md-12   py-3">

        <?php
        $post = get_queried_object();
        $postType = get_post_type_object(get_post_type($post)); ?>
    <h3 class="my-2 text-secondary text-left"><?php echo ($postType) ? esc_html($postType->labels->singular_name).'s' : '' ?> </h3>


    </div>

      <div class="archive-post-wrapper mt-5 d-flex justify-content-center align-items-top">

    <?php

      if(have_posts()) :
        while (have_posts()):
          the_post();
          ?>
          <article class="archive-post-entry col-xs-12 col-sm-10 col-md-4 ml-4 bg-white p-3">

            <?php
            if ( has_post_thumbnail() ): ?>
                <p class="border"><?php the_post_thumbnail('project', array( 'class' => 'single-thumbnail' )); ?></p>
            <?php
           endif;
            ?>
            <h3 class="archive-title text-dark-blue"><?php the_title(); ?></h3>
            <p class="text-dark-blue">Website developer since: <span class="text-secondary"><?php the_date() ?></span></p>
            <p><?php the_content(); ?></p>

          </article>
        <?php endwhile;
        wp_reset_postdata();
      endif; ?>

  </div>
</section>

<?php get_footer(); ?>
