<?php

// function.php

function demo_theme_setup() {
	load_theme_textdomain( "demo" );
	add_theme_support( "post-thumbnails" );
	add_theme_support( "title-tag" );
	register_nav_menu( "topmenu", __( "Top Menu", "demo" ) );
	register_nav_menu( "footermenu", __( "Footer Menu", "demo" ) );

	add_theme_support( "post-formats", array( "gallery", "link", "image", "quote", "status", "video", "audio" ) );

	$demo_custom_header_details = array(
		'header-text'        => true,
		'default-text-color' => '#ccc',
		'width'  => 1200,
		'height' => 600,
        'flex-height' => true,
        'flex-width' => true,
	);
	add_theme_support( "custom-header", $demo_custom_header_details );

	$demo_custom_logo_default = array(
		'width'  => '100',
		'height' => '100',
	);
	add_theme_support( "custom-logo", $demo_custom_logo_default );

	add_theme_support("custom-background");

}

add_action( "after_setup_theme", "demo_theme_setup" );

function theme_support_style() {
	if ( is_page() ) {
		$alpha_feat_image = get_the_post_thumbnail_url( null, "large" );
		?>
        <style>
            .page-header {
                background-image: url(<?php echo $alpha_feat_image;?>);
            }
        </style>
		<?php
	}

	if ( is_front_page() ) {
		if ( current_theme_supports( "custom-header" ) ) {
			?>
        <style>
            .header {
                background-image: url(<?php echo header_image();?>);
                background-size: cover;
                margin-bottom: 50px;
            }

            .header h1.heading a, h3.tagline {
                color: #<?php echo get_header_textcolor(); ?>;
                <?php
                  if(!display_header_text()){
                    echo 'display:none;';
                  }
                ?>
            }
        </style>
			<?php
		}
	}
}

add_action( "wp_head", "theme_support_style", 100 );

?>

// index.php logo support
<?php if (current_theme_supports("custom-logo")): ?>
  <div class="header-logo text-center">
      <?php the_custom_logo();  ?>
  </div>
<?php endif; ?>
