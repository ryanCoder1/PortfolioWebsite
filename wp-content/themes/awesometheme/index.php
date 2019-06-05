<?php get_header(); ?>

<!-- Blog section with links to All Blogs archive and Blog single post page -->
<section id="archiveBlogsSection" class="px-3 py-5 bg-light" style="background-image: url('<?php echo get_bloginfo('wpurl'); ?>/wp-content/themes/awesometheme/images/keyboardblog.jpg')">
    <div id="archiveBlosgHeader" class="col-md-4 mx-auto" >
      <a href="<?php echo site_url(); ?>/Blog/">
        <h3  class="my-2 text-light font-weight-bold text-left">Blog Posts <span class="archive-blogs-visit ml-2 text-light bg-dark-blue p-2 border-radius-7">View Blogs</span></h3>
      </a>
    </div>
    <!-- Blog posts wrapper -->
      <div class="archive-blogs-wrapper mt-5 mx-auto d-flex justify-content-center align-items-top flex-wrap">

          <?php
          $args = array('post_type' => 'post');
             query_posts( $args );
            if(have_posts()) :
              while (have_posts()):
                the_post();
                ?>
                <!-- Blog post entry -->
                <div class="archive-blogs-entry col-xs-12 col-sm-10 col-md-6 mt-4 p-3 border border-secondary border-radius-7 bg-blue-trans-5 d-flex justify-content-center align-items-center">
                  <a  class="h-25 w-75 text-center" href="<?php the_permalink(); ?>">
                    <div id="archiveBgWhite" class="border-radius-7 bg-white w-100 h-100 d-flex justify-content-center align-items-center">
                      <span id="archiveBorderTop"></span>
                        <h5 class="archive-blogs-title text-secondary d-block">Visit Blog Post</h5>
                      <span id="archiveBorderBottom"></span>
                    </div>
                    <h6 class="archive-blogs-title text-light"><?php the_title(); ?></h6>
                  </a>
                </div>

              <?php endwhile;
              wp_reset_postdata();
            endif; ?>
      </div>
 </section>
<?php get_footer(); ?>
