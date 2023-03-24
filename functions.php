<?php
add_action( 'after_setup_theme', 'install_menu' );
add_action( 'wp_enqueue_scripts', 'styles_and_scripts' );
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 10, 4);
function styles_and_scripts() {
	// css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css' );
	// link ico images/fevicon.png ?
	wp_enqueue_style( 'jQmCustomScrollbar', get_template_directory_uri().'/css/jquery.mCustomScrollbar.min.css');
	wp_enqueue_style( 'fontAwesome', 'https://netdna.bootstrapcdn.com/font-awesome/latest/css/font-awesome.css');
	wp_enqueue_style( 'owlCarousel', get_template_directory_uri().'/css/owl.carousel.min.css');
	wp_enqueue_style( 'owlThemeDefault', get_template_directory_uri().'/css/owl.theme.default.min.css');
	wp_enqueue_style( 'jQfancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', $media = 'screen');
	if (is_page( 'fines' )) {
			wp_enqueue_style( 'fines', get_template_directory_uri().'/css/fines.css' );
	}
	// js
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', in_footer:true);
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', in_footer:true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', in_footer:true);
	wp_enqueue_script( 'jquery3', get_template_directory_uri() . '/js/jquery-3.0.0.min.js', in_footer:true);
	wp_enqueue_script( 'plugin', get_template_directory_uri() . '/js/plugin.js', in_footer:true);
	wp_enqueue_script( 'jQmCustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', in_footer:true);
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', in_footer:true);
	wp_enqueue_script( 'owlCarousel', get_template_directory_uri() . '/js/owl.carousel.js', in_footer:true);
	wp_enqueue_script( 'jQfancybox', 'https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', in_footer:true);
}
function install_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
	register_nav_menu( 'secondary', 'Secondary Menu' );
}


// фильтры
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

function add_additional_class_on_a( $atts, $item, $args ) {
  if (property_exists($args, 'add_a_class')) {
    $atts['class'] = $args->add_a_class;
  }
  return $atts;
}
?>