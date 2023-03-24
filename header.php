<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WooShopTheme
 */

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Fiu</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
	  <?php wp_head(); ?>
      <!-- <link rel="icon" href="images/fevicon.png" type="image/gif" /> TODO? -->
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
               <a class="logo" href="./"><img src="<?php echo get_template_directory_uri(  ); ?>/images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php
					wp_nav_menu( [
						'theme_location'  => 'primary',
						'menu'            => 'Primary Menu',
						'container'       => 'ul',
						'menu_class'      => 'navbar-nav mr-auto',
						'add_li_class'	  => 'nav-item',
						'add_a_class'	  => 'nav-link',
					] );
					?>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="search_icon">
                        
					         <?php
					         wp_nav_menu( [
					         	'theme_location'  => 'secondary',
					         	'menu'            => 'Secondary Menu',
					         	'container'       => 'ul',
					         ] );
					         ?>

                     </div>
                  </form>
               </div>
         </nav>
         </div>
      </div>
      <!-- header section end -->