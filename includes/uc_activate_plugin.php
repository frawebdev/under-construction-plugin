<?php

    $options = get_option('uc_plugin_settings');

    function redirect_to_uc_page(){

            if(!is_user_logged_in()){

                if(!is_page('under-construction')){
    
                    wp_redirect(home_url('/under-construction'));
        
                    exit;
        
                }
    
            }

    }

    add_action('template_redirect', 'redirect_to_uc_page');
    