<?php

/**
 *
 * @link       https://themecanary.com
 * @since      1.0.3
 *
 * @package    Theme_Canary_Demo_Import
 */

function magpage_import_files() {
    return array(
      array(
        'import_file_name'             => 'MagPage',
        'categories'                   => array( 'MagPage','Free'),
        'local_import_file'            => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/magpage/magpage.xml',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/06/screenshot.jpg',
        'import_notice'                => __( '<h3>Important: Make sure you have activated recommended plugins to display exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        </ul>', 'theme-canary-demo-import' ),
        'preview_url'                  => 'https://demo.themecanary.com/magpage/',
      ),

      array(
        'import_file_name'             => 'MagPage Pro',
        'categories'                   => array( 'Premium'),
        'local_import_file'            => trailingslashit( get_template_directory() ) .'inc/dummy-content/magpage.xml',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) .'inc/dummy-content/magpage.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/06/screenshot-1.jpg',
        'preview_url'                  => 'https://demo.themecanary.com/magpage-pro/',
          'import_notice'                => __( '<h3>Important: Make sure you have activated recommended plugins to display exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        </ul>', 'theme-canary-demo-import' ),
      )
  ); 
    
}
add_filter( 'ocdi/import_files', 'magpage_import_files' );

function magpage_after_import_setup($selected_import) {
  
/**
 *
 * After Import Custom Code Execution
 * 
 * @link       https://themecanary.com
 * @since      1.0
 *
 * @package    Theme_Canary_Demo_Import
 */

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'ocdi/after_import', 'magpage_after_import_setup' );