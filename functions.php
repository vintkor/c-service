<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
add_theme_support('post-thumbnails');
remove_action('wp_head', 'wp_generator');

function tel_widget_init() {
	register_sidebar( array(
		'name'          => 'Телефоны в шапке',
		'id'            => 'tel',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<span class="hidden">',
		'after_title'   => '</span>',
	) );
}

function callme_widget_init() {
	register_sidebar( array(
		'name'          => 'Текст обратного звонка',
		'id'            => 'callme',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<span class="hidden">',
		'after_title'   => '</span>',
	) );
}

function google_map_widget_init() {
	register_sidebar( array(
		'name'          => 'Карта для контактов',
		'id'            => 'maps',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<span class="hidden">',
		'after_title'   => '</span>',
	) );
}

function form_widget_init() {
	register_sidebar( array(
		'name'          => 'Контактная форма',
		'id'            => 'form',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<span class="hidden">',
		'after_title'   => '</span>',
	) );
}

add_action('init', 'register_nav_menus_on_init');

add_action( 'widgets_init', 'tel_widget_init' );
add_action( 'widgets_init', 'callme_widget_init' );
add_action( 'widgets_init', 'google_map_widget_init' );
add_action( 'widgets_init', 'form_widget_init' );

function custom_disable_embeds_init() {

    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}

function register_nav_menus_on_init() {
    register_nav_menus(array(
        'main-menu' => 'Меню сайта',
        'sub-menu' => 'Меню в футере левое',
        'sub2-menu' => 'Меню в футере правое',
    ));
}
