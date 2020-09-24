<div class="wrap">

<h1><?php esc_html_e(get_admin_page_title()); ?></h1>

<form action="options.php" method="POST">

<?php settings_fields('uc_plugin_settings'); ?>

<?php do_settings_sections('uc-plugin'); ?>

<?php submit_button(); ?>

<?php $options = get_option('uc_plugin_settings'); 
print_r($options);
echo $options['msg'];?>

</form>

</div>

