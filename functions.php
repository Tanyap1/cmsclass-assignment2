<?php

function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript()
{
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1,);
    wp_enqueue_script('custom');


}
add_action('wp_enqueue_scripts', 'load_javascript');


//Add menus
add_theme_support('menus');
add_theme_support('post-thumbnails');
//register menue
register_nav_menus(
array(

    'top-menu' => 'Top Menu',
)
);

//Add menus
add_theme_support('menus');
add_theme_support('post-thumbnails');
//register menue
register_nav_menus(
array(

    'bottom-menu' => 'Bottom Menu',
)
);
//add image sizes
add_image_size('post_image', 1100, 550, true);

//widget
register_sidebar(
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )
    );


//blog

register_sidebar(
    array(

        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )
    );
    
    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

    //custome post type Review
    function create_posttype() {
        register_post_type( 'wpll_reviews',
          array(
            'labels' => array(
              'name' => __( 'Reviews' ),
              'singular_name' => __( 'Review' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'read'),
          )
        );
      }
      add_action( 'init', 'create_posttype' );

          //custome post type Books

          function my_first_post_type()
          {


            $args = array(
                'labels' => array(
                    'name' => 'Books',
                    'singular_name' => 'Book',
                ),
                'hierarchical' => true,
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-book',
                'support' => array('title', ' editor', 'thumbnail'),
                //'rewrite' => array('slug' => 'books')

            );
            register_post_type('books' ,$args);



          }

          add_action('init', 'my_first_post_type');

          function my_first_taxonomy()
          {
            $args = array(
                'labels' => array(
                    'name' => 'Genres',
                    'singular_name' => 'Genre',
                ),
                'public' => true,
                'hierarchical' => true,
            );
                register_taxonomy('genres', array('books'), $args);

          }
          add_action('init', 'my_first_taxonomy');