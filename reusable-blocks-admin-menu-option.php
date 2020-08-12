<?php
/**
 * Plugin Name: Reusable Blocks Admin Menu Option
 * Plugin URI: https://websitesbuiltforyou.com/plugins/wordpress/reusable-blocks-admin-menu-option
 * Description: Add an entry to the admin menu for quick access to the Manage Reusable Blocks page
 * Author: Websites Built For You
 * Author URI: https://websitesbuiltforyou.com
 * Version: 1.0.1
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses
 * Text Domain: reusable-blocks-admin-menu-option
 * Domain Path: /assets/languages
 * Requires at least: 5.0
 * Requires PHP: 5.6
 *
 * (c) 2019 Steve Perkins, Websites Built For You
 *
 * Reusable Blocks Admin Menu Option is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free Software
 * Foundation, either version 2 of the License, or any later version.
 *
 * Reusable Blocks Admin Menu Option is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Reusable Blocks Admin Menu Option If not, see https://www.gnu.org/licenses.
 *
 * @package reusable-blocks-admin-menu-option
 */

namespace WBFY\ReusableBlocksAdminMenuOption;

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( '\WBFY\ReusableBlocksAdminMenuOption\Controller' ) ) {
	define( 'WBFY\ReusableBlocksAdminMenuOption\VERSION', '1.0.1' );
	define( 'WBFY\ReusableBlocksAdminMenuOption\PLUGIN_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

	require_once PLUGIN_DIR . '/src/includes/class-autoloader.php';
	Autoloader::register();

	$reusable_blocks_admin_menu_option = ( new Controller() );
}
