> Body & Post Class

<body <?php body_class(); ?>>

  <article <?php post_class(); ?>>
    DEMO TEXT
  </article>
  
</body>

> Body & Post Class Add Custom Class 

<?php body_class(array("first-class","second-class")); ?>
<?php post_class(array("first-class","second-class")); ?>


> Body & Post Class Remove Class 

function demo_body_class($classes){
	unset($classes[array_search("first-class", $classes )]);
	unset($classes[array_search("custom-background", $classes )]);
	return $classes;
}
add_filter("body_class","demo_body_class");

function demo_post_class($classes){
	unset($classes[array_search("first-class", $classes )]);
	unset($classes[array_search("custom-background", $classes )]);
	return $classes;
}
add_filter("post_class","demo_post_class");
