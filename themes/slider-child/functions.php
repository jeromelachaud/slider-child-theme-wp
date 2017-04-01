<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function category_link() {
$category = get_the_category();
	if($category[0]){
		echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
	}
}

function register_my_menus() {
  register_nav_menus(
    array(
      'menu-principal' => __( 'Menu Principal' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
