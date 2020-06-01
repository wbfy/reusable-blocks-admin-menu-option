<?php
/**
 * Plugin uninstaller
 *
 * @package reusable-blocks-admin-menu-option
 */

namespace WBFY\ReusableBlocksAdminMenuOption;

defined( 'WP_UNINSTALL_PLUGIN' ) || exit;

/**
 * Uninstall plugin deleting options if required
 */
$options = get_option( 'reusable_blocks_admin_menu_option' );
if ( ! isset( $options['config_data']['on_delete'] ) || $options['config_data']['on_delete'] ) {
	delete_option( 'reusable_blocks_admin_menu_option' );
}
