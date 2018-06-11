<?php

if ( site_url() == "http://localhost/wordpress/" ) {
	define( "VERSION", time() );
} else {
	define( "VERSION", wp_get_theme()->get( "Version" ) );
}

function demo_assets() {

//    echo basename(get_page_template());
//    die();

	if ( is_page() ) {
		$lancher_template_name = basename( get_page_template() );
		if ( $lancher_template_name == "launcher.php" ) {

			wp_enqueue_style( "google-fonts", "//fonts.googleapis.com/css?family=Open+Sans:400,700,800" );
			wp_enqueue_style( "animate-css", get_theme_file_uri( "/assets/css/animate.css" ) );
			wp_enqueue_style( "icomoon-css", get_theme_file_uri( "/assets/css/icomoon.css" ) );
			wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.css" ) );
			wp_enqueue_style( "style-css", get_theme_file_uri( "/assets/css/style.css" ) );
			wp_enqueue_style( "launcher", get_stylesheet_uri() , null , VERSION );

			wp_enqueue_script( "easing-js", get_theme_file_uri( "/assets/js/jquery.easing.1.3.js" ), array( "jquery" ), null, true );
			wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array( "jquery" ), null, true );
			wp_enqueue_script( "waypoints-js", get_theme_file_uri( "/assets/js/jquery.waypoints.min.js" ), array( "jquery" ), null, true );
			wp_enqueue_script( "Countdown-js", get_theme_file_uri( "/assets/js/simplyCountdown.js" ), array( "jquery" ), null, true );
			wp_enqueue_script( "main-js", get_theme_file_uri( "/assets/js/main.js" ), array( "jquery", "Countdown-js"  ), VERSION , true );

		} else {
			wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.css" ) );
			wp_enqueue_style( "launcher", get_stylesheet_uri() );
		}

	}
	
}

add_action( "wp_enqueue_scripts", "demo_assets" );
