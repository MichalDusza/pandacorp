<?php
function custom_imgsrc( $img, $size ) {
    if ( isset( $img['sizes'][ $size ] ) ) {
        return $img['sizes'][ $size ];
    } elseif ( isset( $img['url'] ) ) {
        return $img['url'];
    } else {
        return '';
    }
}

add_action( 'init', function() {
//	remove_post_type_support( 'post', 'editor' );
    remove_post_type_support( 'page', 'editor' );
}, 99);

function custom_file_types_uploads($file_types){
    $add_types = array();
    $add_types['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $add_types );
    return $file_types;
}
add_action('upload_mimes', 'custom_file_types_uploads');

remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );
remove_action( 'wp_head', 'start_post_rel_link', 10 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
define( '_MILL', 1 );
define( 'ICL_DONT_LOAD_NAVIGATION_CSS', true );
define( 'ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true );
define( 'ICL_DONT_LOAD_LANGUAGES_JS', true );
define( 'HOME_ID', get_option('page_on_front') );
define( 'HOME_LINK', get_permalink(HOME_ID) );
define( 'THEME_VERSION',  wp_get_theme()->get('Version'));
define( 'TMPL_FOLDER', get_template_directory());
define( 'TMPL_FOLDER_URI', get_template_directory_uri());
add_filter( 'jpeg_quality', 'jpeg_full_quality' );

function jpeg_full_quality( $quality ) {
    return 95;
}

function custom_oai( $tresc ) {
    $tresc = preg_replace( '/\s([a-zA-Z0-9]{1})\s/', ' $1&nbsp;', $tresc );
    return $tresc;
}

function custom_content( $tresc ) {
    $tresc = apply_filters( 'the_content', $tresc );
    $tresc = custom_oai( $tresc );
    return $tresc;
}
function custom_excerpt( $tresc ) {
    $tresc = apply_filters( 'the_excerpt', $tresc );
    $tresc = custom_oai( $tresc );
    return $tresc;
}

function custom_no_excerpt( $tresc ) {
    $more_tag = '<!--more-->';
    if (strpos($tresc,$more_tag)!==false) {
        $tresc = substr($tresc, strpos($tresc,$more_tag) + strlen($more_tag));
    }
    $tresc = custom_content( $tresc);
    return $tresc;
}
function custom_only_excerpt( $tresc ) {
    $return = $tresc;
    $more_tag = '<!--more-->';
    if (strpos($tresc,$more_tag)!==false) {
        $return = custom_content( substr($tresc, 0, strpos($tresc,$more_tag)));
    }
    return $return;
}


function custom_editor_styles() {
	add_editor_style( 'editor-style.css');
}
add_action( 'admin_init', 'custom_editor_styles' );


function custom_editor_format($data) {
	$style_formats = array(
		array(
			'title' => 'Wyróżnienia',
			'items' =>  array(
				array(
					'title' => 'wyróżniony',
					'inline' => 'span',
					'classes' => 'wyrozniony'
				),
			)
		),
	);
	$data['style_formats_merge'] = true;
	$data['style_formats'] = json_encode( $style_formats );
	$data['cache_suffix'] = 'v='.THEME_VERSION;
	return $data;
}
add_filter('tiny_mce_before_init', 'custom_editor_format' );

add_theme_support( 'post-thumbnails' );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Sezon',
		'menu_title'	=> 'Sezon',
		'menu_slug' 	=> 'custom-season-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position'		=> '22.3',
		'icon_url'      => 'dashicons-art',
	));
}
