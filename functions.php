<?php register_nav_menus( array(
		'primary' => __( 'Menu post', 'visible en posts' ),
		'social'  => __( 'Menu prinsipal', 'visible en main' ),
	) );

	
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'Mi Tema' ),
		'id'            => 'sidebar_mitema',
		'description'   => __( '' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );