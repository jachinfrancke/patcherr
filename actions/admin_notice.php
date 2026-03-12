<?php
/**
 * Show a notice to users who can activate plugins (typically administrators)
 * @return void
 */
function toolbox_admin_notice()
{
    // Bail out early if the notice is disabled via the filter in the project-site
    if (apply_filters('disable_toolbox_admin_notice', false)) {
        return;
    }

    // Show the notice only to users who can activate plugins (typically administrators)
    if (current_user_can('activate_plugins')) {
        echo sprintf(
            '<div class="notice notice-success is-dismissible"><p>%s</p></div>',
            esc_html__('TW Toolbox is activated...', 'tw-toolbox')
        );
    }
}

add_action('admin_notices', 'toolbox_admin_notice');
