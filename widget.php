> Widget Register
-------------------

function alpha_sidebar(){
	register_sidebar(
		array(
			'name'          =>  __( 'Single Post Sidebar', 'alpha'),
			'id'            =>  'sidebar-1',
			'description'   =>  __('Right Sidebar', 'alpha'),
			'before_widget' =>  '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action("widgets_init","alpha_sidebar");



> Widget Display
-----------------

if(is_active_sidebar("sidebar-1")){
  dynamic_sidebar("sidebar-1");
}
