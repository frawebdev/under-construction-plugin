<?php

function add_uc_page(){

    $uc_page = array(

        'post_title'    => wp_strip_all_tags('Under Construction'),
        'post_content'  => '[under_construction_content]',
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'page'

    );

    wp_insert_post($uc_page);

}

register_activation_hook(UC_PLUGIN_MAIN_FILE, 'add_uc_page');