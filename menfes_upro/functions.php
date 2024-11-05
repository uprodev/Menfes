<?php 

// show_admin_bar( false );

require_once 'inc/cpt.php';
require_once 'inc/ajax.php';

add_action('wp_enqueue_scripts', 'load_style_script');
function load_style_script(){
	wp_enqueue_style('my-fontawesome', get_stylesheet_directory_uri() . '/fonts/fontawesome/css/all.min.css');
    wp_enqueue_style('my-bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('my-style', get_stylesheet_directory_uri() . '/css/style.css');
    wp_enqueue_style('my-style-main', get_stylesheet_directory_uri() . '/style.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('my-bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js', array(), false, true);
    wp_enqueue_script('my-headroom', get_stylesheet_directory_uri() . '/js/headroom.js', array(), false, true);
    wp_enqueue_script('my-lenis', get_stylesheet_directory_uri() . '/js/lenis.js', array(), false, true);
    wp_enqueue_script('my-swiper', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('my-main', get_stylesheet_directory_uri() . '/js/main.js', array(), false, true);
    wp_enqueue_script('my-add', get_stylesheet_directory_uri() . '/js/add.js', array(), false, true);
}


add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header' => 'Header menu',
	) );
});


add_theme_support( 'title-tag' );
add_theme_support('html5');
add_theme_support( 'post-thumbnails' ); 


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Main settings',
		'menu_title'	=> 'Theme options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


add_filter('wpcf7_autop_or_not', '__return_false');


function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyDiyT05YehIdz2LrV-QOeRa5M18WfKtlnY');
}
add_action('acf/init', 'my_acf_init');


add_filter('tiny_mce_before_init', 'override_mce_options');
function override_mce_options($initArray) {
	$opts = '*[*]';
	$initArray['valid_elements'] = $opts;
	$initArray['extended_valid_elements'] = $opts;
	return $initArray;
}


function add_class_content($string, $p_class='', $h_class='') {

    if (str_contains($string, '<h') && $h_class) {
        foreach (range(1,6) as $i) {
            $from[] = "<h$i";
            $to[] = '<h'. $i .' class="'. $h_class . '"';
        }
    } 
    if (str_contains($string, '<p') && $p_class){
        $from[] = "<p";
        $to[] = '<p class="'. $p_class . '"';
    }

    return str_replace ($from, $to, $string);

}


function checkArrayForValues($arr) {
    foreach ($arr as $value) {
        if (is_array($value)) {
            if (checkArrayForValues($value)) {
                return true;
            }
        } else {
            if (!empty($value)) {
                return true;
            }
        }
    }
    return false;
}


add_filter('acfe/flexible/thumbnail', 'my_acf_layout_thumbnail', 10, 3);
function my_acf_layout_thumbnail($thumbnail, $field, $layout){

    // Must return an URL or Attachment ID
    return get_stylesheet_directory_uri() . '/images/acf/' . $layout['name'] . '.png';

}


function custom_language_switcher(){
    $languages = icl_get_languages('skip_missing=0&orderby=id&order=desc');
    if(!empty($languages)){ 
        ?>

        <div class="lang-wrapper">

            <?php
            foreach($languages as $index => $language){
                if($language['active'] === '1') echo '<button class="lang-toggler"><img src="' . $language['country_flag_url'] . '" /><i class="fa-regular fa-chevron-down"></i></button>';
            }
            ?>

            <ul>

                <?php
                foreach($languages as $index => $language){
                    if($language['active'] !== '1') echo '<li><a href="' . $language['url'] . '"><img src="' . $language['country_flag_url'] . '" alt="" /></a></li>';
                }
                ?>

            </ul>

            <?php
        }
        ?>

    </div>

    <?php
}