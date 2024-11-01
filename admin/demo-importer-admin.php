<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://themecanary.com
 * @since      1.0
 *
 * @package    Theme_Canary_Demo_Import
 */
class Theme_Canary_Demo_Import_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Theme_Canary_Demo_Import_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Theme_Canary_Demo_Import_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Theme_Canary_Demo_Import_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Theme_Canary_Demo_Import_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		$handle = 'theme-canary-admin';
		$deps = array( 'wp-api-fetch' );

		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/admin.js', array( 'jquery' ), $this->version, true,false );

		wp_enqueue_script( $handle,plugin_dir_url( __FILE__ ) . 'js/admin.js', $deps, date( 'Ymd-Gis', filemtime( plugin_dir_path( __FILE__ ) .'js/admin.js' ) ), true );



		wp_localize_script( $handle, 'theme_canary',
        array(
            'theme_canary_demo_import_page' => esc_url( admin_url( 'themes.php?page=one-click-demo-import' ) ),
        )
    );

	}

}

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://themecanary.com
 * @since      1.0
 *
 * @package    Theme_Canary_Demo_Import
 */

function theme_canary_plugin_page_setup( $default_settings ) {
    $default_settings['parent_slug'] = 'themes.php';
    $default_settings['page_title']  = esc_html__( 'Theme Canary Demo Import' , 'theme-canary-demo-import' );
    $default_settings['menu_title']  = esc_html__( 'Import Canary Demos' , 'theme-canary-demo-import' );
    $default_settings['capability']  = 'import';
    $default_settings['menu_slug']   = 'one-click-demo-import';
 
    return $default_settings;
}
add_filter( 'ocdi/plugin_page_setup', 'theme_canary_plugin_page_setup' );