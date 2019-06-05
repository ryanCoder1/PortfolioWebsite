<?php get_header(); ?>
<!-- Header container -->
<header id="header">
<!-- Hero image and caption -->
  <div id="heroImg"  style="background-image: url('<?php echo header_image(); ?>')">
    <div class="caption-container">
      <h2 id="devH" class="bg-light text-dark-blue p-3 my-0 mx-auto"><span>Web Developer</span></h2>
      <h3 id="nameH" class="border border-light font-weight-normal py-4 px-5 m-0"><span>Ryan Lackey's</span></h3>
      <h4 id="portH" class="bg-dark-blue text-light border border-light p-3 my-0 mx-auto  w-75"><span>Portfolio</span></h4>
    </div>
  </div>

  <!-- Aside Known Technologies -->
  <aside id="techs">
    <div >
      <div id="techIcon">
        <i class="fas fa-code techIcon text-light p-1 bg-black-trans-1"></i>
      </div>
      <div id="techWrapper">
        <ul>
          <li>Known Technologies</li>
          <li><strong>PHP</strong> / <span class="text-grey">CodeIgniter / Laravel</span></li>
          <li><strong>Javascript</strong> / <span class="text-grey">Jquery</span></li>
          <li><strong>HTML5</strong></li>
          <li><strong>CSS3</strong> / <span class="text-grey">Bootstrap</span></li>
          <li><strong>MySql</strong></li>
        </ul>
      </div>
    </div>
  <aside>
</header>

<!-- About section with personal image and introduction -->
<section id="aboutSection" class="pt-2 bg-white w-100">
    <h1 class="col-xs-10 col-sm-10 col-md-6 font-weight-bold text-secondary text-center border-bottom border-color-grey w-100 mx-auto pb-4">About <span class="font-weight-light text-uppercase text-dark-blue">Me</span>
      <span> <img  class="personal-image rounded-circle ml-3" src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/themes/awesometheme/images/RyanImage.jpg"></span></h1>
    <p class="col-xs-10 col-sm-10 col-md-6 text-center text-secondary py-4 w-100 my-3 mx-auto">Enthusiastic programmer that's willing to keep learning new technologies whether those are frameworks or programming languages to better suit my skills or the vision of a project. Proficient with Object-Oriented Programming.
     Able to identify the solutions to make and complete a project.  I’ve  picked up skills and experience by creating personal projects and websites for small businesses.
    </p>

    <div id="aboutTechWrapper" class=" mt-3 mb-1">
        <h4 class="text-center">Known Technologies <i class="fas fa-code about-tech-icon  p-1 "></i></h4>
      <ul class="d-flex justify-content-center mb-5 mt-3">
        <li><strong>PHP</strong> / <span class="text-grey">CodeIgniter / Laravel</span></li>
        <li><strong>Javascript</strong> / <span class="text-grey">Jquery</span></li>
        <li><strong>HTML5</strong></li>
        <li><strong>CSS3</strong> / <span class="text-grey">Bootstrap</span></li>
        <li><strong>MySql</strong></li>
      </ul>
    </div>
</section>

<!-- Projects section with links to All Projects archive and Project single post page -->
<section id="projectsSection" class="px-3 py-5 bg-light">
    <div class="col-xs-11 col-sm-8 col-md-4   py-3">
      <a href="<?php echo get_post_type_archive_link( 'project' ); ?>">
          <h3 class="my-2 text-secondary text-left">Projects <span class="projects-visit ml-5 text-light bg-dark-blue p-2 border-radius-7">View projects</span></h3>
          <h6 class="my-3 text-left text-grey">These are projects for companies or personal web applications</h6>
      </a>
    </div>
    <!-- Project posts wrapper -->
    <div class="home-post-wrapper mt-5 d-flex justify-content-center align-items-top">
    <?php
    $args = array('post_type' => 'project');
       query_posts( $args );
      if(have_posts()) :
        while (have_posts()):
          the_post();
          ?>
          <!-- Project posts entry -->
          <article class="home-post-entry col-xs-12 col-sm-10 col-md-6 ml-4 bg-white p-3">
              <a  class="text-secondary" href="<?php the_permalink(); ?>">
                <?php
                if ( has_post_thumbnail() ): ?>
                    <p class="home-tnail border"><?php the_post_thumbnail('project', array( 'class' => 'home-thumbnail' )); ?></p>
                  <?php
                 endif;
                  ?>
                  <h3 class="title text-dark-blue"><?php the_title(); ?></h3>
                  <p class="text-grey"><?php the_excerpt(); ?></p>
              </a>
          </article>
        <?php endwhile;
        wp_reset_postdata();
      endif; ?>
  </div>
</section>

<!-- Blog section with links to All Blogs archive and Blog single post page -->
<section id="blogsSection" class="blogs-image px-3 py-5 bg-light" style="background-image: url('<?php echo get_background_image(); ?>')">
    <div id="blogHeader" class="col-md-4 mx-auto " >
      <a href="<?php echo site_url(); ?>/post/">
        <h3  class="my-2 text-light font-weight-bold text-left">Blog Posts <span class="blogs-visit ml-2 text-light bg-dark-blue p-2 border-radius-7">View Blogs</span></h3>
      </a>
    </div>
    <!-- Blog posts wrapper -->
      <div class="home-blog-wrapper mt-5 mx-auto d-flex justify-content-center align-items-top flex-wrap">

          <?php
          $args = array('posts_per_page' => '4', 'post_type' => 'post');
             query_posts( $args );
            if(have_posts()) :
              while (have_posts()):
                the_post();
                ?>
                <!-- Blog post entry -->
                <div class="home-blog-entry col-xs-12 col-sm-10 col-md-6 mt-4 p-3 border border-secondary border-radius-7 bg-blue-trans-5 d-flex justify-content-center align-items-center">
                  <a  class="h-25 w-75 text-center" href="<?php the_permalink(); ?>">
                    <div id="bgWhite" class="border-radius-7 bg-white w-100 h-100 d-flex justify-content-center align-items-center">
                      <span id="borderTop"></span>
                        <h5 class="blogs-title text-secondary d-block">Visit Blog Post</h5>
                      <span id="borderBottom"></span>
                    </div>
                    <h6 class="blogs-title text-light"><?php the_title(); ?></h6>
                  </a>
                </div>

              <?php endwhile;
              wp_reset_postdata();
            endif; ?>
      </div>
 </section>

<?php get_footer(); ?>
