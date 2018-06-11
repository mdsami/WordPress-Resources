<?php


function demo_theme_support() {
  load_theme_textdomain( "demo" );
  add_theme_support( "post-thumbnails" );
  add_theme_support( "title-tag" );
  register_nav_menu( "topmenu", __( "Top Menu", "alpha" ) );
  register_nav_menu( "footermenu", __( "Footer Menu", "alpha" ) );
}

add_action( "after_setup_theme", "demo_theme_support" );
