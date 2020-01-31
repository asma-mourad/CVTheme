<?php
/**
 * CVTheme Theme Customizer
 *
 * @package CVTheme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cvtheme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
//	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	//$wp_customize->get_setting( 'job_title' )->transport     = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '#bloginfo',
			'render_callback' => 'cvtheme_customize_partial_blogname',
		) );
		
	}
		if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'job_title', array(
			'selector'        => '.fa-briefcase',
		) );
		}
		if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'facebook-link', array(
			'selector'        => '.fa-facebook-official',
		) );
		
	}
}
add_action( 'customize_register', 'cvtheme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cvtheme_customize_partial_blogname() {
	bloginfo( 'name' );
}



/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cvtheme_customize_preview_js() {
	wp_enqueue_script( 'cvtheme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'cvtheme_customize_preview_js' );

// register setting for personal info


function cvtheme_personalInfo( $wp_customize ) {

$wp_customize->add_section( 'personal_info' , array(
  'title' => 'Personal Info',
 'priority' => 1,
) );

// add a setting 
$wp_customize->add_setting('job_title', 
array(
'default' => cvtheme_get_customiser_default( 'job_title'),
));
// Add a control
$wp_customize->add_control('job_title',
array(
'type' => 'text',
'label' => 'Job Title',
'section' => 'personal_info',

)  );
// add a setting 
$wp_customize->add_setting('location', 
array(
'default' => cvtheme_get_customiser_default( 'location'),
));
// Add a control
$wp_customize->add_control('location',
array(
'type' => 'text',
'label' => 'Location',
'section' => 'personal_info',

)  );
// add a setting 
$wp_customize->add_setting('email', 
array(
'default' => cvtheme_get_customiser_default( 'email'),
));
// Add a control
$wp_customize->add_control('email',
array(
'type' => 'text',
'label' => 'Email',
'section' => 'personal_info',

)  );
// add a setting 
$wp_customize->add_setting('phone', 
array(
'default' => cvtheme_get_customiser_default( 'phone'),
));
// Add a control
$wp_customize->add_control('phone',
array(
'type' => 'text',
'label' => 'Phone',
'section' => 'personal_info',

)  );

}

add_action( 'customize_register', 'cvtheme_personalInfo' );


// links to social
function cvtheme_social_links( $wp_customize ) {

$wp_customize->add_section( 'social_links' , array(
  'title' => 'Social Links',
 'priority' => 2,
) );

// add a setting 
$wp_customize->add_setting('facebook-link', 
array(
'default' => cvtheme_get_customiser_default( 'facebook-link'),
));
// Add a control
$wp_customize->add_control('facebook-link',
array(
'type' => 'text',
'label' => 'Facebook Link',
'section' => 'social_links',

)  );
// add a setting 
$wp_customize->add_setting('instagram-link', 
array(
'default' => cvtheme_get_customiser_default( 'instagram-link'),
));
// Add a control
$wp_customize->add_control('instagram-link',
array(
'type' => 'text',
'label' => 'Instagram Link',
'section' => 'social_links',

)  );

// add a setting 
$wp_customize->add_setting('snapchat-link', 
array(
'default' => cvtheme_get_customiser_default( 'snapchat-link'),
));
// Add a control
$wp_customize->add_control('snapchat-link',
array(
'type' => 'text',
'label' => 'Snapchat Link',
'section' => 'social_links',

)  );


// add a setting 
$wp_customize->add_setting('pinterest-link', 
array(
'default' => cvtheme_get_customiser_default( 'pinterest-link'),
));
// Add a control
$wp_customize->add_control('pinterest-link',
array(
'type' => 'text',
'label' => 'Pinterest Link',
'section' => 'social_links',

)  );

// add a setting 
$wp_customize->add_setting('twitter-link', 
array(
'default' => cvtheme_get_customiser_default( 'twitter-link'),
));
// Add a control
$wp_customize->add_control('twitter-link',
array(
'type' => 'text',
'label' => 'Twitter Link',
'section' => 'social_links',

)  );

// add a setting 
$wp_customize->add_setting('linkedin-link', 
array(
'default' => cvtheme_get_customiser_default( 'linkedin-link'),
));
// Add a control
$wp_customize->add_control('linkedin-link',
array(
'type' => 'text',
'label' => 'Linkedin Link',
'section' => 'social_links',

)  );

}

add_action( 'customize_register', 'cvtheme_social_links' );

// add get_theme_mod defaults
function cvtheme_get_customiser_default( $theme_mod ) {
	$defaults = array(
	
		'facebook-link'     => '#',
		'instagram-link' => '#',
		'snapchat-link' => '#',
		'pinterest-link' => '#',
		'twitter-link' => '#',
		'linkedin-link' => '#',
		'job_title' => 'Designer',
		'location' => 'London',
		'email' => 'ex@gmail.com',
		'phone' => '1224435534',
		
		
		
	);

	return isset( $defaults[$theme_mod] ) ? $defaults[$theme_mod] : false;
}