<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WooShopTheme
 */

?>

     <div class="footer_section">
         <div class="container">
            <div class="footer_location_text">
               <ul>
                  <li><img src="images/map-icon.png"><span class="padding_left_10"><a href="#">Loram Ipusm hosting web</a></span></li>
                  <li><img src="images/call-icon.png"><span class="padding_left_10"><a href="#">Call : +7586656566</a></span></li>
                  <li><img src="images/mail-icon.png"><span class="padding_left_10"><a href="#">demo@gmail.com</a></span></li>
               </ul>
            </div>
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Useful link </h2>
                  <div class="footer_menu">
                     
					      <?php
					      wp_nav_menu( [
					      	'theme_location'  => 'primary',
					      	'menu'            => 'Primary Menu',
					      	'container'       => 'ul'
					      ] );
					      ?>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Repair</h2>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur  adipiscinaliqua  Loreadipiscing </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Social Media</h2>
                  <div id="social">
                     <a class="facebookBtn smGlobalBtn active" href="#" ></a>
                     <a class="twitterBtn smGlobalBtn" href="#" ></a>
                     <a class="googleplusBtn smGlobalBtn" href="#" ></a>
                     <a class="linkedinBtn smGlobalBtn" href="#" ></a>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-3">
                  <h1 class="useful_text">Our Repair center</h1>
                  <p class="footer_text">Lorem ipsum dolor sit amet, consectetur adipiscinaliquaLoreadipiscing </p>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
   </body>
</html>
<?php wp_footer(); ?>

</body>
</html>
