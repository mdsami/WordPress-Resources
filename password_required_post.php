1.> Check Password Required Post

if(!post_password_required()){
  the_excerpt();
}else{
  echo get_the_password_form();
}


2.> Check Password Required Post

function demo_the_excerpt($excerpt){
	if(!post_password_required()){
		return $excerpt;
	}else{
		echo get_the_password_form();
	}
}
add_filter("the_excerpt", "demo_the_excerpt");


> Change Password Protected Title

function demo_protected_title_change(){
//	return "Locked: %s";
	return "%s";
}
add_filter("protected_title_format","demo_protected_title_change");
