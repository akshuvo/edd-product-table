<?php
/**
 * Plugin Name: Easy Digital Downloads - Product Table
 * Plugin URI: https://plugins.addonmaster.com/eddpt/
 * Bitbucket Plugin URI: https://github.com/akshuvo/eddpt
 * Description: Product table for Easy Digital Downloads
 * Author: AddonMaster
 * Author URI: https://addonmaster.com
 * Version: 1.0.0
 * Text Domain: eddpt
 * Domain Path: /lang
 * EDD tested up to: 2.9.23
 *
 */

/**
* Including Plugin file for security
* Include_once
*
* @since 1.0.0
*/
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

define( 'EDDPT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );


/**
 *	Plugin Main Class
 */
if ( ! class_exists( 'Easy_Digital_Downloads_Product_Table' ) ) :
	class Easy_Digital_Downloads_Product_Table{

		/**
		 * Constructor
		 */
		public function __construct() {

			// Admin Notice
			add_action('admin_notices', array( $this, 'edd_inactive_notice_warn' ) );

			// Admin action
			add_action('admin_init', array( $this, 'admin_action' ) );

			// Loaded textdomain
			add_action('plugins_loaded', array( $this, 'plugin_loaded_action' ), 10, 2);

			// Enqueue frontend scripts
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

			// Added plugin action link
			add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), array( $this, 'action_links' ) );

		}

		/**
		 * Adds plugin action links.
		 */
		function action_links( $links ) {
			$plugin_links = array(
				'<a href="' . admin_url( 'admin.php?page=_eddpt' ) . '">' . esc_html__( 'Settings', 'eddpt' ) . '</a>',
			);
			return array_merge( $plugin_links, $links );
		}

		/**
		 * Plugin Loaded Action
		 */
		function plugin_loaded_action() {

			// Loading Text Domain for Internationalization
			load_plugin_textdomain( 'eddpt', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );

			/**
			 *	Plugin Functions
			 */
			require_once( dirname( __FILE__ ) . '/inc/eddpt-functions.php' );

			/**
			 *	Table Layout
			 */
			require_once( dirname( __FILE__ ) . '/inc/eddpt-layout.php' );

		}


		/**
		 * Admin Action
		 */
		function admin_action() {

			require_once( dirname( __FILE__ ) . '/inc/eddpt-admin.php' );

		}

		/**
		 * Enqueue Frontend Scripts
		 */
		function enqueue_scripts() {
			$ver = current_time( 'timestamp' );

		    wp_enqueue_style( 'eddpt', EDDPT_PLUGIN_URL . 'assets/css/eddpt.css', null, $ver );

		    wp_enqueue_script( 'eddpt', EDDPT_PLUGIN_URL . 'assets/js/eddpt.js', array('jquery'), $ver );
			wp_localize_script( 'eddpt', 'eddpt_ajax_vars',
            	array(
            	    'nonce' => wp_create_nonce( 'eddpt_nonce' ),
            	    'ajaxurl' => admin_url( 'admin-ajax.php' ),
            	)
            );
		}


		/**
		 * EDD Plugin inactive Notice
		 */
		function edd_inactive_notice_warn() {

		    if ( class_exists( 'Easy_Digital_Downloads' ) ) {
		        return;
		    }

			?>
			<div class="notice notice-warning is-dismissible">
			    <p>
			    	<strong><?php echo esc_html__( 'Easy Digital Downloads Product Table requires Easy Digital Downloads to be activated ', 'eddpt' ); ?> <a href="<?php echo esc_url( admin_url('/plugin-install.php?s=Easy+Digital+Downloads&tab=search&type=term') ); ?>"><?php echo esc_html__('Install Now','eddpt'); ?></a></strong>
			    </p>
			</div>
			<?php
		}

	}

endif;


/**
* Plugin Initialize
*/
new Easy_Digital_Downloads_Product_Table();

