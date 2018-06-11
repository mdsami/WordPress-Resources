<?php

// use HTML Class Name

function launcher_style() {
	if ( is_page() ) {
		$thumbnail = get_the_post_thumbnail_url( null, 'large' );
		?>
        <style>
            .class {
                background-image: url(<?php echo $thumbnail; ?>);
            }
        </style>
		<?php
	}
}

add_action( "wp_head", "demo_style" );
