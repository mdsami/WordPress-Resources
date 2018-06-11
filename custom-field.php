<?php

// Deshbord -> Post -> custom-fild -> generate key => value

"year"  => 2018,
"month" => 08,
"day"   => 20

// Display custom fild single.php

// get_post_meta if not use TRUE = single value
// get_post_meta if not use FALSE = array value

$demo_year  = get_post_meta( get_the_ID(), 'year', true );
$demo_month = get_post_meta( get_the_ID(), 'month', true );
$demo_day   = get_post_meta( get_the_ID(), 'day', true );


echo $demo_year .' - '. $demo_month .' - '. $demo_day ;

