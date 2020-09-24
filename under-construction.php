<?php

/*
Plugin Name: Under Construction
*/

if(!defined('WPINC')){

    die;

}

define('UC_PLUGIN_MAIN_FILE', __FILE__);

define('UC_PLUGIN_URL', plugin_dir_url(__FILE__));

define('UC_PLUGIN_DIR', plugin_dir_path(__FILE__));

include(plugin_dir_path(__FILE__) . 'includes/uc_create_page.php');

include(plugin_dir_path(__FILE__) . 'includes/uc_plugin_settings_field.php');

include(plugin_dir_path(__FILE__) . 'includes/uc_plugin_menu.php');

include(plugin_dir_path(__FILE__) . 'includes/uc_activate_plugin.php');

include(plugin_dir_path(__FILE__) . 'shortcodes/under-construction-page-content.php');



