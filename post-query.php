// The Query style 1
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <h1><?php the_title(); ?></h1>
<?php endwhile; endif; ?>

<?php
// The Query style 2

  if(have_posts()){
    while(have_posts()){
      the_post();
      the_title();
    }
  }
  

// The Query 

$args = array(
  'posts_per_page' => 2, 
  'orderby' => 'title', 
  'order' => 'DESC' 
);

$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo get_the_title();
	}
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}

?>
