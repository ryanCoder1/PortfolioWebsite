<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

     <!-- <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>  -->
     <main>
       <!-- Personal info -->
       <div id="info" class="py-2 px-2 bg-dark-blue  text-light d-flex justify-content-left align-items-center ">
         <span class="ml-5 d-block"><i class="fas fa-map-marker-alt text-secondary mr-2"></i>
              Manchester NH
         </span>
         <span class="ml-5 d-block">
               <i class="fas fa-envelope text-secondary mr-2"></i>
           Ryan.lackey1@yahoo.com
         </span>
      </div>

    <!-- Nav bar with logo and menu -->
       <nav id="navBar" class="navbar bg-white sticky-top z-index-50 py-3">


         <div id="logoWrapper" class=" py-1 px-2 ml-5 d-inline">
           <a class="logo-design text-white" href="<?php echo site_url();?>">Portfolio</a>
        </div>
         <div id="toggler" >
            <input type="checkbox" id="burgerId" class="burger toggler-btn">
            <div class="hamburger">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
       </nav>

       <!-- Menu Modal -->
       <div id="servicesModal">
         <div><a class="pos-left mt-5 nav-design" href="#">Ryan Lackey's Portfolio</a></div>
         <div class="services-modal-close d-block mb-5 text-secondary">
              <input type="checkbox" id="closeBtn" class="close-btn">
              <div class="close">
                <span></span>
                <span></span>
              </div>
         </div>
         <div id="servicesContainer" class="mx-auto text-dark-blue">

             <div class=" mt-4" >
               <ul id="menuUl" class="text-light mx-auto">
                 <li >
                   <a class="nav-design" href="#">Home</a>
                 </li>
                 <li >
                   <a id="servicesA" class="nav-design" href="#">Services</a>
                 </li>
                 <li >
                   <a class="nav-design" href="#">Contact</a>
                 </li>


               </ul>
             </div>
         </div>
       </div>
