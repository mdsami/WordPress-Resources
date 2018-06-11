<?php
  if ( has_post_thumbnail() ) {
      the_post_thumbnail( "large", array( "class" => "img-fluid" ) );
  }
?>

<?php 
  if ( has_post_thumbnail() ):
  $thumbnail_url = get_the_post_thumbnail_url(null,"large");
?>
  <img src="<?php echo esc_attr($thumbnail_url); ?>" />
<?php endif; ?>
