<!-- enqueue stylesheets and scripts  -->
<?php
function mystyles() {
    wp_register_style( 'custom-style', get_stylesheet_directory_uri() . '/css/custom.css');wp_enqueue_style( 'custom-style' ) ;

    wp_register_style( 'bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');wp_enqueue_style( 'bootstrap-style' );
     wp_register_style( 'custom-style', get_stylesheet_directory_uri() . '/css/custom.css');wp_enqueue_style( 'custom-style' ) ;

}
add_action('wp_enqueue_scripts', 'mystyles');



function jquery() {
	wp_register_script( 'jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js' );
    wp_enqueue_script( 'jquery' );
    add_action('wp_enqueue_scripts', 'jquery');

}
add_action('wp_enqueue_scripts', 'jquery');




function myjavascripts() {

	wp_register_script( 'bsscript', get_stylesheet_directory_uri() . '/js/bootstrap.min.js' );
    wp_enqueue_script( 'bsscript' );
    
    
	wp_register_script( 'myscript', get_stylesheet_directory_uri() . '/js/customjs.js' );
	wp_enqueue_script( 'myscript' );
}

add_action('wp_enqueue_scripts', 'myjavascripts');



?>


<?php 
function typed() {
	wp_register_script( 'typed','https://cdn.jsdelivr.net/npm/typed.js@2.0.9' );
    wp_enqueue_script( 'typed' );
    add_action('wp_enqueue_scripts', 'typed');

}
add_action('wp_enqueue_scripts', 'typed');

?>