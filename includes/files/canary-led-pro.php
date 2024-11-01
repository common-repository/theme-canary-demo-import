<?php
/**
 *
 * @link       https://themecanary.com
 * @since      1.0
 *
 * @package    Theme_Canary_Demo_Import
 */

function canary_led_import_files() {
    return array(
      array(
        'import_file_name'             => 'Default News',
        'categories'                   => array( 'Default','Free'),
        'local_import_file'            => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/news/led-news.xml',
        'local_import_widget_file'     => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/news/led-news.wie',
        'local_import_customizer_file' => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/news/led-news.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/02/screenshot.jpg',
        'import_notice'                => __( '<h3>Important: You must activate the Recommended plugins to display your site exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        <li>Jetpack</li>
        </ul>', 'theme-canary-demo-import' ),
        'preview_url'                  => 'https://demo.themecanary.com/led/',
      ),
      array(
        'import_file_name'             => 'Blog',
        'categories'                   => array( 'Free','Blog'),
        'local_import_file'            => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/blog/led-blog.xml',
        'local_import_widget_file'     => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/blog/led-blog.wie',
        'local_import_customizer_file' => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/blog/led-blog.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/03/led-blog.jpg',
        'preview_url'                  => 'https://demo.themecanary.com/led-blog/',
      ),
      array(
        'import_file_name'             => 'Business',
        'categories'                   => array( 'Free','Elementor','Business'),
        'local_import_file'            => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/business/led-business.xml',
        'local_import_widget_file'     => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/business/led-business.wie',
        'local_import_customizer_file' => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/business/led-business.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/03/led-business.jpg',
        'import_notice'                => __( '<h3>Important: You must activate the Recommended plugins to display your site exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        <li>Jetpack</li>
        <li>Elementor</li>
        </ul>', 'theme-canary-demo-import' ),
        'preview_url'                  => 'https://demo.themecanary.com/led-business/',
      ),
      array(
        'import_file_name'             => 'Construction',
        'categories'                   => array( 'Free','Elementor','Business'),
        'local_import_file'            => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/construction/led-construction.xml',
        'local_import_widget_file'     => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/construction/led-construction.wie',
        'local_import_customizer_file' => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/construction/led-construction.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/03/led-construction.jpg',
        'import_notice'                => __( '<h3>Important: You must activate the Recommended plugins to display your site exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        <li>Elementor</li>
        </ul>', 'theme-canary-demo-import' ),
        'preview_url'                  => 'https://demo.themecanary.com/led-construction/',
      ),
      array(
        'import_file_name'             => 'Corporate',
        'categories'                   => array( 'Free','Elementor','Business'),
        'local_import_file'            => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/corporate/led-corporate.xml',
        'local_import_widget_file'     => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/corporate/led-corporate.wie',
        'local_import_customizer_file' => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/corporate/led-corporate.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/03/led-corporate.jpg',
        'import_notice'                => __( '<h3>Important: You must activate the Recommended plugins to display your site exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        </ul>', 'theme-canary-demo-import' ),
        'preview_url'                  => 'https://demo.themecanary.com/led-corporate/',
      ),
      array(
        'import_file_name'             => 'Education',
        'categories'                   => array( 'Premium','Elementor','Business'),
        'local_import_file'            => trailingslashit( get_template_directory() ) .'inc/dummy-content/education/led-education.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) .'inc/dummy-content/education/led-education.wie',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) .'inc/dummy-content/education/led-education.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/03/led-education.jpg',
        'import_notice'                => __( '<h3>Important: You must activate the Recommended plugins to display your site exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        <li>Elementor</li>
        </ul>', 'theme-canary-demo-import' ),
        'preview_url'                  => 'https://demo.themecanary.com/led-education/',
      ),
      array(
        'import_file_name'             => 'eStore',
        'categories'                   => array( 'Premium','Gutenberg','Business'),
        'local_import_file'            => trailingslashit( get_template_directory() ) .'inc/dummy-content/estore/led-estore.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) .'inc/dummy-content/estore/led-estore.wie',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) .'inc/dummy-content/estore/led-estore.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/03/led-estore.jpg',
        'import_notice'                => __( '<h3>Important: You must activate the Recommended plugins to display your site exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        <li>The Icon Block</li>
        <li>WooCommerce</li>
        </ul>', 'theme-canary-demo-import' ),
        'preview_url'                  => 'https://demo.themecanary.com/led-estore/',
      ),
      array(
        'import_file_name'             => 'Fashion',
        'categories'                   => array( 'Free','Elementor'),
        'local_import_file'            => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/fashion/led-fashion.xml',
        'local_import_widget_file'     => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/fashion/led-fashion.wie',
        'local_import_customizer_file' => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/fashion/led-fashion.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/03/led-fashion.jpg',
        'import_notice'                => __( '<h3>Important: You must activate the Recommended plugins to display your site exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        <li>Elementor</li>
        </ul>', 'theme-canary-demo-import' ),
        'preview_url'                  => 'https://demo.themecanary.com/led-fashion/',
      ),
      array(
        'import_file_name'             => 'Nature',
        'categories'                   => array( 'Premium','Gutenberg'),
        'local_import_file'            => trailingslashit( get_template_directory() ) .'inc/dummy-content/nature/led-nature.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) .'inc/dummy-content/nature/led-nature.wie',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) .'inc/dummy-content/nature/led-nature.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/03/led-nature.jpg',
        'import_notice'                => __( '<h3>Important: You must activate the Recommended plugins to display your site exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        <li>The Icon Block</li>
        </ul>', 'theme-canary-demo-import' ),
        'preview_url'                  => 'https://demo.themecanary.com/led-nature/',
      ),
      array(
        'import_file_name'             => 'Portfolio',
        'categories'                   => array( 'Free','Gutenberg'),
        'local_import_file'            => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/portfolio/led-portfolio.xml',
        'local_import_widget_file'     => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/portfolio/led-portfolio.wie',
        'local_import_customizer_file' => trailingslashit( plugin_dir_path( __FILE__ ) ).'dummy/canary-led/portfolio/led-portfolio.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/03/led-portfolio.jpg',
        'preview_url'                  => 'https://demo.themecanary.com/led-portfolio/',
      ),
      array(
        'import_file_name'             => 'Sports',
        'categories'                   => array( 'Premium','Elementor','Business'),
        'local_import_file'            => trailingslashit( get_template_directory() ) .'inc/dummy-content/sports/led-sports.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) .'inc/dummy-content/sports/led-sports.wie',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) .'inc/dummy-content/sports/led-sports.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/03/led-sports.jpg',
        'import_notice'                => __( '<h3>Important: You must activate the Recommended plugins to display your site exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        <li>Elementor</li>
        </ul>', 'theme-canary-demo-import' ),
        'preview_url'                  => 'https://demo.themecanary.com/led-sports/',
      ),
      array(
        'import_file_name'             => 'Technology',
        'categories'                   => array( 'Premium','Elementor','Business'),
        'local_import_file'            => trailingslashit( get_template_directory() ) .'inc/dummy-content/technology/led-technology.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) .'inc/dummy-content/technology/led-technology.wie',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) .'inc/dummy-content/technology/led-technology.dat',
        'import_preview_image_url'     => 'https://themecanary.com/wp-content/uploads/2023/03/led-technology.jpg',
        'import_notice'                => __( '<h3>Important: You must activate the Recommended plugins to display your site exactly as our demo site.</h3> <br/><strong> Recommended Plugins:</strong>
        <ul>
        <li>Contact Form 7</li>
        <li>Elementor</li>
        </ul>', 'theme-canary-demo-import' ),
        'preview_url'                  => 'https://demo.themecanary.com/led-technology/',
      )
  ); 
    
}
add_filter( 'ocdi/import_files', 'canary_led_import_files' );

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
      'name'     => 'Contact Form 7', // Name of the plugin.
      'slug'     => 'contact-form-7', // Plugin slug - the same as on WordPress.org plugin repository.
      'required' => true,                     // If the plugin is required or not.
    ]
  ];
 
  // Check if user is on the theme recommeneded plugins step and a demo was selected.
  if (
    isset( $_GET['step'] ) &&
    $_GET['step'] === 'import' &&
    isset( $_GET['import'] )
  ) {
 
    // Adding one additional plugin for the first demo import ('import' number = 0).
    if ( $_GET['import'] === '0' ) {
      $theme_plugins[] = [
        'name'     => 'Jetpack',
        'slug'     => 'jetpack',
        'required' => true,
      ];
    }
 
    // List of all plugins only used by second demo import [overwrite the list] ('import' number = 1).
    if ( $_GET['import'] === '2' ) {
      $theme_plugins[] = [
          'name'     => 'Jetpack',
          'slug'     => 'jetpack',
          'required' => true,
       ];
       $theme_plugins[] = [
      'name'     => 'Elementor',
      'slug'     => 'elementor',
      'required' => true,
       ];
    }

    if ( $_GET['import'] === '3' || $_GET['import'] === '4' || $_GET['import'] === '5' || $_GET['import'] === '7' || $_GET['import'] === '10' || $_GET['import'] === '11' ) {
        $theme_plugins[] = [
      'name'     => 'Elementor',
      'slug'     => 'elementor',
      'required' => true,
    ];
  }

  if ( $_GET['import'] === '6' ) {
      $theme_plugins[] = [
      'name'     => 'The Icon Block',
      'slug'     => 'icon-block',
      'required' => true,
       ];
       $theme_plugins[] = [
      'name'     => 'WooCommerce',
      'slug'     => 'woocommerce',
      'required' => true,
       ];
    }

    if ( $_GET['import'] === '8' ) {
      $theme_plugins[] = [
      'name'     => 'The Icon Block',
      'slug'     => 'icon-block',
      'required' => true,
    ];
    }
  }
 
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

function led_after_import_setup($selected_import) {
    
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
    $top_menu = get_term_by( 'name', 'Top Menu', 'nav_menu' );
    $social_icon = get_term_by( 'name', 'Social Icon', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
        'menu-1' => $main_menu->term_id,
        'menu-2' => $top_menu->term_id,
        'menu-3' => $social_icon->term_id,
        'menu-4' => $footer_menu->term_id,
      )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'ocdi/after_import', 'led_after_import_setup' );