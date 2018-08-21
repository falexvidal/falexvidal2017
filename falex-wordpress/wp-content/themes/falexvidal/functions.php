<?php // custom functions.php template @ digwp.com

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    //set_post_thumbnail_size( 250, 9999, true ); // default Featured Image dimensions (cropped)
 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    //add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
 }


if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Top Bar',
		'id'   => 'top-bar',
		'description'   => 'Drag and drop your widgets here.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}


if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Widgetized Area',
		'id'   => 'widgetized-area',
		'description'   => 'Drag and drop your widgets here.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}

?>