<?php

/*  Theme setup
/* ------------------------------------ */
if ( !function_exists( 'mytheme_setup' ) ) {

	function mytheme_setup() {

		add_theme_support( "title-tag" );

		// Enable automatic feed links
		add_theme_support( 'automatic-feed-links' );

		// Enable featured image
		add_theme_support( 'post-thumbnails' );

		// Thumbnail sizes
		add_image_size( 'mytheme_custom-size', 800, 493, true ); //(cropped)

        // Custom menu areas
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'mytheme' ),
		) );

		// Load theme languages
		load_theme_textdomain( 'mytheme', get_template_directory().'/languages' );

	}

}
add_action( 'after_setup_theme', 'mytheme_setup' );


/* ------------------------------------
Customize
------------------------------------- */
if (!function_exists('mytheme_customize_register')) {
    function mytheme_customize_register($wp_customize) {

        // HERO PAGE
        $wp_customize->add_section('hero_section', array(
            'title'    => __('Hero Section', 'mytheme'),
            'priority' => 30,
            'capability' => 'edit_theme_options',
        ));

        // Custumize image hero page
        $wp_customize->add_setting('hero_image', array(
            'default'   => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw', // Sanitize per URL
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'hero_image_control', 
            array(
                'label'    => __('Hero Image', 'mytheme'),
                'section'  => 'hero_section',
                'settings' => 'hero_image',
            )
        ));

        // Custumize title hero page
        $wp_customize->add_setting('hero_title', array(
            'default'           => 'Main title and motto',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        // Check for title hero page
        $wp_customize->add_control('hero_title', array(
            'label'    => __('Hero Title', 'mytheme'),
            'section'  => 'hero_section',
            'type'     => 'text',
        ));

        // ABOUT US PAGE: Custumize text and images
        $wp_customize->add_section('custom_text', array(
            'title'    => __('About Us - Custom Text', 'mytheme'),
            'priority' => 30,
        ));

        // Add checks for texts
        $texts = array(
            'title_1' => 'Title 1',
            'description_1' => 'Description 1',
            'title_2' => 'Title 2',
            'description_2' => 'Description 2',
            'title_3' => 'Title 3',
            'description_3' => 'Description 3',
        );

        foreach ($texts as $setting => $default) {
            $wp_customize->add_setting($setting, array(
                'default'           => $default,
                'sanitize_callback' => 'sanitize_text_field',
            ));

            $wp_customize->add_control($setting, array(
                'label'    => __($default, 'mytheme'),
                'section'  => 'custom_text',
                'type'     => 'text',
            ));
        }

        // ROOM PAGE: Custumize text and images
        $wp_customize->add_section('custom_text_image_section', array(
            'title'    => __('Room Page - Texts and Images', 'mytheme'),
            'priority' => 30,
        ));

        // Add checks for texts
        $texts = array(
            'room_type_1' => 'Room type 1',
            'room_text_1' => 'Text room 1',
            'room_type_2' => 'Room type 2',
            'room_text_2' => 'Text room 2',
        );

        foreach ($texts as $setting => $default) {
            $wp_customize->add_setting($setting, array(
                'default'           => $default,
                'sanitize_callback' => 'sanitize_text_field',
            ));

            $wp_customize->add_control($setting, array(
                'label'    => __($default, 'mytheme'),
                'section'  => 'custom_text_image_section',
                'type'     => 'text',
            ));
        }

        // Add checks for the images
        $images = array(
            'room_img_1' => __('Room 1', 'mytheme'),
            'room_img_2' => __('Room 2', 'mytheme'),
        );

        foreach ($images as $setting => $label) {
            $wp_customize->add_setting($setting, array(
                'sanitize_callback' => 'esc_url_raw', // Sanitize per URL
            ));

            $wp_customize->add_control(new WP_Customize_Image_Control(
                $wp_customize,
                $setting,
                array(
                    'label'    => $label,
                    'section'  => 'custom_text_image_section',
                    'settings' => $setting,
                )
            ));
        }
    }
}

add_action('customize_register', 'mytheme_customize_register');



/*  Include Styles and script
/* ------------------------------------ */
if ( ! function_exists( 'mytheme_styles_scripts' ) ) {

	function mytheme_style_scripts() {

		//wp_enqueue_script('jquery');
		wp_enqueue_script( 'mytheme-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),'', true );

		//wp_enqueue_style( 'mytheme-sourcesanspro','//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700');
        //reset the style
		wp_enqueue_style( 'mytheme-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css');

		wp_enqueue_style( 'mytheme', get_template_directory_uri().'/style.css', array(), filemtime(get_template_directory().'/style.css'), 'all' );

	}

}
add_action( 'wp_enqueue_scripts', 'mytheme_style_scripts' );