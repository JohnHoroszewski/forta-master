<?php 
function forta_master_customizer( $wp_customize ) {

	// Customizer Sections
	$wp_customize->add_section( 'forta_master_tagline_section' , array(
	    'title'       => __( 'Site Tagline', 'forta_master' ),
	    'priority'    => 30,
	    'description' => 'Enter the site tagline here',
	) );

	$wp_customize->add_section( 'forta_master_color_section' , array(
	    'title'       => __( 'Site Accent Color', 'forta_master' ),
	    'priority'    => 30,
	    'description' => 'Here you can adjust the site accent color',
	) );

	$wp_customize->add_section( 'forta_master_logo_section' , array(
	    'title'       => __( 'Logo', 'forta_master' ),
	    'priority'    => 30,
	    'description' => 'Upload a logo to replace the default site name and description in the header',
	) );

	$wp_customize->add_section( 'forta_master_social_section' , array(
	    'title'       => __( 'Social Media', 'forta_master' ),
	    'priority'    => 30,
	    'description' => 'Add your social media links and icons',
	) );

	// Remove default sections
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );


	// Customizer Settings
	$wp_customize->add_setting( 'forta_master_tagline', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_logo' );
	$wp_customize->add_setting( 'forta_master_accent_color', array( 'default' => '' ));
	$wp_customize->add_setting( 'forta_master_social' );
	$wp_customize->add_setting( 'forta_master_social_facebook_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_twitter_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_gplus_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_linkedin_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_youtube_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_vimeo_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_pinterest_link', array( 'default' => __( '' ), 'forta_master' ) );

	// Customizer Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_tagline', array(
	    'label'    => __( 'Tagline', 'forta_master' ),
	    'section'  => 'forta_master_tagline_section',
	    'settings' => 'forta_master_tagline',
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'forta_master_logo', array(
	    'label'    => __( 'Logo', 'forta_master' ),
	    'section'  => 'forta_master_logo_section',
	    'settings' => 'forta_master_logo',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_facebook_link', array(
	    'label'    => __( 'Facebook Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_facebook_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_twitter_link', array(
	    'label'    => __( 'Twitter Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_twitter_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_gplus_link', array(
	    'label'    => __( 'Google Plus Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_gplus_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_linkedin_link', array(
	    'label'    => __( 'LinkedIn Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_linkedin_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_youtube_link', array(
	    'label'    => __( 'YouTube Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_youtube_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_vimeo_link', array(
	    'label'    => __( 'Vimeo Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_vimeo_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_pinterest_link', array(
	    'label'    => __( 'Pinterest Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_pinterest_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'forta_master_accent_color', array(
	'label'      => __( 'Accent Color', 'forta_master' ),
	'section'    => 'forta_master_color_section',
	'settings'   => 'forta_master_accent_color',
) ) );
}
add_action( 'customize_register', 'forta_master_customizer' );