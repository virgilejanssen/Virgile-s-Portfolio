<?php
 
// Load the theme stylesheets
function theme_styles()  
{wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );}
add_action('wp_enqueue_scripts', 'theme_styles');


// Load the theme scripts
function theme_name_scripts() 
{wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), true );}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
 

function migration_setup() {
	// Register Primary Menu
	register_nav_menu( 'primary', __( 'Primary Menu', 'migration' ) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 400, 9999 );
}
add_action( 'after_setup_theme', 'migration_setup' );


// Enable SVGs
function allow_svg_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_mime_types' );


// Filter the <p> tags from the images and iFrame
function filter_ptags_on_images($content)
{
$content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('the_content', 'filter_ptags_on_images');



?>
