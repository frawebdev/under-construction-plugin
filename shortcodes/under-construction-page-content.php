<?php

function uc_page_content(){

    $uc_page_content = include UC_PLUGIN_DIR . 'templates/frontend/uc-page-content.php';

    echo $uc_page_content;

}

add_shortcode('under_construction_content', 'uc_page_content');