<?php
/**
 * Main plugin loader
 *
 * @package reusable-blocks-admin-menu-option
 */

namespace WBFY\ReusableBlocksAdminMenuOption;

defined( 'ABSPATH' ) || exit;

/**
 * Controller class
 */
class Controller {

	/**
	 * Initialise plugin and menus
	 */
	public function __construct() {
		// Add menu link to post type = wp_blocks.
		add_action( 'admin_menu', array( $this, 'add_menu_entry' ) );

		// Load translations.
		add_action( 'plugins_loaded', array( $this, 'load_i18n' ) );
	}

	/**
	 * Add wp_blocks post type to menu
	 */
	public function add_menu_entry() {
		add_menu_page(
			esc_html__( 'Reusable Blocks', 'reusable-blocks-admin-menu-option' ),
			esc_html__( 'Reusable Blocks', 'reusable-blocks-admin-menu-option' ),
			'delete_published_posts',
			'edit.php?post_type=wp_block',
			'',
			'',
			21
		);
	}

	/**
	 * Load I18N data
	 */
	public function load_i18n() {
		load_plugin_textdomain( 'reusable-blocks-admin-menu-option', false, dirname( plugin_basename( __FILE__ ) ) . '/assets/languages/' );
	}
}
