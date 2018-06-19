<?php

add_image_size("alpha-square",400,400,true);
//	add_image_size("demo-portrait",400,9999);
//	add_image_size("demo-landscape",9999,400);
//	add_image_size("demo-landscape-hard-cropped",600,400,true);

add_image_size("demo-square-new1",401,401, array("left","top"));
add_image_size("demo-square-new2",500,500, array("center","center"));
add_image_size("demo-square-new3",600,600, array("right","center"));

// single.php

the_post_thumbnail("alpha-square");
echo "<br>";
the_post_thumbnail("demo-square-new1");
echo "<br>";
the_post_thumbnail("demo-square-new2");
echo "<br>";
the_post_thumbnail("demo-square-new3");


// function.php

// fliter 1
function demo_image_srcset(){
    return null;
}
add_filter("wp_calculate_image_srcset","demo_image_srcset");

// OR fliter 2
add_filter("wp_calculate_image_srcset","__return_null");
