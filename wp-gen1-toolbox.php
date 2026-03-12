<?php
/**
 * Plugin Name: WP Gen1 Toolbox
 * Plugin URI:  https://nedba.se/wp-gen1-toolbox
 * Description: A collection of useful tools and patches for WordPress sites.
 * Version:     0.0.1
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-gen1-toolbox
 */

defined('ABSPATH') || exit;

require_once plugin_dir_path(__FILE__) . 'actions/admin_notice.php';
require_once plugin_dir_path(__FILE__) . 'actions/unload_separate_core_block_assets.php';
