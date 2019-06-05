<?php get_header(); ?>


<!-- Blog section single post page -->
<section id="singleBlogSection" class="blogs-image px-3 py-5 bg-light" style="background-image: url('<?php echo get_background_image(); ?>')">
    <div id="singleBlogHeader" class="col-xs-12 col-md-6 mx-auto" >
        <h3  class="my-2 text-light font-weight-bold text-center">Blog Post </h3>
    </div>
    <!-- Blog post wrapper -->
      <div class="single-blog-wrapper mt-5 mx-auto d-flex justify-content-center align-items-top flex-wrap">

          <?php
            if(have_posts()) :
              while (have_posts()):
                the_post();
                ?>
                <!-- Blog post entry -->
                <article class="single-blog-entry col-xs-10 col-sm-10 col-md-8 mt-4 p-3 border border-secondary border-radius-7 bg-white-trans-9 text-dark-blue">
                  <div class="bg-light p-2 border-radius-7">
                    <h3 class="single-blog-title text-dark-blue font-weight-bold my-3 text-center"><?php the_title(); ?></h3>
                      <hr class="bg-light-grey w-75 mx-auto my-3">
                        <div class="d-flex justify-content-center align-items-center">
                          <small class="text-secondary ml-3"><i class="fas fa-user text-dark-blue mr-1"></i> <?php the_author(); ?></small>
                          <small class="text-secondary ml-3"><i class="fa fa-calendar text-dark-blue mr-1" aria-hidden="true"></i> <?php the_date(); ?></small>
                          <small class="text-secondary ml-3"><i class="fa fa-folder  text-dark-blue  mr-1" aria-hidden="true"></i> <?php the_category(', '); ?> </small>
                      </div>
                    </div>
                    <p class="single-blog-content text-light px-2"><?php the_content(); ?></p>

                <article>
                  <?php echo comments_template(); ?>
                </article>
                </article>
              <?php endwhile;
              wp_reset_postdata();
            endif; ?>
      </div>
 </section>




<?php get_footer(); ?>
