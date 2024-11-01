<?php

/**
 *
 * @link       https://themecanary.com
 * @since      1.0
 *
 * @package    Theme_Canary_Demo_Import
 */

function snapfolio_import_files() {
    return array(
      array(
        'import_file_name'             => 'Snapfolio',
        'categories'                   => array('Free'),
        'local_import_file'            => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/snapfolio/snapfolio.xml',
        'local_import_widget_file'     => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/snapfolio/snapfolio.wie',
        'local_import_customizer_file' => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/snapfolio/snapfolio.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/05/screenshot.jpg',
        'import_notice'                => __( '<h3>Important: Make sure you have activated recommended plugins to display exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        </ul>', 'theme-canary-demo-import' ),
        'preview_url'                  => 'https://demo.themecanary.com/snapfolio/',
      ),

      array(
        'import_file_name'             => 'Snapfolio Pro',
        'categories'                   => array( 'Premium'),
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/05/screenshot-1.jpg',
        'preview_url'                  => 'https://demo.themecanary.com/snapfolio-pro/',
         'import_notice'                => __( '<h3>Important: This is a premium feature. The import button will not import dummy content. To unlock premium features, please upgrade.</h3> <a title="Upgrade Pro" href="https://themecanary.com/pricing/snapfolio/" class="pro-plan-btn" target="_blank">Upgrade Pro</a>', 'theme-canary-demo-import' ),
      )
  ); 
    
}
add_filter( 'ocdi/import_files', 'snapfolio_import_files' );


/**
 *
 * After Import Custom Code Execution
 * 
 * @link       https://themecanary.com
 * @since      1.0
 *
 * @package    Theme_Canary_Demo_Import
 */

function snapfolio_after_import_setup($selected_import) {
    
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
    $top_menu = get_term_by( 'name', 'Top Menu', 'nav_menu' );
    $social_icon = get_term_by( 'name', 'Social Icon', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
        'menu-1' => $main_menu->term_id,
        'menu-2' => $top_menu->term_id,
        'menu-3' => $social_icon->term_id,
      )
    );

}
add_action( 'ocdi/after_import', 'snapfolio_after_import_setup' );