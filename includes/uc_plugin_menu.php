<?php

function uc_page_markup(){

    if ( !current_user_can('manage_options') ) {
        return;
    }

    include(UC_PLUGIN_DIR . 'templates/admin/settings-page.php');

}

function uc_setting_page(){

    add_menu_page(

        __('Under Construction', 'uc_plugin'),
        __('Under Construction', 'uc_plugin'),
        'manage_options',
        'uc-plugin',
        'uc_page_markup',
        'dashicons-admin-generic',
        100

    );

}

add_action('admin_menu', 'uc_setting_page');