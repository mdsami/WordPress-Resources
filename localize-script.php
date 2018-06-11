<?php

wp_enqueue_script( "main-js", get_theme_file_uri( "/assets/js/main.js" ), array( "jquery" ), time(), true );

// use post meta custom field

$lancher_year  = get_post_meta( get_the_ID(), "year", true );
$lancher_month = get_post_meta( get_the_ID(), "month", true );
$lancher_day   = get_post_meta( get_the_ID(), "day", true );

wp_localize_script( "main-js", "datedata", array(
  "year"  => $lancher_year,
  "month" => $lancher_month,
  "day"   => $lancher_day
) );

?>

<script>
// js

var countDown = function() {
  //check datedata for wp_localize_script
  console.log(datedata);
  
  simplyCountdown('.simply-countdown-one', {
    year: datedata.year,
    month: datedata.month,
    day: datedata.day
  });

};

</script>
