<?php
/**
 * Do not load separate core block assets - WPNG-278
 * @return void
 */
function toolbox_should_load_separate_core_block_assets($should_load)
{
    // Bail out early if the notice is disabled via the filter in the project-site
    if (apply_filters('disable_toolbox_unload_separate_core_block_assets', false)) {
        return $should_load;
    }

    // Default to not loading separate core block assets
    return false;
}

add_filter(
    'should_load_separate_core_block_assets',
    'toolbox_should_load_separate_core_block_assets'
);
