<?php
> Check Site URL

site_url();
die();

> CSS & JS Clear Cache

if(site_url() == "http://localhost/wordpress"){
	define("VERSION", time());
}else{
	define("VERSION", wp_get_theme()->get("Version"));
}

> User VERSION Editing CSS & JS

wp_enqueue_style( "Demo", get_stylesheet_uri(), null, VERSION );
