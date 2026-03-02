<?php
/**
 * Plugin Name: Patcherr
 * Version: 0.0.4
 */
defined('ABSPATH') || exit;

require_once __DIR__ . '/vendor/autoload.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$updateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/jachinfrancke/patcherr/',
    __FILE__,
    'patcherr'
);

$updateChecker->getVcsApi()->enableReleaseAssets();


add_action('admin_notices', function () {
    echo '<div class="notice notice-success is-dismissible"><p>Patcherr is loaded and ready to patch your site!!! v2.😉!!!</p></div>';
});
