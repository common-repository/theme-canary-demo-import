<?php

/**
 *
 * @link       https://themecanary.com
 * @since      1.0.4
 *
 * @package    Theme_Canary_Demo_Import
 */

function blackcart_import_files() {
    return array(
      array(
        'import_file_name'             => 'BlackCart',
        'categories'                   => array('Free'),
        'local_import_file'            => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/blackcart/blackcart.xml',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2024/03/screenshot.jpg',
        'import_notice'                => __( '<h3>Important: Make sure you have activated recommended plugins to display exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        <li>WooCommerce</li>
        </ul>', 'theme-freesia-demo-import' ),
        'preview_url'                  => 'https://demo.themecanary.com/blackcart/',
      ),

      array(
        'import_file_name'             => 'BlackCart Pro',
        'categories'                   => array( 'Premium'),
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2024/03/screenshot-1.jpg',
        'preview_url'                  => 'https://demo.themecanary.com/blackcart-pro/',
         'import_notice'                => __( '<h3>Important: This is a premium feature. The import button will not import dummy content. To unlock premium features, please upgrade.</h3> <a title="Upgrade Pro" href="https://themecanary.com/pricing/blackcart/" class="pro-plan-btn" target="_blank">Upgrade Pro</a>', 'theme-freesia-demo-import' ),
      )
  ); 
    
}
add_filter( 'ocdi/import_files', 'blackcart_import_files' );

/**
 *
 * Set Recommended Plugins based on the Selected Demo
 * 
 * @link       https://themecanary.com
 * @since      1.0
 *
 * @package    Theme_Canary_Demo_Import
 */

function tcdi_register_plugins( $plugins ) {
 
  // Required: List of plugins used by all theme demos.
  $theme_plugins = [

    [ // A WordPress.org plugin repository example.
      'name'     => 'WooCommerce', // Name of the plugin.
      'slug'     => 'woocommerce', // Plugin slug - the same as on WordPress.org plugin repository.
      'required' => true,                     // If the plugin is required or not.
    ],
    [ // A WordPress.org plugin repository example.
      'name'     => 'Contact Form 7', // Name of the plugin.
      'slug'     => 'contact-form-7', // Plugin slug - the same as on WordPress.org plugin repository.
      'required' => true,                     // If the plugin is required or not.
    ]

  ];
 
  return array_merge( $plugins, $theme_plugins );
}
add_filter( 'ocdi/register_plugins', 'tcdi_register_plugins' );

/**
 *
 * After Import Custom Code Execution
 * 
 * @link       https://themecanary.com
 * @since      1.0
 *
 * @package    Theme_Canary_Demo_Import
 */

function blackcart_after_import_setup($selected_import) {

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'ocdi/after_import', 'blackcart_after_import_setup' );