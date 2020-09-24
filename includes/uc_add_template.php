<?php

function uc_add_page_template($template){

    $template['template-uc.php'] = 'uc template';

    return $template;

}

add_filter('theme_page_templates', 'uc_add_page_template');



function uc_redirect_page_template($template){

    if('template-uc.php' == basename($template)){

        UC_PLUGIN_DIR . '/templates/frontend/template-uc.php';

        return $template;

    }
} 

add_filter('page_template', 'uc_redirect_page_template');