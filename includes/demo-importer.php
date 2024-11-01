<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://themecanary.com
 * @since      1.0
 *
 * @package    Theme_Canary_Demo_Import
 */
class Theme_Canary_Demo_Import {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Theme_Canary_Demo_Import_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'THEME_CANARY_DEMO_IMPORT_VERSION' ) ) {
			$this->version = THEME_CANARY_DEMO_IMPORT_VERSION;
		} else {
			$this->version = '1.0';
		}
		$this->plugin_name = 'theme-canary-demo-importer';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Theme_Canary_Demo_Import_Loader. Orchestrates the hooks of the plugin.
	 * - Theme_Canary_Demo_Import_i18n. Defines internationalization functionality.
	 * - Theme_Canary_Demo_Import_Admin. Defines all hooks for the admin area.
	 * - Theme_Canary_Demo_Import_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/demo-importer-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/demo-importer-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/demo-importer-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/demo-importer-public.php';

		$this->loader = new Theme_Canary_Demo_Import_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Theme_Canary_Demo_Import_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Theme_Canary_Demo_Import_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Theme_Canary_Demo_Import_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Theme_Canary_Demo_Import_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Theme_Canary_Demo_Import_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
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

$theme = wp_get_theme();
$themes = array(
    "Canary Led" => "canary-led.php",
    "Canary Led Pro" => "canary-led-pro.php",
    "Snapfolio" => "snapfolio.php",
    "Snapfolio Pro" => "snapfolio-pro.php",
    "MagPage" => "magpage.php",
    "MagPage Pro" => "magpage-pro.php",
    "BlackCart" => "blackcart.php",
    "BlackCart Pro" => "blackcart-pro.php"

    // add more themes as needed
);

$theme = $theme->Name; // Dynamic call the theme name

if (array_key_exists($theme, $themes)) {

	require_once plugin_dir_path(__FILE__) . 'files/' . $themes[$theme];

}


function theme_canary_plugin_intro_text( $default_text ) {
	$default_text .= '<div class="ocdi__intro-text"><h2>Theme Canary Demo Import<h2></div>';

	return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'theme_canary_plugin_intro_text' );


if (!in_array('one-click-demo-import/one-click-demo-import.php', apply_filters('active_plugins', get_option('active_plugins')))) {
	function theme_canary_admin_notice_ignore() {
	global $current_user;
	$user_id = $current_user->ID;
	$plugin_is_installed = file_exists( WP_PLUGIN_DIR. '/one-click-demo-import' );
	$plugin_is_active = is_plugin_active( 'one-click-demo-import/one-click-demo-import.php' );

	if (!get_user_meta($user_id, 'theme_canary_plugin_notice_ignore')) { ?>
		
		<div class="notice">
		    	<a href="?theme-canary-ignore-notice" class="notice-dismiss dashicons dashicons-dismiss dashicons-dismiss-icon"></a>
		    	<p><?php esc_html_e( 'To import demos, please install and activate the One Click Demo Import plugin', 'theme-canary-demo-importer' ); ?></p>
		    	<p><?php esc_html_e( "The Demo Importer plugin is designed to work exclusively with the Canary's Theme.", 'theme-canary-demo-importer' ); ?></p>
		    	<?php if ( ! $plugin_is_installed  ): ?>
					<a href="javascript:void(0);"  class="dummy-import-button theme-canary-install-plugin" >
					    <span class="dashicons dashicons-arrow-down-alt"></span>
					    <?php esc_html_e( 'Install Plugin', 'theme-canary-demo-import' ); ?>
					</a>
					<?php elseif ( $plugin_is_installed && ! $plugin_is_active ): ?>
					<a href="javascript:void(0);"  class="dummy-import-button theme-canary-activate-plugin" >
					    <span class="dashicons dashicons-arrow-down-alt"></span>
					    <?php esc_html_e( 'Activate Plugin', 'theme-canary-demo-import' ); ?>
					</a>
				<?php else:?>
					<a href="<?php echo esc_url( admin_url( 'themes.php?page=one-click-demo-import' ) ); ?>"  class="dummy-import-button" >
					    <span class="dashicons dashicons-arrow-down-alt"></span>
					    <?php esc_html_e( 'Explore Site Templates', 'theme-canary-demo-import' ); ?>
					</a>
				<?php endif; ?>
		    </div>
		
	<?php }
	}
	add_action( 'admin_notices', 'theme_canary_admin_notice_ignore' );
}
	
function theme_canary_plugin_notice_ignore() {
	
	global $current_user;
	
	$user_id = $current_user->ID;
	
	if (isset($_GET['theme-canary-ignore-notice'])) {
		
		add_user_meta($user_id, 'theme_canary_plugin_notice_ignore', 'true', true);
		
	}
	
}
add_action('admin_init', 'theme_canary_plugin_notice_ignore');