<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function vw_real_estate_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ibtana - WordPress Website Builder', 'vw-real-estate' ),
			'slug'             => 'ibtana-visual-editor',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'vw_real_estate_register_recommended_plugins' );