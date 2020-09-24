<?php

function uc_plugin_settings(){

    if(!get_option('uc_plugin_settings')){

        add_option('uc_plugin_settings');

    }

    add_settings_section(

        'uc_setting_section',
        __('Turn on/off the page', 'uc_plugin'),
        'uc_settings_section_callback',
        'uc-plugin'

    );

    add_settings_field(

        'uc_settings_image',
        __('Image url', 'uc_plugin'),
        'setting_image_callback',
        'uc-plugin',
        'uc_setting_section'
    );

    add_settings_field(

        'uc_settings_message',
        __('Message', 'uc_plugin'),
        'setting_message_callback',
        'uc-plugin',
        'uc_setting_section'
    );

    add_settings_field(

        'uc_settings_secondary_message',
        __('Secondary Message', 'uc_plugin'),
        'setting_secondary_message_callback',
        'uc-plugin',
        'uc_setting_section'
    );

    add_settings_field(

        'uc_settings_switch',
        __('Switch', 'uc_plugin'),
        'setting_switch_callback',
        'uc-plugin',
        'uc_setting_section',
        [
            'option_one' => 'on',
            'option_two' => 'off'
        ]
    );

    register_setting(

        'uc_plugin_settings',
        'uc_plugin_settings'

    );
    
}

add_action('admin_init', 'uc_plugin_settings');

function uc_settings_section_callback(){

    esc_html_e('description');

}

function setting_switch_callback($args){

    $options = get_option('uc_plugin_settings');

    $switch = '';

    if(isset($options['switch'])){

        $switch = esc_html($options['switch']);

    }

    $html = '<input type="radio" id="opt-on" name="uc_plugin_settings[switch]" value="1"' . checked(1, $switch, false) . '/>';
    $html .= '<label for="opt-on">On</label><br>';
    $html .= '<input type="radio" id="opt-off" name="uc_plugin_settings[switch]" value="2"' . checked(2, $switch, false) . '/>';
    $html .= '<label for="opt-on">Off</label>';

    echo $html;

}

function setting_message_callback(){

    $options = get_option('uc_plugin_settings');

    $msg = '';

    if(isset($options['msg'])){

        $msg = esc_html($options['msg']);

    }

    $html = '<input type="text" name="uc_plugin_settings[msg]" required>';

    echo $html;

}

function setting_secondary_message_callback(){

    $options = get_option('uc_plugin_settings');

    $scnmsg = '';

    if(isset($options['scnmsg'])){

        $scnmsg = esc_html($options['scnmsg']);

    }

    $html =  '<input type="text" name="uc_plugin_settings[scnmsg]">';

    echo $html;

}

function setting_image_callback(){

    $options = get_option('uc_plugin_settings');

    $img = '';

    if(isset($options['img'])){

        $img = esc_html($options['img']);

    }

    $html = '<input type="text" name="uc_plugin_settings[img]" required>';

    echo $html;

}