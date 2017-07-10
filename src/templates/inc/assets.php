<?php 

/**
 * Enqueue styles.
 * And by enqueue, we mean "inline critical styles".
 */
function wv_enqueue_styles() {
  $template_directory_uri = get_template_directory_uri() . '/';
  $critical_css = file_get_contents( get_template_directory() . '/css/main.css' );
  // $critical_css = str_replace( '../../',  $template_directory_uri, $critical_css );
  echo '<style>' . $critical_css . '</style>';

}
add_action( 'wp_enqueue_scripts', 'wv_enqueue_styles' );

/**
 * Enqueue scripts.
 */
function wv_enqueue_scripts() {

  // wp_enqueue_script( 'wv-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

  // wp_enqueue_script( 'wv-skip-link-focus-fix', get_template_directory_uri() . '/dist/js/skip-link-focus-fix.js', array(), '20151215', true );

  // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  //   wp_enqueue_script( 'comment-reply' );
  // }
}
add_action( 'wp_enqueue_scripts', 'wv_enqueue_scripts' );

/**
 * Dequeue scripts.
 */
function wv_dequeue_scripts() {
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_enqueue_scripts', 'wv_dequeue_scripts' );
