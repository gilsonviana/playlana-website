<?php

function playlana_setup() {

    add_theme_support( 'post-thumbnails' );    

    register_nav_menus( array(
        'top'           => __( 'Top', 'playlana' ),
        'bottom'        => __( 'Bottom', 'playlana' ),
        'post_social'   => __( 'Post Social', 'playlana' ),
    ) );

    register_sidebar( array(
        'name'          => __('Page Blog Widget', 'playlana'),
        'id'            => 'primary-sidebar',
        'description'   => __('Display a sidebar next to the post list on the blog page.', 'playlana'),
        'before_widget' => '<div class="page-blog__widget">',
        'after_widget'  => '</div>',
    ) );
}
add_action( 'after_setup_theme', 'playlana_setup' );

function playlana_scripts() {

    wp_enqueue_style( 'playlana-fonts', '//fonts.googleapis.com/css?family=Francois+One|Roboto|Barlow+Condensed:700' );        
    wp_enqueue_style( 'playlana-style', get_stylesheet_uri() );    
    wp_enqueue_script( 'playlana-script', get_template_directory_uri() . '/main.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'playlana_scripts' );

function get_pagination($paged, $max_num_pages, $range = 4){
    
  $max_page = $max_num_pages;
  
  if($max_page > 1){
    
    if(!$paged){
      $paged = 1;
    }

    if($max_page > $range){
      // When closer to the beginning
      if($paged < $range){
        for($i = 1; $i <= ($range + 1); $i++){
            echo "<li class='";
            echo ( $i == $paged ) ? "current'>" : "'>";
            echo "<a href='" . get_pagenum_link( $i ) . "'>$i</a></li>";
        }
      }
      // When closer to the end
      elseif($paged >= ($max_page - ceil(($range/2)))){
        for($i = $max_page - $range; $i <= $max_page; $i++){
            echo "<li class='";
            echo ( $i == $paged ) ? "current'>" : "'>";
            echo "<a href='" . get_pagenum_link( $i ) . "'>$i</a></li>";
        }
      }
      // Somewhere in the middle
      elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
        for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){
            echo "<li class='";
            echo ( $i == $paged ) ? "current'>" : "'>";
            echo "<a href='" . get_pagenum_link( $i ) . "'>$i</a></li>";
        }
      }
    }
    // Less pages than the range, no sliding effect needed
    else{
      for($i = 1; $i <= $max_page; $i++){
            echo "<li class='";
            echo ( $i == $paged ) ? "current'>" : "'>";
            echo "<a href='" . get_pagenum_link( $i ) . "'>$i</a></li>";
      }
    }
    // Next page
    // next_posts_link(' » ');
    // On the last page, don't put the Last page link
    if($paged != $max_page){
      echo "<li><a href=" . get_pagenum_link($max_page) . "> Last </a></li>";
    }
  }
}

// require get_parent_theme_file_path( '/inc/class.PlaylanaRelatedPosts.php' );
