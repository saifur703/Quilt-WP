<?php

require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'quilt_register_required_plugins' );

function quilt_register_required_plugins() {

	$plugins = array(

		
		array(
			'name'               => 'Toolkit Plugin for Quilt', 
			'slug'               => 'quilt-toolikt',
			'source'             => get_template_directory() . '/lib/plugins/quilt-toolikt.zip', 
			'required'           => true, 
		),

		array(
			'name'      => 'Kirki Customizer Framework',
			'slug'      => 'kirki',
			'required'  => true,
		),

		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
		),

	);

	$config = array(
		'id'           => 'quilt', 
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,                   
		'dismissable'  => true, 
		'dismiss_msg'  => '',   
		'is_automatic' => false,  
		'message'      => '',   
	);

	tgmpa( $plugins, $config );
}
