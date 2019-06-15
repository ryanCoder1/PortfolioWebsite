<?php get_header(); ?>
<!-- Header container -->
<header id="header">
<!-- Hero image and caption -->
  <div id="heroImg"  style="background-image: url('<?php echo header_image(); ?>')">
    <div class="caption-container d-flex align-items-center">
        <div id="devH" class="col-2">
          <span>Web Developer</span>
        </div>
        <div id="welcomeInfo" class="col-9 ">
          <h3 id="nameH" class="py-3 mt-2"><span class="text-dark-blue">Ryan Lackey</span></h3>
          <span id="bottomLine" class=""></span>
          <p id="welcomeP" class="pt-4 text-secondary text-center font-weight-normal">Welcome to my website.<br/>This Portfolio website is to showcase my
            projects and also blog about web programming. <br/><br/>Enjoy the tour.
          </p>
        </div>
    </div>
  </div>

</header>

<!-- About section with personal image and introduction -->
<section id="aboutSection" class="pt-2 bg-white w-100">
    <h2 class="col-xs-9 col-sm-10 col-md-7 font-weight-bold text-secondary text-center border-bottom border-color-grey mx-auto pb-4">About <span class="font-weight-light text-uppercase text-dark-blue">Me</span>
      <span>
         <img id="personalImage" class="personal-image rounded-circle ml-3" src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/themes/awesometheme/images/RyanImage.jpg">
      </span>
    </h2>
    <p id="aboutInfo" class="col-xs-10 col-sm-10 col-md-6 text-center text-secondary py-4 w-100 my-3 mx-auto">Enthusiastic programmer that's willing to keep learning new technologies whether those are frameworks or programming languages to better suit my skills or the vision of a project. Proficient with Object-Oriented Programming.
     Able to identify the solutions to make and complete a project.  I’ve  picked up skills and experience by creating personal projects and websites for small businesses.
    </p>

    <div id="aboutTechWrapper" class=" mt-3 mb-1">
        <h4 class="text-center">Known Technologies <i class="fas fa-code about-tech-icon  p-1 "></i></h4>
      <ul id="techInfo" class="d-flex flex-sm-row flex-column flex-wrap justify-content-center mb-5 mt-3">
        <li><strong>PHP</strong> / <span class="code-tags">CodeIgniter / Laravel / Wordpress</span></li>
        <li><strong>Javascript</strong> / <span class="code-tags">Jquery</span></li>
        <li><strong>HTML5</strong></li>
        <li><strong>CSS3</strong> / <span class="code-tags">Bootstrap</span></li>
        <li><strong>MySql</strong></li>
      </ul>
    </div>
</section>

<!-- Projects section with links to All Projects archive and Project single post page -->
<!-- <section id="projectsSection" class="pb-5 bg-dark-blue  blue-gradient"> -->
<section id="postsSection" class="posts-image pb-5" style="background-image: linear-gradient(rgba(33, 59, 80, 1) 50%,  rgba(43, 81, 112, .4)), url('<?php echo get_background_image(); ?>')">
  <div class="project-wrapper">
    <div class="project-header col-12 bg-light-blue py-3 border-top-dark-blue-5 box-shadow-y-5">
      <a class="mx-auto" href="<?php echo get_post_type_archive_link( 'project' ); ?>">
          <h3 class="head-word text-light text-center">
            <span class="border-word bg-brown"></span>
            Projects
          </h3>
          <span class="projects-visit ml-4 text-light p-2">View projects</span>
          <!-- <h6 class="my-3 text-center text-grey">These are projects for companies or personal web applications</h6> -->
      </a>
    </div>
    <!-- Project posts wrapper -->
    <div id="homePostWrapper" class="home-post-wrapper col-xs-9 col-sm-11">
    <?php
    $args = array('post_type' => 'project');
       query_posts( $args );
      if(have_posts()) :
        while (have_posts()):
          the_post();
          ?>


          <article class="home-post-date home-post-el text-center text-brown p-2 border-radius-7 col-xs-12 col-sm-12 col-md-5"><span class="text-white">-</span> Created <?php the_date(); ?> <span class="text-white">-</span> </article>
          <!-- Project posts entry -->
          <article class="home-post-entry home-post-el col-xs-12 col-sm-12 col-md-7 ml-sm-5 bg-white px-3 box-shadow-y-5 ">

                <?php
                if ( has_post_thumbnail() ): ?>

                  <a  class="home-thumbnail-anchor" href="<?php echo esc_html( get_the_post_thumbnail_caption() ) ?>">
                      <p class="home-thumbnail"><?php the_post_thumbnail(); ?></p>
                      <p class="bg-shade"></p>
                  </a>
                  <?php
                 endif;
                  ?>
                <a  class="text-secondary" href="<?php the_permalink(); ?>">
                    <div class="neg-position">
                    <h5 class="title text-dark-blue"><?php the_title(); ?></h5>
                    <p class="text-grey  "><?php the_excerpt(); ?></p>
                  </div>
                </a>

          </article>

        <?php endwhile;
        wp_reset_postdata();
      endif; ?>
