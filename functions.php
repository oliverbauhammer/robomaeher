<?php

if ( ! function_exists( 'rm_setup' ) ) {

	function rm_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'rm' ),
				'primary-sub-1'  => __( 'Primary sub menu 1', 'rm' ),
				'primary-sub-2'  => __( 'Primary sub menu 2', 'rm' ),
				'primary-sub-3'  => __( 'Primary sub menu 3', 'rm' ),
				'primary-sub-4'  => __( 'Primary sub menu 4', 'rm' ),
				'primary-sub-5'  => __( 'Primary sub menu 5', 'rm' ),
				'service'  => __( 'Service menu', 'rm' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		$logo_width  = 223;
		$logo_height = 62;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);
	}
}
add_action( 'after_setup_theme', 'rm_setup' );

function registerScript()
{
	wp_dequeue_style( 'wp-block-library' );
	wp_enqueue_style('styles', get_template_directory_uri().'/dist/style.css');

    wp_deregister_script('jquery');
    wp_deregister_script('wp-embed');
    wp_enqueue_script('main', get_template_directory_uri().'/dist/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'registerScript');

function disable_wp_emojicons()
{
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    add_filter('tiny_mce_plugins', 'disable_emojicons_tinymce');
}
add_action('init', 'disable_wp_emojicons');

add_filter('show_admin_bar', '__return_false');

add_filter('wpcf7_load_js', '__return_false');
add_filter('wpcf7_load_css', '__return_false');

add_filter('pre_get_shortlink', '__return_empty_string');
add_filter('wpseo_canonical', '__return_false');


function remove_some_metas()
{
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'rel_canonical');
}
add_action('after_setup_theme', 'remove_some_metas');