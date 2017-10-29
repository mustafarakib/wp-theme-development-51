<?php

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'stock_mr_register_required_plugins' );

function stock_mr_register_required_plugins() {

	$plugins = array(

		array(
			'name'               => 'Stock Toolkit',
            'slug'               => 'stock-toolkit',
            'source'             => get_template_directory() . '/inc/plugins/stock-toolkit.zip',
            'required'           => true,
            'version'            => '1.0',
            'force_activation'   => true,
            'force_deactivation' => true,
        ),
        array(
            'name'               => 'WPBakery Visual Composer',
            'slug'               => 'js_composer',
            'source'             => get_template_directory() . '/inc/plugins/js_composer.zip',
            'required'           => true,
            'version'            => '5.2.1',
            'force_activation'   => false,
            'force_deactivation' => false,
        ),
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
        array(
            'name'      => 'Breadcrumb NavXT',
            'slug'      => 'breadcrumb-navxt',
            'required'  => true,
        ),
    );

    $config = array(
        'id'           => 'stock-mr',
        'default_path' => '',
        'menu'         => 'stock-install-plugins',
        'has_notices'  => true,
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => false,
        'message'      => '',
    );

    tgmpa( $plugins, $config );
}