</div>
</div>

<!-- Blog section with links to All Blogs archive and Blog single post page -->
  <div id="blogsSection" class="blog-wrapper">
    <div id="blogHeader" class="blog-header col-12 bg-light-blue py-3 mt-5 box-shadow-y-5 " >
      <a href="<?php echo site_url(); ?>/post/">
        <h3  class="head-word mx-auto text-light font-weight-bold text-center">
            <span class="border-word bg-brown"></span>
            Blog Posts
           </h3>
           <span class="blogs-visit ml-4 text-light p-2">View Blogs</span>

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
                <archive class="home-blog-entry col-xs-12 col-sm-10 col-md-6 mt-4 p-3 border border-secondary border-radius-7 bg-blue-trans-5 d-flex justify-content-center align-items-center">
                  <a  class="h-25 w-75 text-center" href="<?php the_permalink(); ?>">
                    <div id="bgWhite" class="border-radius-7 bg-white w-100 h-100 d-flex justify-content-center align-items-center">
                      <span id="borderTop"></span>
                        <h5 class="blogs-title text-secondary d-block">Blog Post</h5>
                      <span id="borderBottom"></span>
                    </div>
                    <h6 class="blogs-title text-light"><?php the_title(); ?></h6>
                  </a>
                </archive>

              <?php endwhile;
              wp_reset_postdata();
            endif; ?>
      </div>
    </div>
 </section>

<!-- Contact Info Section -->
 <section id="contactInfo">
    <div id="contactInfoWrapper" class="col-12 d-flex justify-content-center flex-wrap py-5">
        <!-- Description of contact form -->
         <div id="contactDesc" class="col-xs-12 col-sm-10 col-md-5 text-secondary my-5">
           <h2 class="text-dark-blue font-weight-bold text-secondary border-bottom border-color-grey pb-4 mr-5">Let's Create</h2>
           <p class="pt-3 pr-5">Thank you for visiting my portfolio website. If you'd like to get in contact with me,
              please fill the form out and I'll respond as soon as possible.
           </p>
         </div>
         <!-- Contact form -->
         <div id="formWrapper" class="col-xs-12 col-sm-10 col-md-6 text-dark-blue">
          <form id="contactForm">
            <div class="form-group">
              <input type="text" class="form-control" name="name" value="" placeholder="Full Name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" value="" placeholder="Email" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" value="" placeholder="Message" rows="6"></textarea>
            </div>
            <div class="form-group">
              <input type="text" id="testQAnswer" class="form-control w-50 d-inline-block" placeholder="Answer ?" required><span id="testQ" class="bg-light p-1 ml-2"> + 5 = 15</span>
            </div>
              <button type="submit" id="submitBtn" class="btn mb-2">Send Info</button>
              <input type="hidden" id="admin-ajax" value="<?php echo admin_url('admin-ajax.php')?>">
          </form>
          <div id="contactResponse" class="w-100 py-2 font-weight-bold "></div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
