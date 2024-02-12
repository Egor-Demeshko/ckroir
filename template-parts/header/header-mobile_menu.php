<div class="mobile_menu_wrapper">
	<?php 
	get_search_form();
	wp_nav_menu( [
		'theme_location'  => 'mobile_menu',
		'container'       => 'nav',
		'menu_class'      => 'mobile_menu eliminate_list',
		'menu_id'         => 'mobile_menu',
		'echo'            => true,
		'fallback_cb'     => '',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 3,
		'walker'          => new Mobile_Menu_Walker(),
	] );
	?>
</div>