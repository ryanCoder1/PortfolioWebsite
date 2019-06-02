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
       <nav id="navBar" class="navbar nav-position">
         <div id="logoWrapper" class=" d-inline">
           <a class="logo-design text-dark-blue" href="#">Portfolio</a>
        </div>
         <!-- <button id="togglerBtn" type="button" class="toggler-btn" > -->
         <div id="toggler" >
            <input type="checkbox" id="burgerId" class="burger toggler-btn">
            <div class="hamburger">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
         <!-- </button> -->
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
