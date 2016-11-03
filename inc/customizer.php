<?php
/**
 * Logo Customizer
 */

function m1_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'm1_logo' ); // Add setting for logo uploader

	// Add control for logo uploader (actual uploader)
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
		'label'    => __( 'Upload Logo (replaces text)', 'm1' ),
		'section'  => 'title_tagline',
		'settings' => 'm1_logo',
	) ) );
}
add_action( 'customize_register', 'm1_customize_register' );

function copyright_customizer( $wp_customize ) {
	$wp_customize->add_section(
		'example_section_one',
		array(
			'title' => 'Copyright',
			'description' => 'This will appear in the footer.',
			'priority' => 35,
		)
	);

	$wp_customize->add_setting(
		'copyright_textbox',
		array(
			'default' => 'Continuing Education',
		)
	);

	$wp_customize->add_control(
		'copyright_textbox',
		array(
			'label' => 'Copyright text',
			'section' => 'example_section_one',
			'type' => 'text',
		)
	);

}

add_action( 'customize_register', 'copyright_customizer' );



function registration_customizer( $wp_customize ) {
	$wp_customize->add_section(
		'registration_section',
		array(
			'title' => 'Registration Link',
			'description' => 'This will add the registration link to all courses.',
			'priority' => 36,
		)
	);

	$wp_customize->add_setting(
		'registration_textbox',
		array(
			'default' => '#',
		)
	);

	$wp_customize->add_control(
		'registration_textbox',
		array(
			'label' => 'URL',
			'section' => 'registration_section',
			'type' => 'text',
		)
	);

}

add_action( 'customize_register', 'registration_customizer' );


function m2_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'm2_logo' ); // Add setting for logo uploader

    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm2_logo', array(
        'label'    => __( 'Upload Menu Logo', 'm2' ),
        'section'  => 'title_tagline',
        'settings' => 'm2_logo',
    ) ) );
}
add_action( 'customize_register', 'm2_customize_register' );